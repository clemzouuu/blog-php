<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION["id"];
    $comment_id = filter_input(INPUT_POST, "comment_id");

    if ($comment_id) {
        $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
        $requete = $pdo->prepare(" DELETE FROM `comments` WHERE id = :id AND comment_id = :comment_id");
        $requete->execute([
            ":id" => $id,
            ":comment_id" => $comment_id
        ]);
        header('Location: home.php');
        exit();
    }
}