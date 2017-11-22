<?php
$con = new PDO('mysql:host=172.17.0.2;port=3306;dbname=database1;charset=utf8mb4', 'root', 'my-secret-pw');
if (!$con)
{
  die('Conexion no pudo ser establecida ');
}
foreach($con->query('SELECT * FROM WebServer') as $row) {
    echo "<h1><span class='color'>" . $row['name'] . "</span></h1>";
}
?>
