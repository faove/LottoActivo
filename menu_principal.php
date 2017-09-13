<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>Sistema de Gestion de Animalitos</title>
		
		<meta name="author" content="falvarez" />
		<link rel="shortcut icon" href="images/if_roulette_icons_73218.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="css/bootstrap.min.css">
  		<script src="jquery.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>

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
	  <h1>Lotto Activo</h1>
	  <p>Sistema de Gestion de Animalitos!</p>
	  
	  <form name="myForm" action="menu_principal.php" onsubmit="return validateForm()" method="post">
		  
		<?php
		$buscar_txt	= $_REQUEST['buscar_txt'];
		$nuevoserial = $_REQUEST['serial'];
		$varimprimir = $_REQUEST['varimprimir'];
		$fecha = $_REQUEST['fecha'];
		$animalito = $_REQUEST['input_2'];
		$animal = $_REQUEST['animal'];
		$sorteo = $_REQUEST['sorteo'];
		$monto = $_REQUEST['monto'];
		$total 	= $_REQUEST['total'];
		$insert = $_REQUEST['insert'];
		$check = $_REQUEST['check'];
		
		include("conexion.php");
		
		//funcion for delete
		include("delete_animalitos.php");
		
		//echo "check es:".$check;
		echo "varimprimir".$varimprimir;
		//echo "Serial es:".$nuevoserial."";
		
		
		
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
						include("insert_animalitos.php");
					//}
				}else { 
					echo "<span>Por favor seleccione un Animalito.</span><br/>";
				}
			}
		}else { 
			echo "<span>Por favor seleccione un <br>Sorteo.</span><br/>";
		}
		//Function for print ticket
		include("imprimir_animalitos.php");
		
		?>
		
		
		
	  <div class="row">
	    <div class="col-sm-4" style="background-color:lavender;">
		<div class="form-group-sm">
			<label for="serial-sm">Serial:</label>
			
<?php
			//-----------------------------------------------------
			//Busca el serial del ticket para no repetir la jugada
			//si ya existe indica que debe borrar y crear uno nuevo
			//-----------------------------------------------------
			/*$buscar_jug= "SELECT Serial FROM jugadas WHERE Serial='".$nuevoserial."'";
			echo $buscar_jug;
			$result_serial= mysqli_query($con,$buscar_jug);
			
			if (!$result_serial) {
				$mensaje_jug  = 'Consulta no válida: ' . mysqli_error() . "\n";
				$mensaje_jug .= 'Consulta completa: ' . $buscar_jug;
				die($mensaje_jug);
				//$deboinsertar=1;
			}
			
			while($row = mysqli_fetch_array($result_serial)) {  
						
				echo "Serial ya seleccionado" .$nuevoserial. "debe borrar";
				//$deboinsertar=1;
			}*/
			if (is_null($nuevoserial)){
				//Estoy creando el primer serial
				//-----------------------------------------------------
				//Elaborando el serial	 hidden
				//-----------------------------------------------------
				$varimprimir=1;
				//$nuevoserial="".date(Y)."".date(m). "".date(d)."" .date(H). "".date(mi)."" .$varimprimir."";
				$nuevoserial="".date(Y)."".date(m). "".date(d)."" .date(H). "".$varimprimir."";
				//echo $nuevoserial;
			}else{
				
				$nuevoserial="".date(Y)."".date(m). "".date(d)."" .date(H). "".$varimprimir."";
			}
				
			echo "<input class=form-control id=serial name=serial value='".$nuevoserial."' type=hidden>";
			echo "<input class=form-control id=varimprimir name=varimprimir value='".$varimprimir."' type=hidden>";	
			echo "<input class=form-control id=serialtext name=serialtext value='".$nuevoserial."' type=text disabled>";	
				
				//<input class="form-control" id="serial" value="<?php echo $nuevoserial; " type="text">
			?>
	
		    
		    
			
		</div>
	    </div>
	
    <div class="col-sm-4" style="background-color:lavenderblush;">

<table class="table">
    <thead>
      <tr>
        <th>Numeros</th>
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
							onKeyPress="return soloNumeros(event)">
				  </div>
				  <div id="lista" onmouseout="v=1;" onmouseover="v=0;" style="position: absolute; left: 76px; top: 25px"></div>
				</div>      
				<div class="mensaje" id="error"></div>
			  </div>
		<?php 
		  //include("select_animalitos.php");onblur="if(v==1) document.getElementById('lista').style.display='none';" 
		?>
		
		</td>
      </tr>
    </tbody>
  </table>

	
	</div>
    <div class="col-sm-4" style="background-color:lavender;">

	<label for="monto-sm">Monto:</label>
    	<input class="form-control monto-sm" id="monto" name="monto" type="text" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,5)" onKeyDown="return limitar(event,this.value,5)">
	
    </div>
    
  </div>
