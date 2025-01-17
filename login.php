<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Task Management System</title>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/style2.css">
</head>
<body class="login-body">
      
      <form method="POST" action="app/login.php" class="shadow p-4">

      	  <h3 class="display-4">LOGIN</h3>
      	  <?php if (isset($_GET['error'])) { ?>
      	  	<div class="alert alert-danger" role="alert">
			  <?php echo stripcslashes($_GET['error']); ?>
			</div>
      	  <?php } ?>

      	  <?php if (isset($_GET['success'])) { ?>
      	  	<div class="alert alert-success" role="alert">
			  <?php echo stripcslashes($_GET['success']); ?>
			</div>
      	  <?php } ?>

		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">User name</label>
		    <input type="text" class="form-control" name="user_name">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
		  </div>

		  <!-- Login and Home buttons side by side -->
		  <div class="d-flex justify-content-between">
		    <button type="submit" class="btn btn-primary">Login</button>
		    <!-- Home button that redirects to index.php -->
		    <a href="index.php" class="btn btn-secondary">Home</a>
		  </div>
		</form>

      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
	  <!-- Bootstrap JS, Popper.js, and jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>