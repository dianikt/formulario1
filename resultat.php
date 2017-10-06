<!DOCTYPE html>
	<html>
		<head>
			<title> Pintar matriz</title>
		</head>
		  <style type="text/css">
		  	td{
		  		width: 25px;
		  		height: 25px;
		  	}
			.fil{
				background-color: blue;
			}
			.col{
				background-color: red;
			}

		</style>
		<body>
			<table>
				<?php  
					$fil =  $_GET["fil"];
				   	$col =  $_GET["col"];	

					echo "filas : $fil <br>";
					echo "columnas: $col <br>";

					for ($x = 0; $x <= $fil+1; $x++) {						
						echo "<tr>"; 		
		    						
		    			for ($y = 0; $y <= $col+1; $y++) {

		    				if($y == 0){
		    					$codigo = chr(64+$x);
								echo "<td>$codigo</td>";
							}

		    				if($x == 0){
								echo "<td>$y</td>";
							}
							else {	
								if(($x+$y) %2 == 0){
									echo "<td class='col'></td>"; 
								}
								else{
									echo "<td class='fil'></td>"; 
								}
		    					
							}
														
						}


						echo "</tr>";


					}				
				
					
				?>
			</table>
		</body>
</html>