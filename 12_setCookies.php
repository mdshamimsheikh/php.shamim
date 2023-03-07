</php

setcookie('num','PIZZAHAT',time()+86400*30);

if(isset($_COOKIE['num']))
{
    echo ",That is ";
    echo $_COOKIE['num'];
}

setcookie('num',' ',time()-86400*30);

?>
