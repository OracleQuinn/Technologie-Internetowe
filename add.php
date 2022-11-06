<?php
    require('config.php');

    $polaczennie = new mysqli($server, $db_user, $db_password, $db_name);

    // Stara wersja
    // $sql = "INSERT INTO Studenci (imie, nazwisko) VALUES ('" . $_POST['imie_form_add'] . "', '" . $_POST['nazwisko_form_add'] . "')";
    // $polaczennie->query($sql);

    // Nowa wersja
    $sql = "INSERT INTO Studenci (imie, nazwisko, data_ur) VALUES (?, ?, ?)";
    
    $pre = $polaczennie->prepare($sql);

    // Bindowanie parametrów
    $pre->bind_param('sss', $_POST['imie_form_add'], $_POST['nazwisko_form_add'], $_POST['data_ur_form_add']); 
    //'ss' oznacza, że pierwszy parametr i drugi są stringami, każda kolejna litera określa typ kolejnej zmiennej

    $pre->execute();
?>