<?php

class manager extends Controller {
	public function index() {
		
	
	check_permissions();
	 $this->view('manager/index');
	die;
	}
}
	
?>