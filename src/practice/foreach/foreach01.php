<?php

// Create an array of pandas.
$pandas = [
    'first'     => 'Lushui',
    'second'    => 'Pali',
    'third'     => 'Jasmina'
];

// Iterate our panda array.
foreach ($pandas as $position => $panda) {
    echo "You're the {$position} panda, {$panda}<br>";
}