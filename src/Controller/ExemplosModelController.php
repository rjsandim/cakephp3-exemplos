<?php

namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\ORM\TableRegistry;

class ExemplosModelController extends AppController {

	/*
	 *  CAKEPHP suporta esses bancos
	 *
	 * MySQL 5.1+
	 * SQLite 3
	 * PostgreSQL 8+
	 * SQLServer 2008+
	 * Oracle (through a community plugin)
	 */

	//busca simples
	public function index() {

		$categorias = TableRegistry::get('Categorias');

		$query = $categorias->find();

		foreach ($query as $row) {
			Debugger::dump($row->nome);
		}

	}

	// podemos escrever o sql puro, ou entao, utilizar a classe builder de SQL, como abaixo.
	public function construindoSQL() {

		//pegamos a configuraçao padrao do framework
		$conexao = ConnectionManager::get('default');
		$resultados = $conexao->newQuery()->select('*')->from('categorias')->where(['id >' => 2])->execute()->fetchAll('assoc');

		Debugger::dump($resultados);

		foreach ($resultados as $row) {
			Debugger::dump($row['nome']);
		}

	}

}