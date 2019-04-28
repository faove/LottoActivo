<?php


	$username='npino1_falvarez';
	
	$password='12f666a019';

	$dbName='npino1_lotto';
	
//	$dbHost='mysql1004.mochahost.com';
	$dbHost='localhost';

	//$url ='jdbc:mysql://'+$dbHost+':3306/'+$dbName;
	
	$con =  mysqli_connect($dbHost, $username, $password,$dbName);
	
	if (!$con) {

    		die('No pudo conectarse: ' . mysql_error());
    	
	}
	
	//---------------------------------------------
	/*
	$username='falvarez_nelson';
	//$username='root';
	
	$password='rootbill';

	$dbName='falvarez_alcalsis';

	$dbHost='mysql1000.mochahost.com';
	//$dbHost='localhost';

	$url ='jdbc:mysql://'+$dbHost+':3306/'+$dbName;
	*/
	//---------------------------------------------
//echo 'AQUI';
	session_start();
	//echo 'AQUI';
	if ( !isset($_SESSION['username']) && !isset($_SESSION['userid']) ){
		
		

		$mysqli = new mysqli($dbHost, $username, $password,$dbName);

		if ($mysqli -> connect_errno)
		{
		    printf("No se pudo conectar: %s\n", $mysqli->connect_error);
		    $mysqli -> close();
		    echo 0;
		    exit();
		}
		/*else{
		    $sql = 'SELECT nombre_usuario,clave_usuario,id_usuarios FROM usuarios_lotto WHERE nombre_usuario="' . $_POST['login_username']. '" and clave_usuario="' . $_POST['login_userpass'] . '" LIMIT 1';
		    echo $sql;
		}*/
		if (isset($_POST["login_username"]) && isset($_POST["login_userpass"]))
		      {
			$loginusername=$_POST['login_username'];
			//echo $loginusername;
			$loginuserpass=$_POST['login_userpass'];

			$sql_statement = "SELECT nombre_usuario,clave_usuario,id_usuarios FROM usuarios_lotto WHERE nombre_usuario='".$loginusername."' and clave_usuario='".$loginuserpass."' LIMIT 1";
			//echo $sql_statement;
			$result_resultados= mysqli_query($con,$sql_statement);
			//echo 'qqq';

			if (!$result_resultados) {
			    $mensaje_jug  = 'Consulta no válida: ' . mysqli_error() . "\n";
			    $mensaje_jug .= 'Consulta completa: ' . $sql_statement;
			    echo 0;
			    die($mensaje_jug);

			}
			while($fila_r = mysqli_fetch_array($result_resultados)) { 
		
			//echo 'hay';			
				$_SESSION['username'] = $fila_r['nombre_usuario'];
				$_SESSION['userid'] = $fila_r['id_usuarios'];

			//-$result = $mysqli -> prepare($sql_statement);
			//-$result -> execute();
			//-$result -> store_result();
			
			//-echo $result(0);
			//echo 'aquiii';

			//-if ($result -> num_rows == 1)
			//-{

			  //echo $result;
			  //$result -> close();
			  //echo 'AQUI';
			  //$_SESSION['username']	= $result['nombre_usuario'];

			  //echo $user['nombre_usuario'];
			  //$_SESSION['userid']	= $result['id_usuarios'];
			  //echo $_SESSION['username'];
				//echo 1;				  
			
			  //echo "<meta http-equiv='refresh' content='0; URL=User-Interface.php'>";
			}
			if (isset($_SESSION['username'])){
				//echo 1;	
				//echo $_SESSION['username'];
				echo 1;
			}
			//else
			//{
			  //echo 'AQUDDI';
			  //$result -> close();
			  //echo 0;
			  //echo "<br>Anmeldung fehlgeschlagen";
			//}
		      }

		/*if ( @$idcnx = @mysqli_connect($dbHost, $username, $password,$dbName) ){
			echo 'AQUI';
			if (@$idcnx) {
			//if ( @mysqli_select_db($dbName,$idcnx) ){
				
				//$sql = 'SELECT user,password,id_user FROM usuarios WHERE user="' . $_POST['login_username']. '" and password="' . md5($_POST['login_userpass']) . '" LIMIT 1';
				$sql = 'SELECT nombre_usuario,clave_usuario,id_usuarios FROM usuarios_lotto WHERE nombre_usuario="' . $_POST['login_username']. '" and clave_usuario="' . $_POST['login_userpass'] . '" LIMIT 1';
				echo $sql;
				if ( @$res = @mysql_query($sql) ){
					echo $sql;
					if ( @mysql_num_rows($res) == 1 ){
						//echo 'AQUI';
						$user = @mysql_fetch_array($res);
						
						$_SESSION['username']	= $user['nombre_usuario'];

						//echo $user['nombre_usuario'];
						$_SESSION['userid']	= $user['id_usuarios'];

						echo 1;
						
					}
					else
						echo 0;
				}
				else
					//echo 0;
				*/
				
				}else{
					echo 0;
			}
			$mysqli -> close();
			//echo 0;
		/*}
		else
			echo 0;
	}
	else{
		echo 0;
	}*/
?>
