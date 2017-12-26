<?php
	interface shape
	{
		public function clac();
	}
	class circle implements shape
	{
		private $radius;
		
		public function __construct($radius)
		{
			$this -> radius =$radius;
		}
		public function calc()
		{
			return $this -> radius * $this -> radius * pi();
		}
	}
	$cir= new circle(4);
	echo $cir->calc(); 
?>