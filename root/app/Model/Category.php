<?php
App::uses('AppModel', 'Model');

class Category extends AppModel {   
  public $validate = array(
       'name' => array(
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'Ese nombre de usuario ya existe',
                'on' => 'create'
            ),
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'Por favor, ingrese un nombre de Categoría'
            )
        ),

        'slug' => array(
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'Ese URL de usuario ya existe',
                'on' => 'create'
            ),
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'Por favor, ingrese URL de Categoría'
            )
        )
    );   

    


    
}