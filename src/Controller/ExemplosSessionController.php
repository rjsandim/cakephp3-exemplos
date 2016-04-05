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

		// podemos escrever menos salvando a sessão em uma variável;
		$session = $this->request->session();

		// assim escrevemos um valor na sessão
		$session->write("valor", 3);
		Debugger::dump($session->read('valor'));

		$session->write("valor-palavra", 'teste');
		Debugger::dump($session->read('valor-palavra'));

		//podemos escrever um array tbm
		$itens = [['id' => 3, 'qtd' => 1],['id' => 1, 'qtd' => 5]];
		$session->write("Carrinho", $itens);
		Debugger::dump($session->read('Carrinho'));

		// podemos verificar se um valor foi definido
		$temCarrinho = $session->check('valor');
		Debugger::dump($temCarrinho);

		// mas, às vezes, podemos não ter o valor definido
		$temCarrinho = $session->check('valor-nao-existe');
		Debugger::dump($temCarrinho);

		// podemos consumir uma sessão. Quando consumimos a sessão é apagada,
		// ou seja, podemos usar apenas UMA vez!
		$valorRetornado = $session->consume('valor');
		Debugger::dump($valorRetornado);
		// mas podemos ver que agora a sessao com chave 'valor' não está definida
		$temCarrinho = $session->check('valor');
		Debugger::dump($temCarrinho);


		// podemos deletar também um valor que não queremos mais da sessão
		$temCarrinho = $session->check('valor-palavra');
		Debugger::dump($temCarrinho);

		$session->delete('valor-palavra');

		$temCarrinho = $session->check('valor-palavra');
		Debugger::dump($temCarrinho);

		// e podemos apagar tudo com:
		$session->destroy();

		//podemos também add valores em um array dinamico
		for ($i = 0; $i < 10; $i++) {
			$data = $session->read('valor-vetor');
			Debugger::dump($data);
			$data[] = 'valor '.$i;
			$session->write('valor-vetor', $data);
		}

		Debugger::dump($session->read('valor-vetor'));

		//tudo isso também pode ser utilizado na VIEW, CONTROLLERS, HELPERS, CELLS e COMPONENTS;

	}

}