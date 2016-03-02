<?php
/**
 * Created by PhpStorm.
 * User: rjsandim
 * Date: 3/1/16
 * Time: 19:43
 */

namespace App\Controller;

class ExemplosViewsController extends AppController{

	public function index() {
		$this->viewBuilder()->layout("personalizado");

		$item = [1, 2, 3];

		$this->set('item', $item);

		var_dump($this->request->data);
	}

}