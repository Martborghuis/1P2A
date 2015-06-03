<?php	
	include('../Includes/dbconnect.php');
	$sql = "SELECT * FROM `Foto`";
					$results = mysqli_query($con, $sql);
					$row = mysqli_fetch_array($results);
?>
<script type="text/javascript">
				var plaatjes = [<?php echo '"'.implode('","', $row['foto_locatie']).'"'?>];
				var x = 0;
			function wisselPlaatjes()
			{		
					document.getElementById("mijnPlaatje").src = plaatjes;
					setTimeout("wisselPlaatjes()", 3500);
				}
	</script>