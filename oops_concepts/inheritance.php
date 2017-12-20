<?php
	class mscit
	{
		private $subject;
		
		public function setsubject($subject)
		{
			$this->subject=$subject;
		}
		public function print()
		{
			return "This subject:" .$this->subject;
		}
	}
	class result extends mscit
	{
		
	}
	$r = new result();
	$r->setsubject('ionic');
	echo $r->print();
?>