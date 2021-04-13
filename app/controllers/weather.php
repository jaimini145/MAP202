<?php

class weather extends Controller {

    public function index() {    
        $cityName ='Sault Ste. Marie ';
        $model = $this->model('weathers');
        
        $result = $model->get_weather($cityName);
		
		$temperature=round($result['temperature']['temp']);
        $description=$result['description']['description'];
        
		//	<echo " In $cityName" ;
    	  //  echo "It is ". round($result['temperature']['temp']). " degrees ";
        //echo "with ". $result['description']['description'];
		
		$this->view('weather/index', ['city'=>$cityName,'temperature' => $temperature, 'description' =>$description]);
         die;
    }

}