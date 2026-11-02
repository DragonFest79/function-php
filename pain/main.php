<?php
function fourch($intik){
    $rez = pow($intik,4);
    echo $rez . "<br/>";
};
fourch(4);

function selections($first){
    $second = 15;
    if($first>$second){
        echo "Більше число - ". $first. "<br/>";
    }elseif($first<$second){
        echo "Більше число - ". $second. "<br/>";
    }else{
        echo "Числа рівні". "<br/>";
    }
}
selections(15);

function prompt($into){
    $rezie = sqrt($into)+pow($into,2)+5;
    echo "Результат - ". $rezie . "<br/>";


}
prompt(9);

function patuzhnist(float|int $a, int $b):float|int{
   if ($b === 0) {
        return 1;
    }
    if ($b < 0) {
        return 1 / patuzhnist($a, -$b);
    }
    if ($n % 2 === 0) {
        $chast = patuzhnist($a, (int)($b / 2));
        return $chast * $chast;
    } 
        return $a * patuzhnist($a, $b - 1);
}
}
?>