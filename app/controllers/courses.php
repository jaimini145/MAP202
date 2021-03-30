<?php
class courses extends Controller {

    public function index() {	
		$course = $this->model('Course');
 		$departments = $course->get_all_departments();
		
 	    $this->view('courses/departments',['departments' => $departments]);
 		die;
    }
	
	public function display ($department = null, $program = null) {
		if($program) {
 			$course = $this->model('Course');
 			$courseList =  $course->get_all_courses($program);
 			$this->view('courses/courses', ['courses' => $courseList ]);
 			die;
	}
		if($department){
 			$course = $this->model('Course');
 			$programs =  $course->get_all_programs($department);
			//print_r ($programs); die; 
 			$this->view('courses/programs', ['programs' => $programs]);
 			die;

 		}
	}
} 
?>