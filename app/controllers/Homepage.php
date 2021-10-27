<?php
namespace app\controllers;

use PDO;
use Exception;
use League\Plates\Engine;
use Delight\Auth\Auth;
use Faker\Factory;
use JasonGrimes\Paginator;
use app\models\QueryBuilder;
use Tamtamchik\SimpleFlash\Flash;


class Homepage
{
	private $templates;
	private $auth;
	private $qb;
	private $flash;

	function __construct(QueryBuilder $qb, Engine $engine, Auth $auth, Flash $flash)
	{
		$this->qb = $qb;
		$this->templates = $engine;
		$this->auth = $auth;
		$this->flash = $flash;
	}

/* Вывод на главную страницу списка пользователей  
*/
	public function index()
	{
		//данные авторизироанного пользователя
		$isLoggedIn = $this->auth->isLoggedIn();
		$id_user = $this->auth->getUserId();
		$username = $this->auth->getUsername();
		$email = $this->auth->getEmail();
        $admin = $this->auth->hasRole(\Delight\Auth\Role::ADMIN);
        $role = $this->auth->getRoles();
        //данные всех пользователей
        $cols = ['users.id, email, password, username, roles_mask, description'];
		$users = $this->qb->getAll('users', $cols);
		//пагинация
		$count = $this->qb->getCountAll('users');
		$itemsPerPage = 3;
		$currentPage = $_GET['page']? $_GET['page'] : 1;
		$urlPattern = '?page=(:num)';
		$page = new Paginator($count, $itemsPerPage, $currentPage, $urlPattern);	
				
		echo $this->templates->render('home', ['users' => $users, 
											'isLoggedIn' => $isLoggedIn,
											'id_user' => $id_user,
											'username' => $username,
											'admin' => $admin,
											'email' => $email,
											'role' => $role,
											'page' => $page,
											'status' => $status
										]);
	}

/* вывод формы для регистрации пользователя
*/
	public function form_registr() 
	{
		echo $this->templates->render('register', ['title' => 'Регистрация']);
		
	}

/* регистрация на сайте
	Return value: boolean
*/
	public function sign_up() 
	{
		try {
		    $userId = $this->auth->register($_POST['email'], $_POST['password'], $_POST['username'], function ($selector, $token) {
		        echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
		    });

		   // echo 'Мы зарегистрировали нового пользователя с идентификатором ' . $userId;
		}
		catch (\Delight\Auth\InvalidEmailException $e) {
		    die('Invalid email address');
		}
		catch (\Delight\Auth\InvalidPasswordException $e) {
		    die('Invalid password');
		}
		catch (\Delight\Auth\UserAlreadyExistsException $e) {
		    die('User already exists');
		}
		catch (\Delight\Auth\TooManyRequestsException $e) {
		    die('Too many requests');
		}
	}

/* вывод формы для входа пользователя на сайт
*/
	public function form_login() 
	{
		echo $this->templates->render('login', ['title' => 'Login']);
		
	}

/* вход на сайт зарегистрированного пользователя
	Return value: boolean
*/
	public function sign_in() 
	{
		if ($_POST['remember'] == 'on') {
		 // сохраняйте вход в систему в течение одного года
		    $rememberDuration = (int) (60 * 60 * 24 * 365.25);
		}
		else {
		 // не сохраняйте вход в систему после окончания сеанса
		    $rememberDuration = null;
		}
		
		try {
			$this->auth->login($_POST['email'], $_POST['password'], $rememberDuration);

		    return $this->index();
		}
		catch (\Delight\Auth\InvalidEmailException $e) {
		    //die('Wrong email address');
		    $this->flash->error('Неправильный адрес электронной почты');
		    echo flash()->display();
		    return $this->form_login();
		}
		catch (\Delight\Auth\InvalidPasswordException $e) {
		   // die('Wrong password');
			$this->flash->error('Неверный пароль');
		    echo flash()->display();
		    return $this->index();
		}
		catch (\Delight\Auth\EmailNotVerifiedException $e) {
		    die('Email not verified');
		}
		catch (\Delight\Auth\TooManyRequestsException $e) {
		    die('Too many requests');
		}
	}

/* Подтверждение email пользователя 
*/
	public function email_verification()
	{
		try {
		    $this->auth->confirmEmail('eopGrj-P8Ml1l8Wz', 'be9DDe5DIslpRYRa');
		    $this->flash->message('Email address has been verified');
		    echo flash()->display();
		    return $this->index();
		   // echo 'Email address has been verified';
		}
		catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
		   // die('Invalid token');
			$this->flash->error('Invalid token');
		    echo flash()->display();
		    return $this->index();
		}
		catch (\Delight\Auth\TokenExpiredException $e) {
		    die('Token expired');
		}
		catch (\Delight\Auth\UserAlreadyExistsException $e) {
		    die('Email address already exists');
		}
		catch (\Delight\Auth\TooManyRequestsException $e) {
		    die('Too many requests');
		}
	}

/* Выход пользователя из системы
*/
	public function logout() 
	{
		try {
		    $this->auth->logOutEverywhere();
		    return $this->index();
		}
		catch (\Delight\Auth\NotLoggedInException $e) {
		    die('Not logged in');
		}
	
	}

/* Вывод профиля конкретного пользователя
	array - $vars
	Return value: array
*/
	public function user_profile($vars) 

	{	//данные пользователя, выбранного по id
		$id = $vars['id'];
		$user = $this->qb->getOne('users', $id);
		//данные авторизированного пользователя
		$isLoggedIn = $this->auth->isLoggedIn();
		$admin = $this->auth->hasRole(\Delight\Auth\Role::ADMIN);
		$username = $this->auth->getUsername();
		$id_user = $this->auth->getUserId();
		$role = $this->auth->getRoles($id);
        		
		echo $this->templates->render('profile', ['user' => $user,
											'isLoggedIn' => $isLoggedIn,
											'username' => $username,
											'id_user' => $id_user,
											'admin' => $admin,
											'role' => $role
											]);
		

	}

/* Изменение профиля конкретного пользователя
	array - $vars
	Return value: array
*/
	public function update_user($vars) 

	{
		$id = $vars['id'];
		$date = ['username' => $_POST['username'],
				'email' => $_POST['email']
			];
		$user = $this->qb->Update('users', $date, $id);
		return $this->user_profile($vars);
	}

/* Вывод формы для изменения пароля пользователя
*/
	public function form_change_password() 
	{
		$isLoggedIn = $this->auth->isLoggedIn();
		$id_user = $this->auth->getUserId();
		$username = $this->auth->getUsername();
		echo $this->templates->render('change_password_cur_user', ['title' => 'Change password',
										'isLoggedIn' => $isLoggedIn,
										'username' => $username,
										'id_user' => $id_user	
										]);
		
	}

/* Изменение своего пароля текущим пользователем
*/
	public function change_password_current_user()
	{
		try {
			$this->auth->changePassword($_POST['oldPassword'], $_POST['newPassword']);

			$this->flash->message('Ваш пароль был изменен');
			echo flash()->display();
			return $this->index();
		}
		catch (\Delight\Auth\NotLoggedInException $e) {
			   die('Not logged in');
		}
		catch (\Delight\Auth\InvalidPasswordException $e) {
			die('Invalid password(s)');
		}
		catch (\Delight\Auth\TooManyRequestsException $e) {
			die('Too many requests');
		}
	}
}