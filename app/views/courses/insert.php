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
				
		//department		
		  <div class="col-lg-12">
      <label for="Department">Department:</label>
     <div class="col-lg-12">        
        <input type="text" class="form-control" name="Department" id="Department" placeholder="Enter Department">
      </div>
    </div>
		
	//program	  
   <div class="col-lg-12">
      <label for="Department">Program:</label>
     <div class="col-lg-12">      
        <input type="text" class="form-control" name="Program" id="Program" placeholder="Enter Program">
      </div>
    </div>
	<br>
		  
    <div class="col-xs-6 form-group">        
      <div class="col-sm-offset-2 col-xs-6">
      <button type="submit" value="submit" name="submit">Submit</button>
      </div>
     </div>
	</form>
?>