<br>
<hr>
<h3> Calling Constructor Functions
 </h3>
<hr>
<br>

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
?>

<?php
	$physics = new Books( "Physics for High School", 10 );
	$maths = new Books ( "Advanced Chemistry", 15 );
	$chemistry = new Books ("Algebra", 7 );

/* Get those set values */
	$physics->getTitle();
	$chemistry->getTitle();
	$maths->getTitle();

	$physics->getPrice();
	$chemistry->getPrice();
	$maths->getPrice();
?>

