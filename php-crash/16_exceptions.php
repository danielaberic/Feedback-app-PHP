<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other 
  programming languages. An exception can be thrown, 
  and caught ("catched") within PHP. Code may be surrounded in a try block,
   to facilitate the catching of potential exceptions.
    Each try must have at least one corresponding catch or finally block.
*/

function division ($x){
    if(!$x){
       throw new Exception('Division by zero');
    }
    return 1/$x;
}



try{
    echo division(5);
    echo division(0);
} catch(Exception $e){
echo 'Cought exception',$e->getMessage(),' ';
}finally{ 
    echo 'hello';
}
// finally će se uvijek izvršiti, bez obzira na excepion