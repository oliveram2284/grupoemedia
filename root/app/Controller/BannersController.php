<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class BannersController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */

	public $uses = array('Banner');

	
	public function index(){
		$pagetitle="Banner";
		$this->set("pagetitle",$pagetitle);
    $this->Category->recursive = 0;
    $this->set('users', $this->paginate());

    $categories=$this->Category->find('all',array('conditions'=>array('is_deleted'=>0)));
    $this->set('categories',$categories);
   
	}
	public function add(){
		$pagetitle="Alta Categoría";
		$this->set("pagetitle",$pagetitle);

		if ($this->request->is('post')) {
      $this->Category->create();
      
      if ($this->Category->save($this->request->data)) {
          $this->Session->setFlash(__('The Category has been saved'));
          return $this->redirect(array('action' => 'index'));
      }
      $this->Session->setFlash(
          __('The Category could not be saved. Please, try again.')
      );
    }
	}

	public function edit($id = null) {
    $pagetitle="Editar";
    $this->set("pagetitle",$pagetitle);
    $this->Category->id = $id;
    if (!$this->Category->exists()) {
        throw new NotFoundException(__('Categoría  ya existe '));
    }
    if ($this->request->is('post') || $this->request->is('put')) { 

        if ($this->Category->save($this->request->data)) {

            $this->Session->setFlash(__('La categoría se ha guardado'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(
          __('El usuario no puede guardarse. Por favor, inténtelo de nuevo.')
        );
    } else {
      $this->request->data = $this->Category->read(null, $id);
      
    }
   
		$this->request->data = $this->Category->data;
      
  }

   public function delete($id,$value=0){
      $this->layout=false;
      $this->render(false);       
      $this->Category->read(null, $id);
      $this->Category->set(array(
          'is_deleted' => $value,
      ));     

      $result= $this->Category->save();      

      return $this->redirect(array('action' => 'index'));
    }
}
