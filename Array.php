<?php


// Simple Arary For PHP


$arry=[10,20,30,4,40,8];

// echo $arry[1];
// var_dump($arry);

$dump=array(10,20,2,34,32);

// echo $dump[0];


// Associative array 

$marks=[

1=>'Blue',
2=>'Red',
5=>'Green',
'*'=>'not found'

];

// echo $marks['*'];


$colors=[

    'blue'=>'#ff0', 
    'Green'=>'#ebf',
    'Email'=>'#ee6f'

    ];

    // echo $colors['blue'];


$name=[

    'name'=>'shamim',
    'id'=>192030012,
    'Batch'=>'First',
    'Email'=>'shamim@gmail.com'
    
    ];


    // echo '<h1><i>'.$name['name'].'</i></h1>';

//Multidimensional Array

$multipleArray=[

    [
        'name'=>'shamim',
    'id'=>192030012,
    'Batch'=>'First',
    'Email'=>'shamim@gmail.com'
    ],

    [
        'name'=>'shamima',
    'id'=>192030013,
    'Batch'=>'First',
    'Email'=>'shamima@gmail.com'
    ],

    [
        'name'=>'shantona',
    'id'=>192030014,
    'Batch'=>'First',
    'Email'=>'shantona@gmail.com'
    ]
    
    ];

    echo var_dump($multipleArray).'<br>';

    echo $multipleArray[0]['name']; echo '<br>';
    echo $multipleArray[1]['name'];echo '<br>';
    echo $multipleArray[2]['Email'];




?>