<?php

class Logout extends Controller {

    public function index() {		
	    //destroy session and redirect to login page
		session_destroy();
		header('location:/login');
		die;
    }

}
