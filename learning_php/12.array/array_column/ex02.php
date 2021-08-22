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
$sobrenome = array_column($arr, "lname", "id");

print_r($sobrenome);
/*
Array
(
    [123] => Martins
    [456] => Lopez
    [567] => Mak
)
 */
?>