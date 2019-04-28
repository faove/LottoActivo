<?php
//-----------------------------------------------------
//Funcion que se encarga de eliminar por primera vez
//los animalitos a la tabla jugadas
//-----------------------------------------------------
//if (!is_null($check)){
	//isset(

		
		
		/*$insert_jug = "INSERT jugadas (Serial,Fecha,Sorteo,Num_animalito, ".
                        "Monto,Total)".
                        " values('".$nuevoserial."',NOW(),'".$select_sorteo."','".$buscar_txt. "'" .
                        ",'" .$monto. "','" .$total. "')";

		*/
	//if(!empty($_POST['check'])) {
		
		//echo 'check aaaaaaaa	';
if(!empty($_REQUEST['check'])) {
			//echo $check;
			
	//echo 'check aaaaaaaa	';
	foreach ($_REQUEST['check'] as $select_delete)
		{
		//echo "<span><b>".$select_delete."</b></span><br/>";

		 
		$strqueryde = "SELECT Num_ticket,Serial,Fecha,Animalito,Sorteo,Num_animalito,Monto FROM jugadas where"
		. " Num_ticket=" . $select_delete . "";
		
		//echo $strqueryde;
		$resultde= mysqli_query($con,$strqueryde);

		if (!$resultde) {
			$mensajede  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensajede .= 'Consulta completa: ' . $strqueryde;
			die($mensajede);
		}
		while($filade = mysqli_fetch_array($resultde)) { 
		
			//$Num_ticket = $fila['Num_ticket'];
			$sorteo_jugde = $filade['Sorteo'];
			$monto_jugde = $filade['Monto'];
			$animalito_jugde = $filade['Num_animalito'];
			$animalitoletrade = $filade['Animalito'];
			
		}
		//echo "Sorteeeo".$sorteo_jugde;
		//echo "Monto".$monto_jugde;
		//echo "Animalito".$animalito_jugde;
		
		//$monto_jugde distinto de cero
		if ($monto_jugde<>0){
			
			//Para restar debo buscar el monto anterior que tiene
			//---------------------------------------------------
			$campo_monto_max="monto_max_".$sorteo_jugde."";
			
			$strqueryruleta = "SELECT ".$campo_monto_max." as campo1 FROM ruleta_activa where"
			. " num_animalito='".$animalito_jugde."'";
			
			//echo $strqueryruleta;
			
			$resultruleta= mysqli_query($con,$strqueryruleta);

			if (!$resultruleta) {
				$mensajeruleta  = 'Consulta no válida: ' . mysqli_error() . "\n";
				$mensajeruleta .= 'Consulta completa: ' . $strqueryruleta;
				die($mensajeruleta);
			}
			while($filaruleta = mysqli_fetch_array($resultruleta)) { 
			
				//$Num_ticket = $fila['Num_ticket'];
				$monto_a_restar = $filaruleta['campo1'];
				
				
			}
			//---------------------------------------------------
			//echo "monto_a_restar".$monto_a_restar;
			$monto_resta = $monto_jugde - $monto_a_restar;
			//echo "\n";
			//echo "monto_resta".$monto_resta;
			$update_monto_restar = "UPDATE ruleta_activa SET monto_max_".$sorteo_jugde."=".abs($monto_resta)." WHERE num_animalito='".$animalito_jugde."'"; 
			//(echo $update_monto_restar;
		
			//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
			//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
			//echo "\t\n";
			//echo "" .$update_monto_max."\n";
			//echo "\t\n";
			//echo $insert_jug;

				   
			if (mysqli_query($con, $update_monto_restar)) {
					
				//echo "Planilla actualizada";
				

			} else {
			
				echo "<p><font color=#000080 size=2 face=Arial Narrow>Restando monto no han sido guardados</font></p>";
			}
			$delete_for = "DELETE FROM jugadas WHERE Num_ticket=" .
			   "" . $select_delete . "";

			//echo $delete_for;
			
			if (mysqli_query($con, $delete_for)) {

				echo "<font color=#0000FF face=Arial Narrow>Animalito Eliminado: ".$select_delete."</font>";
			
			}else{
			
				echo "<font color=#FF0000 face=Arial Narrow>Animalito NO eliminado</font>";
			
			}
			
		}//fin del if monto distinto cero
	}	
}
	//}// fin del if
	
?>
