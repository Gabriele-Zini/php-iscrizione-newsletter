<?php
include_once 'functions.php';
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

    <div class="d-flex justify-content-center align-items-center flex-column mt-5">
        <p class="alert alert-primary">Complimenti! Email Corretta: <span class="fw-bold"><?php echo $_SESSION['email']?></span></p>
        <a href="./index.php" class="btn btn-secondary">torna alla home</a>
    </div>
</body>

</html>