<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $modify = filter_input(INPUT_POST, "modify");
    $id = $_SESSION["id"];
    $comment_id = filter_input(INPUT_POST, "commentId");

    if ($modify && $comment_id) {
        $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
        $requete = $pdo->prepare(" UPDATE comments SET content=:modify WHERE id = :id AND comment_id = :comment_id");
        $requete->execute([
            ":modify" => $modify,
            ":id" => $id,
            ":comment_id" => $comment_id
        ]);
        header('Location: home.php');
        exit();
    }
}