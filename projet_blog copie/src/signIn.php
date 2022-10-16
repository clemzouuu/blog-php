<?php
session_start();
$_SESSION["connecte"] = false;
$_SESSION["admin"] = false;

require("./includes/pdo.php");
require("./includes/signInQuery.php")
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="./styles/styles.css">

</head>
<body>

<div id="main">
    <header>
        <h1>Booking</h1>
        <img src="images/livre.webp" alt="livre" id="image">
        <h4>Le savoir est entre vos mains</h4>
    </header>

    <p>Inscription</p>
    <div class="inscription">
        <form method="POST">
            <label for="username">Pseudo</label><br/>
            <input type="text" name="username" id="username" /><br/><br/>

            <label for="password">Mot de passe</label><br/>
            <input type="password" name="password" id="password" /><br/><br/>

            <input type="submit" name="submit" value="S'inscrire" class="button" />
        </form>
    </div>
</div>

</body>
</html>