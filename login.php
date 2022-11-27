<?php
    //Wyświetlanie błędów: 
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);

    require('config.php');

    $polaczennie = new mysqli($server, $db_user, $db_password, $db_name);

    // if ((isset($login) )and (isset($password))){
    //     echo 'Zalogowany!';
    //     exit;
    // }

    // if (isset($login, $password)){
    //     echo 'Zalogowany!';
    //     exit;
    // }

    //Na potrzeby zajęć wykorzystamy stałe, ale normalnie połączenie do bazy danych!
    // if ((isset($login) ) and (isset($password))){
    //     if(($login == 'login') and ($password == 'password')){
    //         session_start();

    //         $_SESSION['login'] = $login;
    //         // $_SESSION['password'] = $password;

    //         header('Location:login_ok.php');
    //         exit;
    //     }
    //     else {
    //         echo 'Bląd podczas logowania. Spróbuj ponownie!';
    //     }
    // }

    function logiRejestr($login, $result) {
        $nazwaPliku = 'logiRejestr.txt';
        $uchwyt = fopen($nazwaPliku,'a');
        $userData = $_SERVER['HTTP_USER_AGENT'];
        $date = date("d.m.Y");
        $time = date("H:i:s");

        fputs($uchwyt, "$date;$time;$login;$result;$userData\n");
    }

    if ((isset($_POST['frm_login']) ) and (isset($_POST['frm_password']))){
        $login = $_POST['frm_login'];
        $password = md5($_POST['frm_password']);
        $sql = "SELECT * FROM Studenci WHERE login = '$login' AND haslo = '$password'";
        $wynik=$polaczennie->query($sql);

        if($wynik->num_rows == 1){
            $result = 'SUCCESS';
            logiRejestr($login, $result);
            
            session_start();

            $_SESSION['login'] = $login;

            header('Location:select.php');
            exit;
        }
        else {
            $result = 'FAILED';
            logiRejestr($login, $result);
            echo 'Bląd podczas logowania. Spróbuj ponownie!';
        }
    }

    echo '<form action=login.php method=post>';

        echo 'Login: <input name=frm_login /><br/><br/>';
        echo 'Hasło: <input type=password name=frm_password /><br/><br/>';

        echo '<input type=submit value=Zaloguj />';

    echo '</form>';
?>