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

// use Facebook\FacebookSession; 
// use Facebook\FacebookRedirectLoginHelper;

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
class DemosController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Video','Category','Post');
  
/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function index(){
    $this->layout=false;    
    $this->render(false);

    $fb = new Facebook\Facebook([
      'app_id' => Configure::read('fb_api_id'),
      'app_secret' => Configure::read('fb_api_key'),
      'default_graph_version' => 'v2.5',
    ]);
    echo "<pre>";
    var_dump(Configure::read('fb_api_id'));
    var_dump(Configure::read('fb_url_callback'));
    echo "</pre>";
    
    $helper = $fb->getRedirectLoginHelper();
    //$permissions = ['email', 'user_likes','publish_actions',]; // optional
    $permissions = ['email', 'user_likes','publish_actions','manage_pages','publish_pages']; // optional
    $loginUrl = $helper->getLoginUrl(Configure::read('fb_url_callback'), $permissions);
    echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

	}

  public function  login_callback(){
    $this->layout=false;    
    $this->render(false); 
    $fb = new Facebook\Facebook([
      'app_id' => Configure::read('fb_api_id'),
      'app_secret' => Configure::read('fb_api_key'),
      'default_graph_version' => 'v2.5',
    ]);

    /*echo "<pre>";
    var_dump($_REQUEST);
    echo "</pre>";*/

    $helper = $fb->getRedirectLoginHelper();
    try {
      $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      // When Graph returns an error
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      // When validation fails or other local issues
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    if (isset($accessToken)) {
      // Logged in!
      $_SESSION['facebook_access_token'] = (string) $accessToken;

      // Now you can redirect to another page and use the
      // access token from $_SESSION['facebook_access_token']
    }

    /*echo "<pre>";
    var_dump($_SESSION['facebook_access_token']);
    echo "</pre>";*/
     return $this->redirect(array('action' => 'test'));


  }

  public function test(){

    $this->layout=false;    
    $this->render(false); 

    $fb = new Facebook\Facebook([
      'app_id' => Configure::read('fb_api_id'),
      'app_secret' => Configure::read('fb_api_key'),
      'default_graph_version' => 'v2.5',
    ]);
    
    echo "<pre>";
    var_dump($_SESSION['facebook_access_token']);
    echo "</pre>";


    $oAuth2Client = $fb->getOAuth2Client();
    $token="1638758863114974|zvTfhAKLdtCpjFzvT4ZAdKfnuGg";
    //$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($token);//$_SESSION['facebook_access_token']);
    //var_dump($longLivedAccessToken);
    try {
      $response = $fb->get('/me?fields=id,name,email',$token);
      //$userNode = $response->getGraphUser();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      // When Graph returns an error
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      // When validation fails or other local issues
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    $user = $response->getGraphUser();
    var_dump($user);
    //echo 'Name: ' . $user['name'];
  



  }

  public function post(){

    $this->layout=false;    
    $this->render(false); 

    $fb = new Facebook\Facebook([
      'app_id' => Configure::read('fb_api_id'),
      'app_secret' => Configure::read('fb_api_key'),
      'default_graph_version' => 'v2.5',
    ]);
    

    /* $linkData = [
      'link' => 'http://www.infobae.com/2016/06/01/1815311-la-joven-28-anos-mas-innovadora-la-region',
      'message' => 'Siempre hay que tomar estos ejemplos para hacer cosas distintas',
      ];*/
      $linkData = array('message' => utf8_encode('Según confiaron fuentes del Consejo a la agencia Télam, la legisladora de Confianza Pública hizo hincapié en que, aun siendo de público conocimiento las notas periodísticas sobre la dudosa '),
      'name' => 'Ruta del dinero K: Graciela Ocaña denunció a Casanello por "parcialidad" y "demora"',
      'caption' => 'grupoemedia.com',
      'link' => 'http://www.infobae.com/2016/06/01/1815605-ruta-del-dinero-k-graciela-ocana-denuncio-casanello-parcialidad-y-demora',
      'description' => utf8_encode( 'En Esta web aprendo secretos de los diseñadores Web'), 
      'picture' => 'http://cdn01.ib.infobae.com/adjuntos/162/imagenes/012/477/0012477942.jpg',
      //'access_token' =>  $_SESSION['facebook_access_token'],
      'actions' => json_encode(array('name' => utf8_encode('Leer Artículo'),
      'link' => 'http://grupoemedia.ittsj.com'
      )),
      );

    echo "<pre>";
    var_dump($_SESSION['facebook_access_token']);
    echo "</pre>";
    try {
      // Returns a `Facebook\FacebookResponse` object
      $response = $fb->post('/me/feed', $linkData, $_SESSION['facebook_access_token']);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    $graphNode = $response->getGraphNode();

    echo 'Posted with id: ' . $graphNode['id'];
  



  }

  public function post_page(){

    $page_id="1777427702472833";

    $this->layout=false;    
    $this->render(false); 

    $fb = new Facebook\Facebook([
      'app_id' => Configure::read('fb_api_id'),
      'app_secret' => Configure::read('fb_api_key'),
      'default_graph_version' => 'v2.5',
    ]);
    

    /* $linkData = [
      'link' => 'http://www.infobae.com/2016/06/01/1815311-la-joven-28-anos-mas-innovadora-la-region',
      'message' => 'Siempre hay que tomar estos ejemplos para hacer cosas distintas',
      ];*/
      $linkData = array('message' => 'Según confiaron fuentes del Consejo a la agencia Télam, la legisladora de Confianza Pública hizo hincapié en que, aun siendo de público conocimiento las notas periodísticas sobre la dudosa ',
      'name' => 'Ruta del dinero K: Graciela Ocaña denunció a Casanello por "parcialidad" y "demora"',
      'caption' => 'grupoemedia.com',
      'link' => 'http://stackoverflow.com/questions/7818667/simple-example-to-post-to-a-facebook-fan-page-via-php',
      'description' => 'En Esta web aprendo secretos de los diseñadores Web', 
      'picture' => 'http://cdn01.ib.infobae.com/adjuntos/162/imagenes/012/477/0012477942.jpg',
      //'access_token' =>  $_SESSION['facebook_access_token'],
      'actions' => json_encode(array('name' => utf8_encode('Leer Artículo'),
      'link' => 'http://grupoemedia.ittsj.com'
      )),
      );

    
    try {
      // Returns a `Facebook\FacebookResponse` object
      
      //$response = $fb->post('/me/feed', $linkData, $_SESSION['facebook_access_token']);
      $response = $fb->post('/'.$page_id.'/feed', $linkData, $_SESSION['facebook_access_token']);

    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    $graphNode = $response->getGraphNode();
    echo "<pre>";
    var_dump($graphNode);
    echo "</pre>";
    echo 'Posted with id: ' . $graphNode['id'];

  }

  public function load_pages(){
    $this->layout=false;    
    $this->render(false); 

    $page_id=Configure::read('fb_page_id') ;

   

    $fb = new Facebook\Facebook([
      'app_id' => Configure::read('fb_api_id'),
      'app_secret' => Configure::read('fb_api_key'),
      'default_graph_version' => 'v2.5',
    ]);

    //$accessToken = $_SESSION['facebook_access_token'];

    //echo $accessToken."<br>";


    //$response = $fb->get('/me/accounts', Configure::read('fb_api_id'));
    $response = $fb->get('/me/accounts', Configure::read('fb_user_token'));
    $appAccessToken=null;
    foreach ($response->getDecodedBody() as $allPages) {
        foreach ($allPages as $page ) {               
          echo "<pre>";
          var_dump($page);
          echo "</pre>";
            if (isset($page['id']) && $page['id'] == $page_id) { // Suppose you save it as this variable
                $appAccessToken = (string) $page['access_token'];
                break;
            }
        }
    }
    


    $response = $fb->post(
        '/'.$page_id.'/feed',
        array(
            "message" => "Message",
            "link" => "http://www.example.com",
            "picture" => "http://www.example.net/images/example.png",
            "name" => "Title",
            "caption" => "www.example.com",
            "description" => "Description example"
        ),
        $appAccessToken
    );

    // Success
    $postId = $response->getGraphNode();
    echo $postId;

    die();
    $helper = $fb->getPageTabHelper();
     
    // Returns info about the parent page
    $pageData = $helper->getPageData();
     
    // A boolean of whether or not the
    // authenticated user is an admin
    // of the parent page
    $isAdmin = $helper->isAdmin();
     
    // The ID of the parent page
    $pageId = $helper->getPageId();
    echo "<pre>";
    var_dump($pageData);
    var_dump($isAdmin);
    var_dump($pageId);
    echo "</pre>";



  }

  public function  get_token(){
      $fb = new Facebook\Facebook([
      'app_id' => Configure::read('fb_api_id'),
      'app_secret' => Configure::read('fb_api_key'),
      'default_graph_version' => 'v2.4',
    ]);

    $helper = $fb->getCanvasHelper();
    var_dump($helper->getAccessToken());
    var_dump($helper->getValue());
    var_dump($helper->isExpired());
    var_dump($helper->isLongLived());
    var_dump($helper->isAppAccessToken());
    var_dump($helper->getAppSecretProof());
    die();
    try {
      $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      // When Graph returns an error
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      // When validation fails or other local issues
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }
    var_dump($accessToken);
    if (! isset($accessToken)) {
      echo 'No OAuth data could be obtained from the signed request. User has not authorized your app yet.';
      exit;
    }

    // Logged in
    echo '<h3>Signed Request</h3>';
    var_dump($helper->getSignedRequest());

    echo '<h3>Access Token</h3>';
    var_dump($accessToken->getValue());

  }


	
}
