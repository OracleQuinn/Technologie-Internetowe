<?php
    echo '<h1><font color=salmon>Hello World!</font></h1>';

    echo '<h4><font color=coral>FOR loop:</font></h4>';
    for ($i = 1; $i <= 100; $i++){
        echo 'I:' . $i . '<br/>';
        echo 'II:' . "$i<br/>";
        echo 'III:' . $i*2 . '<br/><br/>';
    }
?>