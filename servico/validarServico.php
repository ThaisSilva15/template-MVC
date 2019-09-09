<?php

function valida_vazio($valor) {
    if (strlen(trim($valor)) == 0):
        return true;
    else:
        return false;
    endif;
}

function valida_Nome($nome) {
//    $regex = "/^[A-Za-záàâãéèêîíìóòôõúùûçñÁÀÂÃÉÈÊÍÌÎÓÒÔÕÚÙÛÇÑ]+$/";
    $nome = strip_tags($nome);
    echo $nome;
    $regex = preg_match("/^   $/i", $nome);
    if (valida_vazio($nome)):
        return false;
    elseif (strlen(trim($nome) > 60)):
        return false;
    elseif ($regex):
        return false;
    else:
        return true;
    endif;

//    $nome = filter_var(trim($nome), FILTER_SANITIZE_STRING);
//
//    $nome = strip_tags($nome);
//
//    $nome = filter_var(trim($nome), FILTER_SANITIZE_STRING);
//
//    if (
//            !filter_var($nome, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/"))) &&
//            !filter_var($nome, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[A-Za-záãéíóôúç]+$/")))
//       ):
//        return false;
//    else:
//        return true;
//    endif;
}

function valida_Email($email) {
    $email = strip_tags($email);

    if (valida_vazio($email)):
        return false;
    elseif (strlen(trim($email)) > 60):
        return false;
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)):
        return false;
    else:
        return true;
    endif;
}

function valida_Data($dia, $mes, $ano) {
    if ($dia == "default" || $mes == "default" || $ano == "default"):
        return false;
    elseif (!checkdate($mes, $dia, $ano) || ($ano < 1900) || (mktime(0, 0, 0, $mes, $dia, $ano) > time())):
        return false;
    else:
        return true;
    endif;
}

function valida_Senha($senha) {
    $regex = "/^[A-Za-záàâãéèêîíìóòôõúùûçñÁÀÂÃÉÈÊÍÌÎÓÒÔÕÚÙÛÇÑ]+$/";
    $regex2 = "/^[0-9]/";

    $senha = strip_tags($senha);

    if (valida_vazio($senha)):
        return false;
    elseif (strlen(trim($senha) > 20)):
        return false;
    elseif (preg_match($regex, $senha) && preg_match($regex2, $senha)):
        return false;
    else:
        return true;
    endif;
}

function valida_CPF($cpf) {
    $cpf = strip_tags($cpf);
    if (strlen(trim($cpf)) == 0) {
        return false;
    } else {
        $cpf = str_replace(array('.', '-', '/'), "", $cpf);
        $cpf = str_pad(preg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);

        if (strlen($cpf) != 11) {
            return false;
        } else if ($cpf == '00000000000' ||
                $cpf == '11111111111' ||
                $cpf == '22222222222' ||
                $cpf == '33333333333' ||
                $cpf == '44444444444' ||
                $cpf == '55555555555' ||
                $cpf == '66666666666' ||
                $cpf == '77777777777' ||
                $cpf == '88888888888' ||
                $cpf == '99999999999') {
            return "CPF inválido.<br>";
        } else {
            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {

                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
    }
}

function validar($nome) {
    $nome = filter_var(trim($nome), FILTER_SANITIZE_STRING);

    if (filter_var($nome, FILTER_VALIDATE_REGEXP, array("regexp" => "/^[a-zA-Z\s]+$/"))) {
        return true;
    } else {
        return false;
    }
}
