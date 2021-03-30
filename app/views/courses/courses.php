
	<?php require_once 'app/views/templates/header.php' ?>
 <div class="container">
     <div class="page-header" id="banner">
         <div class="row">
             <div class="col-lg-12">
                 <h1>Courses for the <?=$data['courses'] [0] ['program'] ?></h1>
             </div>
         </div>
     </div>

	 <div class ="row">
		 <div class ="col-lg-12">
			 <? php foreach ($data['courses'] as $course) { ?>
			 <p>
				 <?=$course['course_name'] ?> </p>
			 <?php } ?>
		 </div>
	 </div>
	
		 <br>
 		<br>
 		
	 
	 <?php require_once 'app/views/templates/footer.php' ?>