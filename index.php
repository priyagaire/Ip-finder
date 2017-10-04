<?php 
require('ip.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="http://hd.wallpaperswide.com/thumbs/lion_5-t2.jpg">
	<title>Ip Address Finder</title>
	<link rel="stylesheet" id="black" href="https://bootswatch.com/slate/bootstrap.css"/>
	<link rel="stylesheet" id="white" href="https://bootswatch.com/flatly/bootstrap.min.css">

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
		#fixedbutton 
		{
		     position: fixed;
		    bottom: 0px;
		    right: 10px; 

		    height: 50px;
		    width: 50px;

		}
		#white
		{	 position: fixed;
		    bottom: 5px;
		  
		    height: 40px;
		    width: 40px;
			right: 65px;
		}
		.jumbotron
		{
			border: 0px;
		}
	</style>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>


   
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
		<br>
		 <h3>Your Device Information</h3>
			<div class="jumbotron">
			<?php $devinfo=$useragent=$_SERVER['HTTP_USER_AGENT'];
			echo $devinfo;
			echo '</div>';
			?>

					    
	</div>

		<div class="float">
					<a href="#" onclick="nightmode();" >
						<img src="bcircle.png" 
						 id="fixedbutton"></a>

						 <a href="#" onclick="daymode();" >
						<img src="wcircle.png" 
						 id="white"></a>
				</div>
				<script>
					function nightmode()
					{
							document.getElementById('white').disabled  = true;
    				// document.getElementById('black').disabled = false;
					}
					function daymode()
					{
							// document.getElementById('white').disabled  = true;
    				document.getElementById('white').disabled = false;
					}
					
				</script>
	</body>
</html>