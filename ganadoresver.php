<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>SGA -ganadores-</title>
		
		<meta name="author" content="falvarez" />
		<link rel="shortcut icon" href="images/if_roulette_icons_73218.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.css">
  		<link rel="stylesheet" href="css/jquery-ui.min.css">  	
  		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  		<script type="text/javascript" src="js/jquery-ui.js"></script>
  		
  		<script>
		  $( function() {
		    $("#txtfecha").datepicker({
		    	dateFormat: "yy-mm-dd"
		    });
		  } );
		</script>


		<script type="text/javascript">
		function validateForm() {
			//var e = document.getElementById("loteria");
			//alert (e);


		    var check = document.forms["myForm"]["loteria"].value;
		    if (check == "") {
			alert("Indique la loteria y hora del jugada");
			return false;
		    }

		    var x = document.forms["myForm"]["monto"].value;
		    if (x == "") {
			alert("Suministre un Monto Valido");
			return false;
		    }

		    var y = document.forms["myForm"]["numero"].value;
		    if (y == "") {
			alert("Suministre un Numero Valido");
			return false;
		    }
		    
		}
		</script>
		<script type="text/javascript">
			// Solo permite ingresar numeros.
			function soloNumeros(e){
				var key = window.Event ? e.which : e.keyCode
				if(key == 13)
				{
				    alert(document.getElementById("monto").value);
				    document.getElementById("sel2").value = document.getElementById("monto").value;
				}
				return (key >= 48 && key <= 57)
			}
		</script>
		<script>
			function funcion_agregar() {
				var sel1 = document.getElementById("sel1");
				var selectedValue = sel1.options[sel1.selectedIndex].value;
				document.getElementById("monto").focus();	
				    //alert(selectedValue);
				//alert 'heelo';
			    //document.getElementById("monto").value = selectedValue;
			}
		</script>

		<script>
		// Funcion para limitar el numero de caracteres de un textarea o input
		// Tiene que recibir el evento, valor y número máximo de caracteres
		function limitar(e, contenido, caracteres)
		{
		    // obtenemos la tecla pulsada
		    var unicode=e.keyCode? e.keyCode : e.charCode;
	 
		    // Permitimos las siguientes teclas:
		    // 8 backspace
		    // 46 suprimir
		    // 13 enter
		    // 9 tabulador
		    // 37 izquierda
		    // 39 derecha
		    // 38 subir
		    // 40 bajar
		    if(unicode==8 || unicode==46 || unicode==13 || unicode==9 || unicode==37 || unicode==39 || unicode==38 || unicode==40)
		        return true;
	 
		    // Si ha superado el limite de caracteres devolvemos false
		    if(contenido.length>=caracteres)
		        return false;
	 
		    return true;
		}
    		</script>
    		<script>
    		function contarSeleccionados()
			{
			  var sel=0;
			  if (document.getElementById('cbox10').checked)
			  {
				sel=1;
			  }
			  if (document.getElementById('cbox11').checked)
			  {
				sel=1;
			  }
			  if (document.getElementById('cbox12').checked)
			  {
				sel=1;
			  }
			  if (document.getElementById('cbox1').checked)
			  {
				sel=1;
			  }
			  if (document.getElementById('cbox4').checked)
			  {
				sel=1;
			  }
			  if (document.getElementById('cbox5').checked)
			  {
				sel=1;
			  }
			  if (document.getElementById('cbox6').checked)
			  {
				sel=1;
			  }
			  if (document.getElementById('cbox7').checked)
			  {
				sel=1;
			  }
			  if (sel==1){				  
				alert('Usted debe seleccionar un sorteo');
			  }
			}
			</script>
			<script type="text/javascript" src="animalitos.js"></script>
			<script>
			/* 
			* Parametros mandatorios 
			*/ 
			var seconds = 1; // el tiempo en que se refresca 
			var divid = "refrescar_entrenos"; // el div que quieres actualizar! 
			var url = "web/salas/sala_entrenos.php"; // el archivo que ira en el div 

			function refreshdiv(){ 

				// The XMLHttpRequest object 

				var xmlHttp; 
				try{ 
					xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari 
				} 
				catch (e){ 
					try{ 
						xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer 
					} 
					catch (e){ 
						try{ 
							xmlHttp=new ActiveXObject("Microsoft.XMLHTTP"); 
						} 
						catch (e){ 
							alert("Tu explorador no soporta AJAX."); 
							return false; 
						} 
					} 
				} 

				// Timestamp for preventing IE caching the GET request 
				var timestamp = parseInt(new Date().getTime().toString().substring(0, 10)); 
				var nocacheurl = url+"?t="+timestamp; 

				// The code... 

				xmlHttp.onreadystatechange=function(){ 
					if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){ 
						document.getElementById(divid).innerHTML=xmlHttp.responseText; 
						setTimeout('refreshdiv()',seconds*1000); 
					} 
				} 
				xmlHttp.open("GET",nocacheurl,true); 
				xmlHttp.send(null); 
			} 

			// Empieza la función de refrescar 

			window.onload = function(){ 
				refreshdiv(); // corremos inmediatamente la funcion 
			} 
	</script>		
	</head>
	<body onLoad="asignaVariables();">
	<div class="container-fluid">
	  <h1>Estadisticas y Ganadores</h1>
	  <p>Suministre el numero ganador para ver tickes premiados</p>
	  
	  <form name="myForm" action="ganadores.php" onsubmit="return validateForm()" method="post">
		  
		<?php
		$buscar_txt	= $_REQUEST['buscar_txt'];
		$nuevoserial = $_REQUEST['serial'];
		$varimprimir = $_REQUEST['varimprimir'];
		$fecha = $_REQUEST['txtfecha'];
		$animalito = $_REQUEST['input_2'];
		$animal = $_REQUEST['animal'];
		$sorteo = $_REQUEST['sorteo'];
		$monto = $_REQUEST['monto'];
		$total 	= $_REQUEST['total'];
		$ver = $_REQUEST['ver'];
		$ver_resul_hora = $_REQUEST['ver_resul_hora'];
		$vertodo = $_REQUEST['vertodo'];
		$check = $_REQUEST['check'];
		
		
		echo "ver resul".$ver_resul_hora;
		
		include("conexion.php");
		//echo "Conexion".$con."";
		
		//Seleccion de loteria el sorteo
		if(!empty($_POST['sorteo'])) {
			//echo $sorteo;
			foreach ($_REQUEST['sorteo'] as $select_sorteo)
			{
				//echo "<span><b>".$select_sorteo."</b></span><br/>";
				//Seleccion de animalito
				if(!empty($_POST['buscar_txt'])) {
					//foreach ($_REQUEST['animalito'] as $select_animalito)
					//{
						//echo "<span><b>".$buscar_txt."</b></span><br/>";
						//-include("ver_animalitos.php");
					//}
				}else { 
					echo "<span>Por favor seleccione un Animalito.</span><br/>";
				}
			}
		}else { 
			echo "<span>Por favor seleccione un <br>Sorteo.</span><br/>";
		}
		
		
		?>
		
		
		
	  <div class="row">
	    <div class="col-sm-4" style="background-color:lavender;">
		<div class="form-group-sm">
			<label for="serial-sm"></label>
			<table class="table">
    <thead>
      <tr>
        
        
      </tr>
    </thead>
    <tbody>
      <?php
