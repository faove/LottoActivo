<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Cache-Control: post-check=0, pre-check=0", false);
<<<<<<< HEAD
//header("Pragma: no-cache"); shuffle cambio branch
=======
//header("Pragma: no-cache"); shuffle cambio testing
>>>>>>> testing
?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>Sistema de Gestion de Animalitos</title>
		
		<meta name="author" content="falvarez" />
		

		<link rel="shortcut icon" href="images/if_roulette_icons_73218.ico">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="js/bootstrap.min.js"></script>

		
		<!--<script src="js/functions.js"></script>-->
		
		<script src="js/sweetalert.min.js"></script>		
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<link href="css/main.css" rel="stylesheet">
		
		<link href="css/sweetalert.css" rel="stylesheet">
		
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

		    var y = document.forms["myForm"]["buscar_txt"].value;
		    if (y == "") {
			alert("Suministre un Numero Valido");
			return false;
		    }
		    
		}
		</script>
		
		<script type="text/javascript">
		// este script hace que tabule el enter !!!
		function tabular(e,obj) 
        {
            tecla=(document.all) ? e.keyCode : e.which;

            if(tecla!=13) return;

            frm=obj.form;

            for(i=0;i<frm.elements.length;i++) 
                if(frm.elements[i]==obj) 
                { 
                    if (i==frm.elements.length-1) 
                        i=-1;
                    break 
                }
            /*ACA ESTA EL CAMBIO*/
            if (frm.elements[i+1].disabled ==true )    
                tabular(e,frm.elements[i+1]);
            else frm.elements[i+1].focus();
            return false;
        }  
		</script>
		<script type="text/javascript">
		function Verificarf5()
		{
		var tecla=window.event.keyCode;
		if (tecla==116) {
		 confirm('Si recarga la página perdera todos los datos ingresados,<br> ¿Deseas recargar la página?"', function (result) {
			 if (result) {
				   location.reload();
			  } else {
				   event.keyCode=0;
		event.returnValue=false;
			  }
		}); 

		}
		}
		</script>
		<script type="text/javascript">

			// Solo permite ingresar numeros.
			function soloNumeros(e,nextobject){
			   var tecla = (document.all) ? e.keyCode : e.which;

				//alert (tecla);
				if (tecla==46 || tecla==0 || tecla==8 || tecla==9){
					
					//nextobject.focus();
					return true;
				}
				if(tecla==13){
					//alert (nextobject);
					//alert("Suministre un Numero Valido");
					//nextobject.focus();
					document.myForm.action="#";
					document.myForm.submit();					
					return true;
				}
					
				var patron =/[0-9]/;
				var tecla_final = String.fromCharCode(tecla);
				return patron.test(tecla_final);
			}

			function KeyAscii(e) {
  				return (document.all) ? e.keyCode : e.which;
			}
				
			function soloNumerostxt(e,nextobject){
			   var tecla = (document.all) ? e.keyCode : e.which;
			   nextobject = document.getElementById(nextobject);
			   if (tecla==46 || tecla==0 || tecla==8 || tecla==9){
					
					//nextobject.focus();
					return true;
				}
				if (nextobject) {
				if (KeyAscii(e) == 13) nextobject.focus();
				}
				var patron =/[0-9]/;
				var tecla_final = String.fromCharCode(tecla);
				return patron.test(tecla_final);
				
			}
			function numeros(e,nextobject){
				var key = window.Event ? e.which : e.keyCode
				//alert (key);
				if(key == 13)
				{
				    //alert(document.getElementById("monto").value);
				    //document.getElementById("sel2").value = document.getElementById("monto").value;
				    nextobject.focus();
				}
				return (key >= 48 && key <= 57)
			}
			function asignaVariables(){
				/*
				var tecla=window.event.keyCode;
				alert (key);
				if (tecla==116) {
				
				}	*/
					//document.getElementById("monto").focus();	 myForm
					//var myForm = document.form1;
				alert("Gracias por rellenar el formulario ");
				buscar_txt.focus();

			}
			function butCheckForm_onclick(nextobject) {
				var myForm = document.form1;
				alert("Gracias por rellenar el formulario ");
				nextobject.focus();
				//nextobject
				/* if (myForm.txtAge.value == "" || myForm.txtName.value == "") {
					alert("Complete todo el formulario, por favor");
					if (myForm.txtName.value == "") {
						myForm.txtName.focus();
					}
					else {
						myForm.txtAge.focus();
					}
				}
				else {
					alert("Gracias por rellenar el formulario " + myForm.txtName.value);
				} */
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
			
		    if(unicode==8 || unicode==46 || unicode==13 || unicode==9 || unicode==37 || unicode==39 || unicode==38 || unicode==40){
		        //alert("Suministre un Numero Valido");
		     return true;
			}    
		   /* if(unicode==13){
		    	//alert("Suministre un Numero Valido");
		    	document.forms['myForm'].submit();
		        return true;
		    }
		    	

		    if(unicode==27){
		    	//alert("Imprimir");
		    	document.forms['formimprimir'].submit();
		        return true;
		    }*/
		    	
		    
	 
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
				refreshdiv(); // corremos inmediatamente la funcion onLoad="asignaVariables();"
			} 
	</script>
	
	</head>
	<body onload='document.buscar_txt.focus()'>
	<div class="container-fluid">
	  
	  <form name="myForm" action="#" onsubmit="return validateForm()" method="post">
		 
		<?php
		
		//Control de refreshd
		$varrefresh = $_REQUEST['varrefresh'];
		$nuevo = $_REQUEST['nuevo'];		
		$buscar_txt	= $_REQUEST['buscar_txt'];
		//echo $buscar_txt;
		$nuevoserial = $_REQUEST['serial'];
		$newticket = $_REQUEST['newticket'];
		
		
		$nuevoticket = $_REQUEST['nuevoticket'];
		$varimprimir = $_REQUEST['varimprimir'];
		$imprimirdirecto = $_REQUEST['imprimirdirecto'];
		//echo $imprimirdirecto;
		$fecha = $_REQUEST['fecha'];
		$animalito = $_REQUEST['input_2'];
		$animal = $_REQUEST['animal'];
		$sorteo = $_REQUEST['sorteo'];
		$loteria_jug = $_REQUEST['loteria_jug'];		
		$monto = $_REQUEST['monto'];
		$total 	= $_REQUEST['total'];
		$insert =(string) $_REQUEST['insert'];
		
		$flagserial=true;
		//echo "Variable \n\n Agregar:".$insert."\n\t";
		//echo "Variable \n\n Nuevo:".$nuevo."\n\t";
		//$Agregar = $_REQUEST['Agregar'];
		//echo $Agregar;
		$check = $_REQUEST['check'];
		//$nuevoserial = $_REQUEST['nuevoserial'];
		//echo $nuevoserial;		
		//$aa = $_REQUEST['Agregar'];
		//echo $aa;
		/*echo "Esta variable está definida, así que se imprimirá";
		}

		if (!is_null($insert)){
		*/
		 //echo "text nuevoticket".$nuevoticket;
		include("conexion.php");

		//if (!isset($imprimirdirecto)) {


		//}
		
		
		
		//if (!isset($nuevoserial)) {
			
			//echo "nuevo serial no tiene valor";
			//buscar_txt

			//-----------------------------------------------------
			//Funcion que se encarga de sumar el numero de tickets
			//-----------------------------------------------------
			

		//}	
		//Esta funcion esta ahora en reporte de impresion
		
		if (!is_null($insert)){
			
    		if(empty($_REQUEST['check'])) {
				//echo "sumooooo unooo";
				
				$strquery_ns = "SELECT serial,agencia,fecha,id,monto_max FROM nuevo_serial where id='1'";

				//echo $strquery_ns;

				$result_ns= mysqli_query($con,$strquery_ns);



				if (!$result_ns) {
					$mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
					$mensaje .= 'Consulta completa: ' . $strquery_ns;
					die($mensaje);
				}

				while($row_ns = mysqli_fetch_array($result_ns)) {  
			
					$nuevoserial = $row_ns['serial'];
					$monto_max = $row_ns['monto_max'];
					$fecha_serial = $row_ns['fecha'];
					//$nuevoticket = $row_ns['ticket'];	
			
				}
				//echo $fecha_serial;
				//Verifico la fecha si es diferente a date inicializa los montos en 0
				if (strcmp(date('Y-m-d'),$fecha_serial)!=0){
					//echo "fecha:".date('Y-m-d');
					//Funcion que inicializa los montos max
					include("monto_maximo_ini.php");
				}	

			}	
		}
			
				
		//aqui estaba el incremento del serial
		//Function for print ticket
		include("imprimir_animalitos.php");
		
		
		if (!is_null($nuevo)){
			
			//echo "Presiono boton nuevo".$nuevo;
			//Variable que indica si debo insertar
			
			$deboimprimir=0;
			
			include("num_tickets.php");
			
			//----------------------------------------------$varimprimir = $nuevoserial;
		
			
			
		}
		
		//funcion for delete
		include("delete_animalitos.php");
		
		
		//echo "Serial es:".$nuevoserial."";
		//if ($_SESSION['count']==0){

		//echo "varrefresh existe";
		//echo $varrefresh;	
		//Seleccion de loteria el sorteo
		if(!empty($_POST['sorteo'])) {

			//echo $sorteo[0];
			foreach ($_REQUEST['sorteo'] as $select_sorteo)
			{

				if (strcmp($buscar_txt,'0')==0){
					
					//header ("location:/insert_animalitos.php");
					
					//echo "numero:".$buscar_txt;
					
					$buscar_txt='99';
					//Para cada sorteo insert un animalito
					include("insert_animalitos.php");
					
					
					//cuando son varios sorteos da error colocar $buscar_txt='';
					$buscar_txt='0';
					
					//$_SESSION['count']=1;

				}
				//echo "<span><b>".$select_sorteo."</b></span><br/>";
				//Seleccion de animalito
				//echo $buscar_txt;
				//echo 'aqui';
				if(!empty($buscar_txt) && (strcmp($buscar_txt,'99')!=0)) {
					//echo $sorteo;
					//foreach ($_REQUEST['animalito'] as $select_animalito)
					//{
						//echo "<span><b>".$buscar_txt."</b></span><br/>";
						//echo 'aquiwww';
						//header ("location:/insert_animalitos.php");
						//echo "<span>Va ha insertar, el numero:</span><br/>". $buscar_txt;
						include("insert_animalitos.php");
						
						//$_SESSION['count']=1;
					//}
				}else { 
					
					echo "<span>Error, al insertar, el numero:</span><br/>". $buscar_txt;
					
					/*
					<div class="codigo col-xs-12 col-sm-12 col-md-9 col-lg-9">
					<span>swal("Por favor seleccione un Animalito.");</span>
					</div>
					*/
            
				}
			}
		}

	//}else{
		//$varrefresh=1;
		//$_SESSION['count']=1;

	/*}	else { 
			echo "<span>Por favor seleccione un <br>Sorteo.</span><br/>";
			
			/*<div class="codigo col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<span>swal("Por favor seleccione un Sorteo.");</span>
			</div>*/
			
			
			//echo "<div class=\"codigo col-xs-12 col-sm-12 col-md-9 col-lg-9\">";
			/*	<span>swal("Por favor seleccione un Sorteo.");</span>
					
			//echo "</div>";
					
		}*/

		
		
		?>
	
	  <div class="row">
	    <div class="col-sm-2" style="background-color:lavender;">
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
			
			
				
			echo "<input class=form-control id=serial name=serial value='".$nuevoserial."' type=hidden>";
			echo "<input class=form-control id=varimprimir name=varimprimir value='".$varimprimir."' type=hidden>";	
			echo "<input class=form-control id=serialtext name=serialtext value='".$nuevoserial."' type=text disabled>";	
				
				//<input class="form-control" id="serial" value="<?php echo $nuevoserial; " type="text">
			?>
	
		    
		    
			
		</div>
	    </div>
	
    <div class="col-sm-6" style="background-color:lavenderblush;">

