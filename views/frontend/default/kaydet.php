<?php
$Ad = $_POST ["Ad"];
$MobilNo = $_POST ["MobilNo"];
$EvNo = $_POST ["EvNo"];
$Eposta = $_POST ["Eposta"];
$Adres = $_POST ["Adres"];

$sth = $db -> prepare (INSERT INTO bilgiler (ad,mobilNo, evNo, Eposta, Adres) VALUES (?,?,?,?,?)");
$sth -> execute(array($Ad,$MobilNo,$EvNo,$Eposta,$Adres));
echo "İşlem Başarılı";
header("refresh:2;url=index.php");
?>