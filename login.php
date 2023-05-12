<?php
$url="";
$warning="";

if(isset($_GET['usuario'])&&isset($_GET['pswd'])){
  $usuario=$_GET['usuario'];
  $pswd=$_GET['pswd'];
  
  $archivo=file_get_contents("usuario/usuario.txt");
  $pos=strpos($archivo, "\n");
  $usuario_txt=substr($archivo,0,$pos);
  $len=strlen($archivo);
  $pswd_txt=substr($archivo,$pos,$len);

    if(($usuario==$usuario_txt)&& ($pswd==$pswd_txt)){
      $url="dashboard/";
      $warning="Iniciando Sesión...";
    }
    else{
      $url="/";
      $warning="Contraseña o Usuario invalido";
    }
  }
?>

<html> 
<head> 
  <meta http-equiv="refresh" content="2; url=<?php echo $url ?>">
</head>

<body> 
  <p> Login...Verificando datos</p>
  <p> <?php echo $warning ?> </p>


</body>
  
</html>