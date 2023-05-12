<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>


<div class="container">
<?php
$dat = json_decode(file_get_contents("https://api.datos.gob.mx/v1/inai.solicitudes"),true);
$datos=$dat['results'];
?>



<BR>
<table class="table table-hover">
  <thead>
  <tr>
      <th scope="col" colspan="12" > <h5 class="display-8">INSTITUTO FEDERAL DE ACCESO A LA INFORMACIÓN Y PROTECCIÓN DE DATOS</h6></th>
    <tr>
      <th scope="col">Folio</th>
      <th scope="col">FechaSolicitud</th>
      <th scope="col">dependencia</th>
      <th scope="col">estatus:</th>
      <th scope="col">medioentrada:</th>
      <th scope="col">descripcionsolicitud</th>
      <th scope="col">otrosdatos::</th>
      <th scope="col">respuesta</th>
      <th scope="col">textorespuesta:</th>
      <th scope="col">estado:</th>
      <th scope="col">municipio:</th>
      <th scope="col">sector:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <?php 
      $a="<td>";
      $b="</td>";
     for ( $var = 1; $var <= 25; $var = $var + 1 )  {
      print_r("<th scope='row'>".($datos[$var]['FOLIO'])."</th>");
      print_r($a.$datos[$var]['FECHASOLICITUD'].$b);
      print_r($a.$datos[$var]['ESTATUS'].$b);
      print_r($a.$datos[$var]['MEDIOENTRADA'].$b);
      print_r($a.$datos[$var]['DESCRIPCIONSOLICITUD'].$b);
      print_r($a.$datos[$var]['OTROSDATOS'].$b);
      print_r($a.$datos[$var]['RESPUESTA'].$b);
      print_r($a.$datos[$var]['TEXTORESPUESTA'].$b);
      print_r($a.$datos[$var]['ESTADO'].$b);
      print_r($a.$datos[$var]['MUNICIPIO'].$b);
      print_r($a.$datos[$var]['SECTOR'].$b);
      print_r("</tr>");
     }
     ?>
  </tbody>
</table>
</div>   
</body>
</html>

