<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>SGA -liberar-</title>
		
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
	  <h1>Liberar Ticket</h1>
	  <p>Suministre el numero del ticket para liberarlo</p>
	  
	  <form name="myForm" action="liberarticket.php" onsubmit="return validateForm()" method="post">
		  
		<?php
		$buscar_txt	= $_REQUEST['buscar_txt'];
		$nuevoserial = $_REQUEST['serial'];
		$nuevoticket = $_REQUEST['nuevoticket'];
		$varimprimir = $_REQUEST['varimprimir'];
		$fecha = $_REQUEST['txtfecha'];
		$animalito = $_REQUEST['input_2'];
		$animal = $_REQUEST['animal'];
		$sorteo = $_REQUEST['sorteo'];
		$loteria_jug = $_REQUEST['loteria_jug'];
		$monto = $_REQUEST['monto'];
		$total 	= $_REQUEST['total'];
		$liberar = $_REQUEST['liberar'];
		//$vertodo = $_REQUEST['vertodo'];
		$check = $_REQUEST['check'];


		
		include("conexion.php");

		/*
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
					echo "<p style=color:red;><span>Por favor seleccione un Animalito.</span><br/></p>";
				}
			}
		}else { 
			echo "<p style=color:red;><span>Por favor seleccione un <br>Sorteo.</span><br/></p>";
		}
		*/
		
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
      
      /*<th>Sorteo</th>
      date_default_timezone_set("America/Caracas"); 
	  $horactual = date('G');

	//$strquery_hora = "SELECT Descripcion,Hora FROM ruleta_activa_horas";
	$strquery_hora = "SELECT Descripcion,Hora,Hora_num FROM ruleta_activa_horas where Hora>'".$horactual.":00:00'";

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
/* <select class=form-control multiple name="sorteo[]" style=" font-size:14px; font-family:Verdana, Arial, Helvetica, sans-serif;width:300px; height:160px">
		<label>
	while($roww = mysqli_fetch_array($result_hora)) { 
		$descripcion = $roww['Descripcion'];			
		$hora = $roww['Hora'];
		
		//echo "<option value=".$hora." select>".$sorteo[0]."</option>";;	
		if ($sorteo[0] == $hora) {		
					
			echo "<option value=".$hora." select>".$hora."</option>";
		
		}else{
			echo "<option value=".$hora.">".$descripcion."</option>";
		}
		
	}	</label>
  	</div>*/	
		
?>		

    	</td>
        
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
        <th>Suministre el Ticket</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
			
			<div id="demo" style="width:269px; height:24px">
				<div id="demoDer"  style="width: 194px; height: 24px">
				  <div align="left">
					<input name="buscar_txt" type="text" class="form-control" id="input_2"
							size="100" 
							style="background-color: #E5E5E5;"
							>
				  </div>

				</div>      

			  </div>
		<?php 
		  //include("select_animalitos.php");onblur="if(v==1) document.getElementById('lista').style.display='none';" 
		?>
		
		</td>
		<tr>

		<td>
			
		</td>
		</tr>
 		
      </tr>
    </tbody>
  </table>

	
	</div>
	
    <div class="col-sm-4" style="background-color:lavender;">

	<label for="monto-sm"></label>
    <input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
    <input type="HIDDEN" value="<?php echo $loteria_jug;?>" name="loteria_jug">
	<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
	<input type="HIDDEN" value="<?php echo $total;?>" name="total">
	<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
	<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
	<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
	<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">
	<input type="HIDDEN" value="<?php echo $nuevoticket;?>" name="nuevoticket">
	<input type="submit"  class="btn btn-info" value="liberar" name="liberar">
	
	</form>
	
	<form method="POST" action="menu_principal.php">
		
		<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php echo $loteria_jug;?>" name="loteria_jug">
		<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php echo $nuevoticket;?>" name="nuevoticket">
		<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">							 
		<input type="submit"  class="btn btn-info" value="Cerrar">                       
    </form>	
    </div>
    
  </div>

<div class="row">
    <div class="col-sm-2" style="background-color:lavender;">

    </div>
    <div class="col-sm-8" style="background-color:powderblue;">
	

