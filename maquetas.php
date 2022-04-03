<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Prueba CSS</title>
  <link rel="stylesheet" type="text/css" href="maquetas.css">
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>

  <div class="rejilla">
    <div class="item4">
      <div class="item6">
        <img src="blue-ladybug.jpg" class="logo w-100 h-100">
      </div>
      <div class="item5">&nbsp;&nbsp;Yoel&nbsp; <i class="fa fa-pencil fa-lg"></i></div>
    </div>
    <div></div>
    <div></div>
    <div class="item2"><a href="formulario.html"> New assessments</a></div>
  </div>
  <div class="rejilla2">
    <div class="item1"><i class="fa fa-envelope"></i>&nbsp;&nbsp; Email: yreyes2903@gmail.com</div>
    <div class="item1"><i class="fa fa-male"></i>&nbsp;&nbsp; Gender: male</div>
    <div class="item1"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Birth Day: 1991-03-29</div>
  </div>
  <div class="rejilla1">
    <!--<div class="grid-item4">
      <div class="grid-centro c-f"><i class="fa fa-pencil-square-o"></i></div>
      <div class="grid-centro1">Questionnaires</div>
    </div>
    <div class="grid-item4">
      <div class="grid-centro c-v"><i class="fa fa-eyedropper"></i></div>
      <div class="grid-centro1">Labs</div>
    </div>
    <div class="grid-item4">
      <div class="grid-centro c-n"><i class="fa fa-cubes"></i></div>
      <div class="grid-centro1">Assessments</div>
    </div>
    <div class="grid-item4">
      <div class="grid-centro c-a"><i class="fa fa-file-excel-o"></i></div>
      <div class="grid-centro1">Reports</div>
    </div>-->
    <?php 
     include("archivo.html");
     ?>

    <?php
    if (isset($_POST['enviar'])) {
            $texto = $_POST['texto'];
            $color = $_POST['color'];
            $icono = $_POST['icono'];
            $estilo = $_POST['estilo'];

            $dato = ".".$estilo."{background:".$color.";}";

            $file=fopen("estilos.css", "a");
            fwrite($file, $dato.PHP_EOL);
            fclose($file);
            $cadena1 = '<div class="grid-item4">';
            $cadena2 = '<div class="grid-centro '.$estilo.'"><i class="'.$icono.'"></i></div>';
            $cadena3 = '<div class="grid-centro1">'.$texto.'</div></div>';
            
            $fil=fopen("archivo.html", "a");
            fwrite($fil, $cadena1.PHP_EOL);
            fwrite($fil, $cadena2.PHP_EOL);
            fwrite($fil, $cadena3.PHP_EOL);
            fclose($fil);          
                   

        }  
    ?>
  </div>

</body>

</html>