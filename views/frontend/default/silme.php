<?php
$id = $_POST ["id"];

$sth = $db -> prepare ("DELETE from bilgiler WHERE RehberID = ?");
$sth -> execute(array($id));
echo "İşlem Başarılı";
header("refresh:2;url=index.php");

?>