<?php
/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
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
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Model'                     => array('/path/to/models/', '/next/path/to/models/'),
 *     'Model/Behavior'            => array('/path/to/behaviors/', '/next/path/to/behaviors/'),
 *     'Model/Datasource'          => array('/path/to/datasources/', '/next/path/to/datasources/'),
 *     'Model/Datasource/Database' => array('/path/to/databases/', '/next/path/to/database/'),
 *     'Model/Datasource/Session'  => array('/path/to/sessions/', '/next/path/to/sessions/'),
 *     'Controller'                => array('/path/to/controllers/', '/next/path/to/controllers/'),
 *     'Controller/Component'      => array('/path/to/components/', '/next/path/to/components/'),
 *     'Controller/Component/Auth' => array('/path/to/auths/', '/next/path/to/auths/'),
 *     'Controller/Component/Acl'  => array('/path/to/acls/', '/next/path/to/acls/'),
 *     'View'                      => array('/path/to/views/', '/next/path/to/views/'),
 *     'View/Helper'               => array('/path/to/helpers/', '/next/path/to/helpers/'),
 *     'Console'                   => array('/path/to/consoles/', '/next/path/to/consoles/'),
 *     'Console/Command'           => array('/path/to/commands/', '/next/path/to/commands/'),
 *     'Console/Command/Task'      => array('/path/to/tasks/', '/next/path/to/tasks/'),
 *     'Lib'                       => array('/path/to/libs/', '/next/path/to/libs/'),
 *     'Locale'                    => array('/path/to/locales/', '/next/path/to/locales/'),
 *     'Vendor'                    => array('/path/to/vendors/', '/next/path/to/vendors/'),
 *     'Plugin'                    => array('/path/to/plugins/', '/next/path/to/plugins/'),
 * ));
 */

/**
 * Custom Inflector rules can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the inflection functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 */

/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. Make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 * CakePlugin::loadAll(); // Loads all plugins at once
 * CakePlugin::load('DebugKit'); // Loads a single plugin named DebugKit
 */
CakePlugin::loadAll(); 
/**
 * To prefer app translation over plugin translation, you can set
 *
 * Configure::write('I18n.preferApp', true);
 */
Configure::write('I18n.preferApp', true);
/**
 * You can attach event listeners to the request lifecycle as Dispatcher Filter. By default CakePHP bundles two filters:
 *
 * - AssetDispatcher filter will serve your asset files (css, images, js, etc) from your themes and plugins
 * - CacheDispatcher filter will read the Cache.check configure variable and try to serve cached content generated from controllers
 *
 * Feel free to remove or add filters as you see fit for your application. A few examples:
 *
 * Configure::write('Dispatcher.filters', array(
 *		'MyCacheFilter', //  will use MyCacheFilter class from the Routing/Filter package in your app.
 *		'MyCacheFilter' => array('prefix' => 'my_cache_'), //  will use MyCacheFilter class from the Routing/Filter package in your app with settings array.
 *		'MyPlugin.MyFilter', // will use MyFilter class from the Routing/Filter package in MyPlugin plugin.
 *		array('callable' => $aFunction, 'on' => 'before', 'priority' => 9), // A valid PHP callback type to be called on beforeDispatch
 *		array('callable' => $anotherMethod, 'on' => 'after'), // A valid PHP callback type to be called on afterDispatch
 *
 * ));
 */
Configure::write('Dispatcher.filters', array(
	'AssetDispatcher',
	'CacheDispatcher'
));

/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
	'engine' => 'File',
	'types' => array('notice', 'info', 'debug'),
	'file' => 'debug',
));
CakeLog::config('error', array(
	'engine' => 'File',
	'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
	'file' => 'error',
));



CakePlugin::load('Bs3Helpers');
Configure::write('Bs3.Form.styles', array(
    'horizontal' => array(
        'formDefaults' => array(
            'submitDiv' => 'col-sm-10 col-sm-offset-2'
        ),
        'inputDefaults' => array(
            'label' => array(
                'class' => 'col-sm-2 control-label'
            ),
            'wrap' => 'col-sm-10',
        )
    ),
    'inline' => array(
        'inputDefaults' => array(
            'label' => array(
                'class' => 'sr-only'
            ),
        )
    )
));

CakePlugin::load('Facebook');



/** demo **/
/*
Configure::write("fb_api_id",'1638758863114974');
Configure::write("fb_api_key",'d0777ddcd0b818a85d65783644cf189d');
Configure::write('url_callback','http://grupoemedia.ittsj.com/login-callback');
Configure::write('fb_page_id','1777427702472833');
Configure::write('fb_user_token','EAAXScUfokt4BANUNbyzSs94EJ2ZB5WRugZBbVFOZBHpjPZC1ort8n33v95dovCB538rKRFO9Ohfaif9uEkUZAvWkZAOYYJAuV0DcuKn6Rv9KPys4AV6phMBk7CUkSH2hBQVIAGrPkWVfT6ZAFgFCCOCcYEgbEXzLxwZD');    
Configure::write("fb_app_token",'1638758863114974|zvTfhAKLdtCpjFzvT4ZAdKfnuGg');
*/

/** live **/

Configure::write("fb_api_id",'249297292100310');
Configure::write("fb_api_key",'dfbf4d9fad10adc55d6a54f898e9bf8e');
Configure::write('fb_url_callback','http://grupoemedia.ittsj.com/login-callback');
Configure::write('fb_page_id','600750570056224');
Configure::write('fb_user_token','EAADivAyKAtYBAASUOOKWzxmH4DaefbZB9513X9V0Q3WjAbzQ0iwfdsYsxXmc9ZAZA5LuDVrDii8Bzod6YywVCtt4F55kSQH3sQXCuk882r2iM3z5CKWaOaZBMKJ4o4aYvB4O8dVxZB1ZBaw2cTPI2EyrK9nAiqp84ZD');    
Configure::write("fb_app_token",'249297292100310|UG6qdN_RTrobhqUYbPMVh8IB3Aw');

