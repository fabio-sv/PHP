<?php
// Obtenha coluna de sobrenomes de um registro:
$arr = array(
    array(
        "id"=>123,
        "fname"=>"Joe",
        "lname"=>"Martins"
    ),
    array(
        "id"=>"456",
        "fname"=>"Jane",
        "lname"=>"Lopez"
    ),
    array(
        "id"=>567,
        "name"=>"John",
        "lname"=>"Mak"
    )
);
$sobrenome = array_column($arr, "lname");

print_r($sobrenome);
/*
Array
(
    [0] => Martins
    [1] => Lopez
    [2] => Mak
)
 */
?>