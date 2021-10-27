<?php
if( !session_id() ) @session_start();

require '../vendor/autoload.php';
use DI\ContainerBuilder;
use Delight\Auth\Auth;
use League\Plates\Engine;

$containerBuilder = new ContainerBuilder;
/*прописываем исключения*/
$containerBuilder->addDefinitions([
    Engine::class => function() {
       return new Engine('../app/views');
    },
    PDO::class => function() {
        return new PDO("mysql:dbname=blog;host=localhost;",
            'root', 
            'mysql');
    },
    Auth::class => function($container) {
        return new Auth($container->get('PDO'));
    },
]);
$container = $containerBuilder->build();


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/diplom/', ['app\controllers\Homepage', 'index']);
    $r->addRoute('GET', '/diplom/about', ['app\controllers\Homepage', 'about']);
    $r->addRoute('GET', '/diplom/register', ['app\controllers\Homepage', 'form_registr']);
    $r->addRoute('POST', '/diplom/register', ['app\controllers\Homepage', 'sign_up']);
    $r->addRoute('GET', '/diplom/login', ['app\controllers\Homepage', 'form_login']);
    $r->addRoute('POST', '/diplom/login', ['app\controllers\Homepage', 'sign_in']);
    $r->addRoute('GET', '/diplom/logout', ['app\controllers\Homepage', 'logout']);
    $r->addRoute('GET', '/diplom/verificat', ['app\controllers\Homepage', 'email_verification']);
    $r->addRoute('GET', '/diplom/form_change_password', ['app\controllers\Homepage', 'form_change_password']);
    $r->addRoute('POST', '/diplom/change_password', ['app\controllers\Homepage', 'change_password_current_user']);
    // {id} must be a number (\d+)
    $r->addRoute('GET', '/diplom/profile/{id:\d+}', ['app\controllers\Homepage', 'user_profile']);
    $r->addRoute('POST', '/diplom/profile/{id:\d+}', ['app\controllers\Homepage', 'update_user']);
    // блок администратора    
    $r->addGroup('/diplom/admin', function (FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '/', ['app\admin\controllers\AdminController', 'index']);
        $r->addRoute('GET', '/delete/{id:\d+}', ['app\admin\controllers\AdminController', 'delete_user']);
        $r->addRoute('GET', '/role_add/{id:\d+}', ['app\admin\controllers\AdminController', 'role_add']);
        $r->addRoute('GET', '/role_remove/{id:\d+}', ['app\admin\controllers\AdminController', 'role_remove']);
        //$r->addRoute('GET', '/role_remove/{id:\d+}', ['app\admin\controllers\AdminController', 'role_remove']);
        $r->addRoute('GET', '/do-something-else', 'handler');
    });
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
               
        //создание класса контроллера
        $container->call($handler, [$vars]);
        break;
}