<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<main role="main" class="container">
<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>You are not logged in</h1>
			<?php if ($_SESSION['failedAuth'])
			echo '<P> Login failed. Use correct username and password </P>';
			if($data['message']){?>
			<?= $data['message'];?>
			<?php }
			?>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-auto">
			<form action="/login/verify" method="post" >
				<fieldset>
					<div class="form-group">
					<label for="name">Username</label>
					<input required type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
					<label for="name">Password</label>
					<input required type="password" class="form-control" name="password">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
					<br>
					<a href ="register/index">Create your Account</a>
				</fieldset>
			</form>
	</div>
</div>
<?php require_once 'app/views/templates/footer.php' ?>