<?php
/**
 * Created by PhpStorm.
 * User: rjsandim
 * Date: 3/28/16
 * Time: 20:52
 */

namespace App\Controller;

use Cake\Error\Debugger;
use Cake\Network\Session;

class ExemplosSessionController extends AppController {

	public function index() {

		$this->request->session()->write("valor", 3);
		Debugger::dump($this->request->session()->read('valor'));

		$this->request->session()->write("Carrinho", [['id' => 3, 'qtd' => 1],['id' => 1, 'qtd' => 5]]);

	}

}