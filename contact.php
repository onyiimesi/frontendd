<!DOCTYPE html>
<html>
<head>
	<title>--- AfriHow ---</title>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
  	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/jquery.cycle.all.js"></script>
</head>
<body>
	<div id="container">
		<header id="header" class="fixed-top">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand" href="index.php">LOGO</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse justify-content-end navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav navs">
			      <li class="nav-item">
			      	<span class="fa fa-user-circle"></span>
			        <a class="nav-link" href="about.php">ABOUT</a>
			      </li>
			      <li class="nav-item">
			      	<span class="fa fa-sign-in"></span>
			        <a class="nav-link" href="signup.php">SIGN UP</a>
			      </li>
			      <li class="nav-item">
			      	<span class="fa fa-address-book"></span>
			        <a class="nav-link" href="contact.php">CONTACT</a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</header>
		<div id="contact">
			<div class="container">
				<div class="row contact">
					<div class="col">
						<h2><span class="af">Afrihow</span> | Contact Us Page</h2>
						<p>Please fill in the inputs and we will get back to you. Thank you!</p>
						<form>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Email</label>
						      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Password</label>
						      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputAddress">Address</label>
						    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
						  </div>
						  <div class="form-group">
						    <label for="inputAddress2">Address 2</label>
						    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputCity">City</label>
						      <input type="text" class="form-control" id="inputCity">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputState">State</label>
						      <select id="inputState" class="form-control">
						        <option selected>Choose...</option>
						        <option>...</option>
						      </select>
						    </div>
						    <div class="form-group col-md-2">
						      <label for="inputZip">Zip</label>
						      <input type="text" class="form-control" id="inputZip">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="form-check">
						      <input class="form-check-input" type="checkbox" id="gridCheck">
						      <label class="form-check-label" for="gridCheck">
						        Check me out
						      </label>
						    </div>
						  </div>
						  <button type="submit" class="btn btn-success">Contact</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3>Footer contents goes here</h3>
					</div>
				</div>
			</div>
		</footer>
	</div>


































	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>