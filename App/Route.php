<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		$routes['sobre'] = array(
			'route' => '/sobre',
			'controller' => 'indexController',
			'action' => 'sobre'
		);
		$routes['trabalhos'] = array(
			'route' => '/trabalhos',
			'controller' => 'indexController',
			'action' => 'trabalhos'
		);
		$routes['contato'] = array(
			'route' => '/contato',
			'controller' => 'indexController',
			'action' => 'contato'
		);
		$routes['contato_envio'] = array(
			'route' => '/contato_envio',
			'controller' => 'indexController',
			'action' => 'contatoEnvio'
		);

		$this->setRoutes($routes);
	}

}

?>