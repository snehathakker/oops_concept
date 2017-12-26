<?php
	class subject
	{
		public $ionic;
		public $laravel;
		
		public function result()
		{
			return "result->" . $this->ionic .",". $this->laravel;
		}
	}
	$sub = new subject();
	
	$sub->ionic = '54';
	$sub->laravel = '55';
	
	echo $sub->result();
?>