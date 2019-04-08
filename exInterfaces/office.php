<?php
	include_once 'classPen.php';
	include_once 'classCar.php';
	include_once 'classPrinter.php';
	
	class Office
	{
		private $writer;
		private $transport;
		
		public function __construct(Writer $writer,Car $transport)
		{
			$this->writer = $writer;
			$this->transport = $transport;
		}
		
		public function __toString()
		{
			echo $this->writer;
			echo $this->transport;
		}
		
		public function changePart(Mashine $mashine,$part)
		{
			$mashine->changePart($part);
			return $mashine;
		}
		
		public function Write($text)
		{
			$this-> writer -> Write($text);
		}
		
		public function getWriter()
		{
			return $this->writer;
		}
		
		public function getTransport()
		{
			return $this->transport;
		}
		
		public function setWriter(Writer $writer)
		{
			$this->writer = $writer;
		}
		
		public function setTransport(Car $transport)
		{
			$this->transport = $transport;
		}
	}

?>