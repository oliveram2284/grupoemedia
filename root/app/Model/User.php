<?php
// app/Model/User.php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
           /* 'required' => array(
                'on'         => 'create',
                'rule'       => 'notEmpty',
                'message'    => 'Enter your email address',
                'required'   => true,
                'last'       => true
            ),
            'notempty' => array(
                'rule'       => 'notEmpty',
                'message'    => 'Enter your email address',
                'allowEmpty' => false,
                'last'       => true
            ),
            'range' => array(
                'rule' => array('between', 5, 64),
                'message' => 'Between 5 and 64 characters'
            ),*/
            /*'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            ),
            'range' => array(
                'rule' => array('between', 5, 64),
                'message' => 'Between 5 and 64 characters'
            ),*/
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('administrador', 'usuario')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

    public function beforeSave($options = array()) {
       
    if (isset($this->data[$this->alias]['password']) && $this->data[$this->alias]['password']!='') {       
        $passwordHasher = new BlowfishPasswordHasher();        
        $new_password=$passwordHasher->hash(  $this->data[$this->alias]['password']);        
        $this->data[$this->alias]['password'] = $passwordHasher->hash(  $this->data[$this->alias]['password']);
    }else{
        unset( $this->data[$this->alias]['password']);
    }

    return true;
}
}