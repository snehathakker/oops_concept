<?php
	abstract class student
	{
		public $name;
		public $age;
		
		public function describe()
		{
			return $this->name.",".$this->age."years ago";
		}
		abstract public function greet();
	}
	class person extends student
	{
		public function greet()
		{
			return "ABC";
		}
		public function describe()
		{
			return parent::describe().",I am BCA student";
		}
	}
	$stu = new person();
	$stu->name="john";
	$stu->age=22;
	echo $stu->describe();
	echo $stu->greet();
?>