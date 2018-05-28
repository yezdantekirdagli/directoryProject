<!DOCTYPE html PUBLIC "-//W3C//DTD 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title> Telefon Rehberi </title>
</head>
<body>
<?php

$sth = $db -> prepare ("SELECT * FROM bilgiler);
$sth -> execute();
$result = $sth -> fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $yaz) {
echo "Ad: ".$yaz["Ad"]." <br />";
echo "Mobil: ".$yaz["Mobilno"]." <br />";
echo "Ev: ".$yaz["Evno"]." <br />";
echo "Mail: ".$yaz["Eposta"]." <br />";
echo "Adres: ".$yaz["Adres"]." <br />";

}
?>
------------------------------------------
$sth = $db -> prepare ("SELECT * FROM bilgiler WHERE RehberID = ?);
$sth -> execute(array(3));
$result = $sth -> fetch(PDO::FETCH_ASSOC);

echo "</br> Ad: ".$yaz["Ad"]." <br />";
echo "Mobil: ".$yaz["Mobilno"]." <br />";
echo "Ev: ".$yaz["Evno"]." <br />";
echo "Mail: ".$yaz["Eposta"]." <br />";
echo "Adres: ".$yaz["Adres"]." <br />";

</body>
</html>