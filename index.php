<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework for Lesson 8</title>
    <style>
        body {
            max-width: 800;
        }
    </style>
</head>

<body>

    <h5>Заняття 8. Початкові значення властивостей у конструкторі. </h5>
    <hr>

    <?php

    require_once __DIR__ . '/vendor/autoload.php';

    echo "<pre>",
    "
    1.	Зробіть клас Employee, у якому будуть такі властивості: name, surname та salary.
    2.	Зробіть те щоб властивості name і surname були доступні лише читання, а властивість salary - і читання, і записи.
    ",
    "</pre>";

    $employee1 = new Employee("Rodrigo", "Lopes"); //Create a new object $employee1, an instance of the class Employee

    echo $employee1->getInfo(); //Сall the method getInfo() to display information about the object on the screen
    $employee1->setSalary(1777); //trying to change the object's property "salary"
    echo $employee1->getInfo(); //Сall the method getInfo() to display information about the object on the screen

    try {
        $employee1->name = "Umberto"; //trying to change the object's property with the readonly modifier
    } catch (Error $e) {
        echo $e->getMessage() . "<br />"; //Displayed on the screen information about the error
    }
    echo $employee1->getInfo(); //Сall the method getInfo() to display information about the object on the screen

    echo "<hr />";

    echo "<pre>",
    "
    3.  Не підглядаючи в мій код, реалізуйте такий же клас Student.
    4.	Модифікуйте метод transferToNextCourse так, щоб при переведенні на новий курс 
    виконувалася перевірка того, що новий курс не буде більшим.
        ",
    "</pre>";

    $student1 = new Student("Pedro", 4); //Create a new object $student1, an instance of the class Student
    echo $student1->getInfo(); //Сall the method getInfo() to display information about the object on the screen
    $student1->transferToNextCourse(); //Attempt to transfer a student to the next (5) course 
    echo $student1->getInfo(); //Сall the method getInfo() to display information about the object on the screen
    try {
        $student1->transferToNextCourse(); //Attempt to transfer a student to the next (6) course
    } catch (Exception $ex) {
        echo $ex->getMessage(); //Displayed on the screen information about the exception
    }
    echo $student1->getInfo(); //Сall the method getInfo() to display information about the object on the screen

    echo "<hr />";
    ?>

</body>

</html>