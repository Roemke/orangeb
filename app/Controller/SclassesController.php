<?php
App::uses('AppController', 'Controller');
/**
 * Sclasses Controller
 *
 * @property Sclass $Sclass
 * @property PaginatorComponent $Paginator
 */
class SclassesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sclass->recursive = 0;
		$this->set('sclasses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sclass->exists($id)) {
			throw new NotFoundException(__('Invalid sclass'));
		}
		$options = array('conditions' => array('Sclass.' . $this->Sclass->primaryKey => $id));
		$this->set('sclass', $this->Sclass->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sclass->create();
			if ($this->Sclass->save($this->request->data)) {
				$this->Session->setFlash(__('The sclass has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sclass could not be saved. Please, try again.'));
			}
		}
		$lessons = $this->Sclass->Lesson->find('list');
		$students = $this->Sclass->Student->find('list');
		$this->set(compact('lessons', 'students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sclass->exists($id)) {
			throw new NotFoundException(__('Invalid sclass'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sclass->save($this->request->data)) {
				$this->Session->setFlash(__('The sclass has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sclass could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sclass.' . $this->Sclass->primaryKey => $id));
			$this->request->data = $this->Sclass->find('first', $options);
		}
		$lessons = $this->Sclass->Lesson->find('list');
		$students = $this->Sclass->Student->find('list');
		$this->set(compact('lessons', 'students'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sclass->id = $id;
		if (!$this->Sclass->exists()) {
			throw new NotFoundException(__('Invalid sclass'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sclass->delete()) {
			$this->Session->setFlash(__('The sclass has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sclass could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
