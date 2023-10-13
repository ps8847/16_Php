Calling parent constructors : 
Instead of writing an entirely new constructor for the subclass, let's write it by calling the
parent's constructor explicitly and then doing whatever is necessary in addition for
instantiation of the subclass. Here's a simple example:

<?php
class Name
{
 var $_firstName;
 var $_lastName;
 function Name($first_name, $last_name)
 {
 $this->_firstName = $first_name;
 $this->_lastName = $last_name;
 }
 function toString() {
 return($this->_lastName .", " .$this->_firstName);
 }
}
class NameSub1 extends Name
{
 var $_middleInitial;

 function NameSub1($first_name, $middle_initial, $last_name) {
 Name::Name($first_name, $last_name);
 $this->_middleInitial = $middle_initial;
 }
 function toString() {
 return(Name::toString() . " " . $this->_middleInitial);
 }
}


?>