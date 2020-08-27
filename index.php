<?php

require_once __DIR__ . '/Users.php';

$array_utenti = [
    [
        'id' => 1,
        'nome' => 'Tommaso',
        'cognome' => 'Venza',
        'email' => 'tommasovenza@gmail.com',
        'password' => '473289',
    ],
    [
        'id' => 2,
        'nome' => 'Monica',
        'cognome' => 'Poggianti',
        'email' => 'monica@gmail.com',
        'password' => 'sadi89ew8q9',
    ],
    [
        'id' => 3,
        'nome' => 'Simone',
        'cognome' => 'Bellini',
        'email' => 'pupino@gmail.com',
        'password' => 'sudia8w9a8du',
    ],
    [
        'id' => 4,
        'nome' => 'Gino',
        'cognome' => 'Cardamone',
        'email' => 'ginetto@gmail.com',
        'password' => '948oxnuiqp',
    ],
    [
        'id' => 5,
        'nome' => 'Francesco',
        'cognome' => 'Casapieri',
        'email' => 'casaofmetal@gmail.com',
        'password' => 'dus8a7bdiaus0',
    ],
];

    foreach ($array_utenti as $user) {

        $utente = new User($user['id'], $user['nome'], $user['cognome'], $user['email'], $user['password']);

        echo $utente->stampaUser();

    }

?>
