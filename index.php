<?php include("login.php"); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Secret Diary</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="assets/style.css">
</head>

<body data-target=".navbar-collapse">

<!-- Header -->
<div class="navbar navbar-default navbar-fixed-top">

    <div class="container-fluid">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle button" data-toggle="collapse" data-target=".navbar-collapse">

          <span class="sr-only"> Toggle Navigation </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>

      </div>
      
      <div class="collapse navbar-collapse">
      
        <form method="post" class="navbar-form navbar-right">
			<div class="form-group">
			<input type="email" placeholder="Email" name="loginEmail" id="email" class="form-control" value='<?php echo addslashes($_POST["loginEmail"]); ?>'>
			</div>
			<div class="form-group">
				<input type="password" placeholder="Password" name="loginPassword" id="password" class="form-control" value='<?php echo addslashes($_POST["loginPassword"]); ?>'>
			</div>
			<input type="submit" name="submit" value="Log In" class="btn btn-color">
		</form>
    </div>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="white center"> Secret Diary </h1>
			<p class="lead white center"> Your own private diary for you wherever you go. </p>

			<form method="post">

				<div class="form-group" id="input">

					<input type="email" placeholder="Email" name="email" class="form-control center" id="email" value='<?php echo addslashes($_POST["email"]); ?>'>

				</div>

				<div class="form-group" id="input">

					<input type="password" placeholder="Password" name="password" class="form-control center" id="password" value='<?php echo addslashes($_POST["password"]); ?>'>

				</div>

				<input type="submit" name="submit" class="btn btn-color btn-large center-block" value="Sign Up" id="signUp">

			</form>

			<?php

				if ($error) {

					echo '<p id="fail" class="alert alert-danger center-block text-center">'.addslashes($error).'</p>';
				}

				elseif ($message) {
					
					echo '<p id="fail" class="alert alert-success center-block text-center">'.addslashes($message).'</p>';
				}

			?>
				
		</div>
	</div>

</div>


<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>