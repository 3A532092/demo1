<?php

// Create an array of pandas.
$pandas = [
    'first'     => 'Lushui',
    'second'    => 'Pali',
    'third'     => 'Jasmina'
];

// Iterate our panda array.
foreach ($pandas as $position => $panda) {

    // If the position variable equals 'second'.
    if ($position == 'second') {

        // Continue the iteration.
        continue;
    }

    // Output.
    echo "You are the {$position} panda, {$panda}<br>";
}
