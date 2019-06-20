<?php
function divideZero($a,$b){
    if ($b == 0){
        throw new Exception('Devide by zero');
    }

    return $a/$b;
}

try {
    echo divideZero(1,0);
    echo "Этот код никогда не выполнится. Но это не точно";
} catch (Exception $exception) {
    echo "<br>".$exception->getMessage();
    echo "<br>".$exception->getFile();
    echo "<br>".$exception->getLine();
}