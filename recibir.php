<?php
//print_r($_FILES);
$comentario=$_POST["comentario"];
//PRINT_R($_FILES["imagen"]);
//print_r($_FILES['imagen'] ['tmp_name']);
if (!$comentario)
{
echo "Debe hacer un comentario y seleccionar una imagen para poder procesar la informaci&oacute;n<br>";
}

$con=mysql_connect("localhost","root") or die ("No se pudo hacer la conexion");
//echo "se conecto<br>";
mysql_select_db("libreria") or die ("no se encontro la base de datos<br>");
//echo "se encontro la base de datos<br>";
  $rutaservidor=('imagenes');
	$rutatemporal=($_FILES['imagen']['tmp_name']);
	$nombreimagen=($_FILES['imagen']['name']);
	$rutadestino=($rutaservidor."/".$nombreimagen);
	MOVE_UPLOADED_FILE($rutatemporal,$rutadestino);
	//$comentario=$_POST["comentario"];
$consulta="INSERT INTO IMAGEN (ruta,descripcion) VALUES('".$rutadestino."','".$comentario."')";
$ejecutar=mysql_query($consulta,$con);
	IF ($ejecutar)
		{
		echo mysql_affected_rows()."Imagen cargada.";
		}
		else	
		{ 
		echo "No se pudo cargar la imagen";  
		}

?>
