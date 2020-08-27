<?php

class User {

    public $id;

    public $nome;

    public $cognome;

    public $email;

    public $password;

    public function __construct($_id, $_nome, $_cognome, $_email, $_password) {
        $this->id = $_id;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
        $this->password = $_password;
    }

    public function stampaUser() {

     echo 'Utente: ' . $this->id . ' ' . $this->nome . ' ' . $this->cognome . ' ' . $this->email . ' ' . $this->password . '<br>';

    }
}


// $tommaso = new User;
// $monica = new User;

// $tommaso->nome = 'Tommaso';
// $tommaso->cognome = 'Venza';
// $tommaso->email = 'tommasovenza@gmail.com';
// $tommaso->password = 'porcone';

// $monica->nome = 'Monica';
// $monica->cognome = 'Poggianti';
// $monica->email = 'monicuzza84@ok.it';
// $monica->password = '12345678';

// $tommaso->stampaUser();
// $monica->stampaUser();

?>