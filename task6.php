<?php
function trinary_Test($n){
$r = $n > 30
? "greater than 30"
: ($n > 20
? "greater than 20"
: ($n >10
? "greater than 10"
: "Input a number atleast greater than 10!")); 
echo $n." : ".$r."\n";
}
trinary_Test(15);
trinary_Test(16);
trinary_Test(11);
trinary_Test(3);
?>