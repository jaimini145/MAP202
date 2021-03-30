<?php require_once 'app/views/templates/header.php' ?>
 <div class="container">
     <div class="page-header" id="banner">
         <div class="row">
             <div class="col-lg-12">
                 <h1>Programs for <?=$data['programs'] [0] ['department'] ?> </h1>
             </div>
         </div>
     </div>
 	<div class="row">
         <div class="col-lg-12">
             <?php foreach ($data['programs'] as $program) { ?>
 				<p><a href= '<?='/courses/display/'.$program['department'].'/'.$program['$program']?>'> <?
 		=$program['program'] ?></a></p>
 				<?php } ?>
         </div>
     </div>

	 	
 <?php require_once 'app/views/templates/footer.php' ?> 