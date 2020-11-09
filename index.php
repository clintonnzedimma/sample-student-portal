<?php

$_WOSKI_ENV = "development";
require 'woski_autoload.php';
require 'core/woski.php';


$app = new Woski\Application;

$testRoute = _import("testRoute.php");

$middleware = new App\Middlewares\Middleware();
$homeController = new App\Controllers\AppController();
$apiController = new App\Controllers\APIController();

$app->get('/', [$middleware->autoLogin, $homeController->LoginPage]);

/* Views */
$app->get('/login', [$middleware->autoLogin, $homeController->LoginPage]);
$app->get('/register', [$middleware->autoLogin, $homeController->SignupPage]);



$app->get('/portal/home', [$middleware->authStudent, $homeController->PortalHome]);
$app->get('/portal/course-reg', [$middleware->authStudent, $homeController->CourseRegisteration]);
$app->get('/forensic/login', [$homeController->ForensicHome]);
$app->get('/forensic/log', [$homeController->ForensicLog]);

/* api */
$app->post('/api/member/create', $apiController->registerMember);
$app->post('/api/member/login', $apiController->loginMember);
$app->post('/api/course/register', [$apiController->registerCourse]);
$app->post('/api/user/change-passport', [$apiController->uploadPassport]);
$app->post('/api/forensic/login', [$apiController->forensicLogin]);

$app->get('/logout', $middleware->logout);




$app->error('GET', function($res, $req){
    echo "GET route not found";
});
$app->error('POST', function($res, $req){
    echo "POST route not found";
});

$app->start();
