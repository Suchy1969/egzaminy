<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="styl_1.css">
	<title> Wędkujemy</title>



</head>

<body>

<section id="baner"> 
<h1>
	Portal dla wędkarzy
</h1>


</section>


<section id="lewy"> 
	<h2>Ryby drapieżne naszych wód </h2>
	<ul>
<?php

$Db = mysqli_connect("localhost", "root", "", "wedkowanie");
$zapytanie = mysqli_query($Db, "SELECT nazwa,wystepowanie FROM Ryby WHERE styl_zycia = 1;");

while ($zapytanie_array = mysqli_fetch_array($zapytanie)){

echo "<li>".$zapytanie_array['nazwa']." występowanie ".$zapytanie_array['wystepowanie'] ."</li>";



}
	





mysqli_close($Db);
?>
</ul>

</section>


<section id="prawy"> 
	<img src="ryba1.jpg" alt="sum" />
</br>
  <a href="kwerendy.txt" download>Pobierz kwerendy</a>

</section>


<section id="stopka"> 
	<p>
		Stronę wykonał: 999999999
	</p>
</section>






























</body>







</html>