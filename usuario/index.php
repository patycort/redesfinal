<?php
$advertencia="Usario creado correctamente";
$url="../index.html";

  if(!file_exists("usuario.txt")){
    file_put_contents("usuario.txt","");
  }

  if(!isset($_GET['check'])){
    $advertencia ="No has aceptado los términos y condiciones";
    $url="../nuevo.html";
  }
  else{
    if(isset($_GET['usuario']) && isset($_GET['pswd1'])&&  isset($_GET['pswd2'])){
      $usuario=$_GET['usuario'];
      $pswd1=$_GET['pswd1'];
      $pswd2=$_GET['pswd2'];
      $check=$_GET['check'];

      if($pswd1==$pswd2){
          $info=$usuario."\n".$pswd1;
         file_put_contents("usuario.txt",$info);
      }
      else{
        $advertencia="Las contraseñas no coinciden";
        $url="../nuevo.html";
      }
    }
  }

  
?>



<html>
  <head>
    <title>PHP Test</title>
    <meta http-equiv="refresh" content="2; url=<?php echo $url ?>">
  </head>
  <body>
    <p><?php echo $advertencia; ?></p>
    
  </body>
  
</html>

<!-- <iframe src=link> -->