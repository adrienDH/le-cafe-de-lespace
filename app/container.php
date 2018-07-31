<?php

$container = $app->getContainer();

$container['view'] = function ($container) {
	$dir = __DIR__;
	
	$view = new \Slim\Views\Twig($dir . '/views', [
		//'cache' => $dir . "/tmp/cache"
	]);
	
	$basePath = rtrim(str_ireplace('index.php', '', $container->get('request')->getUri()->getBasePath()), '/');
	$view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $basePath));
	
	return $view;
};

