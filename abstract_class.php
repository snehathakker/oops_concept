<?php
/**
 * Class student
 *
 * @package    Example
 * @subpackage Test
 * @author     sneha <sneha@example.com>
 */

/**
 * Class Student
 */
abstract class Student
{
    public $name;
    public $age;

    /**
     * Display the name with age.
     *
     * @return string
     *   return formatted string.
     */
    public function describe()
    {
        return $this->name . "," . $this->age . "years ago";
    }

    /**
     * Abstract function
     *
     * @return mixed
     */
    abstract public function greet();
}

/**
 * Class Person
 *
 * @package Example
 * @author  sneha <sneha@example.com>
 */
class Person extends Student
{
    /**
     * Return ABC
     *
     * @return mixed|string
     */
    public function greet()
    {
        return "ABC";
    }

    /**
     * Return decription of student
     *
     * @return string
     */
    public function describe()
    {
        return parent::describe() . ",I am BCA student";
    }
}

$stu = new person();
$stu->name = "john";
$stu->age = 22;
echo $stu->describe();
echo $stu->greet();