<?php

//echo "fecha:".$fecha."nueva fecha:";

//$cls_date = new DateTime($fecha);
//echo $cls_date->format('Y-m-d');
//echo date_format($fecha, 'Y-m-d H:i:s');


/*

if (!is_null($liberar)){
	//echo "aqui";
	$strquery_jug = "SELECT Num_ticket,Serial,Fecha,Animalito,Sorteo,Num_animalito,Monto,Pagar,Pagado FROM jugadas" .
	" where (Serial='".$buscar_txt."' and Flag_imprimir=TRUE )";

	/*$strquery_jug = "SELECT Num_ticket,Serial,Fecha,Animalito,Sorteo,Num_animalito,Monto,Pagar,Pagado FROM jugadas".
	" where (Num_animalito='".$buscar_txt."' and Flag_imprimir=TRUE and ".	
	"Fecha >= DATE_FORMAT('".$cls_date."','%Y-%m-%d 00:00:00'))";*/
	//echo "aqui".$strquery_jug;
	/*$ejecutar=1;
	
	//"Fecha >= ".$cls_date.")";
}*/
$strquery_BUS = "SELECT Ticket FROM jugadas WHERE (Ticket='".$buscar_txt."' and Flag_imprimir=TRUE and Flag_delete=FALSE )";

//echo $strquery_del;
$result_BUS= mysqli_query($con,$strquery_BUS);

if (!$result_BUS) {
	$mensaje_bus  = 'Consulta no válida: ' . mysqli_error() . "\n";
	$mensaje_bus .= 'Consulta completa: ' . $strquery_BUS;
	die($mensaje_bus);
}else{
	
	if(mysqli_num_rows($result_BUS) > 0){
			
			


	$insert_ruan = "INSERT INTO ruleta_activa_an (Ticket,Serial,Fecha,Sorteo,Loteria,Animalito,Num_animalito,Monto,Total, ".
		"Pagar,Pagado,Cant_jugadas,Imprimir,Flag_imprimir,Flag_delete,Flag_win) ".
		"SELECT j.Ticket,j.Serial,j.Fecha,j.Sorteo,j.Loteria,j.Animalito,j.Num_animalito,j.Monto,j.Total, ".
		"j.Pagar,j.Pagado,j.Cant_jugadas,j.Imprimir,j.Flag_imprimir,j.Flag_delete,j.Flag_win".
		" FROM jugadas j WHERE (j.Ticket='".$buscar_txt."' and j.Flag_imprimir=TRUE and j.Flag_delete=FALSE)";
	//echo $insert_ruan;
	$result_ruan= mysqli_query($con,$insert_ruan);

	if (!$result_ruan) {
	    $mensaje_jug  = 'Consulta no válida: ' . mysqli_error() . "\n";
	    $mensaje_jug .= 'Consulta completa: ' . $insert_ruan;
	    die($mensaje_jug);
	}
	//$insert_jug = "INSERT INTO jugadas (Serial,Ticket,Fecha,Sorteo,Loteria,Animalito,Num_animalito, ".
	//						"Monto,Total,Pagar,Pagado,Cant_jugadas,Imprimir,Flag_imprimir,Flag_delete,Flag_win)".
	//						" values('".$nuevoserial."','".$num[$nuevoserial]."',NOW(),'".$horalist."','".$descripcionlist."','".$animalitol."','".$buscar_txt. "','" .$monto. "','" .$total. "'," .$pagar. ",'N',0,0,0,0,0)";
			
	
	//Se puede borrar el ticket si el campo flag_delete es diferente a true
	//a si cuando la sorteo ha pasado NO podemos borrar el ticket
	//$varborrar=0;
	$strquery_del = "DELETE  FROM jugadas WHERE (Ticket='".$buscar_txt."' and Flag_imprimir=TRUE and Flag_delete=FALSE )";

	//echo $strquery_del;
	$result_del= mysqli_query($con,$strquery_del);

	if (!$result_del) {
	    $mensaje_jug  = 'Consulta no válida: ' . mysqli_error() . "\n";
	    $mensaje_jug .= 'Consulta completa: ' . $strquery_del;
	    die($mensaje_jug);
	}else{
				
		if(mysqli_num_rows($result_del) == 1){
			
			echo "<p style=color:red;><span>Ticket ".$buscar_txt."<br>no Anulado.</span><br/></p>";
			
		}else{
			echo "<p style=color:red;><span>Ticket ".$buscar_txt."<br>Anulado.</span><br/></p>";
			//echo "<p style=color:blue;><span>Ticket ".$buscar_txt."<br>no se puede borrar,debido que un SORTEO ya paso ó numero ticket errado.</span><br/></p>";
		
		}	
	}
	
	}else{
		echo "<p style=color:red;><span>Ticket ".$buscar_txt."<br>no se encuentra.</span><br/></p>";
			
	}
}
//}	
?>
	
    </tbody>
  </table>

    </div>
    
  </div>
