<?php 

class calculation{  //calculation is a class you can create multiple class in a project

    public $a,$b,$c;  //Variable OOP called Propertise

    function sum()   //Method and method is a function
    {
        $this->c=$this->a+$this->b;
        return $this->c;
    }
function sub()  //Method and method is a function
{
    $this->c=$this->a-$this->b;
    return $this->c;
}
};

$c=new calculation(); //This is a Object

$c->a=100;
$c->b=120;

echo $c->sum();

echo '<br>';

$c1=new calculation();

$c1->a=100;
$c1->b=120;

echo $c1->sub();

?>