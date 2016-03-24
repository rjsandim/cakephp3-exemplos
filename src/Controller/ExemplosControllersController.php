<?php

namespace App\Controller;


use Cake\Error\Debugger;
use Cake\Event\Event;

// NomeDoControlladorController.php
class ExemplosControllersController extends AppController {

	public $helpers = ['MeuTexto'];

	//Primeira a executar
	public function initialize() {
		parent::initialize();

		//Aqui carregamos os componentes e helpers
		$this->loadComponent('MeuComponente');

		Debugger::dump(1);
	}

	//Segundo a executar
	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);

		//Aqui verificamos, por exemplo, se o usuario esta logado no sistema

		Debugger::dump(2);
	}

	//Terceiro a executar
	public function callbacks() {
		Debugger::dump(3);
		$this->MeuComponente->acaoDoComponent();
	}

	//Quarto a executar
	public function beforeRender(Event $event) {
		parent::beforeRender($event);
		Debugger::dump(4);
	}

	//Quinto a executar
	public function afterFilter(Event $event) {
		Debugger::dump(5);
		return parent::afterFilter($event);
	}

	public function parametro($id) {
		Debugger::dump($id);
		$this->render('index');
	}

	public function valoresNaView() {

		$texto = "programar é bacana!";

		$alunos = ['Dilma', "Lula", "Obama"];

		$this->set('textoView', $texto);
		$this->set('pessoas', $alunos);

		//$this->set(compact('texto', 'alunos'));
	}

	public function mudandoView() {
		$this->viewBuilder()->helpers(['MeuTexto'])->layout('personalizado-dois');
		$this->render('index');
	}

	public function redirectOutroController() {
		return $this->redirect(['controller' => 'ExemplosViews', 'action' => 'index']);

		//podemos passar parametro
		//return $this->redirect(['controller' => 'ExemplosViews', 'action' => 'index', 6]);

		//podemos voltar para pagina anterior
		//return $this->redirect($this->referer());
	}

	public function redirecionarMesmoController() {

		Debugger::dump('redirecionando-mesmo');
		$this->setAction('callbacks');
	}

	public function seForPost() {

		if ($this->request->is('post')) {
			Debugger::dump($this->request->data);
		}

		/**
		 *
		 * is('get') Check to see whether the current request is a GET.
		 * is('put') Check to see whether the current request is a PUT.
		 * is('patch') Check to see whether the current request is a PATCH.
		 * is('post') Check to see whether the current request is a POST.
		 * is('delete') Check to see whether the current request is a DELETE.
		 * is('head') Check to see whether the current request is HEAD.
		 * is('options') Check to see whether the current request is OPTIONS.
		 * is('ajax') Check to see whether the current request came with X-Requested-With = XMLHttpRequest.
		 * is('ssl') Check to see whether the request is via SSL.
		 * is('flash') Check to see whether the request has a User-Agent of Flash.
		 * is('requested') Check to see whether the request has a query param ‘requested’ with value 1.
		 * is('json') Check to see whether the request has ‘json’ extension and accept ‘application/json’ mimetype.
		 * is('xml') Check to see whether the request has ‘xml’ extension and accept ‘application/xml’ or ‘text/xml’ mimetype.
		 */

	}

}