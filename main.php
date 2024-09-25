<?php
// main.php

require_once __DIR__ . '/vendor/autoload.php'; // Inclui o autoload do Composer

use App\Models\Usuario; // Carrega a classe Usuario

// Obtém os dados do formulário
$nickname = $_POST['nickname'] ?? '';
$password = $_POST['password'] ?? '';

// Instancia um objeto da classe Usuario
$usuario = new Usuario($nickname, $password);

// Verifica as credenciais
if ($usuario->login()) {
    echo "Login aprovado! Bem-vindo, " . $usuario->getNickname();
} else {
    echo "Login falhou. Credenciais inválidas.";
}
?>