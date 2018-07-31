<?php

//use App;

require 'vendor/autoload.php';

$app = new Slim\App([
	'settings' => [
		'displayErrorDetails' => true
	]
]);

require('app/container.php');

$app->get('/list', App\Controllers\PageController::class . ":home")->setName('home');
$app->get('/post', App\Controllers\PageController::class . ":post")->setName('post');

$app->run();