/*<th>Sorteo</th> 3 lineas arriba
	$strquery_hora = "SELECT Descripcion,Hora FROM ruleta_activa_horas";
	//echo $strquery_hora;
	$result_hora= mysqli_query($con,$strquery_hora);

	if (!$result_hora) {
	    $mensaje_jug  = 'Consulta no válida: ' . mysqli_error() . "\n";
	    $mensaje_jug .= 'Consulta completa: ' . $strquery_hora;
	    die($mensaje_jug);
	}*/
?>    
      <tr class="success">
        <td><div class="success">
			
			
			
<?php 
	while($roww = mysqli_fetch_array($result_hora)) { 
		$descripcion = $roww['Descripcion'];			
		$hora = $roww['Hora'];
		//<select class=form-control multiple name="sorteo[]" style=" font-size:14px; font-family:Verdana, Arial, Helvetica, sans-serif;width:300px; height:160px">
		//<label>
		//echo "<option value=".$hora." select>".$sorteo[0]."</option>";;	
		if ($sorteo[0] == $hora) {		
					
			//echo "<option value=".$hora." select>".$hora."</option>";
		
		}else{
			//echo "<option value=".$hora.">".$descripcion."</option>";
		}
		
	}		
		
?>		

    	</label>
  	</div></td>
        
      </tr>
        <tr class="Warning">
        <td><div class="Warning">
			<label>
			  
          	</label>
		</div>
		</td>
        
      </tr>
    </tbody>
  </table>

	
		    
		    
			
		</div>
	    </div>
	
    <div class="col-sm-4" style="background-color:lavenderblush;">

