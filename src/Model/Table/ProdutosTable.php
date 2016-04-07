<?php

/**
 * Created by PhpStorm.
 * User: rjsandim
 * Date: 3/29/16
 * Time: 19:50
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class ProdutosTable extends Table {

	public function initialize(array $config) {
		// podemos mudar o nome da tabela utilizada, com o seguinte exemplo:
		// $this->table('nome_da_tabela');

		// podemos mudar a primaryKey
		// $this->primaryKey('nome_da_coluna');

		// podemos definir até uma nova classe para entidade
		//  $this->entityClass('App\Model\Entity\NomeDaClasse');


		// DISPLAY FIELD ABAIXO (ATIVAR)!
		//$this->displayField("nome");

	}


	public function buscarCategorias() {

		$categorias = TableRegistry::get('Categorias');

	}

	/*
	 * Event List
	 *	Model.initialize
	 * 	Model.beforeMarshal
	 *  	Model.beforeFind
	 *	Model.buildValidator
	 *	Model.buildRules
	 *	Model.beforeRules
	 *	Model.afterRules
	 *	Model.beforeSave
	 *	Model.afterSave
	 *	Model.afterSaveCommit
	 *	Model.beforeDelete
	 *	Model.afterDelete
	 *	Model.afterDeleteCommit
	 */


}