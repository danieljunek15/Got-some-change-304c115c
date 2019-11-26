<?php
$array = $argv[1];
$money = intval($array);
if(!$money == 0){
    echo intval($array);
    echo "x 1 euro";
    exit;
}else {
    exit ("Geen wissel geld.");
}