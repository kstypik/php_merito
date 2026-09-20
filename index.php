<?php

require_once "classes/Student.php";
require_once "classes/Teacher.php";

$student1 = new Student("Jan Nowak", 24, "WSB Merito Poznań");
$student2 = new Student("Alicja Czerniak", 30, "Politechnika Poznańska");

$teacher = new Teacher("Mirosław", 43, "Język programowania - PHP");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merito PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Uczniowie</h1>
    <h2>Informacje o uczniach</h2>
    <?php
    echo $student1->getInfo() . "<br>";
    echo $student2->getInfo() . "<hr>";
    ?>

    <h2>Informacje HTML - HEREDOC</h2>
    <?php
    echo $student1->getHtml();
    echo $student2->getHtml();
    ?>

    <h1>Nauczyciele</h1>
    <h2>Informacje o nauczycielach</h2>
    <?php
    echo $teacher->getInfo();
    ?>

    <h2>Informacje HTML - HEREDOC</h2>
    <?php
    echo $teacher->getHtml();
    ?>
</body>

</html>