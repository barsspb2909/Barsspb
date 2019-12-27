<?php

class B{

}



class A extends B{
	public $p3;
	public $p2;
	public $p1;
	public $p4;
	function  __construct($p1,$p2,$p3,$p4){
		$this -> p1= $p1;
		$this -> p2= $p2;
		$this -> p3= $p3;
		$this -> p4= $p4;
	}
}
	
$p3 = new B();
$p2 = new B();
$p1 = new B();
$p4 = new B(); 
$p5 = new A($p3,$p4,$p1,$p2);
	
	
	
 ?>