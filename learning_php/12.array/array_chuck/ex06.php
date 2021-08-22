<?php
// Divide uma matriz em pedaços de dois e preserve as chaves originais:
$pessoas = array("Petter"=>"19", "Joe"=>"20", "Jane"=>"32", "Mike"=>"17");

print_r(array_chunk($pessoas, 2, true)) 
/*
Array
(
    [0] => Array
        (
            [Petter] => 19
            [Joe] => 20
        )

    [1] => Array
        (
            [Jane] => 32
            [Mike] => 17
        )

)
*/
?>