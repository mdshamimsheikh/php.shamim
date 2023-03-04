<?php 


//For Loop


for($i=1; $i<10; $i++)
{
    echo 'Number: '.$i.'<br>';
};


//While Loop

echo '<br>';

$i=1;

while($i<=10)
{
    echo $i.', ';
    $i++;
};


echo '<br>';


//Do while Loop

$i=1;
do{
    echo "Md Shmim Sheikh. Pixel: ".$i.'<br>';
    $i++;
}
while($i<10);


//For Each Loop

$fruits=["Banana","Mango","Orange"];

foreach($fruits as $eat)
{
    echo $eat.'<br>';
};



//Index looping

foreach($fruits as $index=> $key)
{
    echo $index.'-'.$key.'<br>';
};



//Value Looping

$data=[
    'name'=>'Md Shamim Sheikh',
    'id'=>192030012,
    'email'=>'shamim@gmail.com'
];

foreach($data as $input=>$value)
{
   echo "$input : $value".'<br>';
};


?>