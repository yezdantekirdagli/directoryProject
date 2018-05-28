
<!DOCTYPE html PUBLIC "-//W3C//DTD 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title> Telefon Rehberi </title>
</head>
<body>
<form action="kaydet.php" method="post">
İsim: <input type="text" name="Ad" /> <br/>
Cep No: <input type="text" name ="MobilNo" /> <br/>
Ev No: <input type="text" name ="EvNo" /> <br/>
Email: <input type="text" name ="Eposta" /> <br/>
Adres: <textarea rows="8" cols="40" name ="Adres"> </textarea> <br/>
<input type="submit" value ="kaydet" />
</form>
--------------------
<form action="guncelle.php" method="post">
Guncellenecek RehberID : <input type="text" name="id" />
İsim: <input type="text" name="ad" /> <br/>
Cep No: <input type="text" name ="mobilNo" /> <br/>
Ev No: <input type="text" name ="evNo" /> <br/>
Email: <input type="text" name ="Eposta" /> <br/>
Adres: <textarea rows="8" cols="40" name ="Adres"> </textarea> <br/>
<input type="submit" value="guncelle">
</form>
-------------------------------
<form action="silme.php" method="post">
Silinecek RehberID : <input type="text" name="id" />
<input type="submit" value="sil">
</form>

</body>
</html>