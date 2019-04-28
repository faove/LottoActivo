<?php

	//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9=".$new_monto9." WHERE num_animalito='".$buscar_txt."'"; 
	
	$varfecha=1;
	
	
	$update_monto_maxt = "UPDATE ruleta_activa SET monto_max_9=0,monto_max_g_9=0,monto_max_10=0,monto_max_g_10=0,monto_max_11=0,monto_max_g_11=0,monto_max_12=0,".
	"monto_max_1=0,monto_max_g_1=0,monto_max_3=0,monto_max_g_3=0,monto_max_4=0,monto_max_g_4=0,monto_max_5=0,monto_max_g_5=0,monto_max_6=0,monto_max_g_6=0,monto_max_7=0,monto_max_g_7=0 ";
	
	//WHERE num_animalito='".$buscar_txt."'"; 
	//echo "\t\n";
	//echo "" .$update_monto_max."\n";
	//echo "\t\n";
	//echo $insert_jug;

		   
	if (mysqli_query($con, $update_monto_maxt)) {
			
		//echo "Planilla actualizada";
		$varfecha=0;

	} else {
	
		echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_maxt no han sido guardados</font></p>";
	}
	
	if ($varfecha==0){
		
		$update_ns = "UPDATE nuevo_serial SET fecha='".date('Y-m-d')."' WHERE id=1"; 
		//echo "\t\n";
		//echo "" .$update_ns."\n";
		//echo "\t\n";
		//echo $insert_jug;

				   
		if (mysqli_query($con, $update_ns)) {
				
			//echo "Planilla actualizada";

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>la fecha no ha sido guardada</font></p>";
		}
	}
/*
if (date==9){


}*/
?>
