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

$result = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = (isset($_POST['mail'])) ? $_POST['mail'] : null;
    $result = validateEmail($email, $flag);
    $class = $flag ? 'ms_success' : 'ms_danger';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <form action="index.php" method="POST">
        <div class="my-3 d-flex justify-content-center flex-column align-items-center">
            <label for=mail" class="form-label">Inserisci qui la tua mail</label>
            <input type="email" class="form-control w-25" id=mail" name="mail">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>

    <div class="d-flex justify-content-center">
        <p class="<?php echo $flag ? 'ms_success' : 'ms_danger'; ?>">
            <?php
            if ($email !== null) {
                echo $result;
            }
            ?>
        </p>
    </div>

</body>

</html>