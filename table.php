<?php 
    function table($size = 10, $firstDivider, $secondDivider, $firstColor = 'LightSkyBlue', $secondColor = 'PaleVioletRed', $thirdColor = 'DarkSeaGreen')
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
?>