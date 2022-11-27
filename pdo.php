<?php
    $polaczenie = new PDO('mysql:host=localhost;dbname=Studenci','root','');
    foreach ($polaczenie -> query('SELECT * FROM Studenci') as $record){
        echo $record['imie'] . '<br/>';
    }

    $sql = 'INSERT INTO Studenci (imie, nazwisko, liczba_dzieci, pesel) values (:p_imie, :p_nazwisko, :p_liczba_dzieci, :p_pesel)';
    $dodawanie = $polaczenie -> prepare($sql);

    $dodawanie -> bindValue(':p_nazwisko', 'Kostuchna');
    $dodawanie -> bindValue(':p_imie', 'Mark');
    $dodawanie -> bindValue(':p_liczba_dzieci', 3, PDO::PARAM_INT);

    $zm_pesel = '00321603418';
    $dodawanie -> bindParam(':p_pesel', $zm_pesel);
    $dodawanie -> execute();
?>