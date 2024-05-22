<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-iscrizione-newsletter</title>
</head>

<body>
    <?php include_once __DIR__ . "/partials/functions.php" ?>

    <div class="form-container">
        <h2>Inserisci il tuo indirizzo email</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <input type="submit" value="Invia">
        </form>
    </div>
</body>

</html>