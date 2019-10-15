<?php 
require('ip.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ip Address Finder</title>
	<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
	<style>
		.btn
		{
			margin-top:20px;
		}
		.gi-5x
		{
			font-size: 30px;
		}
		.alert
		{
			width: 50%;
			margin: 0 auto;
		}
	</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
<body>
	<div class="container text-center">
		<h1>IP ADDRESS FINDER</h1>	
		<div class="well">
		<h3>What is my Ip Address ?</h3>
		<p>Find your real public ip address</p>
		<p><span class="glyphicon glyphicon-hand-down gi-5x
"></span></p>	
		</div>
		
		<input type="submit" class="btn btn-primary btn-lg" value=" <?php echo $ip_address; ?>">
		<br> <br>
		 <h3>Your Device Information</h3>
			<div class="jumbotron">
			<?php $devinfo=$useragent=$_SERVER['HTTP_USER_AGENT'];
			echo $devinfo;
			echo '</div>';
			if(stripos($devinfo, "android")&&(stripos($devinfo,"windows"))==true)
			 {	 ?>
				<!-- echo "I hate windows phones";
			    echo "windows phone"; -->
			   
			    <div class="alert alert-danger alert-dismissable">
			    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    	<b>People still do use Windows phone ? 😂 Well the dev of this page does </b>
			    </div>'
				<?php	
			
			}
			
			else {
				echo "Not windows phone";
 				
		

			}

 				?>
		    
	</div>
	
	
</body>
</html>