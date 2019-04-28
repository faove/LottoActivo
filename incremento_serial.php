<?php
		

		//Buscar en nuevo_serial si serial 
		//----------------------------------------------------------------------------------

		//--------------------
		
		$strquery_ns = "SELECT serial,fecha FROM jugadas where Serial='".$nuevoserial."' and Flag_imprimir=1";
		//echo $nuevoserial;
		//echo $strquery_ns;

		$result_ns= mysqli_query($con,$strquery_ns);



		if (!$result_ns) {
			$mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensaje .= 'Consulta completa: ' . $strquery_ns;
			die($mensaje);
		
		}else{


			while($row_ns = mysqli_fetch_array($result_ns)) {  
				
				$serial = $row_ns['serial'];
				$nuevoserial = $serial+1;		
				
			}
			
			//Actualiza el serial	
			$update_ns = "UPDATE nuevo_serial SET serial=".$nuevoserial." WHERE id=1"; 

			//echo $update_ns;

					   
			if (mysqli_query($con, $update_ns)) {
					
				//echo "Planilla actualizada";

			} else {
			
				echo "<p><font color=#000080 size=2 face=Arial Narrow>Function incremento serial  php no actualiza</font></p>";
			}
		}
	//-------------------------------------*/
?>