<table class="table">
    <thead>
      <tr>
        <!--<th>Numeros</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
			
			<div id="demo" style="width:269px; height:24px">
				<div id="demoDer"  style="width: 194px; height: 24px">
				  <div align="left">
					<input name="buscar_txt" type="text" class="form-control" id="input_2"
						onfocus="if(document.getElementById('lista').childNodes[0]!=null && this.value!='') { filtraLista(this.value); formateaLista(this.value); 
							reiniciaSeleccion(); document.getElementById('lista').style.display='block'; }"
						onblur="if(v==1) document.getElementById('lista').style.display='none';" 							
						onkeyup="if(navegaTeclado(event)==1) {
							clearTimeout(ultimoIdentificador); 
							ultimoIdentificador=setTimeout('rellenaLista()', 1000); }" 
							size="100" 
							style="background-color: #E5E5E5;"
							onclick="clickLista(this.value)" 
							style="font-size: 20; "							
							onKeyPress="return soloNumeros(event) "
							autocomplete="off">
				  </div>
				  <div id="lista" onmouseout="v=1;" onmouseover="v=0;" style="position: absolute; left: 76px; top: 25px"></div>
				</div>      
				<div class="mensaje" id="error"></div>
			  </div>
		<?php 
		  //include("select_animalitos.php");onblur="if(v==1) document.getElementById('lista').style.display='none';" 
		?>
		-->
		</td>
		<tr>

		<td>
			Fecha:<input type="text" name="txtfecha" id="txtfecha" value="<?php echo date('Y-m-d'); ?>"/>	
		</td>
		</tr>
      </tr>
    </tbody>
  </table>
	</div>
	
    <div class="col-sm-4" style="background-color:lavender;">

	<label for="monto-sm"></label>
    <input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
	<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
	<input type="HIDDEN" value="<?php echo $total;?>" name="total">
	<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
	<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
	<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
	<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">
	<input type="submit"  class="btn btn-info" value="Ver" name="ver">
	</form>
	<!--
	<form method="POST" action="ganadores.php">
		<input type="HIDDEN" value="<?php //echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php //echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php //echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php //echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php //echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php //echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php //echo $varimprimir;?>" name="varimprimir">							 -->
		<input type="submit"  class="btn btn-info" value="Total por Hora" name="ver_resul_hora">                       
    </form>
    
	<form method="POST" action="menu_principal.php">
		
		<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">							 
		<input type="submit"  class="btn btn-info" value="Cerrar">                       
    </form>	
    </div>
    
  </div>

<div class="row">
    <div class="col-sm-2" style="background-color:lavender;">

    </div>
    <div class="col-sm-10" style="background-color:powderblue;">
	

<?php

//echo "fecha:".$fecha."nueva fecha:";

//$cls_date = new DateTime($fecha);
//echo $cls_date->format('Y-m-d');
//echo date_format($fecha, 'Y-m-d H:i:s');



