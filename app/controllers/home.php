<?php

class Home extends Controller {

    public function index() {	
		if($_SESSION['message']!=null)
		{
			$message = $_SESSION['message'];
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	    $this->view('home/index');
	    die;
    }

}
