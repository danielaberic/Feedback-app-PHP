<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
  - Functions have their own local scope as opposed to global scope
*/

$y=12;
function registerUser(){
    global $y; // ako želimo koristiti globalnu varijablu u funkciji
    echo $y; 
    echo 'User Registerd';
    $x=10;
}

//echo $x; ne radi jer funkcija ima svoj scope
// Running a function
//registerUser();

// Adding params

function registerUser1($email){
    echo "$email Registerd";
}

//registerUser1('danielaberic@fesb.hr');

// Returning values

function zbroj($arg1, $arg2){
    return $arg1+$arg2;
}

// echo zbroj(5,4);

// Saving to a variable

$suma=zbroj(5,3);
//echo $suma;

$razlika=function($n1,$n2){
    return $n1-$n2;
};
//echo $razlika(10,6);

$umnozak=fn($n1,$n2)=> $n1*$n2;
echo $umnozak(7,3);