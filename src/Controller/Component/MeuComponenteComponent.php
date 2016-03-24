<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Error\Debugger;

class MeuComponenteComponent extends Component {

	public function acaoDoComponent() {
		Debugger::dump("Essa acao é do component ");
	}

}