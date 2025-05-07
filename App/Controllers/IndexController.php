<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->render('index');
	}
	public function sobre() {

		$this->render('sobre');
	}
	public function trabalhos() {

		$this->render('trabalhos');
	}
	public function contato() {

		$this->render('contato');
	}
	public function contatoEnvio() {

		$this->render('contato_envio');
	}

}


?>