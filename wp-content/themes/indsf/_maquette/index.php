<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<link rel="icon" href="favicon.ico">
		<title>Institution Notre-Dame</title>
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>
	<body>
		<div class="container-fluid cont-fluid">
			<?php include("header.php");?>
			<?php include("navbar.php");?>
			<?php include("carousel.php");?>
			<?php include("intro.php");?>
			<?php include("actu.php");?>
			<?php include("international.php");?>
			<?php include("media.php");?>
			<?php include("footer.php");?>
	 	</div>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html>
<!-- <div class="actu row"><?php include(".php");?></div> -->