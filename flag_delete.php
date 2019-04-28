<?php



	//Format hora actual
	//--echo "hora actual es:".$horactual;
	//$horamasuna = strtotime('+45 minute',strtotime($horactual));
	$horamasuna = date('Y-m-j H:i:s');	
	
	$horamasuna = strtotime('+1 hour',strtotime($horamasuna));
	//$horamasuna = strtotime ( '+10 minute' , $horamasuna ) ;
	$horamasuna=date('H:00:00',$horamasuna);
	//--echo "hora actual mas una:".$horamasuna;
	
	//$horamasuna=date('H:i:s',$horamasuna);
	//echo "hora actual mas una format:".$horamasuna;
	//echo "hora actual mas una:".$horamasuna;
	
	$horamasuna = strtotime('-6 minute',strtotime($horamasuna));
	$hora6min = date('H:i:s',$horamasuna);
	//$hora6min = strtotime('-6 minute',strtotime($horactual));
	//$hora6min = date('H:i:s',$hora6min);
	//--echo $hora6min;
	//echo "\n";
	//--echo "hora actual:".$horactual;
	//--echo "hora 6 minuto:".$hora6min;
	//Verificar si flag_win antes de las 16:00
	/*if ("16:00">$horactual){
		$antes16 
	}*/
	
	if ($horactual>$hora6min){
		//modifica las jugadas flag_delete donde el sorteo esta dentro los 6 minutos 
		/*
		//$strquery_hora = "SELECT Descripcion,Hora,Hora_num FROM ruleta_activa_horas where Hora>'".$hora6min."'";
		$strquery_hora = "SELECT Descripcion,Hora,Hora_num FROM ruleta_activa_horas ";
		//echo $strquery_hora;
		//select TIME(NOW()) as hora; curTime()
		$result_hora= mysqli_query($con,$strquery_hora);

		if (!$result_hora) {
			$mensaje_jug  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensaje_jug .= 'Consulta completa: ' . $strquery_hora;
			die($mensaje_jug);
		}*/

		/*$update_flagd = "UPDATE jugadas SET Flag_delete=TRUE WHERE Flag_imprimir=TRUE";
		//and fecha between '".$fecha."' and '".$nuevafecha."'"; 
		echo "\t\n";
		echo "" .$update_flagd."\n";
		echo "\t\n";
		//echo $insert_jug;
/*
			   
		if (mysqli_query($con, $update_flagd)) {
				
			//echo "Planilla actualizada";

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los datos no han sido actualizados</font></p>";
		}*/
	}else{
		
		/*
		$strquery_resultados = "SELECT id_ruleta_activa,loteria,fecha_result,resultado,Hora_num,Descripcion FROM ruleta_activa_resultado".
	" INNER JOIN ruleta_activa_horas ON ruleta_activa_resultado.id_ruleta_activa=ruleta_activa_horas.id".
	" where fecha_result >= DATE_FORMAT('".$date->format('Y-m-d 00:00:00')."','%Y-%m-%d 00:00:00')";
	*/
		$strquery_jug = "SELECT Ticket,Fecha,Sorteo,Loteria,Flag_imprimir,Flag_delete FROM jugadas ".		
		"where (Flag_imprimir=TRUE and Flag_delete=FALSE)";
		
		//$strquery_jug = "SELECT Ticket,Fecha,Sorteo,Loteria,Flag_imprimir,Flag_delete FROM jugadas ".		
		//"where (Flag_imprimir=TRUE and Flag_delete=FALSE and Fecha >= DATE_FORMAT(NOW(),'%Y-%m-%d 00:00:00'))";
		//echo $strquery_jug;
		$result_jug= mysqli_query($con,$strquery_jug);

		if (!$result_jug) {
			$mensaje_jug  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensaje_jug .= 'Consulta completa: ' . $strquery_jug;
			die($mensaje_jug);
		}
		
		while($row = mysqli_fetch_array($result_jug)) {  
			
			$Ticket = $row['Ticket'];
			$Flag_imprimir = $row['Flag_imprimir'];
			$Flag_delete = $row['Flag_delete'];
			$sorteoj = $row['Sorteo'];
			//echo $sorteoj;
			//echo "\t\n";
			//echo "sorteo:".$sorteoj;
			if ((strcmp(trim($sorteoj),'9')==0) || strcmp(trim($sorteoj),'10')==0 || strcmp(trim($sorteoj),'11')==0){
				$sorteojd="".$sorteoj.":00am";
			}else{
				$sorteojd="".$sorteoj.":00pm";
			}
			//echo "\t\n";
			//echo "sorteojda:".$sorteojd;
			//echo "\t\n";
			//$sorteojd="".$sorteoj.":00";
			
			//$sorteojd = date('g:i',mktime($sorteojd,0,0));strtotime(
			$sorteojd = date('H:i',strtotime($sorteojd));
			/*echo "\t\n";
			echo "horactual:".intval($horactual);
			echo "\t\n";
			echo "sorteojd:".intval($sorteojd);
			echo "\t\n";*/
			//$sorteojd=strtotime($sorteojd);
			//Si la hora del sorteo paso la Flag_delete debe ser true
			if (intval($horactual)>intval($sorteojd)){
				
				$update_flagdelete = "UPDATE jugadas SET Flag_delete=TRUE WHERE Ticket='".$Ticket."' and Flag_imprimir=TRUE and Sorteo='".$sorteoj."'";
				//and fecha between '".$fecha."' and '".$nuevafecha."'"; 
				//echo "\t\n";
				//echo "" .$update_flagdelete."\n";
				//echo "\t\n";
				//echo $insert_jug;

				   
				if (mysqli_query($con, $update_flagdelete)) {
						
					//echo "Planilla actualizada";

				} else {
				
					echo "<p><font color=#000080 size=2 face=Arial Narrow>Los datos no han sido actualizados en Flag_delete</font></p>";
				}
			}	
		}	// fin del while
	}
?>
