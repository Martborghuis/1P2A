<?php
	include('../Includes/dbconnect.php');
?>
<script type="text/javascript" src="../Includes/jquery-1.8.3.min.js"></script>
<script src="../Includes/jquery.elevatezoom.js" type="text/javascript"></script>
		<?php
		
		$sql = "SELECT * FROM `Foto`";
					$results = mysqli_query($con, $sql);
					while($row = mysqli_fetch_array($results)){
					if ($x == 0){
						echo('<img id="zoom_'.$y.'" height="200px" width="400" src="'.$row['foto_locatie'].'" data-zoom-image="'.$row['foto_locatie'].'"/>');
						echo('<script type="text/javascript"> $("#zoom_'.$y.'").elevateZoom({
								scrollZoom : true,
								easing : true,
								cursor: "crosshair",
								tint: "true",
								tintColour: "Black",
								zoomWindowFadeIn: 500,
								zoomWindowFadeOut: 500,
								zoomWindowPosition: 1,
								zoomWindowHeight: 200,
								zoomWindowWidth: 400,
								lensFadeIn: 500,
								lensFadeOut: 500
								});</script>');
						$x ++;
						$y ++;
					}else{
						echo('<img id="zoom_'.$y.'" height="200px" width="400" src="'.$row['foto_locatie'].'" data-zoom-image="'.$row['foto_locatie'].'"/>');
						echo('<script type="text/javascript"> $("#zoom_'.$y.'").elevateZoom({
								scrollZoom : true,
								easing : true,
								cursor: "crosshair",
								tint: "true",
								tintColour: "Black",
								zoomWindowFadeIn: 50,
								zoomWindowFadeOut: 50,
								zoomWindowPosition: 11,
								zoomWindowHeight: 200,
								zoomWindowWidth: 400,
								lensFadeIn: 500,
								lensFadeOut: 500
								});</script>');
						$x = 0;
						$y ++;
					}
					}?>
					

					


