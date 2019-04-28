<?php
/* Change to the correct path if you copy this example! */
//echo 'hola';
require __DIR__ . '/escpos-php-master/autoload.php';
//echo 'hola';
//require __DIR__ . '/../../autoload.php';
use Mike42\Escpos\Printer;
//use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
/**
 * On Linux, use the usblp module to make your printer available as a device
 * file. This is generally the default behaviour if you don't install any
 * vendor drivers.
 *
 * Once this is done, use a FilePrintConnector to open the device.
 *
 * Troubleshooting: On Debian, you must be in the lp group to access this file.
 * dmesg to see what happens when you plug in your printer to make sure no
 * other drivers are unloading the module.
 */
try {
	//agregar usuario a grupo lp ubuntu
	//$mode=777;
	//chmod('/dev/usb/lp0', intval($mode, 8));
	//chown -R "$USER":www-data /dev/usb/lp0
	//exec('sudo -k');

	//Run sudo without authenticating
	//$output = exec('sudo echo "123"');
	//var_dump($output);
	
	//$output = exec('echo "password" | sudo -S echo "123" 2> /dev/null');
	//var_dump($output);
	
	//chown('/dev/usb/lp0', 'www-data');
	$sorteo_jug = $_POST['sorteo_jug'];
  
  	$monto_jug  = $_POST['monto_jug'];
	
	$total= $_POST['total'];
  	
  	$animalito_jug  = $_POST['animalito_jug'];
  
 	$animalitoletra  = $_POST['animalitoletra'];
 	
	$nuevoserial  = $_POST['nuevoserial'];

	$nuevoticket  = $_POST['nuevoticket'];
	
	$varimprimir  = $_POST['varimprimir'];
	
	$varimprimir=$varimprimir+1;
	
	$connector = new CupsPrintConnector("ZJ-58-2");
    //$connector = new FilePrintConnector("/dev/usb/lp0");
    
    /* Print a "Hello world" receipt" */
    $printer = new Printer($connector);
    //title($printer, "PDF417 code demo\n");

    $printer -> text("     Agencia Zoo\n");
    /*$printer -> text("      Juege x 0414-8242005\n");*/
    $printer -> text("     Ticket: ");
    $printer -> text($nuevoserial);
    $printer -> text("\n");
    $printer -> text("     Serial: " .$nuevoticket. "\n");
    $date = date("d-m-Y H:i:s");
    $printer -> text("    Fecha: " .$date. "\n");
    //$printer -> text("      Lotto Activo!\n");
    
    //_______________________________________________________________________
    // LOTTO ACTIVO
	//_______________________________________________________________________
	
    //$query = "select Serial,Fecha,Sorteo,Loteria,Animalito,Num_animalito,Monto,Total,Flag_imprimir from jugadas where Serial=".$nuevoserial."";
    $query = "select Serial,Fecha,Sorteo,Loteria,Animalito,Num_animalito,Monto,Total,Flag_imprimir from jugadas ".
    "where Serial=".$nuevoserial." ".
    " AND Loteria='LotoActivo' ORDER BY Loteria DESC";
    
    
    $result = mysqli_query($con,$query);
	
	$saldo=0;    

	/*if ($result = $mysqli->query($query)) {

		/* determinar el número de filas del resultado */
		//$row_cnt = $result->num_rows;

		/*printf("Result set has %d rows.\n", $row_cnt);

		/* cerrar el resultset 
		
	}*/
	$par=0;	
	$titulo=0;
	//$linea=18;
	while($row = mysqli_fetch_array($result)) {
		
			$sorteo1=$row['Sorteo'];
			
			$loteria1=$row['Loteria'];
			
			$rest = substr($row['Animalito'], 0,6);
			/*$printer -> text("      ".$sorteo1."AM ".$row['Num_animalito']." ".$rest." ".$row['Monto']."\n");
				
		//}
			$par=$par+1;
			//$linea=$linea+2;
			/*if ($par%2==0){
				$linea=$linea-2;
				$pdf->SetXY(25,$linea);
				$printer -> text("Serial: " .$nuevoticket. "\n");	
				$sdl=1;
				
			}else{
				$pdf->SetXY(1,$linea);
				$sdl=0;
				
			}
			*/
			if (strcmp($loteria1,'LotoActivo')==0 && $titulo==0){
				$printer -> text("      LottoActivo------------\n");
				//$printer -> text(" _ _ _ _ _ _ _ _ _ _ _ _ _ _\n");		
								
				$titulo=1;
			} 
			
			
				if ($par%2==0){
					/*
					if (strcmp ($sorteo1 , '10' )==0 || strcmp ($sorteo1 , '11' )==0){ 
						$printer -> text(" ".$sorteo1." ".$row['Num_animalito']." ".$rest." ".$row['Monto']."\n");
						
						
					}else{*/
						
						$printer -> text("      ".$sorteo1." ".$rest." ".$row['Monto']." ");
						
					/*}		
					*/
				}else{
					
					/*if (strcmp ($sorteo1 , '10' )==0 || strcmp ($sorteo1 , '11' )==0){ 
						$printer -> text("      ".$sorteo1."AM ".$row['Num_animalito']." ".$rest." ".$row['Monto']." ");
						
						
					}else{
						*/
						$printer -> text("".$sorteo1." ".$rest." ".$row['Monto']."\n");
						//$printer -> text("\t");
					/*}
					*/
				}
			$par=$par+1;
			$monto_a = $row['Monto'];
			
			$saldo=$saldo+$monto_a;
			
		} 	

	//_______________________________________________________________________
    // Granjita
	//_______________________________________________________________________
	
	
	$query = "select Serial,Fecha,Sorteo,Loteria,Animalito,Num_animalito,Monto,Total,Flag_imprimir from jugadas ".
    "where Serial=".$nuevoserial." ".
    " AND Loteria='Granjita' ORDER BY Loteria DESC";
    
    
    $result = mysqli_query($con,$query);
	
	$par=0;	
	
	$titulo=0;
	
	while($row = mysqli_fetch_array($result)) {
		
			$sorteo1=$row['Sorteo'];
			$loteria1=$row['Loteria'];			
			$rest = substr($row['Animalito'], 0,7);	
			
			 		
			
			if (strcmp($loteria1,'Granjita')==0 && $titulo==0){
					//$printer -> text("\n");
					$printer -> text("       Granjita---------------\n");
					//$printer -> text("_ _ _ _ _ _ _ _ _ _ _ _ _ _ _\n");
					$titulo=1;
			}
				
			if ($par%2==0){
				
				
					
				$printer -> text("       ".$sorteo1."  ".$rest." ".$row['Monto']." ");
					
				
			}else{
				
				
				$printer -> text("".$sorteo1."  ".$rest." ".$row['Monto']."\n");
				//$printer -> text("\t");	
				
			}
			$par=$par+1;
			$monto_a = $row['Monto'];			
			$saldo=$saldo+$monto_a;
			
		} 	

		
		$result->close();
			$printer -> text("\n");
			$printer -> setTextSize(4, 8);
			$printer -> text("     Total: " .$saldo. "\n");
			$printer -> text("\n");
			$printer -> text("\n");
			
			$printer -> cut();
			/* Close printer */
			$printer -> close();
    
	$UPDATE_for = "UPDATE jugadas SET Flag_imprimir=true,Imprimir=".$varimprimir." WHERE Serial='".$nuevoserial."'";
	
	//$pdf->SetFont('Arial','',6);
	//$pdf->Cell(5,10,''.$UPDATE_for,0,1);
		//echo $UPDATE_for;
		if (mysqli_query($con, $UPDATE_for)) {

			echo "<font color=#0000FF face=Arial Narrow>Guardado ticket: ".$nuevoserial."</font>";
			
		}else{
			
			echo "<font color=#FF0000 face=Arial Narrow>Animalito NO guardado</font>";
			
		} 
		
	//Guardar en la tabla totales de las jugadas
	$insert_totales = "INSERT totales_jugadas (Num_ticket,Serial,Fecha,Total)".
						" values('".$nuevoserial."','".$nuevoticket."',NOW(),'" .$saldo. "')";
	
	
	
		//echo $insert_totales;
		if (mysqli_query($con, $insert_totales)) {

			echo "<font color=#0000FF face=Arial Narrow>Guardado totales: ".$nuevoserial."</font>";
			
		}else{
			
			echo "<font color=#FF0000 face=Arial Narrow>Tabla totales NO guardada</font>";
			
		}
		$nuevoticket=null;
		
} catch (Exception $e) {
    echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
}