<table class="table">
    <thead>
      <tr>
        <th>Numeros</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
		<div class="col-sm-6">
		<input class="form-control" id="buscar_txt" name="buscar_txt" type="text" onKeyPress="return soloNumerostxt(event,'monto')"  onKeyDown="return limitar(event,this.value,2)">
		</div>
		</div>
		<?php 
		  //include("select_animalitos.php");onblur="if(v==1)    onKeyUp="return limitar(event,this.value,4)"    document.getElementById('lista').style.display='none';" 
			//onBlur="return perderfocus('buscar_txt')"
		?>
		
		</td>
      </tr>
    </tbody>
  </table>

	
	</div>
    <div class="col-sm-2" style="background-color:lavender;">

	<label>Monto:</label>
    	<input class="form-control monto-sm" id="monto" name="monto" type="text" value="<?php echo $monto;?>" onKeyPress="return soloNumeros(event,'buscar_txt')"  onKeyDown="return limitar(event,this.value,4)">
	
    </div>
    
  </div>
<div class="row">
    <div class="col-sm-2" style="background-color:lavender;">&nbsp
    </div>
    <div class="col-sm-4" style="background-color:lavenderblush;">&nbsp
	</div>
    <div class="col-sm-2" style="background-color:lavender;">&nbsp
    </div>
  </div>
