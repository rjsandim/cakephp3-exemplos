<?php

/**
 * Created by PhpStorm.
 * User: rjsandim
 * Date: 3/29/16
 * Time: 19:50
 */

namespace App\Model\Table;

use Cake\ORM\Table;


class ProdutosTable extends Table {

	public function initialize(array $config) {
		// podemos mudar o nome da tabela utilizada, com o seguinte exemplo:
		// $this->table('nome_da_tabela');

		// podemos mudar a primaryKey
		// $this->primaryKey('nome_da_coluna');

		// podemos definir até uma nova classe para entidade
		//  $this->entityClass('App\Model\Entity\NomeDaClasse');
	}

}