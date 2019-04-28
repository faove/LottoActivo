<?php
//-----------------------------------------------------
//Funcion que se encarga de agregar por primera vez
//los animalitos a la tabla jugadas
//-----------------------------------------------------
//echo "eeeeeeeeeeeeeeee";

//if (!is_null($insert)){
	//echo 'aqui';
	
	//Variable que indica si debo insertar
	$deboinsertar=0;
	//-----------------------------------------------------
	//Elaborando el serial	
	//-----------------------------------------------------
	//$nuevoserial="".date(Y)."".date(m). "".date(d)."" .date(H). "".date(mi)."";
	
	
	
	if (!empty($monto)){
		
		$varmonto=0;
		
	}else{
		
		echo "Seleccione un monto ";
		$varmonto=1;
		
	}
	
	if ($monto!=0){
		
		$varmonto=0;
		
	}else{
		
		echo "Monto no puede ser cero ";
		$varmonto=1;
		
	}

	if ($varmonto==0){

		//echo "variable monto:".$varmonto;
		
		//echo "varmonot" .$varmonto;
		/*if (!empty($animalito)){
			
			$deboinsertar=0;
			
		}else{
			
			echo "Seleccione un Animalito";
			$deboinsertar=1;
			
		}*/
	
	
		//----------------------------------------------------------------------------------
		//Buscar en jugada si flag_imprimir es 0 si es 1 no hacer nada e incrementar $serial
		//----------------------------------------------------------------------------------
		//$strquery_flag = "SELECT Serial,Sorteo,Flag_imprimir FROM jugadas where (Serial='".$nuevoserial."' and Flag_imprimir=False)";
		
		$strquery_flag3 = "SELECT Serial,Ticket,Sorteo,Flag_imprimir FROM jugadas where Serial='".$nuevoserial."'";
		
		//echo $strquery_flag3;


		
		$result_flag3= mysqli_query($con,$strquery_flag3);

		if (!$resul_flag3) {
			
			$deboinsertar=0;
			
		}else{
			
			$deboinsertar=1;
			
		}	
			//$mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
			//$mensaje .= 'Consulta completa: ' . $strquery_flag;
			//die($mensaje);
			
			//si se mete aqui, significa que serial ya fue usado
			//Colocamos una variable para que no vuelva a insertar otro regitro
			
			//echo "Serial fue usado";
				//----------------------------------------------------------------------------------
				//Debo revisar si en realidad el $serial fue usado
				//----------------------------------------------------------------------------------
				/*$strquery_serialusado = "SELECT Serial,Sorteo,Flag_imprimir FROM jugadas where Serial='".$nuevoserial."'";
				
				echo $strquery_serialusado;
				
				$result_serialusado= mysqli_query($con,$strquery_serialusado);

				if (!$resul_serialusado) {
					//$mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
					//$mensaje .= 'Consulta completa: ' . $strquery_flag;
					//die($mensaje);
					
					//si se mete aqui, significa que serial ya fue usado
					//Colocamos una variable para que no vuelva a insertar otro regitro
					$deboinsertar=0;
				}**/
		//}
		
	//------------------------------------------------------
	/*if ($deboinsertar==0 && $varmonto==0){
		

		// Concatenar numero de animalito

		if ($buscar_txt=='1'){
			$buscar_txt= '0'.$buscar_txt;			
		} 

		if ($buscar_txt=='2'){
			$buscar_txt= '0'.$buscar_txt;
		} 

		//echo $buscar_txt;
		 //$buscar_txt==3 || $buscar_txt==4 || $buscar_txt==5 || $buscar_txt==6 || $buscar_txt==7 || $buscar_txt==8 || $buscar_txt==9){
		

			
		
		}*/	

		//-------------------------------------------------------------------------------------------------------
		//Busco tabla numero serial y ticket si el campo imprimir es 1 entonces no insertar
		//-------------------------------------------------------------------------------------------------------
		$strquerybuscarticket = "SELECT Serial,Ticket,Imprimir FROM jugadas where Ticket='".$nuevoticket."' and Imprimir=1";
		//echo $strquerybuscarticket;

		$resultbuscarticket= mysqli_query($con,$strquerybuscarticket);
		
		if (!$resultbuscarticket)
		    {
		        $mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
				$mensaje .= 'Consulta completa: ' . $strquerybuscarticket;
				die($mensaje);
		    }

		if(mysqli_num_rows($resultbuscarticket) > 0){

		    echo "Ticket ya impreso";
		    
		    $flagserial=False;
		    
		    //echo "nuevoserial:".$nuevoserial;
		    
		    include("num_tickets.php");

		}else{

		    
		

		//-----------------------------
		//Busco el nombre del animatilo
		//-----------------------------
		$strqueryani = "SELECT animalito,monto_max_9,monto_max_10,monto_max_11,monto_max_12, " .
			"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7 FROM ruleta_activa where num_animalito='".$buscar_txt."'";
		echo $strqueryani;
		$resultani= mysqli_query($con,$strqueryani);

		if (!$resultani) {
			$mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensaje .= 'Consulta completa: ' . $strqueryani;
			die($mensaje);
		}

		
		while($rowani = mysqli_fetch_array($resultani)) {  
			
			$animalitol = $rowani['animalito'];		
			$monto_max_9 = $rowani['monto_max_9']
			$monto_max_10 = $rowani['monto_max_10'];		
			$monto_max_11 = $rowani['monto_max_11'];		
			$monto_max_12 = $rowani['monto_max_12'];		
			$monto_max_1 = $rowani['monto_max_1'];		
			$monto_max_3 = $rowani['monto_max_3'];		
			$monto_max_4 = $rowani['monto_max_4'];		
			$monto_max_5 = $rowani['monto_max_5'];		
			$monto_max_6 = $rowani['monto_max_6'];		
			$monto_max_7 = $rowani['monto_max_7'];		
			
			
		}
		//echo $sorteo;
		//if ($mon){
		/*	$update_monto_max = "UPDATE ruleta_activa SET serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		
			//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
			//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
			//echo "\t\n";
			echo "" .$update_ns."\n";
			//echo "\t\n";
			//echo $insert_jug;

				   
			if (mysqli_query($con, $update_monto_max)) {
					
				//echo "Planilla actualizada";

			} else {
			
				echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
			}
		//}*/
		
		//--------antes por 30--------------------------------------------------------------
		//si por 100 ganabas 3000
		//
		$pagar=$monto*30;

		$insert_jug = "INSERT INTO jugadas (Serial,Ticket,Fecha,Sorteo,Animalito,Num_animalito, ".
						"Monto,Total,Pagar,Pagado,Cant_jugadas,Imprimir,Flag_imprimir)".
						" values('".$nuevoserial."','".$nuevoticket."',NOW(),'".$select_sorteo."','".$animalitol."','".$buscar_txt. "','" .$monto. "','" .$total. "'," .$pagar. ",'N',0,0,0)";
		//printf("%s\n\t");
		//echo $insert_jug;

					   
			if (mysqli_query($con, $insert_jug)) {
					
				//echo "Planilla actualizada";

			} else {
			
				echo "<p><font color=#000080 size=2 face=Arial Narrow>Los datos no han sido INSERTADOS</font></p>";
			}

		//}// fin del if si debo insertar $deboinsertar=0;
		} // fin del else ticket ha sido impreso
	}//$varmontoes = a 1
?>
