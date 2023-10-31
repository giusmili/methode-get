<?php
    class User{
        const style = "./css/style.css";
        public $_title ="Méthode get";
    }
    $_user_page = new User();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="site web">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?=
            $_user_page->_title;
        ?>
    </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= User::style ?>">
</head>