<?php
	interface mscit	
	{
		public function setname($name);
		public function getname();
		
	}
	class student implements mscit
	{
		private $section;
		public function setname($name)
		{
			$this->section=$name;
		}
		public function getname()
		{
			return $this ->section;
		}
	}
	$s= new student();
	$s->setname("john");
	echo $s->getname();
?>