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
		
	public function submit_insert(){

		$courseId = $_POST['courseId'];
		$courseName =$_POST['courseName'];
		$Department = $_POST['Department'];
		$Program = $_POST['Program'];

		$course = $this->model('Course');
		$this->$course->submit_index($courseId,$courseName,$Department,$Program);
		echo $courseName;
		$this->view('courses/index');
		die;
		}
 	}
 ?>  
