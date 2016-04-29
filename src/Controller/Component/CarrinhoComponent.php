<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Error\Debugger;

class CarrinhoComponent extends Component{

	private $nomeDaSessao;
	private $session;

	public function initialize(array $config) {
		parent::initialize($config);
		$this->nomeDaSessao = "CARRINHO";
		$this->session = $this->request->session();
	}

	public function adicionar($id, $quantidade) {

		$chave = $this->nomeDaSessao.'.'.$id;

		$quantidadeNoCarrinho = $this->session->read($chave);

		if ($quantidadeNoCarrinho == null) {
			$quantidadeNoCarrinho = 0;
		}

		$quantidadeTotal = $quantidade + $quantidadeNoCarrinho;

		$this->session->write($chave, $quantidadeTotal);
	}

	public function remover($id, $quantidade = null) {

		$chave = $this->nomeDaSessao.'.'.$id;

		$quantidadeNoCarrinho = $this->session->read($chave);

		if ($quantidade == null || $quantidadeNoCarrinho < $quantidade) {
			$quantidadeFinal = 0;
		} else {
			$quantidadeFinal = $quantidadeNoCarrinho - $quantidade;
		}

		$this->session->write($chave, $quantidadeFinal);
	}

	public function listar() {
		$this->session->read($this->nomeDaSessao);
	}

}