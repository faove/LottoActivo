<?php

//-----------------------------------------------------
//Funcion que se encarga de sumar el numero de tickets
//-----------------------------------------------------
$num = Array();
//if (!is_null($nuevo)){


	//echo "incrementando el nuevo ticket";
	//----------------------------------------------------------------------------------
	//Buscar en nuevo_serial si serial 
	//----------------------------------------------------------------------------------
	//$_SESSION['count']=1;
	$strquery_ns = "SELECT serial,agencia,fecha,id FROM nuevo_serial where id=1";

	//echo $strquery_ns;

	$result_ns= mysqli_query($con,$strquery_ns);



	if (!$result_ns) {
		$mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
		$mensaje .= 'Consulta completa: ' . $strquery_ns;
		die($mensaje);
	}


	while($row_ns = mysqli_fetch_array($result_ns)) {  
		
		$serial = $row_ns['serial'];
		
		//echo "  flag serial  ".$flagserial;

		$nuevoserial = $serial+1;
		
		
		
		
	}
	

		$nuevoticket=date(ims)+$nuevoserial;
		
		//echo "Se esta generando:".$nuevoticket;
		//echo"<p></p>";
	//}	
			//$nuevoticket = range();
					
			//$update_ns = "UPDATE nuevo_serial SET serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE id=1"; 
			$update_ns = "UPDATE nuevo_serial SET serial=".$nuevoserial." WHERE id=1"; 
			//echo "\t\n";
			//echo "" .$update_ns."\n";
			//echo "\t\n";
			//echo $insert_jug;

						   
			if (mysqli_query($con, $update_ns)) {
					
				//echo "Planilla actualizada";

			} else {
			
				echo "<p><font color=#000080 size=2 face=Arial Narrow>tabla nuevo_serial no ha sido actualizada</font></p>";
			}
			//}

//}		

?>