/*if (!is_null($vertodo)){
		$strquery_jug = "SELECT Num_ticket,Serial,Fecha,Animalito,Sorteo,Num_animalito,Monto,Pagar,Pagado FROM jugadas".
	" where (Flag_imprimir=TRUE and Fecha >= '".$fecha."') order by Fecha desc";
	//"Fecha >= ".$cls_date.")";
	//"Fecha >= DATE_FORMAT('".$cls_date."','%Y-%m-%d 00:00:00'))";
	$ejecutar=1;
}*/
if (!is_null($ver_resul_hora)){
	//echo "aqui";
		
	$nuevafecha = strtotime ('+1 day',strtotime($fecha));
	
	$nuevafecha = date('Y-m-d',$nuevafecha);
	
	//echo $strquery_jugl;
 
	
	//echo $strquery_jugl;

	/*$strquery_jugl = "SELECT Num_ticket,Serial,Fecha,Animalito,Sorteo,Num_animalito,Monto,Pagar,Pagado FROM jugadas".
	" where (Num_animalito='".$buscar_txt."' and Flag_imprimir=TRUE and ".	
	"Fecha >= DATE_FORMAT('".$cls_date."','%Y-%m-%d 00:00:00'))";*/
	//echo "aqui".$strquery_jug;
	//$ejecutar=1;
	
	//"Fecha >= ".$cls_date.")";
?>
<table class="table">
    <thead>
      <tr>
		<th>Fecha</th>
        <th>Sorteo</th>  
        <th>Loteria</th>      
        <th>Monto</th>     
        </tr>
    </thead>
    <tbody>
<?php

	$total=0;
	
	$lopagado=0;
	
	$ganancia=0;
	
	//$fila = mysql_fetch_assoc($result_jug); 
	
	//$monto_total = $fila['value_sum'];	
	//echo $monto_total;
	$sum=0;
	$totalR=0;
	
	
	function resultadoloteria($conn,$sorteonum,$loteriag,$fecha,$nuevafecha){
			
		//include("conexion.php");
		// a las 3
		$strquery_jugl3 = "SELECT Ticket,Serial,Fecha,Animalito,Sorteo,Loteria,Num_animalito,".
		"sum(Monto) as montototal,Pagar,Pagado,Flag_win ".		
		" FROM jugadas where (Loteria='".$loteriag."' and Sorteo='".$sorteonum."' and Flag_imprimir=TRUE and Fecha between '".$fecha."' and '".$nuevafecha."' ) order by Sorteo asc";
		
		
		//echo " Conexion".$con;
		$result_jugl3= mysqli_query($conn,$strquery_jugl3);
		//echo $strquery_jugl;
		if (!$result_jugl3) {
			$mensaje_jugl3  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensaje_jugl3 .= 'Consulta completa: ' . $strquery_jugl3;
			die($mensaje_jugl3);
		}
		
		while($filal = mysqli_fetch_array($result_jugl3)) { 
			
			$fechas = $filal['Fecha'];
			$loteria = $filal['Loteria'];
			$sorteo_jug = $filal['Sorteo'];
			$monto_jug3 = $filal['montototal'];
			
			echo "<td>";
			echo "" .$fechas. "";
			echo "</td>";
			echo "<td>";				
			echo "" .$sorteo_jug. "";
			echo "</td>";
			echo "<td>";
			echo "" .$loteria. "";
			echo "</td>";
			echo "<td>";
			echo "" .$monto_jug3. "";
			echo "</td>";	
			echo "</tr>";
			
		
		}
	}
	resultadoloteria($con,'9','LotoActivo',$fecha,$nuevafecha);
	resultadoloteria($con,'10','LotoActivo',$fecha,$nuevafecha);
	resultadoloteria($con,'11','LotoActivo',$fecha,$nuevafecha);
	resultadoloteria($con,'12','LotoActivo',$fecha,$nuevafecha);
	resultadoloteria($con,'1','LotoActivo',$fecha,$nuevafecha);
	resultadoloteria($con,'3','LotoActivo',$fecha,$nuevafecha);
	resultadoloteria($con,'4','LotoActivo',$fecha,$nuevafecha);
	resultadoloteria($con,'5','LotoActivo',$fecha,$nuevafecha);
	resultadoloteria($con,'6','LotoActivo',$fecha,$nuevafecha);
	resultadoloteria($con,'7','LotoActivo',$fecha,$nuevafecha);
	
	resultadoloteria($con,'9','Granjita',$fecha,$nuevafecha);
	resultadoloteria($con,'10','Granjita',$fecha,$nuevafecha);
	resultadoloteria($con,'11','Granjita',$fecha,$nuevafecha);
	resultadoloteria($con,'12','Granjita',$fecha,$nuevafecha);
	resultadoloteria($con,'1','Granjita',$fecha,$nuevafecha);
	resultadoloteria($con,'3','Granjita',$fecha,$nuevafecha);
	resultadoloteria($con,'4','Granjita',$fecha,$nuevafecha);
	resultadoloteria($con,'5','Granjita',$fecha,$nuevafecha);
	resultadoloteria($con,'6','Granjita',$fecha,$nuevafecha);
	resultadoloteria($con,'7','Granjita',$fecha,$nuevafecha);
	
	/*$strqueryruleta="select Descripcion, Hora_num from ruleta_activa_horas";
	$result_jugruleta= mysqli_query($con,$strqueryruleta);

	if (!$result_jugruleta) {
	    $mensaje_jugl  = 'Consulta no válida: ' . mysqli_error() . "\n";
	    $mensaje_jugl .= 'Consulta completa: ' . $strqueryruleta;
	    die($mensaje_jugl);
	}
	
	while($filaruleta = mysqli_fetch_array($result_jugruleta)) { 
	
	$Hora_num = $filaruleta['Hora_num'];
	if ($Hora_num =='9'){
		
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		echo "" .$sorteo_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$sum9. "";
		echo "</td>";	
		echo "</tr>";
		
	}
	if ($Hora_num=='10'){
		
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		echo "" .$sorteo_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$sum10. "";
		echo "</td>";	
		echo "</tr>";
		
	}
	
	if ($Hora_num=='11'){
		
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		echo "" .$sorteo_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$sum11. "";
		echo "</td>";	
		echo "</tr>";
		
	}
	
	if ($Hora_num=='12'){
		
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		echo "" .$sorteo_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$sum12. "";
		echo "</td>";	
		echo "</tr>";
		
	}
	
	if ($Hora_num=='1'){
		
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		echo "" .$sorteo_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$sum1. "";
		echo "</td>";	
		echo "</tr>";
		
	}
	
	if ($Hora_num=='3'){
		
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		echo "" .$sorteo_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$sum3. "";
		echo "</td>";	
		echo "</tr>";
		
	}
	
	if ($Hora_num=='4'){
		
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		echo "" .$sorteo_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$sum4. "";
		echo "</td>";	
		echo "</tr>";
		
	}
	
	if ($Hora_num=='5'){
		
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		echo "" .$sorteo_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$sum5. "";
		echo "</td>";	
		echo "</tr>";
		
	}
	
	if ($Hora_num=='6'){
		
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		echo "" .$sorteo_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$sum6. "";
		echo "</td>";	
		echo "</tr>";
		
	}
	
	if ($Hora_num=='7'){
		
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		echo "" .$sorteo_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$sum7. "";
		echo "</td>";	
		echo "</tr>";
		
	}
}*/
	echo "<td><h4>";
		echo "Total Jugado:";
		echo "</h4></td>";		
		
		
		echo "<td><h4>";
		echo "" .$total. "";
		echo "</h4></td>";		
		echo "</tr>";
}
	
