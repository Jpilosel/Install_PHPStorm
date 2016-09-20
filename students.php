<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

    foreach ($students as $key => $value){
        echo  $key . ' est agé de ' . $value . ' ans ' . '<br/>';
    }

$nbetudiant = count($students);
$sommenote =  array_sum($students);

$moyenne = $sommenote / $nbetudiant ;


echo '<br/>' . 'La moyenne d\'age est de $moyenne ' . $moyenne . ' ans.'

?>
