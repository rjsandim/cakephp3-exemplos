<?php

/**
 * Created by PhpStorm.
 * User: rjsandim
 * Date: 3/2/16
 * Time: 19:53
 */

namespace App\View\Helper;

use Cake\View\Helper;

class MeuTextoHelper extends Helper {

	public function digitaNomeDaTurma($ano) {
		$html = "<p>Esses Exemplos foram feitos para turma TI".$ano."</p>";
		return $html;
	}

}