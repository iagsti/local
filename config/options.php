<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Select options configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your select field options as an alternative way
    | to store it in the database.
    |
    */

    'blocos' => [
        ['value' => '0', 'name' => 'Não se aplica'],
        ['value' => '0', 'name' => 'Não se aplica'],
        ['value' => 'A', 'name' => 'A'],
        ['value' => 'B', 'name' => 'B'],
        ['value' => 'C', 'name' => 'C'],
        ['value' => 'D', 'name' => 'D'],
        ['value' => 'E', 'name' => 'E'],
        ['value' => 'F', 'name' => 'F'],
        ['value' => 'G', 'name' => 'G'],
        ['value' => 'PRINCIPAL', 'name' => 'PRINCIPAL'],
    ],

    'pavimentos' => [
        ['value' => '0', 'name' => 'Não se aplica'],
        ['value' => 'terreo', 'name' => 'Térreo'],
        ['value' => 'primeiro', 'name' => 'Primeio'],
        ['value' => 'segundo', 'name' => 'Segundo'],
        ['value' => 'terceiro', 'name' => 'Terceiro'],
    ],

    'departamentos' => [
        ['value' => '0', 'name' => 'Não se aplica'],
        ['value' => 'astronomia', 'name' => 'Astronomia'],
        ['value' => 'atmosfericas', 'name' => 'Ciências Atmosféricas'],
        ['value' => 'geofisica', 'name' => 'Geofísica'],
        ['value' => 'adm', 'name' => 'Administração'],
        ['value' => 'biblioteca', 'name' => 'Biblioteca'],
    ]
];
