<?php

$j = '';
for($i = 1; $i <= 6; $i++){
    $j .= '#';
    echo "$j <br>";
    if($i>=6){
        echo " ( -- )";
    }
}

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";

for($l = '#'; $l !== '#######'; $l .= '#'){
    echo "$l <br>";
    if($l == '######'){
        echo " ( -- )";
    }
}