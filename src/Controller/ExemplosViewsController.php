<?php

namespace App\Controller;

class ExemplosViewsController extends AppController{

	public $helpers = ['MeuTexto'];

	public function index() {

		$item = [1, 2, 3];

		$this->set('valores', $item);
		if ($this->request->is('post')) {
			var_dump($this->request->data);
		}
	}

	public function outraAction() {

		// Para sobrescrever o layout default
		$this->viewBuilder()->layout("personalizado-dois");

	}

}