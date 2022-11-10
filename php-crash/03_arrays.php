<?php
//NIZOVI- DVA NAČINA

$niz1= [1,2,3];
$niz2=array('jabuka','kruška');

//print_r($niz2); ispisuvemo pomoću print_r ili var_dump

//var_dump($niz1);

// za ispis jednog elementa koristimo echo, ispis je 2
//echo $niz1[1];

//***************** ASOCIJATIVNI NIZOVI */

$niz3=[
    5=>'blue',
    7=>'white',
    8=>'red'
];
//echo $niz3[5];

$hex=[
    'red'=>'#f00',
    'blue'=>'#0f0'
];
//echo $hex['red'];

$person=[
    'ime'=>'Daniela',
    'prezime'=>'Berić'
];
//echo $person['ime'];
/************************ MULTIDIMENZIONAZNI NIZOVI********************** */

$people=[
    [
        'ime'=>'Daniela',
        'prezime'=>'Berić'
    ],
    [
        'ime'=>'Ana',
        'prezime'=>'Berić'
    ],
    [
        'ime'=>'Sanja',
        'prezime'=>'Berić'
    ]
];

// Accessing values in a multi-dimensional array
//echo $people[2]['ime']; //// ispis Sanja


// Encode to JSON
//var_dump(json_encode($people)); *********** ispis dvodim niza

// Decode from JSON
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
var_dump(json_decode($jsonobj));

