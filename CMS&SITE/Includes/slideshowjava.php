<script type="text/javascript">
				var plaatjes = ["../images/plaatje1.jpg", "../images/plaatje2.jpg", "../images/plaatje3.jpg","../images/plaatje4.jpg","../images/plaatje5.jpg"];
				var x = 0;
			function wisselPlaatjes()
			{		
				if (x < plaatjes.length - 1) 
				{
					x++;		
				}
				else 
				{		
					x = 0;
				}
					document.getElementById("mijnPlaatje").src =  plaatjes[x];
					setTimeout("wisselPlaatjes()", 3500);
				}
	</script>