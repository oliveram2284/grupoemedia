<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'index', 'home'));
	Router::connect('/admin', array('controller' => 'dashboard'));

	Router::connect('/locales.html', array('controller' => 'pages', 'action' => 'view',1));
	Router::connect('/locales.html/*', array('controller' => 'pages', 'action' => 'info',));

	Router::connect('/nacionales.html', array('controller' => 'pages', 'action' => 'view',2));
	Router::connect('/nacionales.html/*', array('controller' => 'pages', 'action' => 'info',));

	Router::connect('/internacionales.html', array('controller' => 'pages', 'action' => 'view',3));
	Router::connect('/internacionales.html/*', array('controller' => 'pages', 'action' => 'info',));

	Router::connect('/deportes.html', array('controller' => 'pages', 'action' => 'view',4));
	Router::connect('/deportes.html/*', array('controller' => 'pages', 'action' => 'info',));

	Router::connect('/deportes.html/test/*', array('controller' => 'pages', 'action' => 'info_test',));

	Router::connect('/videos.html', array('controller' => 'pages', 'action' => 'videos'));
	Router::connect('/videos.html/view/*', array('controller' => 'pages', 'action' => 'video_player'));
	//Router::connect('/videos.html/*', array('controller' => 'pages', 'action' => 'videos',));

	Router::connect('/test/*', array('controller' => 'pages', 'action' => 'info_test'));



	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	
	//Router::connect('/profile', array('controller' => 'users', 'action' => 'profile'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));

	Router::connect('/display', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/login-callback', array('controller' => 'demos', 'action' => 'login_callback'));


/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
/*
	Router::connect('/categoria', array('controller' => 'categories'));
	Router::connect('/categoria/alta', array('controller' => 'categories', 'action'=>'add'));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));*/


/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
