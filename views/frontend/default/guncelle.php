<?php


$id = $_POST ["id"];

$Ad = $_POST ["Ad"];
$MobilNo = $_POST ["MobilNo"];
$EvNo = $_POST ["EvNo"];
$Eposta = $_POST ["Eposta"];
$Adres = $_POST ["Adres"];

$sth = $db -> prepare ("UPDATE bilgiler SET Ad= ?, mobilNo = ?, evNo = ? ,  Eposta= ? , Adres= ?");
$sth -> execute(array($Ad,$MobilNo,$EvNo,$Eposta,$Adres));
echo "İşlem Başarılı";
header("refresh:2;url=index.php");

?>