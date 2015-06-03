<html>
<head>
	<?PHP
		include('../Includes/slideshowjava.php');
	?>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css"><!--De CSS staat in de Stylesheet map-->
</head>
<body onload="wisselPlaatjes()">
	
	<?PHP
		include('loading.php');
		include('../Includes/head.php');
		include('../Includes/newsfeed.php');
	?>
	
	<div class="slideshow">
		<p id="slideshowkopje">Bekijk onze galerij!</p>
		<a href="galerij.php"><img src="plaatjes.jpg" id="mijnPlaatje"></a>
	</div>
	<p> KUTJES </p>
</body>
</html>