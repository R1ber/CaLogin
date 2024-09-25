<?php


namespace App\Models;

class Usuario
{
    private $nickname;
    private $password;

    public function __construct($nickname, $password)
    {
        $this->nickname = $nickname;
        $this->password = $password;
    }

    public function login()
    {
        // Verifica se o nickname é "administrador" e a senha é "admin123"
        if ($this->nickname === 'administrador' && $this->password === 'admin123') {
            return true;
        }
        return false;
    }

    public function getNickname()
    {
        return $this->nickname;
    }
}