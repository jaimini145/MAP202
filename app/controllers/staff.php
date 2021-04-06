<?php

class staff extends Controller {
	public function index() {
		
	
	check_permissions();
	 $this->view('staff/index');
	die;
	}
}
	
?>