<?php
    if(!file_exists("dato.txt")){
        file_put_contents("dato.txt", "0\r\n");
    }

    if(isset($_GET['data'])){
        $VAR1=$_GET['data'];
        $TEXTO=$VAR1."\r\n";
        file_put_contents("dato.txt",$TEXTO);
    }

    $ARCHIVO = file_get_contents("dato.txt");
    $pos=strpos($ARCHIVO, "\r\n");
    $VAR1=substr($ARCHIVO,0,$pos);
?>

<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content="1">
	</head>
	
	<body>
        <p style="font-size:20px ;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
        color: #707070;
        line-height: 0;"><?php echo $VAR1 ?> </p>
    </body>

</html>