if (!is_null($ver)){
	//echo "aqui";
	if (empty($buscar_txt)){
		
		$nuevafecha = strtotime ('+1 day',strtotime($fecha));
		
		$nuevafecha = date('Y-m-d',$nuevafecha);
		
		$strquery_jug = "SELECT Ticket,Serial,Num_ticket,Fecha,Animalito,Sorteo,Loteria,Num_animalito,Monto,Pagar,Pagado,Flag_win ".		
		" FROM jugadas where (Flag_imprimir=TRUE and Fecha between '".$fecha."' and '".$nuevafecha."' ) order by Fecha desc";
		/*$strquery_jug = "SELECT Ticket,Serial,Fecha,Animalito,Sorteo,Num_animalito,Monto,Pagar,Pagado, ".
		"CASE ".		
		" WHEN Fecha = '".$fecha."' THEN 'IGUAL'".
		" ELSE 'MAYOR'".
		" END as es".
		" FROM jugadas where Flag_imprimir=TRUE  order by Fecha desc";
	//" FROM jugadas where (Flag_imprimir=TRUE and Fecha >= DATE_FORMAT('".$fecha."','%Y-%m-%d 00:00:00')) order by Fecha desc";
		/*$strquery_jug = "SELECT Ticket,Serial,Fecha,Animalito,Sorteo,Num_animalito,Monto,Pagar,Pagado, ".
		"CASE ".
		" WHEN Fecha < '".$fecha."' THEN 'MENOR'".
		" WHEN Fecha = '".$fecha."' THEN 'IGUAL'".
		" ELSE 'MAYOR'".
		" END as 'es'".
		" FROM jugadas where Flag_imprimir=TRUE  order by Fecha desc"; fecha between '03/04/2017' and '07/04/2017'*/
    
	}else{
		$strquery_jug = "SELECT Ticket,Serial,Num_ticket,Fecha,Animalito,Sorteo,Loteria,Num_animalito,Monto,Pagar,Pagado,Flag_win FROM jugadas" .
		" where (Num_animalito='".$buscar_txt."' and Flag_imprimir=TRUE and Fecha == '".$fecha."') order by Fecha desc";
	
	}
	//echo $strquery_jug;

	/*$strquery_jug = "SELECT Num_ticket,Serial,Fecha,Animalito,Sorteo,Num_animalito,Monto,Pagar,Pagado FROM jugadas".
	" where (Num_animalito='".$buscar_txt."' and Flag_imprimir=TRUE and ".	
	"Fecha >= DATE_FORMAT('".$cls_date."','%Y-%m-%d 00:00:00'))";*/
	//echo "aqui".$strquery_jug;
	$ejecutar=1;
	
	//"Fecha >= ".$cls_date.")";
}
if (!is_null($ejecutar)){	
	//echo $strquery_jug;
	$result_jug= mysqli_query($con,$strquery_jug);

	if (!$result_jug) {
	    $mensaje_jug  = 'Consulta no válida: ' . mysqli_error() . "\n";
	    $mensaje_jug .= 'Consulta completa: ' . $strquery_jug;
	    die($mensaje_jug);
	}
?>

<table class="table">
    <thead>
      <tr>
		<th>Ticket</th>  
		<th>Serial</th>
		<th>Fecha</th>
        <th>Sorteo</th>  
        <th>Loteria</th>      
        <th>Animalito</th>
        <th>Numero</th> 
        <th>Monto</th>     
        <th>Pagar</th> 
        <th>Pagado</th> 
      </tr>
    </thead>
    <tbody>
<?php

	$total=0;
	
	$lopagado=0;
	
	$ganancia=0;
	
	while($fila = mysqli_fetch_array($result_jug)) { 
		
		$estado = $fila['es'];
		$ticket = $fila['Ticket'];
		$serial = $fila['Serial'];
		$fechas = $fila['Fecha'];
		$Num_ticket = $fila['Num_ticket'];
		$sorteo_jug = $fila['Sorteo'];
		$loteria = $fila['Loteria'];
		$monto_jug = $fila['Monto'];
		$animalito_jug = $fila['Num_animalito']; 
		$animalitoletra = $fila['Animalito'];
		$pagar = $fila['Pagar'];
		$pagado = $fila['Pagado'];
		$flag_win = $fila['Flag_win'];
		
		if ($pagado=='Y'){
			$lopagado=$lopagado+$pagar;
		}
		//echo "<tr class=info";
		//echo "<tr class=info>"; style=background-color:red;
		
		if ($flag_win=='1'){
			//echo $flag_win;
			echo "<tr class=danger>";
		}else{
			echo "<tr class=info>";
		}	//*/
		echo "<td>";
		echo "" .$ticket. "";
		echo "</td>";
		echo "<td>";
		echo "" .$serial. "";
		echo "</td>";
		echo "<td>";
		echo "" .$fechas. "";
		echo "</td>";
        echo "<td>";				
		//echo "<input type=checkbox>" .$sorteo_jug. " " .$animalito_jug. " " .$monto_jug. ""; Opciones en eliminar
		//echo "<input type=checkbox name=check[] id=check[]  value="echo $Num_ticket;">";
		//echo "<input type=checkbox name=check[] id=check[]  value=".$Num_ticket.">";
		if (($sorteo_jug==10) || ($sorteo_jug==11)){
			echo "" .$sorteo_jug. " ";
		}else{
			echo "" .$sorteo_jug. " ";
		}	
		echo "</td>";
		echo "<td>";
		echo "" .$loteria. "";
		echo "</td>";
		echo "<td>";
		echo "" .$animalitoletra. "";
		echo "</td>";
		echo "<td>";
		echo "" .$animalito_jug. "";
		echo "</td>";	
		echo "<td>";
		echo "" .$monto_jug. "";
		echo "</td>";	
		echo "<td>";
		echo "" .$pagar. "";
		echo "</td>";
		echo "<td>";
		echo "" .$pagado. "";
		echo "</td>";
		echo "</tr>";
		$total=$total+$monto_jug;
	}
		echo "<tr>";
		echo "<td>";
		echo "";
		echo "</td>";
		
		echo "<td><h4>";
		echo "Total Jugado:";
		echo "</h4></td>";		
		
		
		echo "<td><h4>";
		echo "" .$total. "";
		echo "</h4></td>";		
		echo "</tr>";
		$strquery_por = "SELECT porcentaje_pagar FROM nuevo_serial where id='1'";

		//echo $strquery_por;

		$result_por= mysqli_query($con,$strquery_por);



		if (!$result_por) {
			$mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensaje .= 'Consulta completa: ' . $strquery_por;
			die($mensaje);
		}

		while($row_por = mysqli_fetch_array($result_por)) {  
	
			$porcentaje_pagar = $row_por['porcentaje_pagar'];
			
	
		}	
				
		
		$porcentaje_pagart=$porcentaje_pagar*$total;
		
		
		echo "<td><h4>";
		echo "Porcentaje a pagar:";
		echo "</h4></td>";		
		
		
		echo "<td><h4>";
		echo "" .$porcentaje_pagart. "";
		echo "</h4></td>";		
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>";
		echo "";
		echo "</td>";
		//$pagar=$total*30;
		$ganancia=$total-$porcentaje_pagart;
		echo "<td><h4>";
		echo "Ganancia sin restar  los ganadores:";
		echo "</h4></td>";		
		$gananciasinrestar=$ganancia;
		
		echo "<td><h4>";		
		echo "" .$gananciasinrestar. "";
		echo "</h4></td>";		
		echo "</tr>";
		
		//Aqui vemos el estado de cuenta si hubo ganancia o perdidas
		$ganancia =$ganancia-$lopagado;
		if ($ganancia>=0){
			
			echo "<td><h4>";
			echo "Ganancia:";
			echo "</h4></td>";
			echo "<td><h4>";
			$perdida=0;
			echo "" .$ganancia. "";
			echo "</h4></td>";		
			echo "</tr>";
			
		}else{
			echo "<td><h4>";
			echo "Perdida:";
			echo "</h4></td>";		
			$perdida=$ganancia;
			$ganancia=0;
			echo "<td><h4>";		
			echo "" .$perdida. "";
			echo "</h4></td>";		
			echo "</tr>";
		}
		/*
		 * 
		 * $nuevafecha = strtotime ('+1 day',strtotime($fecha));
		
			$nuevafecha = date('Y-m-d',$nuevafecha);
			
			$strquery_jug = "SELECT Ticket,Serial,Fecha,Animalito,Sorteo,Num_animalito,Monto,Pagar,Pagado ".		
			" FROM jugadas where (Flag_imprimir=TRUE and Fecha between '".$fecha."' and '".$nuevafecha."' )
		 * 
		 * */
		 
		$strquery_tgp = "SELECT fecha,porcentaje,ganancias,perdida FROM total_ganancia_perdida where fecha between '".$fecha."' and '".$nuevafecha."'";

		//echo $strquery_tgp;

		$result_tgp = mysqli_query($con,$strquery_tgp);

		if (!$result_tgp) {
			$mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensaje .= 'Consulta completa: ' . $strquery_tgp;
			die($mensaje);
		}

		while($row_tgp = mysqli_fetch_array($result_tgp)) {  
	
			$fecha_tgp = $row_tgp['fecha'];
			
	
		}
		
		
		echo "fecha tgp:".$fecha_tgp;
		
		if (!isset($fecha_tgp)){
			
			
			//si la fecha no existe se debe tomar el valor actual NOW()
			
			$insert_tgp = "INSERT INTO total_ganancia_perdida (fecha,totaljugado,porcentaje,gananciasinrestar,ganancias,perdida) ".
							" values(NOW(),".$total.",".$porcentaje_pagart.",".$gananciasinrestar.",".$ganancia.",".$perdida.")";
			//print("%s\n\t");
			//echo $insert_tgp;

						   
				if (mysqli_query($con, $insert_tgp)) {
						
					//echo "Planilla actualizada";

				} else {
				
					echo "<p><font color=#000080 size=2 face=Arial Narrow>Los datos no han sido INSERTADOS</font></p>";
				}
			
		}else{
			
			$update_tgp = "UPDATE total_ganancia_perdida SET totaljugado=".$total.",porcentaje=".$porcentaje_pagart.",gananciasinrestar=".$gananciasinrestar.",ganancias=".$ganancia.",perdida=".$perdida." WHERE fecha between '".$fecha."' and '".$nuevafecha."'"; 
			//echo "\t\n";
			//echo "" .$update_tgp."\n";
			//echo "\t\n";
			//echo $insert_jug;

				   
			if (mysqli_query($con, $update_tgp)) {
					
				//echo "Planilla actualizada";

			} else {
			
				echo "<p><font color=#000080 size=2 face=Arial Narrow>Los datos no han sido actualizados</font></p>";
			}
		}	
		
		
}		
?>
	
    </tbody>
  </table>

    </div>
    
  </div>


    </div>	
		
	</body>
</html>
