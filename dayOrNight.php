<!DOCTYPE HTML>
<html>
	<head>
		<title>Day or Night</title>
		<?php require_once("time.php");?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"  type="text/javascript"></script>
		<link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css'>
		<link href="dayOrNight.css" rel="stylesheet" type="text/css">
		<script> 
			$(document).ready(function(){	
				setInterval(function(){			
						$.get("time.php", function(data){
						$("#clock").html(data);
						});	
					},1000);		
				});
		</script>		
	</head>
	<body class='<?=$backgroundColor?>'>
		<div>
			<p>The time is</p>
			<p id="clock"></p>
		</div>
	</body>
</html>