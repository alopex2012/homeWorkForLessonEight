<?php

class Employee
{
    public readonly string $name; //This property is read-only
    public readonly string $surname; //This property is read-only
    private $salary;

    public function __construct(string $name, string $surname = "not specified", $salary = 1000)

    {
        if (strlen($name) < 2) {
            throw new InvalidArgumentException("Вказане ім'я - '{$name}' не відповідає умовам" . "<br />");
        } else {
            $this->name = $name;
            $this->surname = $surname;
            $this->salary = $salary;
        }
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getSalary()
    {
        return $this->salary . "$";
    }

    public function getInfo()
    {
        return ("Employee: <br/>" .
            "Name " . $this->getName() . "<br />" .
            "Surname " . $this->getSurname() . "<br />" .
            "Salary " . $this->getSalary() . "<br />" .
            "---------------------------" . "<br />");
    }
}
