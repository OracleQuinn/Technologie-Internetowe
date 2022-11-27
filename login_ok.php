<?php
    //Powinniśmy sprawdzić czy użytkownik na pewno jest zalogowany
    session_start();

    // if (isset($_SESSION['login'])){
    //     echo 'Hello ' . $_SESSION['login'];
    // }
    // else {
    //     header('Location:login.php');
    //     exit;
    // }

    // if (isset($_SESSION['login']) == false){
    //     header('Location:login.php');
    //     exit;
    // }
    // else {
    //     echo 'Hello ' . $_SESSION['login'];
    // }

    if (!isset($_SESSION['login'])){
        header('Location:login.php');
        exit;
    }
    
    echo 'Hello ' . $_SESSION['login'];
?>