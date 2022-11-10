<?php


//// FOR PETLJA
/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($x=0;$x<10;$x++){
//     echo "Number $x <br>";
// }

////////// WHILE PETLJA
/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
$x=6;

// while($x<15){
//     echo " Number $x<br>";
//     $x++;
// }

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/
do{
    echo "Broj $x<br>";
    $x++;
}while($x<5);

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array

$posts=['First_Post', 'Second_Post', 'Third_Post'];

for($x=0;$x<count($posts);$x++){
echo "$posts[$x]<br>";
}

foreach($posts as $post){
    echo "$post<br>";
}
// Use the indexes within the loop
foreach($posts as $index=>$post){
    echo "#$index-$post<br>";
}

/*---ASOCIJATIVNI NIZ---- */

$person=[
    'ime'=>'Daniela',
    'prezime'=>'Berić'
];

foreach($person as $key=>$value){
    echo "$key-$value<br>";
}