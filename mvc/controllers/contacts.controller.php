<?php

class ContactsController extends controller {
    
    public function __construct($data = array()) {
	parent::__construct($data);
	$this->model = new Message();
	
    }

    
    public function index() {
	if ( $_POST ) {
	    if ($this->model->save($_POST)) {
		Session::setFlash('Thank you! Your message was sent succesfully!');
	    }
	}
    }
    
    public function admin_index() {
	$this->data = $this->model->getList();
    }
}