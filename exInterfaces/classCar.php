<?php
	include_once 'mashineInterface.php';
	class Car implements Mashine
	{
		private $part;
		private $model;
		
		public function __construct($model,$part)
		{
			$this->model = $model;
			$this->changePart($part);
		}
		public function __toString()
		{
			echo "Model : $this->model , Part : $this->getPart()";
			echo "<br>";
		}
		public function changePart($part)
		{
			$this->$part = $part;
		}
		
		public function getPart()
		{
			return $this->part;
		}
	}


?>