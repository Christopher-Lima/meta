<?php

function validarEmail($email) {
    $padrao_email = "/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/";

    if (preg_match($padrao_email, $email)) {
        return true;
    } else {
        return false;
    }
}

echo "Digite seu e-mail: ";
$email_usuario = readline();

if (validarEmail($email_usuario)) {
    echo "O e-mail é válido.\n";
} else {
    echo "O e-mail não é válido.\n";
}

?>
