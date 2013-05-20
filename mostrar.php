
<html  lang="es">

<head>
  	<title>Cargar imagen</title>
    <h1></h1>
   
    
</head>

<body>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysql_connect("localhost","root") or die ("No se pudo hacer la conexion");
//echo "se conecto<br>";
mysql_select_db("libreria") or die ("no se encontro la base de datos<br>");
//echo "se encontro la base de datos<br>";
$consulta="SELECT *FROM imagen";
$ejecutar=mysql_query($consulta,$con);
$num_resultado = mysql_num_rows($ejecutar);
IF (!$num_resultado){

		echo "No hay fotos";
		exit;
}
 echo "<P><strong>N&uacute;mero de fotos encontradas: ".$num_resultado."</strong></P>";
	while ($filas=mysql_fetch_array($ejecutar)){
			$ruta=$filas["ruta"];
			$desc=$filas["descripcion"];
			
	
	
?>
<img src="<?php echo $ruta;?>" >

<?php
}

?>
</body>
</html>
