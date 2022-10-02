<?php
    echo '<h1><font color=RoyalBlue>22.10.2022</font></h1>';
?>

<?php
    echo '<font color=DarkCyan>for loop:</font><br/>';
    for ($i = 1; $i <= 5; $i++){
        echo 'I:' . $i . '<br/>';
        echo 'II:' . "$i<br/>";
        echo 'III:' . $i*2 . '<br/><br/>';
    }
?>

<hr/>

<?php
    echo '<font color=DarkCyan>Skrypt wyświetlający liczby od 1 do 100.</font><br/>';
    for ($i = 1; $i <= 100; $i++){
        echo "$i ";
    }
?>

<hr/>

<?php
    echo '<font color=DarkCyan>Skrypt wyświetlający liczby od 1 do 100 w tabeli w jednym wierszu.</font><br/>';
    echo "<table border><tr>";
    for ($i = 1; $i <= 100; $i++){
        echo "<td>$i</td>";
    }
    echo "</tr></table>"
?>

<hr/>

<?php
    echo '<font color=DarkCyan>Skrypt wyświetlający liczby od 1 do 100 w tabeli w jednej kolumnie.</font><br/>';
    echo "<table border>";
    for ($i = 1; $i <= 100; $i++){
        echo "<tr><td>$i</td></tr>";
    }
    echo "</table>"
?>

<hr/>

<?php
    echo '<font color=DarkCyan>Liczby parzyste wyświetlić na czerwonym tle.</font><br/>';
    echo "<table border><tr>";
    for ($i = 1; $i <= 100; $i++){
        if ($i%2 == 0) {
            $color='PaleVioletRed';
        }
        else {
            $color='white';
        }
        echo "<td bgcolor='$color'>$i</td>";
    }
    echo "</tr></table>"
?>

<hr/>

<?php
    echo '<font color=DarkCyan>Liczby parzyste wyświetlić na czerwonym tle, liczby podzielne przez 3 na zielonym tle.</font><br/>';
    echo "<table border><tr>";
    for ($i = 1; $i <= 100; $i++){
        if ($i % 2 == 0) {
            $color='PaleVioletRed';
        }
        elseif($i % 3 == 0){
            $color='DarkSeaGreen';
        }
        else {
            $color='FloralWhite';
        }
        echo "<td bgcolor='$color'>$i</td>";
    }
    echo "</tr></table>"
?>

<hr/>

<?php
    echo '<font color=DarkCyan>Liczby parzyste wyświetlić na czerwonym tle, liczby podzielne przez 3 na zielonym tle, a przez 2 i 3 na niebieskim.</font><br/>';
    echo "<table border><tr>";
    for ($i = 1; $i <= 100; $i++){
        if ($i % 2 == 0 && $i % 3 == 0){
            $color='LightSkyBlue';
        }
        else if ($i % 2 == 0) {
            $color='PaleVioletRed';
        }
        elseif($i % 3 == 0){
            $color='DarkSeaGreen';
        }
        else {
            $color='FloralWhite';
        }
        echo "<td bgcolor='$color'>$i</td>";
    }
    echo "</tr></table>"
?>

<hr/>

<?php
    echo '<font color=DarkCyan>Wyświetlic tabliczkę mnozenia 10 x 10</font><br/>';
    echo "<table border>";
    for ($i = 1; $i <= 10; $i++){
        echo '<tr>';
        for ($j = 1; $j <= 10; $j++){
            if ($i == 1 || $j == 1){
                $color = 'PaleVioletRed';
            }
            else {
                $color = 'FloralWhite';
            }
            echo "<td bgcolor=$color>" . $i * $j . "</td>";
        }
        echo '</tr>';
    }
    echo "</table>"
?>

<hr/>

<?php
    echo '<font color=DarkCyan>Liczby parzyste wyświetlić na czerwonym tle, liczby podzielne przez 3 na zielonym tle, a przez 2 i 3 na niebieskim.</font><br/>';
    echo "<table border>";
    $size = 10;
    $firstDivider = 2;
    $secondDivider = 3;

    for ($i = 1; $i <= $size; $i++){
        echo '<tr>';
        for ($j = 1; $j <= $size; $j++){
            $result = $i * $j;

            if ($result % $firstDivider == 0 && $result % $secondDivider == 0){
                $color='LightSkyBlue';
            }
            else if ($result % $firstDivider == 0) {
                $color='PaleVioletRed';
            }
            elseif($result % $secondDivider == 0){
                $color='DarkSeaGreen';
            }
            else {
                $color='FloralWhite';
            }
            echo "<td bgcolor='$color'>$result</td>";
        }
        echo '</tr>';
    }
    echo "</table>"
?>

<hr/>

<?php
    echo '<font color=DarkCyan>Funkcje: </font><br/>';
    function table($size, $firstDivider, $secondDivider, $firstColor, $secondColor, $thirdColor)
    {
        echo "<table border>";

        for ($i = 1; $i <= $size; $i++){
            echo '<tr>';
            for ($j = 1; $j <= $size; $j++){
                $result = $i * $j;

                if ($result % $firstDivider == 0 && $result % $secondDivider == 0){
                    $color=$firstColor;
                }
                else if ($result % $firstDivider == 0) {
                    $color=$secondColor;
                }
                elseif($result % $secondDivider == 0){
                    $color=$thirdColor;
                }
                else {
                    $color='FloralWhite';
                }
                echo "<td bgcolor='$color'>$result</td>";
            }
            echo '</tr>';
        }
        echo "</table>";
    }

    table(12, 2, 3, 'MediumOrchid', 'PowderBlue', 'MediumSlateBlue');
?>

<hr/>

<?php
    echo '<font color=DarkCyan>Wyświetić tabliczki mnozenia od 2x2 do 25x25</font><br/>';
    $minSize = 2;
    $maxSize = 25;

    for ($i = $minSize; $i <= $maxSize; $i++){
        table($i, 2, 3, 'MediumSpringGreen', 'DeepSkyBlue', 'DeepPink');
        echo '<br/>';
    }
        
?>

<hr/>
