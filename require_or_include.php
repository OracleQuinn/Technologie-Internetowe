<?php
    echo '<h1><font color=RoyalBlue>09.10.2022</font></h1>';
?>

<?php
    echo "<h2><font color=LightCoral><a href='http://localhost/cwiczenia/Labs_2.php'>Link do głównego pliku z dzisiejszych zajęć.</a></font></h2>";
?>

<?php
    echo '<h3><font color=LightCoral>Definicja tabliczki mnozenia zapisana w oddzielnym pliku, do definicji dodane wszystkie argumenty (wybrane mają wartości domyślne).</font></h3>';

    require_once('Labs_2.2.php');
    table(15, 3, 5);
?>

<?php
    echo '<h3><font color=LightCoral>W nowym skrypcie zdefiniowano wartość zmiennej wymiar. Skrypt zostanie wywkorzystany po wywołaniu tabliczki mnoezenia.</font></h3>';

    include_once('Labs_2.3.php');
    table($wymiar, 3, 5);
?>

<?php
    echo "<h3><font color=LightCoral><a href='http://localhost/cwiczenia/Labs_2.4.html'>Pobieramy od uzytkownika informację o wymiarze. Skrypt zostanie wywkorzystany po wywołaniu tabliczki mnoezenia.</></font></h3>";
?>