<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome to MAP202</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p> <a href='/courses'> View Courses</a> </p>
        </div>
    </div>
	
	
	<div class="row">
        <div class="col-lg-12">
            <a href='/logout'> Logout</a> 
        </div>
    </div> <?php require_once 'app/views/templates/footer.php' ?>

   
