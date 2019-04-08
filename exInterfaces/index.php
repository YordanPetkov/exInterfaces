<?php
	
	include_once 'classPen.php';
	include_once 'classCar.php';
	include_once 'classPrinter.php';
	include_once 'office.php';
	
	$printer = new Printer("Fujitsu",20);
	$car = new Car("Ferari" , "Corvetee");
	$pen = new Pen(11);
	
	$office1 = new Office($printer,$car);
	$office2 = new Office($pen,$car);
	
	echo $office1;
	echo $office2;
	
	$office1->setWriter($office1->changePart($office1->getWriter(),"Toshiba"));
	$office1->setTransport($office1->changePart($office1->getTrasport(),"FastNFurious8"));
	
	echo $office1;



?>