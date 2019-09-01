<?php include('server.php');
// restrict access if not logged in
   if (empty($_SESSION['username'])) {
   	header('location:login.php');
   }
   
<!DOCTYPE html>
<html>
<head>
	<title>Online Registration</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="asset/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body>
<div class="container">

<div class="row">
	<div class="col-md-12">
		
			<div class="content">
		<?php if(isset($_SESSION['success'])): ?>
		    <h4>
		    	<?php 
		    	   echo $_SESSION['success'];
		    	   unset($_SESSION['success']);
		    	?>
		    </h4>
	    <?php endif ?>

        <?php if(isset($_SESSION['username'])): ?>
        	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        	
        <?php endif ?>

	</div>
	</div>
	
</div>
	
</div>

</body>
</html>