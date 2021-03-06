<?php

App::uses('AppController', 'Controller');

/**
 * BlogLists Controller
 *
 * @property BlogList $BlogList
 * @property PaginatorComponent $Paginator
 */
class BlogListsController extends AppController {

	public $components = array('Recaptcha.Recaptcha' => array('actions' => array('add')));
	public $helpers = array('Time');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->BlogList->recursive = 0;
		$this->paginate = array('conditions' => array('BlogList.is_active' => true));
		$blogLists = $this->paginate();
		$this->set('blogLists', $blogLists);
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->BlogList->id = $id;
		if (!$this->BlogList->exists()) {
			throw new NotFoundException(__('Invalid %s', __('blog list')));
		}
		$this->set('blogList', $this->BlogList->read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['BlogList']['visitor_id'] = $this->Session->read('Visitor.id');
			$this->request->data['BlogList']['user_id'] = ($this->Auth->user('id')) ? $this->Auth->user('id') : null;
			$this->BlogList->create();
			if ($this->BlogList->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('blog list')), 'alert', array(
				    'plugin' => 'TwitterBootstrap',
				    'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('blog list')), 'alert', array(
				    'plugin' => 'TwitterBootstrap',
				    'class' => 'alert-error'
					)
				);
			}
		}
		$visitors = $this->BlogList->Visitor->find('list');
		$this->set(compact('visitors'));
	}

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->BlogList->recursive = 0;
		$this->set('blogLists', $this->paginate());
	}

	/**
	 * admin_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		$this->BlogList->id = $id;
		if (!$this->BlogList->exists()) {
			throw new NotFoundException(__('Invalid %s', __('blog list')));
		}
		$this->set('blogList', $this->BlogList->read(null, $id));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->request->data['BlogList']['visitor_id'] = $this->Session->read('Visitor.id');
			$this->request->data['BlogList']['user_id'] = ($this->Auth->user('id')) ? $this->Auth->user('id') : null;
			$this->BlogList->create();
			if ($this->BlogList->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('blog list')), 'alert', array(
				    'plugin' => 'TwitterBootstrap',
				    'class' => 'alert-success'
					)
				);
				unset($this->request->data);
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('blog list')), 'alert', array(
				    'plugin' => 'TwitterBootstrap',
				    'class' => 'alert-error'
					)
				);
			}
		}
		$visitors = $this->BlogList->Visitor->find('list');
		$this->set(compact('visitors'));
	}

	/**
	 * admin_edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		$this->BlogList->id = $id;
		if (!$this->BlogList->exists()) {
			throw new NotFoundException(__('Invalid %s', __('blog list')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BlogList->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('blog list')), 'alert', array(
				    'plugin' => 'TwitterBootstrap',
				    'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('blog list')), 'alert', array(
				    'plugin' => 'TwitterBootstrap',
				    'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->BlogList->read(null, $id);
		}
		$visitors = $this->BlogList->Visitor->find('list');
		$this->set(compact('visitors'));
	}

	/**
	 * admin_delete method
	 *
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->BlogList->id = $id;
		if (!$this->BlogList->exists()) {
			throw new NotFoundException(__('Invalid %s', __('blog list')));
		}
		if ($this->BlogList->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('blog list')), 'alert', array(
			    'plugin' => 'TwitterBootstrap',
			    'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('blog list')), 'alert', array(
		    'plugin' => 'TwitterBootstrap',
		    'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * _activate_toggle method
	 *
	 * @param string $id
	 * @param boolean|int $active_state the state ( true or false)
	 * @return void
	 */
	protected function _activate_toggle($id = null, $active_state = 0) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->BlogList->id = $id;
		if (!$this->BlogList->exists()) {
			throw new NotFoundException(__('Invalid %s', __('blog list')));
		}
		$actionPerformed = ($active_state) ? 'The %2 has been activated' : 'The %2 has beeen deactivated';
		if ($this->BlogList->saveField('is_active', $active_state)) {
			$this->Session->setFlash(
				__($actionPerformed, __('blog list')), 'alert', array(
			    'plugin' => 'TwitterBootstrap',
			    'class' => 'alert-success'
				)
			);
		}
		$this->Session->setFlash(
			__('The %s could not be updated', __('blog list')), 'alert', array(
		    'plugin' => 'TwitterBootstrap',
		    'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * admin_activate method
	 *
	 * @param string $id
	 * @return void
	 */

	public function admin_activate($id = null){
		$this->_activate_toggle($id, $active_state = 1);
	}

	/**
	 * admin_deactivate method
	 *
	 * @param string $id
	 * @return void
	 */

	public function admin_deactivate($id = null){
		$this->_activate_toggle($id, $active_state = 0);
	}

}
