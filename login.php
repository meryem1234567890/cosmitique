<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Visual Admin - Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Visual Admin Template
        https://templatemo.com/tm-455-visual-admin
        -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css2/font-awesome.min.css" rel="stylesheet">
	    <link href="css2/bootstrap.min.css" rel="stylesheet">
	    <link href="css2/templatemo-style.css" rel="stylesheet">
	    
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<?php
	session_start();

	include('connection.php');

	?>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Login</h1>
	        </header>
	        <form method="post" class="templatemo-login-form">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" placeholder="js@dashboard.com" name="email">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" placeholder="******" name="passe">           
		          	</div>	
	        	</div>	          	
	          	
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100" name="btn">Login</button>
				</div>
	        </form>
			<?php
         if(isset($_POST['btn'])){
			$email=$_POST['email'];
			$passe=$_POST['passe'];

			$rech=mysqli_query($conn,"select * from client where emailc='$email' and passec='$passe'");
			if(mysqli_num_rows($rech)>0){
				$data=mysqli_fetch_assoc($rech);
				$_SESSION['email']=$data['emailc'] ;
				$_SESSION['nom']=$data['nomc'] ;

				header("location:index.php");

				
			}
else{echo'ereur de connection';}

		 }
			?>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Not a registered user yet? <strong><a href="signup.php" class="blue-text">Sign up now!</a></strong></p>
		</div>
	</body>
</html>