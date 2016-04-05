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

	public function buscandoDados() {

		$categorias = TableRegistry::get('Categorias');

		$categoria = $categorias->get(1);
		Debugger::dump($categoria);

		$categoria = $categorias->find('all');
		Debugger::dump($categoria);
	}

	public function comoFunciona() {
		// Find all the articles.
		// At this point the query has not run.
		$produtos = TableRegistry::get('Produtos');
		$query = $produtos->find('all');

		Debugger::dump("TESTE 1");
		Debugger::dump($query);
		// Iteration will execute the query.

		Debugger::dump("TESTE 2");
		foreach ($query as $row) {
			Debugger::dump($row);
		}

		// Calling all() will execute the query
		// and return the result set.
		Debugger::dump("TESTE 3");
		$results = $query->all();
		Debugger::dump($results);

		// Once we have a result set we can get all the rows
		Debugger::dump("TESTE 4");
		$data = $results->toArray();
		Debugger::dump($data);

		// Converting the query to an array will execute it.
		Debugger::dump("TESTE 5");
		$results = $query->toArray();
		Debugger::dump($results);

		$this->render('index');
	}

}