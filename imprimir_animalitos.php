<?php
//-----------------------------------------------------
//Funcion que se encarga de imprimir el ticket
//-----------------------------------------------------
if (!is_null($imprimirdirecto)){
	//-----------------------------------------------------
	//Funcion que se encarga emitir el ticket directamente
	//-----------------------------------------------------
	include("imprimirdirecto.php");
	//Incremento el serial
	include("incremento_serial.php");
	
	//Variable que indica si debo insertar
	//$deboimprimir=0;
	
	//Var imprimir suma el siguiente serial de control
	//$varimprimir = $varimprimir+1;
	//-----------------------------------------------------
	//Elaborando el serial	
	//-----------------------------------------------------
	//$nuevoserial="".date(Y)."".date(m). "".date(d)."" .date(H). "".date(mi)."" .$varimprimir. "";
	//----------------------------------------------------------------------------------
}		


	//-------------------------------------*/
?>
