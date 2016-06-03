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
include APP . 'Plugin' . DS."Facebook/autoload.php";
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PostsController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
 
	public $uses = array('Post','Category','User','File');

	public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('add');
  }

	public function index(){
		
		$pagetitle="Notícias";
		$this->set("pagetitle",$pagetitle);

	  $categories=$this->Category->find('list',array('conditions'=>array('is_deleted'=>0)));
	  $posts=$this->Post->find('all',array(
                                    'conditions'=>array('Post.is_deleted'=>0), 
                                    'order' => array('Post.created DESC')     
                                  )
    );
	  
    $this->set('categories',$categories);
    $this->set('posts',$posts);

	}
	public function add(){

		$pagetitle="Alta Notícias";   
		$this->set("pagetitle",$pagetitle);

		if ($this->request->is('post')) {
    
      $this->Post->create();           
      

      if($this->request->data['Post']['image']['name']==''){
        unset($this->request->data['Post']['image']);
      }
      if($this->request->data['Post']['audio1']['name']==''){
        unset($this->request->data['Post']['audio1']);
      }
      if($this->request->data['Post']['audio2']['name']==''){
        unset($this->request->data['Post']['audio2']);
      }
      if($this->request->data['Post']['audio3']['name']==''){
        unset($this->request->data['Post']['audio3']);
      } 

      if(isset($_FILES['data'])){

        $files=$this->upload_file($_FILES['data']);
        if(isset($files['image'])){
          $this->request->data['Post']['image']=$files['image'];
        }
        
        unset($this->request->data['Post']['audio1']);
        unset($this->request->data['Post']['audio2']);
        unset($this->request->data['Post']['audio3']); 
               
      }         
      

      if ($this->Post->save($this->request->data)) {   
        $post_id=$this->Post->getInsertID();
        
        if(isset($files)){
          foreach ($files as $key => $item) {
           
            $temp=explode('/', $item);
            $type=($temp[0]=='images')?"image":"audio";
            
            $file_temp=array(
              'post_id'=>$post_id,
              'filename'=>end($temp),
              'path'=>$item,
              'type'=> $type,
              );           

            $this->File->create();
            $this->File->save(array('File'=>$file_temp));
          }
        }              
        
        $result=$this->public_on_fb($post_id);
        
        $this->Session->setFlash(__('La Notícia se ha guardado'));
        return $this->redirect(array('action' => 'index'));
      }
      $this->Session->setFlash(
          __('La Notícia no se pudo guardar. Por favor, inténtelo de nuevo.')
      );
    }
    $categories=$this->Category->find('list',array('conditions'=>array('is_deleted'=>0)));
    $this->set('categories',$categories);
    $user_id=$this->Auth->user()['id'];
    $this->set('user_id',$user_id);
    $orders=count($categories);


	}

  public function edit($id){
    $pagetitle="Editar";
    $this->set("pagetitle",$pagetitle);
    $this->Post->id = $id;

    if (!$this->Post->exists()) {
      throw new NotFoundException(__('Invalid user'));
    }
    
    if ($this->request->is('post') || $this->request->is('put')) { 

      // var_dump($this->request->data);
      //var_dump($_FILES);
      if($this->request->data['Post']['image']['name']==''){
        unset($this->request->data['Post']['image']);
      }
      if($this->request->data['Post']['audio1']['name']==''){
        unset($this->request->data['Post']['audio1']);
      }
      if($this->request->data['Post']['audio2']['name']==''){
        unset($this->request->data['Post']['audio2']);
      }
      if($this->request->data['Post']['audio3']['name']==''){
        unset($this->request->data['Post']['audio3']);
      } 

      if(isset($_FILES['data'])){
        $files=$this->upload_file($_FILES['data']);
        //var_dump($files);

        if(!empty($files)){

          if(isset($files['image'])){
            $this->request->data['Post']['image']=$files['image'];
          }
         
          unset($this->request->data['Post']['audio1']);
          unset($this->request->data['Post']['audio2']);
          unset($this->request->data['Post']['audio3']);

        }
        
      }    

       if(isset($files)){
          
          foreach ($files as $key => $item) {           
            $temp=explode('/', $item);
            $type=($temp[0]=='images')?"image":"audio";
            
            $file_temp=array(
              'post_id'=> $id,
              'filename'=>end($temp),
              'path'=>$item,
              'type'=> $type,
              );           

            $this->request->data['Files']=$file_temp;
            $this->File->create();
            $this->File->save(array('File'=>$file_temp));
          }
        }

        
      if ($this->Post->save($this->request->data)) {

        $this->Session->setFlash(__('La Notícia se ha guardado'));
        return $this->redirect(array('action' => 'index'));

      }
      $this->Session->setFlash(
        __('La Notícia no se pudo guardar. Por favor, inténtelo de nuevo.')
      );

    }else {

      $this->request->data = $this->Post->read(null, $id);
      //unset($this->request->data['Post']['password']);
      $categories=$this->Category->find('list',array('conditions'=>array('is_deleted'=>0)));
      $this->set('categories',$categories);
      $user_id=$this->Auth->user()['id'];
      $this->set('user_id',$user_id);
    }


    $this->render("add");


  }

  private function upload_file($files){
    
    $dir = WWW_ROOT. 'files';
    //var_dump($dir);
    $result=array();
    foreach ($this->data['Post'] as $key => $field) {
      //echo "asdas";

      if(isset($field['name']) && $field['name']!=''){
        if($key == 'image'){

          $dir_image = $dir.DS."images";        
          $temp = explode(".", $field['name']);

          $filename = strtotime("now")."_".rand(0,1000000). '.' . end($temp);

          if(file_exists($dir_image) && is_dir($dir_image))
          {
            move_uploaded_file($field['tmp_name'],$dir_image.DS.$filename);
            $result['image']="images/".$filename; 
          }
          elseif(mkdir($dir_image,0777))
          {
            move_uploaded_file($field['tmp_name'],$dir_image.DS.$filename); 
            $result['image']="images/".$filename; 
          }else{
            $result['image']="";
          }
          
        }elseif ( strpos($key, 'audio') !== false ) {        
          
          $dir_image = $dir.DS."audios";          

          $temp = explode(".", $field['name']);

          //$filename = strtotime("now")+1. '.' . end($temp);
          $filename = strtotime("now")."_".rand(0,1000000). '.' . end($temp);
          //var_dump($filename);
          if(file_exists($dir_image) && is_dir($dir_image))
          {
            move_uploaded_file($field['tmp_name'],$dir_image.DS.$filename);
            $result[$key]="audios/".$filename;  
          }
          elseif(mkdir($dir_image,0777))
          {
            move_uploaded_file($field['tmp_name'],$dir_image.DS.$filename); 
            $result[$key]="audios/".$filename; 
          }else{
            $result[$key]="";
          }        
        }
      }      
    }
    return $result;
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
    
    $this->Post->read(null, $id);

    $this->Post->set(array(
      'is_deleted' => $value,
    ));
    
    $result= $this->Post->save();
        
    return $this->redirect(array('action' => 'index'));
  }


  public function public_on_fb($id){    
    $this->layout=false;
    $this->render(false);

    $data=$this->Post->findById($id);
    
    if(empty($data)){
      return false;
    }
    
    $page_id=Configure::read('fb_page_id') ;
    $fb = new Facebook\Facebook([
      'app_id' => Configure::read('fb_api_id'),
      'app_secret' => Configure::read('fb_api_key'),
      'default_graph_version' => 'v2.5',
    ]);

    

    
    $url="/".$data['Category']['slug'].".html/". $data['Post']['slug'];
    
    if($data['Post']['image']!=''){
      $img=$this->webroot."files/".$data['Post']['image'];      
    }else{
      $img=$data['Post']['image_url'];      
    }

    $imgUrl=Router::url($img, true);
   
    $fullUrl = Router::url($url, true);

    $linkData = array(
      'name' => $data['Post']['title'],
      'message' => $data['Post']['overview'],
      'caption' => 'grupoemedia.com',
      'link' => $fullUrl,
      'description' => $data['Post']['overview'], 
      'picture' => $imgUrl,
      //'access_token' =>  $_SESSION['facebook_access_token'],
      'actions' => json_encode(array('name' => utf8_encode('Leer Artículo'),
      'link' =>  $fullUrl
      )),
    );


    $response = $fb->get('/me/accounts',  Configure::read('fb_user_token'));
    $appAccessToken=null;
    foreach ($response->getDecodedBody() as $allPages) {
      foreach ($allPages as $page ) {  
        if (isset($page['id']) && $page['id'] == $page_id) { // Suppose you save it as this variable
          $appAccessToken = (string) $page['access_token'];
          break;
        }
      }
    }

    $response = $fb->post(
      '/'.$page_id.'/feed', $linkData,
      $appAccessToken
    );

    $postId = $response->getGraphNode();
   
    return $postId;
  }


}
