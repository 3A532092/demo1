<?php

// Create an array of pandas.
$pandas = ['Lushui', 'Jasmina', 'Pali'];

// Get the first item from the array.
$panda = $pandas[0];

// Echo the result.
echo $panda.'<br><br>';

for ($i=0; $i<3; $i++){
    echo $pandas[$i].'<br>';
}

echo '<br>';

foreach ($pandas as $panda){
    echo $panda.'<br>';
}

echo '<br>';

foreach ($pandas as $i=>$panda){
    echo $i."=>".$panda.'<br>';
}

