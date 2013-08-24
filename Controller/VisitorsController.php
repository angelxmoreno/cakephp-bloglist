<?php

App::uses('AppController', 'Controller');

/**
 * Visitors Controller
 *
 * @property Visitor $Visitor
 * @property PaginatorComponent $Paginator
 */
class VisitorsController extends AppController {

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->Visitor->recursive = 0;
		$this->set('visitors', $this->paginate());
	}

	/**
	 * admin_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		$this->Visitor->id = $id;
		if (!$this->Visitor->exists()) {
			throw new NotFoundException(__('Invalid %s', __('visitor')));
		}
		$this->set('visitor', $this->Visitor->read(null, $id));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Visitor->create();
			if ($this->Visitor->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('visitor')), 'alert', array(
				    'plugin' => 'TwitterBootstrap',
				    'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('visitor')), 'alert', array(
				    'plugin' => 'TwitterBootstrap',
				    'class' => 'alert-error'
					)
				);
			}
		}
	}

	/**
	 * admin_edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		$this->Visitor->id = $id;
		if (!$this->Visitor->exists()) {
			throw new NotFoundException(__('Invalid %s', __('visitor')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Visitor->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('visitor')), 'alert', array(
				    'plugin' => 'TwitterBootstrap',
				    'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('visitor')), 'alert', array(
				    'plugin' => 'TwitterBootstrap',
				    'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Visitor->read(null, $id);
		}
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
		$this->Visitor->id = $id;
		if (!$this->Visitor->exists()) {
			throw new NotFoundException(__('Invalid %s', __('visitor')));
		}
		if ($this->Visitor->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('visitor')), 'alert', array(
			    'plugin' => 'TwitterBootstrap',
			    'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('visitor')), 'alert', array(
		    'plugin' => 'TwitterBootstrap',
		    'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
