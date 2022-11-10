<?php
/*< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== Identical to
!= Not equal to
!== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
// code to be executed if condition is true
}
*/

//  $age=18;

//  if($age>=18){
//      echo 'punoljetan';
//  }else{
//      echo 'maloljetan';
//  }

//  $time=date("H"); ///////////// funkcija koja dohvaća vrijeme u danu

//  if($time<12){
//      echo 'Dobro Jutro';
//  }elseif($time<18){
//      echo 'Dobar dan';
//  }else{
//      echo 'Dobra večer';
//  }

 /////////////// ZANIMLJIVO ZA DATABASE
// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.
$posts=['Prvi post'];

//  if(!empty($posts)){
//      echo $posts[0];
//  }else {
//      echo 'Nema postova';
//  }

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo based on a condition (Same as above)
//echo !empty($posts)? $posts[0]:'nema postova';
// Assign a variable based on a condition
//$first_post=!empty($posts)? $posts[0]:'nema postova';

//echo $first_post;

/****************AKO NEMA ELSA MOŽEMO NULL KORISTIT ********************/
// $first_post=!empty($posts)? $posts[0]:null;
// echo $first_post;

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL

// $first_post=$posts[0]??null; /////////// koristimo ako imamo null umjesto ternarnog
// echo $first_post;

$favouritecolor='red';

switch($favouritecolor){
    case 'red':
        echo 'Your favourite color is red';
        break;
    case 'blue':
        echo 'Your favourite color is blue';
        break;
        case 'green':
            echo 'Your favourite color is green';
            break;
            default: 
            echo 'Your favourite color is not red, green or blue';

}


