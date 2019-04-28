<?php
//login.php
$user = $_POST['usuario'];
$pass = $_POST['password'];
$fecha = $_POST['fecha'];

$archivo="$user.".PHP_EOL;

//$link = mysql_connect('mysql1000.mochahost.com', 'falvarez_faove', 'rootbill');
//$link = mysql_connect('mysql1000.mochahost.com', 'root', 'xts74');
$dbHost='localhost';
$username='root';
$password='xts74';
$dbName='falvarez_lotto';
$link =  mysqli_connect($dbHost, $username, $password,$dbName);

if (!$link) {
    die('No pudo conectar: ' . mysqli_error());
}

//mysql_select_db('falvarez_lotto') or die('Could not select database');



$q=mysqli_query($link,"SELECT * FROM nombre WHERE nombre_usuario='{$user}' AND clave_usuario='{$pass}' ");

while($e== mysqli_fetch_array($q))

              $output[]=$e;

      //print(json_encode($output));

$valores=json_encode($output);


//"$user"
//$nuevoarchivo = fopen($archivo, "w+"); 
//$nuevoarchivo = fopen("$user.".PHP_EOL, "w+"); 
//$nuevoarchivo = fopen("login.json", "w+"); 

//$valores=json_encode($output);
$nuevoarchivo = fopen($user, "w+");

fwrite($nuevoarchivo, $valores);

fclose($nuevoarchivo);

mysql_close($link);

?>
