<?php
//-----------------------------------------------------
//Funcion que se encarga de agregar por primera vez
//los animalitos a la tabla jugadas
//-----------------------------------------------------
if (!is_null($ver)){
	

	
	
		
		$strquery_flag3 = "SELECT Serial,Fecha,Sorteo,Animalito,Num_animalito, ".
						"Monto,Total FROM jugadas where Num_animalito='".$buscar_txt."'";
		
		//echo $strquery_flag3;
		
		$result_flag3= mysqli_query($con,$strquery_flag3);

		if (!$resul_flag3) {
			
			$deboinsertar=0;
			
		}else{
			$deboinsertar=1;
		}	
			
			
			

		
		
		
} // fin del insert
?>
