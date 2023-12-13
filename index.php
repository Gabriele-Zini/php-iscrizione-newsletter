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

    <form action="index.php" method="POST">
        <div class="my-3 d-flex justify-content-center flex-column align-items-center">
            <label for=email" class="form-label">Inserisci qui la tua email</label>
            <input type="email" class="form-control w-25" id=email" name="email" value="<?php echo $email?>">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>

    <?php if ($result !== null) { ?> <div class="d-flex justify-content-center">
            <p class="alert <?php echo $flag ? 'alert-primary' : 'alert-danger'; ?>">
                <?php
                if ($email !== null) {
                    echo $result;
                }
                ?>
            </p>
        </div>
    <?php } ?>

</body>

</html>