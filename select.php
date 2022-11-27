<?php 
    require('config.php');
    session_start();

    $polaczennie = new mysqli($server, $db_user, $db_password, $db_name);

    $sql = "SELECT * FROM Studenci";

    $login = $_SESSION['login'];
    $sql2 = "SELECT * FROM Studenci WHERE login = '$login' ";

    $wynik=$polaczennie->query($sql);
    $wynik2=$polaczennie->query($sql2);
    $dane = $wynik2->fetch_fields();

    echo '<table border>';
    foreach ($dane as $i){
        echo '<th>' . $i->name . '</th>';
    }
    while (($rekord=$wynik2->fetch_assoc()) != null){
        echo "<tr bgcolor=" . $color . ">";
        foreach($dane as $atrybut){
            echo '<td>' . $rekord[$atrybut->name] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    echo 'Liczba rekordów: ' . $wynik->num_rows;

    echo "<br/><a href='add.html'>Dodaj</a>";

    function table($sql)
    {
        require('config.php');

        $polaczennie = new mysqli($server, $db_user, $db_password, $db_name);
        $wynik=$polaczennie->query($sql);
        $data = $wynik->fetch_fields();
        $color='FloralWhite';

        echo "<table border>";
        foreach ($data as $i){
            echo '<th>' . $i->name . '</th>';
        }
        $i = 0;
        while (($rekord=$wynik->fetch_assoc()) != null){
            if ($i % 2 == 0){
                $color='FloralWhite';
            }
            else {
                $color='PowderBlue';
            }
            echo "<tr bgcolor=" . $color . ">";
            foreach($data as $atrybut){
                echo '<td bgcolor=' . $color. '>' . $rekord[$atrybut->name] . '</td>';
            }
            echo '</tr>';
            $i++;
        }
    }

    table($sql);
?>