<div class="row">
    <div class="col-sm-4" style="background-color:lavender;">&nbsp
    </div>
    <div class="col-sm-4" style="background-color:lavenderblush;">
	&nbsp
	</div>
    <div class="col-sm-4" style="background-color:lavender;">&nbsp
    </div>
  </div>
<div class="row">
    <div class="col-sm-4" style="background-color:lavender;">
<table class="table">
    <thead>
      <tr>
        <th>Sorteo</th>
        
      </tr>
    </thead>
    <tbody>
          
      <tr class="success">
        <td><div class="success">
			<select class=form-control multiple name="sorteo[]" style=" font-size:14px; font-family:Verdana, Arial, Helvetica, sans-serif;width:300px; height:160px">
		<label>
			<option value="10">01 LotoActivo 10:00 am</option>
			<option value="11">02 LotoActivo 11:00 am</option>
			<option value="12">03 LotoActivo 12:00 pm</option>			
			<option value="1">04 LotoActivo 1:00 pm</option>
			<option value="4">05 LotoActivo 4:00 pm</option>
			<option value="5">06 LotoActivo 5:00 pm</option>
			<option value="6">07 LotoActivo 6:00 pm</option>
			<option value="7">08 LotoActivo 7:00 pm</option>
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
    <div class="col-sm-4" style="background-color:powderblue;">
	

<?php

	$strquery_jug = "SELECT Num_ticket,Serial,Fecha,Animalito,Sorteo,Nom_animalito,Monto FROM jugadas where Flag_imprimir=FALSE";
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
        <th>Sorteo</th>        
        <th>Animalito</th>
        <th>Monto</th>     
        <th>Eliminar</th>  
      </tr>
    </thead>
    <tbody>
<?php

	$total=0;
	
	while($fila = mysqli_fetch_array($result_jug)) { 
		
		$Num_ticket = $fila['Num_ticket'];
		$sorteo_jug = $fila['Sorteo'];
		$monto_jug = $fila['Monto'];
		$animalito_jug = $fila['Nom_animalito']; 
		$animalitoletra = $fila['Animalito'];
		$total=$total+$monto_jug;
		echo "<tr class=info>";
        echo "<td>";				
		//echo "<input type=checkbox>" .$sorteo_jug. " " .$animalito_jug. " " .$monto_jug. ""; Opciones en eliminar
		//echo "<input type=checkbox name=check[] id=check[]  value="echo $Num_ticket;">";
		echo "<input type=checkbox name=check[] id=check[]  value=".$Num_ticket.">";
		if (($sorteo_jug==10) || ($sorteo_jug==11)){
			echo "" .$sorteo_jug. " AM";
		}else{
			echo "" .$sorteo_jug. " PM";
		}	
		echo "</td>";
		echo "<td>";
		echo "" .$animalitoletra. "";
		echo "</td>";
		echo "<td>";
		echo "" .$monto_jug. "";
		echo "</td>";	
		echo "<td>";
		echo "<a href=# onclick=document.forms['myForm'].submit(); return false;><img src=images/delete.ico alt=elimina style=width:25px;height:25px;></a>";
		echo "</td>";	
		echo "</tr>";
	}
		echo "<tr>";
		echo "<td>";
		echo "";
		echo "</td>";		
		
		
		echo "<td><h4>";
		echo "Total:";
		echo "</h4></td>";		
		
		
		echo "<td><h4>";
		echo "" .$total. "";
		echo "</h4></td>";		
		echo "</tr>";
		
?>
	
    </tbody>
  </table>

    </div>
    <div class="col-sm-4" style="background-color:lavender;">
	
	<input type="submit"  class="btn btn-info" value="Agregar" name="insert">
	
	</form>
	<form method="POST" action="rpt_ticket.php">
		
		<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">
		<input type="HIDDEN" value="rpt_ticket" name="reporte"> 					 
		<input type="submit"  class="btn btn-info" value="Imprimir">                       
    </form>
	
    
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
		<img src="images/animalitos.jpg" alt="ruleta" style="width:500px;height:528px;">
	</body>
</html>
