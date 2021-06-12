<html>
<head>
  <title> Childr result</title>
</head>
<body>
<h1>Заполнение экземпляра Family</h1>
<h2>Результаты заполнения экземпляра Family</h2>
<?php 
include_once "child.php";
$fam = new Family;
$fam->name = $_POST['name'];
$fam->peaplecount = $_POST['peaplecount'];
$fam->yearcreation = $_POST['yearcreation'];
$fam->date = $_POST['date'];
echo ("<br>Фамилия семьи:: " .  " ". $fam->name);
echo ("<br>Страна проживания:: " .  " ". $fam->state);
echo ("<br>Количество членов семьи: " . " " . $fam->peaplecount);
//echo ("<br>Сколько лет семье: " . " " . $fam->yearcreation);
echo ("<br> Сколько лет семье: " . " " . $fam->yearcreation."<br>");
//$fam->takeBath();
$fam ->holdMeeting($_POST['date']);
?>
<form method = "post" action ="index.php">
<input type = "submit" name = "button1" value = "Назад">
<form>
</body>
</html>
