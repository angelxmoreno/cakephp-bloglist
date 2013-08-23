<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	/**
	 * Helpers
	 *
	 * @var array
	 */
	public $helpers = array(
	    'Session',
	    'Html' => array('className' => 'TwitterBootstrap.BootstrapHtml'),
	    'Form' => array('className' => 'TwitterBootstrap.BootstrapForm'),
	    'Paginator' => array('className' => 'TwitterBootstrap.BootstrapPaginator'),
	);

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array(
	    'DebugKit.Toolbar',
	    'Auth' => array(
		'loginRedirect' => array('admin' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'dashboard'),
		'logoutRedirect' => array('admin' => false, 'plugin' => null,'controller' => 'users', 'action' => 'login'),
		'loginAction' => array('admin' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'login'),
		'authenticate' => array(
		    'Form' => array(
			'fields' => array('username' => 'email')
		    )
		)
	    ),
	    'Session',
	    'Cookie',
	);

	/**
	 * App Layout
	 *
	 * @var string
	 */
	public $layout = 'bootstrap_layout';

	/**
	 * Layout Nav Links
	 * @var array
	 */
	public $navLinks = array(
	    'Home' => array(
		'url' => '/'
	    ),
	    'Blog List' => array(
		'url' => array('admin' => false, 'plugin' => null, 'controller' => 'products', 'action' => 'index'),
	    ),
	    'About' => array(
		'url' => array('admin' => false, 'plugin' => null, 'controller' => 'pages', 'action' => 'display', 'about'),
	    ),
	    'Contact' => array(
		'url' => array('admin' => false, 'plugin' => null, 'controller' => 'pages', 'action' => 'contact'),
	    ),
	    'Log In' => array(
		'url' => array('admin' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'login'),
		'auth' => false,
	    ),
	);

	/**
	 * beforeFilter callback
	 *
	 * @return void
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->set('navLinks', $this->navLinks);
		$this->Auth->allow('index', 'view', 'display');
	}

}
