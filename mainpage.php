<?php 
	
	session_start();

	include("connection.php");

	$query = "SELECT diary FROM users WHERE id ='".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($link, $query);

	$row = mysqli_fetch_array($result);

	$diary = $row['diary'];

?>

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

<body>

<!-- Header -->
<div class="navbar navbar-default navbar-fixed-top">

    <div class="container-fluid">

      <div class="navbar-header pull-left">
  		
  			<a class="navbar-brand"></a>
  			
  		</div>
      
     <div class="pull-right">
      
 		<ul class="navbar-nav nav">
 			<li><a href="index.php?logout=1"> Log Out </a></li>
 		</ul>

    </div>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<textarea class="form-control" name="diary"> <?php echo $diary; ?> </textarea>
				
		</div>
	</div>

</div>


<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript">

$('textarea').css("height", $(window).height()-140);

$('textarea').keyup(function() {

	$.post("updatediary.php", {diary:$("textarea").val()});

});

</script>

</body>
</html>