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
class VideosController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Video','Category');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function index(){
		// ver esto para importar canales: https://www.googleapis.com/youtube/v3/search?key=AIzaSyC4oy3U2dZnp60ECQhehH6MDYLRZJnJLbI&channelId=UC8vlDm5xvbxOrCvdu9UNOiA&part=snippet,id&order=date&maxResults=20

		
		$pagetitle=__("Administracíon de Videos");
		$this->set('pagetitle',$pagetitle);

		$videos = $this->Video->find('all',array('conditions'=>array('Video.is_deleted'=>0)));
		$this->set('videos',$videos);

	}
	

	public function add(){
		$pagetitle=__("Alta de Videos");
		$this->set('pagetitle',$pagetitle);

		if ($this->request->is('post')) {
      $this->Video->create();
      
      if ($this->Video->save($this->request->data)) {
          $this->Session->setFlash(__('The Video has been saved'));
          return $this->redirect(array('action' => 'index'));
      }
      $this->Session->setFlash(
          __('The Video could not be saved. Please, try again.')
      );
    }

    $categories=$this->Category->find('list',array('conditions'=>array('is_deleted'=>0)));
    $this->set('categories',$categories);

	}

	 public function edit($id = null) {
    $pagetitle="Editar";
    $this->set("pagetitle",$pagetitle);
    $this->Video->id = $id;
    if (!$this->Video->exists()) {
        throw new NotFoundException(__('Invalid Video'));
    }
    if ($this->request->is('post') || $this->request->is('put')) { 

        if ($this->Video->save($this->request->data)) {

            $this->Session->setFlash(__('The Video has been saved'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(
            __('The Video could not be saved. Please, try again.')
        );
    } else {
      $this->request->data = $this->Video->read(null, $id);        
    }

		$this->request->data = $this->Video->data;
    $categories=$this->Category->find('list',array('conditions'=>array('is_deleted'=>0)));
    $this->set('categories',$categories);
    $this->render('add');   
  }


  public function changeStatus(){
    $this->layout=false;
    $this->render(false);    

    $this->Post->read(null, $_POST['id']);
    $status=($_POST['status']=='true')?0:1;    

    $this->Post->set(array(
      'status' => $status,
    ));

    $result= $this->Post->save();
    if($result){
      echo json_encode(array('result'=>'ok','response'=>"Successful"));
    }
    else{
      echo json_encode(array('result'=>'error','response'=>"Error"));
    }
  }

  public function delete($id,$value=1){
    $this->layout=false;
    $this->render(false);
    
    $this->Video->read(null, $id);

    $this->Video->set(array(
      'is_deleted' => $value,
    ));
    
    $result= $this->Video->save();
        
    return $this->redirect(array('action' => 'index'));
  }
}
