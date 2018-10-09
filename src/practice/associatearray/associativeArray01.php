<?php

// Create an array of associative arrays (users).
$users = [
    ['id' => 1, 'name' => 'Anne', ],
    ['id' => 2, 'name' => 'Mary', ],
    ['id' => 3, 'name' => 'Jenny',],
    ['id' => 4, 'name' => 'Joe',  ],

];

// Dump a value.
echo "ID:{$users[2]['id']}, Name: {$users[2]['name']}<br><br>";


foreach ($users as $user) {
    // Output.
    echo "ID:{$user['id']}, Name: {$user['name']}<br>";
}
