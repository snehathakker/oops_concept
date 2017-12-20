<?php
	class result
	{
		private $subject="ionic";
		
		public function __construct($subject=null)
		{
			if($subject)
			{
				$this->subject=$subject;
			}
		}
		public function getsubject()
		{
			return 'The subject is:' .$this->subject;
		}
	}
	$r= new result();
	echo $r->getsubject();
?>