<div class="row">
    <div class="col-sm-4" style="background-color:lavender;">
	<?php
		echo 'Fecha: ';
		echo date('d-m-Y');
	?>
	</div>
    <div class="col-sm-8" style="background-color:lavenderblush;">&nbsp
    </div>
    
  </div>
</div>
<?php

	//$date = new DateTime($fecha);

/*
	$strquery_resultados = "SELECT id_ruleta_activa,fecha_result,resultado,Hora_num,Descripcion FROM ruleta_activa_resultado".
	" INNER JOIN ruleta_activa_horas ON ruleta_activa_resultado.id_ruleta_activa=ruleta_activa_horas.id".
	" where fecha_result >= DATE_FORMAT('".$date->format('Y-m-d 00:00:00')."','%Y-%m-%d 00:00:00')";

	//echo $strquery_resultados;
	$result_resultados= mysqli_query($con,$strquery_resultados);

	if (!$result_resultados) {
	    $mensaje_jug  = 'Consulta no válida: ' . mysqli_error() . "\n";
	    $mensaje_jug .= 'Consulta completa: ' . $strquery_resultados;
	    die($mensaje_jug);
	}*/
?>
<!--
<table class="table">
    <thead>
      <tr>
		<th>Id</th>
		<th>Fecha</th>               
        <th>Hora</th>
        <th>Descripcion</th> 
        <th>Resultado</th> 
        <th></th>     
        <th></th> 
      </tr>
    </thead>
    <tbody>-->
<?php

	
	/*
	while($fila_r = mysqli_fetch_array($result_resultados)) { 
		
		$id_ruleta_activa = $fila_r['id_ruleta_activa'];
		$fecha_result = $fila_r['fecha_result'];
		$resultado = $fila_r['resultado'];
		$Hora_num = $fila_r['Hora_num'];
		$Descripcion = $fila_r['Descripcion'];

		echo "<tr class=info>";
		echo "<td>";
		echo "" .$id_ruleta_activa. "";
		echo "</td>";
		echo "<td>";
		echo "" .$fecha_result. "";
		echo "</td>";        
		echo "<td>";
		echo "" .$Hora_num. "";
		echo "</td>";
		echo "<td>";
		echo "" .$Descripcion. "";
		echo "</td>";	
		echo "<td>";				
		echo "" .$resultado. "";
		echo "</td>";
		echo "<td>";
		echo "";
		echo "</td>";	
		echo "<td>";
		echo "";
		echo "</td>";
		echo "</tr>";
		
	}
		echo "<tr>";
		echo "<td>";
		echo "";
		echo "</td>";
		
		echo "<td><h4>";
		echo "";
		echo "</h4></td>";		
		
		
		echo "<td><h4>";
		echo "";
		echo "</h4></td>";		
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>";
		echo "";
		echo "</td>";
		
		echo "<td><h4>";
		echo "";
		echo "</h4></td>";		
		
		
		echo "<td><h4>";
		
		echo "";
		echo "</h4></td>";		
		echo "</tr>";*/
		
?>
	
    </tbody>
  </table>

    </div>	
		
	</body>
</html>
