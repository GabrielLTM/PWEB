<?php

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pweb";

$connect = mysqli_connect($host, $db_user, $db_pass, $db_name); // Conexão com o banco de dados

function login($connect){
    if (isset($_POST['acessar']) and !empty($_POST['email']) and !empty($_POST['senha'])) {
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $senha = sha1($_POST['senha']);
        $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
        $executar = mysqli_query($connect, $query);
        $return = mysqli_fetch_assoc($executar);

        if (!empty($return['email'])) {
            echo $return['email'];
        }else{
            echo "Usuário ou senha não encontrado!";
        }
    }
}