<div class="row">
    <div class="col-sm-2" style="background-color:lavender;">
<table class="table">
    <thead>
      <tr>
        <th>Sorteo</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      
      /*
       * 
       * 
       * $nuevafecha = strtotime ('+1 day',strtotime($fecha));
		
		$nuevafecha = date('Y-m-d',$nuevafecha);
       * */
		date_default_timezone_set("America/Caracas"); 
		$horactual = date('G:i');
		//echo $horactual; 
		//echo "\n";
		$hora6min = strtotime('-6 minute',strtotime($horactual));
		$hora6 = date('H:i:s',$hora6min);
		//echo $hora6;
		//echo "\n";
		
		
		//Los ticket que han sido impresos Flag_impresion = true y debemos pasar
		//Flag_delete=true
		include('flag_delete.php');
		//Se debe vaidar hora local del pc con la hora gmt global	
		//$horactual = date('G:i:s');
		//$horactual=time();
		//echo $horactual; 
		//$strquery_hora = "SELECT Descripcion,Hora,Hora_num FROM ruleta_activa_horas where Hora<TIME(NOW())";
		
		//se debe ir la jugada 6 minutos antes
		
		//$strquery_hora = "SELECT Descripcion,Hora,Hora_num FROM ruleta_activa_horas where Hora>'".$horactual.":00:00'";
		
		
		
		$strquery_hora = "SELECT Descripcion,Hora,Hora_num FROM ruleta_activa_horas where Hora>'".$horactual."'";
		$seleccion = $sorteo[0];

		//echo "Seleccion:".$seleccion;
		
		//--$strquery_hora = "SELECT Descripcion,Hora,Hora_num FROM ruleta_activa_horas ";
		//echo $strquery_hora;
		//select TIME(NOW()) as hora; curTime()
		$result_hora= mysqli_query($con,$strquery_hora);

		if (!$result_hora) {
			$mensaje_jug  = 'Consulta no válida: ' . mysqli_error() . "\n";
			$mensaje_jug .= 'Consulta completa: ' . $strquery_hora;
			die($mensaje_jug);
		}
	
		
