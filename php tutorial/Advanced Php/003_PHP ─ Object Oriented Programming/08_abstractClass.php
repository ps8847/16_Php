Abstract Classes : 

An abstract class is one that cannot be instantiated, only inherited. You declare an abstract
class with the keyword abstract, like this:

When inheriting from an abstract class, all methods marked abstract in the parent's class
declaration must be defined by the child; additionally, these methods must be defined with
the same visibility.

<?php
abstract class MyAbstractClass {
 abstract function myAbstractFunction() ;
 
}
?>