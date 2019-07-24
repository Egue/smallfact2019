<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ParketSw</title>
	<link rel="stylesheet" href="src/Views/file/css/bootstrap4/css/bootstrap.min.css">
  <script src="src/Views/file/css/bootstrap4/js/jquery.min.js"></script>
  <script src="src/Views/file/css/bootstrap4/js/popper.min.js"></script>
  <script src="src/Views/file/css/bootstrap4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<?php 
	require_once("Apps/_menu.php");
	?>
<section>
	<?php
	require_once("src/Controllers/Controller.php");
	$mvc = new Controller();
	
	require_once("".$mvc."");

	?>
</section>
</div>
</body>
</html>