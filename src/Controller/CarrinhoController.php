<?php

namespace App\Controller;

class CarrinhoController extends AppController{


	public function initialize() {
		parent::initialize();

		$this->loadComponent('Carrinho');
	}

	public function index() {
		$this->Carrinho->adicionar(3, 10);
		
		
	}

}