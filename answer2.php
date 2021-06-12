<html>
<head>
  <title> Childr result</title>
</head>
<body>
<h1>Заполнение экземпляра Childr</h1>
<h2>Результаты заполнения экземпляра Child</h2>
<?php 
include_once "child.php";
$child = new Child;
$child->name = $_POST['name'];
$child->sex = $_POST['sex'];
$child->age = $_POST['age'];
echo ("<br> Ваше имя: " .  " ". $child->name);
echo ("<br>Ваш пол: " . " " . $child->sex);
echo ("<br>Страна проживания:". " ". $child->state);
echo ("<br> Сколько Вам лет: " . " " .$child->age ."<br>");
$child->takeBath();
$child ->toStudy($_POST['grader']);
?>
<form method = "post" action ="index.php">
<input type = "submit" name = "button1" value = "Назад">
<form>
</body>
</html>
