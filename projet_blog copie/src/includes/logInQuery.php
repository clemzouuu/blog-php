<?php

if(isset($_POST['submit']))  {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");

    $requete = $pdo->prepare("SELECT * from users WHERE username = :username");
    $requete->execute([
        ":username" => $username
    ]);

    if($requete->rowCount() > 0){
        $data = $requete->fetchAll();
        if (password_verify($password,$data[0]["password"]) && $data[0]["admin"] == 1){
            $_SESSION["connecte"] = true;
            $_SESSION["admin"] = true;
            http_response_code(302);
            header('Location: admin.php');
            exit();
        }
        else if(password_verify($password,$data[0]["password"])){
            $_SESSION["connecte"] = true;
            $_SESSION["admin"] = false;
            http_response_code(302);
            header('Location: home.php');
            exit();
        }
    }
}
