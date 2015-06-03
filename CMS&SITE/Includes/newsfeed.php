<?php
	include('dbconnect.php');
?>

<div class="newsfeed">
		<p id="kopjenieuws">Nieuws</p>
		<?php
		$sql = "SELECT * FROM `Pagina` WHERE `pagina_type` = 1";
					$results = mysqli_query($con, $sql);
					while($row = mysqli_fetch_array($results)){
						echo('<div id="new1">');
						echo("<h3>".$row['pagina_naam']."</h3>");
						echo($row['pagina_inhoud']."<br>");
						echo('</div>');
					}
		?>
			<button class="vorige">Vorige</button>
			<button class="volgende">Volgende</button>
		</div>