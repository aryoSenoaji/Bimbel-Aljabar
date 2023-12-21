<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style7.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="fontawesome-5-pro/css/all.min.css">
</head>

<body>
<section class="container-fluid kotak">
	<section class="row justify-content-center">
	<section class="col-12 col col-sm-6 col-md-3">
		<form method="post" action="ceklogin.php"  class="form-container">
		  <div class="form-group">
			<label for="exampleInputEmail1">Username</label>
			<input type="text" class="form-control" id="exampleInputEmail1" name="username"  aria-describedby="emailHelp">
			<small id="emailHelp" class="form-text text-white"></small>
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1">
		  </div>
		  <div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Remind me</label>
		  </div>
			<input type="submit" class="btn btn-primary" name="Send" value="Send">
		</form>
		</section>
	</section>	
</section>
	
	
<script src="bootstrap/js/jquery-3.6.0.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
</body>
</html>