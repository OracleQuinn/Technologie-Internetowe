<?php 
    require('config.php');

    $polaczennie = new mysqli($server, $db_user, $db_password, $db_name);
    
    $sql = "UPDATE Studenci set imie='$_POST[frm_imie]', nazwisko='$_POST[frm_nazwisko]', data_ur='$_POST[frm_data_ur]' WHERE id_studenta = $_GET[id_s]";

    $wynik = $polaczennie->query($sql);

?>