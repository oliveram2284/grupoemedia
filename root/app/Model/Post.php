<?php
App::uses('AppModel', 'Model');

class Post extends AppModel {   

  public $belongsTo = array('Category','User'); 
  public $hasMany="File";  
  /*
  public $validate=array(
    'title'=>array(
              'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'Por favor, ingrese un Título de Noticia'
              )
            ),
    'overview'=>array(
              'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'Por favor, ingrese un Copete de Noticia'
              )
            ),
    'body'=>array(
              'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'Por favor, ingrese un Cuerpo de Noticia'
              )
            ),
   
    );
  */

  public function beforeSave($options = array()) {

  	if(!isset($this->data[$this->alias]['slug']) || $this->data[$this->alias]['slug']==''){
  		$slug_temp=strtolower(str_replace(" ",'-',$this->data[$this->alias]['title']));  	
      $slug=preg_replace('/[^A-Za-z0-9\-]/', '', $slug_temp);	
  		$this->data[$this->alias]['slug']= $slug; 
  	}
  	//var_dump($this->data);    
	  return true;
	}
    
}