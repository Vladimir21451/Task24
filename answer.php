//<?php
//$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
//?>
<html>
<head>
  <title> Father result</title>
</head>
<body>
<h1>Заполнение экземпляра Father</h1>
<h2>Результаты заполнения экземпляра Father</h2>
<?php 
include_once "father.php";
$fath = new Father;
$fath->name = $_POST['name'];
$fath->wifename = $_POST['wifename'];
$fath->age = $_POST['age'];
echo ("<br> Ваше имя: " .  " ". $fath->name);
echo ("<br>Имя Вашей жены: " . " " . $fath->wifename);
echo ("<br> Сколько Вам лет: " . " " .$fath->age ."<br>");
$fath->takeBath();
?>
<form method = "post" action ="index.php">
<input type = "submit" name = "button1" value = "Назад">
<form>
</body>
</html>
