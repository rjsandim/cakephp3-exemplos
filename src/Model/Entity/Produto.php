<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Produto extends Entity
{

	protected function _getSlugNome()
	{
		return $this->_properties['slug'] . '  ' .
		$this->_properties['nome'];
	}

}