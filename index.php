<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Главная </title>
    <link  href="style.css" rel="stylesheet"/>
</head>
<body>
    <div class ="first">
    <h2> Простейшие примеры работы с классами.</h2>
   <?php include_once 'family.php';
    include_once "father.php";?>
   
    <?php include_once "mather.php";
    include_once "child.php"; ?>
    </div>
    <div class = "imges">
    <img src ="classDiagram.jpeg" alt ="Схема" width= "400px" height="400px">
    </div>
    <div class = "fromFamily">
    <form class ="formfamily" name ="formfamily" method = "post" action = "answer3.php" >
        <div class ="frmfamily_caption"><h3> Создание экземпляра класса Family</h3></div>
        <div> Фамилия семьи:</div>
        <input type="text" name = "name" value="<?php echo $_REQUEST['name'];?>">
        <div>Количество членов семьи:</div>
        <input type="text" name = "peaplecount">
        <div>Сколько лет семье:</div>
        <input type="text" name = "yearcreation">
        <div>Дата встречи семьи:</div>
        <input type="text" name = "date">
        <input type="submit" name="submit_btn" value="Отправить">
      </form>

    </div>
    <div class = "form-class">
      <form class ="frmfather" name ="formfather" method = "post" action = "answer.php" >
        <div class ="frmfather_caption"><h3> Создание экземпляра класса Father</h3></div>
        <div> Ваше имя</div>
        <input type="text" name = "name" value="<?php echo $_REQUEST['name'];?>">
        <div>Имя Вашей жены</div>
        <input type="text" name = "wifename">
        <div>Сколько Вам лет</div>
        <input type="text" name = "age">
        <input type="submit" name="submit_btn" value="Отправить">
      </form>
    </div>
    <div class = "fromChild">
    <form class ="frmchild" name ="formchild" method = "post" action = "answer2.php" >
        <div class ="frmchild_caption"><h3> Создание экземпляра класса Child</h3></div>
        <div> Ваше имя</div>
        <input type="text" name = "name" value="<?php echo $_REQUEST['name'];?>">
        <div>Ваш пол</div>
        <input type="text" name = "sex">
        <div>Сколько Вам лет</div>
        <input type="text" name = "age">
        <div>В каком Вы классе</div>
        <input type="text" name = "grader">
        <input type="submit" name="submit_btn" value="Отправить">
      </form>
    </div>
</body>
</html>