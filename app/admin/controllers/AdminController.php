<?php
namespace app\admin\controllers;

use PDO;
use Exception;
use League\Plates\Engine;
use Delight\Auth\Auth;
use Faker\Factory;
use JasonGrimes\Paginator;
use app\models\QueryBuilder;
use Tamtamchik\SimpleFlash\Flash;

class AdminController 
{
	private $qb;
	private $templates;
	private $auth;
	private $flash;

	function __construct(QueryBuilder $qb, Engine $engine, Auth $auth, Flash $flash)
	{
		$this->qb = $qb;
		$this->templates = $engine;
		$this->auth = $auth;
		$this->flash = $flash;
	}

/* Вывод на главную страницу админки списка пользователей и кнопок управления
*/
	public function index() 
	{
		if ($this->auth->hasRole(\Delight\Auth\Role::ADMIN))
		{
			$id_user = $this->auth->getUserId();
			$username = $this->auth->getUsername();
			$isLoggedIn = $this->auth->isLoggedIn();

			$users = $this->qb->getAll('users');

			$count = $this->qb->getCountAll('users');
			
			$itemsPerPage = 3;
			$currentPage = $_GET['page']? $_GET['page'] : 1;
			$urlPattern = '?page=(:num)';

			$page = new Paginator($count, $itemsPerPage, $currentPage, $urlPattern);	
			echo $this->templates->render('index_admin', ['users' => $users,
													'id_user' => $id_user,
													'isLoggedIn' => $isLoggedIn,
													'username' => $username,
													'page' => $page
													]); 
			
		}
	}

/* Присвоение роли админа пользователю
	array - $vars
	Return value: boolean
*/
	public function role_add($vars)
	{
		$id = $vars['id'];
		try {
			$this->auth->admin()->addRoleForUserById($id, \Delight\Auth\Role::ADMIN);
			
		}
		catch (\Delight\Auth\UnknownIdException $e) {
			die('Unknown user ID');
		}
		return $this->index();
	}

/* Лишение пользователя роли админа
	array - $vars
	Return value: boolean
*/
	public function role_remove($vars) 
	{
		$id = $vars['id'];
		
		try {
			$this->auth->admin()->removeRoleForUserById($id, \Delight\Auth\Role::ADMIN);
			
		}
		catch (\Delight\Auth\UnknownIdException $e) {
			die('Unknown user ID');
		}
		return $this->index();
	}

/* Удаление пользователя
	array - $vars
	Return value: boolean
*/
	public function delete_user($vars)
	{
		$id =$vars['id'];
		try {
		    $this->auth->admin()->deleteUserById($id);
		    $this->flash->message('Пользователь удален');
		    echo flash()->display();
		    return $this->index();
		}
		catch (\Delight\Auth\UnknownIdException $e) {
		    die('Unknown ID');
		}
	}
}