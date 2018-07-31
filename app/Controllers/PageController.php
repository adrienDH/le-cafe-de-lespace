<?php

namespace App\Controllers;

class PageController extends Controller {
	
	public function home($request, $response) {
		$this->render($response, 'pages/home.twig');
	}
	
	public function post($request, $response) {
		$this->render($response, 'pages/post.twig');
	}
	
}