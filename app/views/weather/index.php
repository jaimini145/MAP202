<?php 
//require_once 'app/views/templates/header.php' ?>

<div class="container">
	
    <div class="page-header" id="banner">
       
		<div class="row">
            <div class="col-lg-12">
                <h1>Weather</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
				<br>
				 <p>In <?=$data['city']?>, It is <?= round($data['temperature']) ?> degrees with <?= $data['description']?> </p>
            </div>
			
        </div>
		
    </div>
</div>
