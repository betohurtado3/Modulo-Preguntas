<?
require "conectar.php";
///Recibe Variables

$CAMPAÑA          = $_POST['campaña'];
$PREGUNTA1        = $_POST['pregunta1'];
$PREGUNTA2        = $_POST['pregunta2'];
$PREGUNTA3        = $_POST['pregunta3'];
$PREGUNTA4        = $_POST['pregunta4'];

//Inserta en DB
$sql = "INSERT INTO preguntas VALUES (0,'$CAMPAÑA','$PREGUNTA1',0)";
$sql2 = "INSERT INTO preguntas VALUES (0,'$CAMPAÑA','$PREGUNTA2',0)";
$sql3 = "INSERT INTO preguntas VALUES (0,'$CAMPAÑA','$PREGUNTA3',0)";
$sql4 = "INSERT INTO preguntas VALUES (0,'$CAMPAÑA','$PREGUNTA4',0)";

///true o false (si el codigo de Sql ingresado esta correcto)
$respuesta = mysqli_query($con, $sql);
$respuesta2 = mysqli_query($con, $sql2);
$respuesta3 = mysqli_query($con, $sql3);
$respuesta4 = mysqli_query($con, $sql4);


if($respuesta)
    echo 1;
else 
    echo 0;
if($respuesta2)
    echo 1;
else 
    echo 0;
if($respuesta3)
    echo 1;
else 
    echo 0;
if($respuesta4)
    echo 1;
else 
    echo 0;
?>
    
   