<!DOCTYPE html >
<html  lang="es">

<head>
  	<title>Cargar imagen</title>
    <h1></h1>
   
    
</head>

<body>

<form name="form" method="post" action="recibir.php" enctype="multipart/form-data">
<fieldset>
<legend><font class="arial" color="blue" size="5">Cargar imagen</font></legend>

<label>Comentario</label><br />
<textarea name="comentario" size="255"></textarea><br />
<label>Imagen</label><br />
<input type="file" name="imagen" value="Examinar" title="Examinar">
<hr/>
<input type="submit" value="Aceptar" name="seccion" />

</fieldset>
</form>

</body>
</html>
