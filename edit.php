<?php
    require('config.php');

    $polaczennie = new mysqli($server, $db_user, $db_password, $db_name);
    
    $sql = "SELECT * FROM Studenci WHERE id_studenta = $_GET[id_s]";

    $wynik = $polaczennie->query($sql);

    $rekord=$wynik->fetch_assoc();

    echo "<form method=POST action=update.php?id_s=$_GET[id_s]>";
    echo "IMIĘ: <input type=text name='frm_imie' value=" . $rekord['imie'] . "><br/>";
    echo "NAZWISKO: <input type=text name='frm_nazwisko' value=" . $rekord['nazwisko'] . "><br/>";
    echo "DATA URODZENIA: <input type=date name='frm_data_ur' value=" . $rekord['data_ur'] . "><br/>";
    echo "<input type=submit>";
    echo "</form>";
?>