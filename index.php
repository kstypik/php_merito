<?php

require_once "classes/Student.php";
require_once "classes/Teacher.php";

$student1 = new Student("Jan", 24, "WSB Merito Poznań");
$student2 = new Student("Alicja", 30, "Politechnika Poznańska");

$teacher = new Teacher("Mirosław", 43, "Język programowania - PHP");

$student3 = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["newStudent"])) {
    $new_name = $_POST['name'];
    $new_age = $_POST['age'];
    $new_school = $_POST['school'];
    $student3 = new Student($new_name, $new_age, $new_school);
}

$newTeacher = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["newTeacher"])) {
    $new_name = $_POST['name'];
    $new_age = $_POST['age'];
    $new_subject = $_POST['subject'];
    $newTeacher = new Teacher($new_name, $new_age, $new_subject);
}

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
    <form method="POST">
        <label for="name">Imię:</label>
        <input type="text" name="name" id="name" autofocus autocomplete="off">

        <label for="name">Wiek:</label>
        <input type="number" name="age" id="age">

        <label for="name">Szkoła:</label>
        <input type="text" name="school" id="school">

        <button type="submit" name="newStudent">Dodaj ucznia</button>
    </form>
    <h2>Informacje o uczniach</h2>
    <?php
    echo $student1->getInfo() . "<br>";
    echo $student2->getInfo() . "<br>";
    if ($student3 !== null) {
        echo $student3->getInfo() . "<hr>";
    }
    ?>

    <h2>Informacje HTML - HEREDOC</h2>
    <?php
    echo $student1->getHtml();
    echo $student2->getHtml();
    if ($student3 !== null) {
        echo $student3->getHtml();
    }
    ?>

    <h1>Nauczyciele</h1>
    <form method="POST">
        <label for="name">Imię:</label>
        <input type="text" name="name" id="name" autofocus autocomplete="off">

        <label for="name">Wiek:</label>
        <input type="number" name="age" id="age">

        <label for="name">Przedmiot:</label>
        <input type="text" name="subject" id="school">

        <button type="submit" name="newTeacher">Dodaj nauczyciela</button>
    </form>
    <h2>Informacje o nauczycielach</h2>
    <?php
    echo $teacher->getInfo() . "<br>";
    if ($newTeacher !== null) {
        echo $newTeacher->getInfo() . "<hr>";
    }
    ?>

    <h2>Informacje HTML - HEREDOC</h2>
    <?php
    echo $teacher->getHtml();
    if ($newTeacher !== null) {
        echo $newTeacher->getHtml();
    }
    ?>
</body>

</html>