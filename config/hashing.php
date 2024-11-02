<?php

return [
    'driver' => 'bcrypt',

    'bcrypt' => [
        'rounds' => 10,
    ],

    'argon' => [
        'memory' => 65536,
        'threads' => 2,
        'time' => 4,
    ],
];
