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
    $this->Banner->recursive = 0;
    $this->set('users', $this->paginate());

    $categories=$this->Banner->find('all',array('conditions'=>array('is_deleted'=>0)));
    $this->set('categories',$categories);
   
	}
	public function add(){
		$pagetitle="Alta de Banners";
		$this->set("pagetitle",$pagetitle);

		if ($this->request->is('post')) {

      $this->Banner->create();
      
      if ($this->Banner->save($this->request->data)) {
        $this->Session->setFlash(__('The Banner has been saved'));
        return $this->redirect(array('action' => 'index'));
      }
      $this->Session->setFlash(
          __('The Banner could not be saved. Please, try again.')
      );
    }

    $total=$this->Banner->find('count',array('conditions'=>array('is_deleted'=>0,'status'=>0)))+1;

	}

	public function edit($id = null) {
    $pagetitle="Editar";
    $this->set("pagetitle",$pagetitle);
    $this->Banner->id = $id;
    if (!$this->Banner->exists()) {
        throw new NotFoundException(__('Banner  ya existe '));
    }
    if ($this->request->is('post') || $this->request->is('put')) { 

        if ($this->Banner->save($this->request->data)) {

            $this->Session->setFlash(__('La Banner se ha guardado'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(
          __('El Banner no puede guardarse. Por favor, inténtelo de nuevo.')
        );
    } else {
      $this->request->data = $this->Banner->read(null, $id);
      
    }
   
		$this->request->data = $this->Banner->data;
    $this->render("add");  
  }

  public function delete($id,$value=0){
    $this->layout=false;
    $this->render(false);       
    $this->Banner->read(null, $id);
    $this->Banner->set(array(
        'is_deleted' => $value,
    ));     

    $result= $this->Banner->save();      

    return $this->redirect(array('action' => 'index'));
  }

  public function upload_image(){

    $this->layout=false;
    $this->render(false);

    $dir = WWW_ROOT. 'files';
    $output_dir = $dir. "/banners/";
    
    if(!file_exists($output_dir) && !is_dir($output_dir)){
      
      mkdir($output_dir,0777);
    }



    if(isset($_FILES["myfile"]))
    {
      $ret = array();
      
    //  This is for custom errors;  
    /*  $custom_error= array();
      $custom_error['jquery-upload-file-error']="File already exists";
      echo json_encode($custom_error);
      die();
    */
      $error =$_FILES["myfile"]["error"];
      //You need to handle  both cases
      //If Any browser does not support serializing of multiple files using FormData() 


      if(!is_array($_FILES["myfile"]["name"])) //single file
      {
        $fileName = $_FILES["myfile"]["name"];
        move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
        $ret[]= $fileName;
      }
      else  //Multiple files, file[]
      {
        $fileCount = count($_FILES["myfile"]["name"]);
        for($i=0; $i < $fileCount; $i++)
        {
          $fileName = $_FILES["myfile"]["name"][$i];
          move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
          
          $ret[]= $fileName;
        }
      
      }
      echo json_encode($ret);
    }
  }

  public function changeShow(){
    $this->layout=false;
    $this->render(false);   

    $this->Banner->read(null, $_POST['id']);
    $fields=array();

    if($this->request->data['section']==1){
      $fields['index']= $this->request->data['value'];
    }elseif ($this->request->data['section']==2) {
      $fields['category']= $this->request->data['value'];
    }elseif ($this->request->data['section']==3) {
      $fields['single']= $this->request->data['value'];      
    }
    
    $this->Banner->set($fields);
   
    $result= $this->Banner->save();
    if($result){
      echo json_encode(array('result'=>'ok','response'=>"Successful"));
    }
    else{
      echo json_encode(array('result'=>'error','response'=>"Error"));
    }

  }
}
