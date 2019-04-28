<?php

$strquery_ns="SELECT id_result,id_ruleta_activa,loteria,fecha_result,resultado FROM ruleta_activa_resultado".
	" where fecha_result between '".$fechac."' and '".$nuevafecha."' and id_ruleta_activa =".$horalist." and loteria ='".$descripcionlist."'";

	//echo $strquery_ns;
	
	$result_ns= mysqli_query($con,$strquery_ns);



		if (!$result_ns) {
			$mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensaje .= 'Consulta completa: ' . $strquery_ns;
			die($mensaje);
		
		}else{


			while($row_ns = mysqli_fetch_array($result_ns)) {  
				
				$fecha_result = $row_ns['fecha_result'];
				$id_ruleta_activa = $row_ns['id_ruleta_activa'];
				$loteria = $row_ns['loteria'];
				$resultado = $row_ns['resultado'];
						
				
			}

		}

?>