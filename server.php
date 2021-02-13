<?php
function add($x,$y){
    return $x + $y;
}
function sub($x,$y){
    return $x - $y;
}
function div($x,$y){
    if($b == 0)
        return "На 0 делить нельзя!";
    return $x / $y;
}
function mult($x,$y){
    return $x * $y;
}


function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case '+':
            echo add($arg1,$arg2);
        break;

        case '-':
            echo sub($arg1,$arg2);
        break;
    
        case '/':
            echo div($arg1,$arg2);
        break;

        case '*':
            echo mult($arg1,$arg2);
        break;
    }
}
?>
