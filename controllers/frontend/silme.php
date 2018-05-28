<?php
$id = $_POST ["id"];

$sth = $db -> prepare ("DELETE from bilgiler WHERE RehberID = ?");
$sth -> execute(array($id));
echo "islem basarili";
header("refresh:2;url=index.php");

?>