<?php
App::uses('AppController', 'Controller');
/**
 * ImportController
 *
 * @property Teacher $Teacher
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property SecurityComponent $Security
 */
class ImportController extends AppController {
 //import controller for  different Models
    public $uses = array('Teacher','Student');       
/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Time');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Acl', 'Security');

/**
 * index method
 *
 * @return void
 */
	public function index() {
	    //hier haben wir nichts zu tun, es werden lediglich die "Felder" angezeigt
	}
}
