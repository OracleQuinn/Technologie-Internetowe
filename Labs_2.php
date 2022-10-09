<?php
    echo '<h1><font color=RoyalBlue>09.10.2022</font></h1>';
?>

<?php
    function petla($min = 1, $max = 10){
        for ($i = $min; $i <= $max; $i++){
            echo $i . '<br/>';
        }
    }

    petla(7, 20);
    echo '<hr/>';

    petla(5);
    echo '<hr/>';

    petla(max: 7);
    echo '<hr/>';

    petla();
    echo '<hr/>';
?>

<?php
    include('Labs_1.php');
    require('Labs.php'); //tutaj pojawi się błąd, poniewaz plik nie istniej

    // require tak samo jak include wczytuje plik, róznica pojawia się, gdy serwer nie moze wczytać jakiegoś pliku, np. będzie błąd w nazwie pliku, require wyrzuci warrning i Fatal Error przy wczytaniu pliku, natomiast include wyrzuci na etapie wczytania jedynie Warrningi, a Fatal Error pojawi się przy wywołaniu funkcji ze źle wczytanego pliku
    
    include_once('Labs_1.php');
    require_once('Labs.php'); //tutaj sprawca czy plik juz został wczytany, jako ze wczesniej się to stało w linii 27 (z błędem) to błąd nam się nie pojawi

    //include_once i require_once sprawdzają czy dany skryp nie został juz wcześniej wczytany, jezeli tak, to nie wczytuje go ponownie, jezeli najpierw dam include/require_once, to błąd się pojawi! Mozna naprzemiennie (razem) uzywać require i include. 

    echo '<h3>Najnowsza tablica z dn. 09.10.2022</h3>';

    table(4, 2, 1, 'MediumOrchid', 'PowderBlue', 'MediumSlateBlue');

    echo $zmienna;
?>