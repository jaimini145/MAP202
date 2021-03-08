<?php
class courses extends Controller {

    public function index() {	
		$course =$this->model('Course');
		$department = $course->get_all_departments();
		$programs = $course->get_all_programs();
 	    $this->view('courses/index', ['departments' => $departments, 'programs'=>$programs]);
 		die;
    }
	
	
	public function display ($department = null, $program = null) {
 		if($department && $program == null) {
 			$course = $this->model('Course');
		}
		
	public function display ($department = null, $program = null) {
 			die;
 		}
 	}
		
	public function insert() {
		$this->view('courses/insert');
		die;
	}
		

 	}
 ?>  
