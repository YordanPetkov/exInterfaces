<?php
	include_once 'writerInterface.php';
	include_once 'mashineInterface.php';
	class Printer implements writerz,Mashine
	{
		private $part;
		private $paper;
		
		public function __construct($part,$paper)
		{
			$this->part = $part;
			$this->paper = $paper;
		}
		public function changePart($part)
		{
			$this->part = $part;
		}
		
		public function getPart()
		{
			return $this->part;
		}
		
		public function Write($text)
		{
			if($paper!=0)
			{
				echo $text;
				$paper--;
			}
			else
				echo "Printer not have a paper!!!";
		}
		
				public function __toString()
		{
			echo "Paper : $this->paper , Part : $this->getPart()";
			echo "<br>";
		}
	}


?>