<?php
//-----------------------------------------------------
//Funcion que se encarga de agregar por primera vez
//los animalitos a la tabla jugadas
//-----------------------------------------------------
if (!is_null($insert)){
	
	//Variable que indica si debo insertar
	$deboinsertar=0;
	//-----------------------------------------------------
	//Elaborando el serial	
	//-----------------------------------------------------
	//$nuevoserial="".date(Y)."".date(m). "".date(d)."" .date(H). "".date(mi)."";
	
	
	
	if (!empty($monto)){
		
		$deboinsertar=0;
		
	}else{
		echo "Seleccione un monto";
		$deboinsertar=1;
		
	}
	/*if (!empty($animalito)){
		
		$deboinsertar=0;
		
	}else{
		
		echo "Seleccione un Animalito";
		$deboinsertar=1;
		
	}*/
	//------------------------------------------------------
	if ($deboinsertar==0){
		
		//-----------------------------
		//Busco el nombre del animatilo
		//-----------------------------
		$strqueryani = "SELECT animalito FROM ruleta_activa where num_animalito='".$buscar_txt."'";
		//echo $strqueryani;
		$resultani= mysqli_query($con,$strqueryani);

		if (!$resultani) {
			$mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensaje .= 'Consulta completa: ' . $strqueryani;
			die($mensaje);
		}

		
		while($rowani = mysqli_fetch_array($resultani)) {  
			
			$animalitol = $rowani['animalito'];		
			
		}
		
		//-----------------------------
		
		$insert_jug = "INSERT jugadas (Serial,Fecha,Sorteo,Animalito,Nom_animalito, ".
						"Monto,Total)".
						" values('".$nuevoserial."',NOW(),'".$select_sorteo."','".$animalitol."','".$buscar_txt. "'" .
						",'" .$monto. "','" .$total. "')";

		//echo $insert_jug;

					   
			if (mysqli_query($con, $insert_jug)) {
					
				//echo "Planilla actualizada";

			} else {
			
				echo "<p><font color=#000080 size=2 face=Arial Narrow>Los datos han sido guardados</font></p>";
			}

		}// fin del if si debo insertar $deboinsertar=0;
} // fin del insert
?>
