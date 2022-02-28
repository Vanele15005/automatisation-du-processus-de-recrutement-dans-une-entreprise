<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>verification</title>
	<link rel="stylesheet" type="text/css" href="Accueil.css">
</head>
<body style="background: #fff;">
	<div id="content">
		<?php
		session_start();
		if($_session['username'] !== ""){
		$user = $_session['username'];
	}
	?>
	</div>

</body>
</html>