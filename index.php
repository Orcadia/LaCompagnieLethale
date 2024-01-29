<?php

include_once('app/Controller/HomepageController.php');
include_once('app/Controller/UserController.php');
include_once('app/Controller/ForumController.php');

$router = new Router();

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($url);

class Router
{
    private array $routes = [
        '/'             => 'HomepageController::home',
        '/wiki'         => 'HomepageController::wiki',
        '/forum'        => 'ForumController::listTopics',
        '/boombox'      => 'HomepageController::boombox',
        '/about'        => 'HomepageController::about',
        '/login'        => 'UserController::login',
        '/register'     => 'UserController::register',
        '/logout'       => 'UserController::logout',
        '/profile'      => 'UserController::profile',
    ];

    public function dispatch($path): void   // void = return nothing
    {
        try {
            session_start();

            if (!isset($this->routes[$path])) {
                throw new Exception('Route not found', 404);
            }

            // Check if the path is /forum and if a user is not connected
            if ($path === '/forum' && !isset($_SESSION['user_id'])) {
                header('location: /login');
                exit();
            }

            $route = $this->routes[$path];
            $parts = explode('::', $route);
            $controllerName = $parts[0];
            $controller = new $controllerName();
            $method = $parts[1];

            $controller->$method();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}