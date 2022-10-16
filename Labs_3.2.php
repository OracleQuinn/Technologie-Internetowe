<?php
    echo '<h1><font color=RoyalBlue>16.10.2022</font></h1>';
?>

<?php 

    echo '<h3><font color=LightCoral>Utworzyć klasę pracownik, potomną do klasy człowiek. Dodatkowe pola liczba godzin, metoda zwiększ etat.</font></h3>';

    $polaczennie = new mysqli('localhost', 'root', '', 'studenci');

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
        echo '<td>' . $rekord['imie'] . '</td><td>' . $rekord['nazwisko'] . '</td><td>' . $rekord['data_ur'] . '</td><td>' . $rekord['pesel'] . '</td><td>' . $rekord['plec'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    echo 'Liczba rekordów: ' . $wynik->num_rows;
?>