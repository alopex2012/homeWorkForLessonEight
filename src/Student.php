<?php


class Student
{
    private readonly string $name;
    private $course;

    public function __construct(string $name, $course = 1)
    {
        $this->name = $name;
        $this->course = $course;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function transferToNextCourse()
    {
        if ($this->checkNextCourse()) {
            $this->course += 1;
        } else {
            throw new Exception("Студент {$this->name} зараз вже на {$this->course} курсі" . "<br />");
        }
    }

    private function checkNextCourse()
    {
        return ($this->course < 5);
    }

    public function getInfo()
    {
        return ("Student: <br/>" .
            "Name " . $this->getName() . "<br />" .
            "Course " . $this->getCourse() . "<br />" .
            "---------------------------" . "<br />");
    }
}
