<?php require_once 'app/views/templates/header.php' ?>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>welcome to Lab 7</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            	
			</div>
        </div>
    </div>

	<!-- <form action="/home/search" method="post"> 
	  <label >search</label><br>
	  <input type="text" id="fname" name="search" ><br>
	  <input type="submit" value="Find">
	</form> 
	-->
	
     <div class="row">
        <div class="col-lg-12">
            <p> <?=$data['message']?> </p>
			<a type="button" href="logout/index" class="btn btn-info btn-lg">
				<span class="glyphicon glyphicon-log-out"></span>Log out</a>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
