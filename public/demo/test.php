<?php
/*$a = 1;
$b = 1;
$c = $a + $b++;
echo $c;
echo 'Однажды : "I\'ll be back"';
$great = 'Hello!';
for ($i = 0; $i <=3; $i++) {
    echo $great[$i];
}

echo $great[strlen($hello)-1];*/

$arr = ['h', 'e', 'l', 'l', 'o', '!'];
foreach ($arr as $key =>$value) {
    if ($value != 'o') 
    echo $value;
}