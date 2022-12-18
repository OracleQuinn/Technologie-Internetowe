<?php
    echo '<h1><font color=RoyalBlue>16.10.2022</font></h1>';
    echo '<h1><font color=RoyalBlue>06.11.2022</font></h1>';
?>

<?php 
    require('config.php');

    $polaczennie = new mysqli($server, $db_user, $db_password, $db_name);

    if (mysqli_connect_error() != 0) {
        echo 'ERROR: ' . mysqli_connect_errno();
        exit;
    }

    $radio_plec = $_POST['radio_plec'];

    if ($radio_plec != 'Wszyscy'){
        $sql = "SELECT * FROM Studenci WHERE plec = '$radio_plec'";
    }
    else {
        $sql = "SELECT * FROM Studenci";
    }

    $wynik=$polaczennie->query($sql);

    // var_dump($wynik); //pozwala na podgląd wartości zmiennej, nie zaleznie od jej typu.

    if ($wynik == false){
        echo 'ERROR! Somthing is wrong: ' . $sql;
        $polaczennie->close();
        exit;
    }

    // $rekord=$wynik->fetch_assoc();
    // var_dump($rekord);
    // echo '<br/>' . $rekord['imie'] . ' ' . $rekord['nazwisko'];

    // $rekord2=$wynik->fetch_assoc();
    // echo '<br/>' . $rekord2['imie'] . ' ' . $rekord2['nazwisko'];

    // $rekord3=$wynik->fetch_assoc();
    // echo '<br/>' . $rekord3['imie'] . ' ' . $rekord3['nazwisko'];

    echo '<table border>';
    echo '<th>Imie</th><th>Nazwisko</th><th>Data urodzenia</th><th>Pesel</th><th>Płeć</th>';
    while (($rekord=$wynik->fetch_assoc()) != null){
        echo '<tr>';
        echo '<td>' . $rekord['imie'] . '</td><td>' . $rekord['nazwisko'] . '</td><td>' . $rekord['data_ur'] . '</td><td>' . $rekord['pesel'] . '</td><td>' . $rekord['plec'] . '</td>' . 
        "<td><a href='delete.php?id_s=$rekord[id_studenta]'>Usuń</a></td>" . 
        "<td><a href='edit.php?id_s=$rekord[id_studenta]'>Edytuj</a></td>".
        "<td><a href='wydruki_rtf.php?id_s=$rekord[id_studenta]'>Pobierz bilet</a></td>";
        echo '</tr>';
    }
    echo '</table>';

    echo 'Liczba rekordów: ' . $wynik->num_rows;

    echo "<br/><a href='add.html'>Dodaj</a>";
?>