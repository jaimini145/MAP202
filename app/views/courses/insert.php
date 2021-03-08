<?php


	<form action="/courses/submit_insert"  method="post" >
    
		//creating CourseID in form
		<div class="col-lg-12">
		
      	<label for="CourseID">Course_ID:</label>
    	<div class="col-lg-12">
        <input class="form-control" name="CourseID" id="CourseID" placeholder="Enter Course ID">
      </div>
			
    </div>
	
		 //creating Course_Name in form 
		<div class="col-lg-12">
			
			<label for="courseName">Course_Name:</label>
			<div class="col-lg-12">
			<input type="text" class="form-control" name="courseName" id="courseName" placeholder="Enter Course Name">
		  </div>
				
   		 </div>
		  
	</form>
?>