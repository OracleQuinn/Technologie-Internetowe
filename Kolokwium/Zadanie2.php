<?php 
    $obramowanie = '';
    $size = 10;
    $result = 0;
    $kolorek = $_POST['color'];
    $radio_liczby = $_POST['rbtn'];
    $radio_obramowanie = $_POST['radio'];

    if ($radio_obramowanie == 'Y'){
        $obramowanie = 'border';
    }

    echo '<table ' . $obramowanie . '>';
    for ($i = 1; $i <= $size; $i++){
        echo '<tr>';
        for ($j = 1; $j <= $size; $j++){
            $result = $result + 1;

            if ($i == $j){
                $color = $kolorek;
            }
            else {
                $color = 'DarkGrey';
            }
            if ($radio_liczby == 'Y'){
                if ($result % 2 == 0){
                    $color = 'PaleVioletRed';
                }
                else {
                    $color='LightSkyBlue';
                }
            }
            echo "<td bgcolor='$color'>$result</td>";
        }
        echo '</tr>';
    }
    echo "</table>"
?>