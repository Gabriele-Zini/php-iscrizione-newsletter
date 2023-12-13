<?php


$email = (isset($_POST['mail'])) ? $_POST['mail'] : null;
$result = null;
$class = '';
$flag = true;

function validateEmail($email, &$flag)
{
    if (!empty($email) && strpos($email, '@') !== false && (substr($email, -3) === '.it' || substr($email, -4) === '.com' || substr($email, -4) === '.org')) {
        $flag = true;
        return "Email valida: $email";
    } else {
        $flag = false;
        return "Email non valida. Inserisci un indirizzo email valido con uno dei suffissi: .it, .com, .org.";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = (isset($_POST['mail'])) ? $_POST['mail'] : null;
    $result = validateEmail($email, $flag);
    $class = $flag ? 'ms_success' : 'ms_danger';
}