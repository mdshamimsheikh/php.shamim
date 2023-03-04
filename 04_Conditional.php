<?php 


$a=10;
$b=20;

echo $a<$b;

echo '<br>';
echo $a>$b;
echo '<br>';
echo $a>=$b;
echo '<br>';

var_dump($a>$b);
var_dump($a!=$b);
var_dump($a===$b);
var_dump($a==$b);
var_dump($a!==$b);
var_dump($a!=$b);

echo '<br>';


$age=15;

if($age>18)
{
    echo "Your eligable for Driving. Your age is: ".$age;
}

else if($age==18)
{
    echo "Your are eligible. Now your age: ".$age;
}

else
{
    echo "<h2>Sorry</h2> you are not eligable for Driving. Your age is :".$age;
}


echo "<br>";

switch("Green")
{
    case 'Blue':
        echo "The color is Blue";
        break;

        case "Green":
            echo "The color is Green";
            break;
            default:
            echo "Color is not found!";
};


//
echo '<br>';

$post=['Hello'];

if($post='Hello Shamim')
{
    echo 'This is you Shamim';
};


echo '<br>';



if(!empty($post[0]))
{
    echo 'This is a Tree';
};

$posts=['Hello'];
echo '<br>';
echo empty($post)?$post[0]:'This is an Apple';

echo '<br>';

echo !empty($post)?$posts[0]:'This is an Apple';




?>