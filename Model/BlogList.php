<?php

App::uses('AppModel', 'Model');

/**
 * BlogList Model
 *
 * @property Visitor $Visitor
 * @property User $User
 */
class BlogList extends AppModel {

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
	    'visitor_id' => array(
		'uuid' => array(
		    'rule' => array('uuid'),
		    //'message' => 'Your custom message here',
		    'allowEmpty' => false,
		    'required' => true,
		//'last' => false, // Stop validation after this rule
		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
	    ),
	    'name' => array(
		'notempty' => array(
		    'rule' => array('notempty'),
		    //'message' => 'Your custom message here',
		    'allowEmpty' => false,
		    'required' => true,
		//'last' => false, // Stop validation after this rule
		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
	    ),
	    'blog_url' => array(
		'notempty' => array(
		    'rule' => array('notempty'),
		    //'message' => 'Your custom message here',
		    'allowEmpty' => false,
		    'required' => true,
		//'last' => false, // Stop validation after this rule
		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
		'isUrl' => array(
		    'rule' => array('url', true),
		),
	    ),
	    'blog_rss' => array(
		'isUrl' => array(
		    'rule' => array('url', true),
		    //'message' => 'Your custom message here',
		    'allowEmpty' => true,
		    'required' => false,
		//'last' => false, // Stop validation after this rule
		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
	    ),
	    'is_active' => array(
		'boolean' => array(
		    'rule' => array('boolean'),
		    //'message' => 'Your custom message here',
		    'allowEmpty' => false,
		    'required' => true,
		//'last' => false, // Stop validation after this rule
		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
	    ),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
	    'Visitor' => array(
		'className' => 'Visitor',
		'foreignKey' => 'visitor_id',
		'conditions' => '',
		'fields' => '',
		'order' => ''
	    ),
	    'User' => array(
		'className' => 'User',
		'foreignKey' => 'user_id',
		'conditions' => '',
		'fields' => '',
		'order' => ''
	    )
	);

}
