<?php
	include_once 'writerInterface.php';
	class Pen implements writerz
	{
		private $ish;
		public function __construct($ish)
		{
			$this->ish = $ish;
		}
		public function Write($text)
		{
			for($i=0;i<strlen($text),$ish!=0;$i++)
			{
				echo $text[$i];
			}
		}
		
				public function __toString()
		{
			echo "ish : $this->ish";
			echo "<br>";
		}
	}


?>