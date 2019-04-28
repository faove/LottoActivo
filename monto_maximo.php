<?php



$new_monto9=0;

$varmonto=0;

//Sorteo de las 9am
//echo "monto_max".$monto_max;

if ($horalist==9 && (strcmp($descripcionlist,'LotoActivo')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto9 = $monto_max_9 + $monto;
	
	if ($new_monto9 <= $monto_max){
		
		$update_monto_max9 = "UPDATE ruleta_activa SET monto_max_9=".$new_monto9." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_max9)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las ".$select_sorteo."" .
		 " va por: " .$monto_max_9. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}
//echo "Sorteo". $sorteo[0];


//Sorteo de las 9 am Granjita

if ($horalist==9 && (strcmp($descripcionlist,'Granjita')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_montog9 = $monto_max_g_9 + $monto;
	
	if ($new_montog9<=$monto_max){
		
		$update_monto_maxg9 = "UPDATE ruleta_activa SET monto_max_g_9=".$new_montog9." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_maxg9)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las ".$select_sorteo."" .
		 " va por: " .$monto_max_g_9. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}


// Sorteo de las 10 am
$new_monto10=0;

if ($horalist==10 && (strcmp($descripcionlist,'LotoActivo')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto10 = $monto_max_10 + $monto;
	//echo $new_monto10;
	if ($new_monto10<=$monto_max){
		
		$update_monto_max10 = "UPDATE ruleta_activa SET monto_max_10=".$new_monto10." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max10."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_max10)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;
		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_10. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}

// Sorteo de las 10 am Granjita
$new_monto10=0;

if ($horalist==10 && (strcmp($descripcionlist,'Granjita')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_montog10 = $monto_max_g_10 + $monto;
	//echo $new_monto10;
	if ($new_montog10<=$monto_max){
		
		$update_monto_maxg10 = "UPDATE ruleta_activa SET monto_max_g_10=".$new_montog10." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max10."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_maxg10)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;
		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_g_10. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}

//-------------------------------------------------------------------------------------------------------
//Sorteo de las 11am
$new_monto=0;

if ($horalist==11 && (strcmp($descripcionlist,'LotoActivo')==0)){
	//Sumo el monto y verifico el tope max que es
	
	$new_monto = $monto_max_11 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_max11 = "UPDATE ruleta_activa SET monto_max_11=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_max11)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		
		//no se puede vender mas de $monto_max
		
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_11. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}

//Sorteo de las 11am Granjita
$new_monto=0;

if ($horalist==11 && (strcmp($descripcionlist,'Granjita')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_g_11 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_maxg11 = "UPDATE ruleta_activa SET monto_max_g_11=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_maxg11)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		
		//no se puede vender mas de $monto_max
		
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_g_11. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}
//-----------------------------------------------------------------------------------------------------
//Sorteo de las 12
$new_monto=0;

if ($horalist==12 && (strcmp($descripcionlist,'LotoActivo')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_12 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_max12 = "UPDATE ruleta_activa SET monto_max_12=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_max12)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_12. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		 
		$varmonto=1;
		
	}
}
//Sorteo de las 12 Granjita
$new_monto=0;

if ($horalist==12 && (strcmp($descripcionlist,'Granjita')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_g_12 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_maxg12 = "UPDATE ruleta_activa SET monto_max_g_12=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_maxg12)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		
		//no se puede vender mas de 
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_g_12. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		 
		$varmonto=1;
		
	}
}
//-------------------------------------------------------------------------------------------------------
$new_monto=0;

//Sorteo de las 1
if ($horalist==1 && (strcmp($descripcionlist,'LotoActivo')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_1 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_max1 = "UPDATE ruleta_activa SET monto_max_1=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_max1)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_1. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}
$new_monto=0;

//Sorteo de las 1 Granjita
if ($horalist==1 && (strcmp($descripcionlist,'Granjita')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_g_1 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_maxg1 = "UPDATE ruleta_activa SET monto_max_g_1=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_maxg1)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_g_1. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}

//--------------------------------------------------------------------------------------------------------

$new_monto=0;

//Sorteo de las 3
if ($horalist==3 && (strcmp($descripcionlist,'LotoActivo')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_3 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_max3 = "UPDATE ruleta_activa SET monto_max_3=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_max3)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_3. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}


$new_monto=0;

//Sorteo de las 3 Granjita
if ($horalist==3 && (strcmp($descripcionlist,'Granjita')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_g_3 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_maxg3 = "UPDATE ruleta_activa SET monto_max_g_3=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_maxg3)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de 
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_g_3. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}
//--------------------------------------------------------------------------------------------------------
$new_monto=0;

//Sorteo de las 4
if ($horalist==4 && (strcmp($descripcionlist,'LotoActivo')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_4 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_max4 = "UPDATE ruleta_activa SET monto_max_4=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_max4)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_4. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}

$new_monto=0;

//Sorteo de las 4 Granjita

if ($horalist==4 && (strcmp($descripcionlist,'Granjita')==0)){
	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_g_4 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_maxg4 = "UPDATE ruleta_activa SET monto_max_g_4=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_maxg4)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de 
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_g_4. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}
//--------------------------------------------------------------------------------------------------------
$new_monto=0;

//Sorteo a la 5 pm
if ($horalist==5 && (strcmp($descripcionlist,'LotoActivo')==0)){

	//Sumo el monto y verifico el tope max que es
	
	$new_monto = $monto_max_5 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_max5 = "UPDATE ruleta_activa SET monto_max_5=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_max5)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de 
		echo "El Animalito ".$animalitol." en el sorteo de las ".$select_sorteo."" .
		 " va por: " .$monto_max_5. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}

$new_monto=0;

//Sorteo a la 5 pm Granjita
if ($horalist==5 && (strcmp($descripcionlist,'Granjita')==0)){

	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_g_5 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_maxg5 = "UPDATE ruleta_activa SET monto_max_g_5=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_maxg5)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las ".$select_sorteo."" .
		 " va por: " .$monto_max_g_5. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}

//--------------------------------------------------------------------------------------------------------
$new_monto=0;

//Sorteo de las 6
if ($horalist==6 && (strcmp($descripcionlist,'LotoActivo')==0)){

	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_6 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_max6 = "UPDATE ruleta_activa SET monto_max_6=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_max6)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_6. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}

$new_monto=0;

//Sorteo de las 6 Granjita

if ($horalist==6 && (strcmp($descripcionlist,'Granjita')==0)){

	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_g_6 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_maxg6 = "UPDATE ruleta_activa SET monto_max_g_6=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_maxg6)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_g_6. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}

//--------------------------------------------------------------------------------------------------------
$new_monto=0;

//Sorteo de las 7 LotoActivo

if ($horalist==7 && (strcmp($descripcionlist,'LotoActivo')==0)){


	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_7 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_max7 = "UPDATE ruleta_activa SET monto_max_7=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_max7)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_7. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}

$new_monto=0;

//Sorteo de las 7 Granjita
if ($horalist==7 && (strcmp($descripcionlist,'Granjita')==0)){


	//Sumo el monto y verifico el tope max que es $monto_max
	
	$new_monto = $monto_max_g_7 + $monto;
	
	if ($new_monto<=$monto_max){
		
		$update_monto_maxg7 = "UPDATE ruleta_activa SET monto_max_g_7=".$new_monto." WHERE num_animalito='".$buscar_txt."'"; 
	
		//$update_monto_max = "UPDATE ruleta_activa SET monto_max_9,monto_max_10,monto_max_11,monto_max_12,".
		//"monto_max_1,monto_max_3,monto_max_4,monto_max_5,monto_max_6,monto_max_7serial=".$nuevoserial.",Ticket='".$nuevoticket."' WHERE num_animalito='".$buscar_txt."'"; 
		//echo "\t\n";
		//echo "" .$update_monto_max."\n";
		//echo "\t\n";
		//echo $insert_jug;

			   
		if (mysqli_query($con, $update_monto_maxg7)) {
				
			//echo "Planilla actualizada";
			$varmonto=0;

		} else {
		
			echo "<p><font color=#000080 size=2 face=Arial Narrow>Los update_monto_max no han sido guardados</font></p>";
		}
	}else{
		//no se puede vender mas de $monto_max
		echo "El Animalito ".$animalitol." en el sorteo de las".$select_sorteo."" .
		 " va por: " .$monto_max_g_7. ", al suministrar el monto ".$monto." supera el maximo permitido. ";
		$varmonto=1;
	}
}
?>
