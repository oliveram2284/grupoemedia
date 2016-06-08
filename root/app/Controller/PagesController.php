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
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Post','Category','Video','Banner');
	public $components = array('Paginator');
/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	
	public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow();
  }


  public function index(){
		$this->layout = 'public';
		//echo $category_slug;

		$categories=$this->Category->find('all',array('conditions'=>array('Category.is_deleted'=>0)));
		$this->set('categories',$categories);

		$last_post=$this->Post->find(	'first',
																	array(
																		'conditions'=>array('Post.status'=>0), 
																		'order' => array('Post.created DESC')			
																	)		
																);


		$this->set('last_post',$last_post);

		$posts=$this->Post->find( "all",
															array(
																		'conditions'=>array('Post.id !='=>$last_post['Post']['id'],'Post.status'=>0), 
																		'order' => array('Post.order DESC')			
																	)	
														);
		$this->set("posts",$posts);

		$videos=$this->Video->find( "all",
																array(
																		'conditions'=>array('Video.status'=>0,'Video.is_deleted'=>0), 
																		'fields'=>array('Video.id','Video.title','Video.youtube_id','Video.url','Video.default_img','Video.default_width','Video.default_height','Video.description','Category.id','Category.name'),
																		'order' => array('Video.created DESC'),
																		'limit' => '10'			
																	)	
														);
		$this->set("videos",$videos);

		$banners=$this->Banner->find(			
																	'all',
																	array(
																		'conditions'=>array('Banner.is_deleted'=>0, "Banner.index"=>1),
																		'order' => array( 'Banner.order ASC'),
																	)			
																);

		$this->set("banners",$banners);

	}

	public function view($id){
		$this->layout = 'public';

		$last_post=$this->Post->find(	'first',
																	array(
																		'conditions'=>array('Category.id'=>$id,'Post.is_deleted'=>0), 
																		'order' => array('Post.created DESC')			
																	)		
																);
		
		if(empty($last_post)){
			return $this->redirect('/');
		}
		$this->set('last_post',$last_post);

		


		$posts=$this->Post->find( "all",
															array(
																		'conditions'=>array( 'Category.id'=>$id, 'Post.id !='=>$last_post['Post']['id'],'Post.is_deleted'=>0), 
																		'order' => array('Post.order DESC')			
																	)	
														);

		$posts=(!empty($posts))?$posts:array();
		$this->set("posts",$posts);


		$banners=$this->Banner->find(			
																	'all',
																	array(
																		'conditions'=>array('Banner.is_deleted'=>0, "Banner.category"=>1),
																		'order' => array( 'Banner.order ASC'),
																	)			
																);

		$this->set("banners",$banners);


		
	}

	public function info($post_id=0){
		$this->layout = 'public';
		$post=$this->Post->find(	'first',
															array(
																'conditions'=>array('Post.slug'=>$post_id,'Post.is_deleted'=>0), 
																'order' => array('Post.created DESC')			
															)		
														);
		if(empty($post)){
			return $this->redirect('/');
		}
		$last_three=$this->Post->find('all',
																	array(
																		'conditions'=>array('Post.id !='=>$post['Post']['id'],'Post.status'=>0),
																		'limit'=>3,
																		'order'=> array('Post.created DESC')			
																		)
																	);	
		$this->set("post",$post);
		$this->set("last_three",$last_three);

		$banners=$this->Banner->find(			
																	'all',
																	array(
																		'conditions'=>array('Banner.is_deleted'=>0, "Banner.single"=>1),
																		'order' => array( 'Banner.order ASC'),
																	)			
																);

		$this->set("banners",$banners);
	}


public function info_test($post_id=0){
		$this->layout = 'public';
		$post=$this->Post->find(	'first',
															array(
																'conditions'=>array('Post.slug'=>$post_id,'Post.is_deleted'=>0), 
																'order' => array('Post.created DESC')			
															)		
														);
		if(empty($post)){
			return $this->redirect('/');
		}
		$last_three=$this->Post->find('all',
																	array(
																		'conditions'=>array('Post.id !='=>$post['Post']['id'],'Post.status'=>0),
																		'limit'=>3,
																		'order'=> array('Post.created DESC')			
																		)
																	);	
		$this->set("post",$post);
		$this->set("last_three",$last_three);
	}






	public function display($str='') {
		//var_dump($str);
		$this->layout=false;
		$this->render(false);
		$posts=$this->Post->find(	'all');		

		foreach ($posts as $key => $post) {

			$this->Post->id = $post['Post']['id'];			
			$slug=strtolower(str_replace(" ",'-',$post['Post']['title'])) ;
			//var_dump($slug);
			$result=preg_replace('/[^A-Za-z0-9\-]/', '',$slug );
			//var_dump($result);
			$this->Post->saveField('slug', $result);	
		}

	}

	public function videos(){
		$this->layout = 'public';
		

		$options = array(
		    'conditions'=>array('Video.status'=>0,'Video.is_deleted'=>0), 
		    
		    'order' => array(
		        'Video.created' => 'DESC'
		    ),
		    'limit' => 20
		);

		$this->Paginator->settings = $options;
		$videos = $this->Paginator->paginate('Video');

		
		$this->set("videos",$videos);

	}

	public function video_player($id){
		$this->layout = 'public';
		$video=$this->Video->findById($id);
		//var_dump($video);
		$this->set("video",$video);
	}

	public function video_player_alt($id){
		$this->layout = 'public';
		$video=$this->Video->findById($id);
		//var_dump($video);
		$this->set("video",$video);
	}

	public function services(){
		$this->layout = 'public';
	}
}
