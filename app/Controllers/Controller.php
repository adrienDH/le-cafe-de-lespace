<?php

namespace App\Controllers;

class Controller {
	private $container;
	
	public function __construct($container) {
		$this->container = $container;
	}
	
	public function render($response, $file) {
		$this->container->view->render($response, $file);
	}
}