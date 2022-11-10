<?php

$fruits=['jabuka','kruska','sljiva'];

//duljina niza
//echo count($fruits);

//pretrazivanje niza
//var_dump(in_array('jabuka',$fruits));

// dodavanje u niz

$fruits[]='malina'; //prvi način

array_push($fruits, 'jagoda', 'borovnica');
array_unshift($fruits, 'banana'); // dodavanje na početak niza

// uklanjanje iz niza

array_pop($fruits); // uklanjanje s kraja
array_shift($fruits); // uklanjanje s početka niza
unset($fruits[2]); // uklanjanje određenog elementa

// sjeckanje niza

$chunked_array= array_chunk($fruits, 2); // sjeckamo na veličinu 2
//print_r($chunked_array);

// spajanje dva niza

$arr1=[1,2,3];
$arr2=[4,5,6];

$arr3=array_merge($arr1,$arr2);
$arr4=[...$arr1,...$arr2]; // moze i ovako
print_r($arr4);

// kombinizanje nizova

$a=['zelena','zuta','crvena'];
$b=['jabuka','banana', 'jagoda'];

$c=array_combine($a, $b);
print_r($c);
// ključevi niza
$keys=array_keys($c);
print_r($keys);
// flip niza

$flipped=array_flip($c);
print_r($c);

$brojevi=range(1,20);
//print_r($brojevi);

$newnumbers=array_map(function($number){
    return "Number ${number}";
},$brojevi);

//print_r($newnumbers);

$lessthen10=array_filter($brojevi,fn($broj)=>
$broj<10);
print_r($lessthen10);

// suma niza

$sum=array_reduce($brojevi, fn($carry,$number)=>
$carry+$number);

echo $sum;