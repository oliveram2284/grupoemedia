<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function index() {
        $pagetitle="Usuarios";
    	$this->set("pagetitle",$pagetitle);
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());

        $users=$this->User->find('all',array('conditions'=>array('is_deleted'=>0)));
        $this->set('users',$users);


      //var_dump($users);

    }

    public function view($id = null) {
      $this->User->id = $id;
      if (!$this->User->exists()) {
          throw new NotFoundException(__('Invalid user'));
      }
      $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        $pagetitle="Nuevo";
        $this->set("pagetitle",$pagetitle);
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
    }

    public function edit($id = null) {
        $pagetitle="Editar";
        $this->set("pagetitle",$pagetitle);
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) { 

            if ($this->User->save($this->request->data)) {

                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
        //var_dump($this->User->data);
        //$user=$this->User->findById($id);
				//var_dump($user);
		$this->request->data = $this->User->data;
        unset($this->request->data['User']['password']);
        
    }

  
    public function delete($id,$value=0){
        $this->layout=false;
        $this->render(false);       
        $this->User->read(null, $id);
        $this->User->set(array(
            'is_deleted' => $value,
        ));     

        $result= $this->User->save();      

        return $this->redirect(array('action' => 'index'));
    }

    public function profile(){
        $this->render(false);
    }
    public function login() {

	//var_dump($this->request->is('post'));
	    	//var_dump($this->request->data);
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {

	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Session->setFlash(__('Usuario o Contraseña Invalidods, Intente otra vez'));
	    }

	    $this->layout= "default_alt";
	}

	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}

    

}