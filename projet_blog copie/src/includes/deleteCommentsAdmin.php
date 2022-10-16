<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment_id = filter_input(INPUT_POST, "comment_id");

    if ($comment_id) {
        $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
        $requete = $pdo->prepare(" DELETE FROM `comments` WHERE comment_id = :comment_id");
        $requete->execute([
            ":comment_id" => $comment_id
        ]);
        header('Location: admin.php');
        exit();
    }
}