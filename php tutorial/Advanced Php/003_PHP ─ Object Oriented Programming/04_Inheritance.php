
<?php

class Books{

	/* Member variables */
	var $price;
	var $title;
   
   
	/* Member functions */
   
	function __construct( $par1, $par2 ){
	   $this->price = $par1;
	   $this->title = $par2;
	  }
	  
	function getPrice(){
	echo $this->price ."<br/>";
	}
   
	function getTitle(){
	echo $this->title ." <br/>";
	}
   }

class Novel extends Books{

	var $publisher;
	function setPublisher($par){
	$this->publisher = $par;
	}

	function getPublisher(){
	echo $this->publisher. "<br />";
	}

	function getPrice(){
		echo $this->price . "<br/>";
		return $this->price;
	}

	function getTitle(){
		echo $this->title . "<br/>";
		return $this->title;
	}
   }
?>