?>    
      <tr class="success">
        <td><div class="success">
			
			
			<select id="sorteoloto" class=form-control multiple name="sorteo[]" style=" font-size:14px; font-family:Verdana, Arial, Helvetica, sans-serif;width:130px; height:340px">
		<label>
			
<?php 

	

	while($roww = mysqli_fetch_array($result_hora)) { 
		
		$descripcion = $roww['Descripcion'];
		
		$hora = $roww['Hora_num'];

		$tiempo=idate("h");
		

		$descripcionsinhora = explode(" ", $descripcion);
		
		$concatenar = "".$hora."-".$descripcionsinhora[0]."";

		//echo $concatenar;
		// echo "\n";
		//echo $seleccion;
		//echo "\n";

		//$concatenar="";

		//if (strcasecmp($seleccion,$concatenar)==0) {		
		if (strcmp($seleccion,$concatenar)==0) {
		//if ($seleccion==$concatenar) {		
			
			//echo "".$hora."-".$descripcion."";
			//echo $seleccion;
			$concatenar="";
			//echo $seleccion;		
			echo "<option value=".$hora."-".$descripcion." selected='selected'>".$descripcion."</option>";
		
		}else{
			//echo "<option value=".$hora.">".$descripcion."".$fecha_entrada."".$hora."</option>";
			//echo "<option value=".$hora."-".$descripcion.">".$descripcion."".$fecha_entrada."</option>";
			echo "<option value=".$hora."-".$descripcion.">".$descripcion."</option>";
		}
		//}
		
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
    <div class="col-sm-6" style="background-color:powderblue;">
	

<?php

	$strquery_jug = "SELECT Num_ticket,Serial,Fecha,Animalito,Sorteo,Loteria,Num_animalito,Monto FROM jugadas where (Flag_imprimir=FALSE and "
	. "Fecha >= DATE_FORMAT(NOW(),'%Y-%m-%d 00:00:00')) ORDER BY Num_ticket DESC";
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
        <th>Loteria</th>        
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
		$loteria_jug = $fila['Loteria'];
		$monto_jug = $fila['Monto'];
		$animalito_jug = $fila['Num_animalito'];
		$animalitoletra = $fila['Animalito'];
		
		echo "<tr class=info>";
        echo "<td>";				
		//echo "<input type=checkbox>" .$sorteo_jug. " " .$animalito_jug. " " .$monto_jug. ""; Opciones en eliminar
		//echo "<input type=checkbox name=check[] id=check[]  value="echo $Num_ticket;">";onkeypress="return tabular(event,this)"

		//echo "aaaaaaaaaaa";

		echo "<input type=checkbox name=check[] id=check[]  value=".$Num_ticket." >";

		if (($sorteo_jug==10) || ($sorteo_jug==11)){
			echo "" .$sorteo_jug. " ";
		}else{
			echo "" .$sorteo_jug. " ";
		}	
		echo "</td>";
		echo "<td>";
		echo "" .$loteria_jug. "";
		echo "</td>";
		echo "<td>";
		echo "" .$animalito_jug. " " .$animalitoletra."";
		echo "</td>";		
		echo "<td>";
		echo "" .$monto_jug. "";
		echo "</td>";	
		echo "<td>";
		echo "<a href=# onclick=document.forms['myForm'].submit(); return false;><img src=images/delete.ico alt=elimina style=width:25px;height:25px;></a>";
		echo "</td>";	
		echo "</tr>";
		$total=$total+$monto_jug;
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
    <div class="col-sm-2" style="background-color:lavender;">
		
	<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
	<input type="HIDDEN" value="<?php echo $loteria_jug;?>" name="loteria_jug">
	<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
	<h4>

	Total: <input type="Text" size="10" value="<?php echo $total;?>" name="total" readonly="readonly">
	<h4>
	<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
	<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
	<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
	<input type="HIDDEN" value="<?php echo $nuevoticket;?>" name="nuevoticket">
	<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">
	
	<!--<input type="submit"  class="btn btn-info" value="Agregar" name="insert" onKeyPress="return soloNumerostxt(event,'buscar_txt')">-->
	<button type="submit" class="msg-basico-txt btn btn-info" value="Agregar" id="insert" name="insert">Agregar</button>
	
	</form>
	
	<p></p>
	
    <form name="formimprimirdirecto" action="#" method="post">
		<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php echo $loteria_jug;?>" name="loteria_jug">
		<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php echo $nuevoticket;?>" name="nuevoticket">
		<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">		
		<input type="HIDDEN" value="rpt_ticket" name="reporte"> 					 
		<input type="submit"  class="btn btn-info" value="Imprimir"  name ="imprimirdirecto">                       
    </form>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
	<form  name="newticket" action="#" method="post">
		<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php echo $loteria_jug;?>" name="loteria_jug">
		<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php echo $nuevoticket;?>" name="nuevoticket">
		<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">		
		<input type="submit"  class="btn btn-info" value="Nuevo_Ticket"  name="nuevo">                       
    </form>	
    
    <form name="formimprimir" action="rpt_ticket.php" method="post">
		<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php echo $nuevoticket;?>" name="nuevoticket">
		<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">		
		<input type="HIDDEN" value="rpt_ticket" name="reporte"> 					 
		<input type="submit"  class="btn btn-info" value="PDF" onclick="document.formimprimir.target='_blank'">  <!-- _self _blank -->                     
    </form>
    <p></p>
    	
	<form action="ganadores.php" method="post">
		<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php echo $loteria_jug;?>" name="loteria_jug">
		<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php echo $nuevoticket;?>" name="nuevoticket">
		<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">		
		<input type="HIDDEN" value="rpt_ticket" name="reporte">
		<input type="submit"  class="btn btn-info" value="Ticket Ganadores">                       
    </form>
    
    <form action="cargaranimalitos.php" method="post">
		<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php echo $loteria_jug;?>" name="loteria_jug">
		<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php echo $nuevoticket;?>" name="nuevoticket">
		<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">		
		<input type="HIDDEN" value="rpt_ticket" name="reporte">
		<input type="submit"  class="btn btn-info" value="Cargar Animalitos">                       
    </form>
    <p></p>
    <form action="liberarticket.php" method="post">
		<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php echo $loteria_jug;?>" name="loteria_jug">
		<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php echo $nuevoticket;?>" name="nuevoticket">
		<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">		
		<input type="HIDDEN" value="rpt_ticket" name="reporte">
		<input type="submit"  class="btn btn-info" value="Anular Ticket">                       
    </form>
    
    <form action="pagarticket.php" method="post">
		<input type="HIDDEN" value="<?php echo $sorteo_jug;?>" name="sorteo_jug">
		<input type="HIDDEN" value="<?php echo $loteria_jug;?>" name="loteria_jug">
		<input type="HIDDEN" value="<?php echo $monto_jug;?>" name="monto_jug">
		<input type="HIDDEN" value="<?php echo $total;?>" name="total">
		<input type="HIDDEN" value="<?php echo $animalito_jug;?>" name="animalito_jug">
		<input type="HIDDEN" value="<?php echo $animalitoletra;?>" name="animalitoletra">
		<input type="HIDDEN" value="<?php echo $nuevoserial;?>" name="nuevoserial">
		<input type="HIDDEN" value="<?php echo $nuevoticket;?>" name="nuevoticket">
		<input type="HIDDEN" value="<?php echo $varimprimir;?>" name="varimprimir">		
		<input type="HIDDEN" value="rpt_ticket" name="reporte">
		<input type="submit"  class="btn btn-info" value="Pagar Ticket Ganador">                       
    </form>
	</div>
  </div>
<div class="row">
    <div class="col-sm-6" style="background-color:lavender;">
	<?php
		//rpt_ticket
		echo 'Fecha: ';
		echo date('d-m-Y g:i:s');
	?>
	</div>
    <div class="col-sm-8" style="background-color:lavenderblush;">&nbsp
    </div>
  </div>
</div>	
	<script>
	window.onload = function() {
	document.getElementById("buscar_txt").focus();
	};
	</script>
	</body>
</html>
