<?php
    echo '<h1><font color=RoyalBlue>16.10.2022</font></h1>';
?>

<?php 
    class Klasa {
        function klasa(){
            echo 'konstruktor';
        }
    }

    $cmienna = new klasa();
?>

<?php 
    class nasza_klasa
    {
    protected $pole = 20;

    public function petla()
    {
    for ($i = 1; $i<= $this->pole; $i++)
        echo $i;
        echo '<hr>';

    }

    function nasza_klasa()
    {
        echo 'to jest tekst z konstruktora</br>'; // nie działa w mojej, nowszej wersji PHP
    }

    function __construct()
    {
        echo 'to jest tekst z construct</br>';
    }

    function __destruct()
    {
        echo '<H2>Tekst z destruktora</H2>';
    }


    }

    class nowsza_klasa extends nasza_klasa
    {
        function __construct()
        {
            echo 'konstruktor nowej klasy</br>';
            parent::__construct(); // wywolujemy konstruktor z klasy nadrzednej, bez strzalki bo nie mamy jeszcze zmiennej obiektowej
            parent::petla();
        }

        function __destruct()
        {
            echo '<H1>destruktor z klasy potomniej</H1>';
        }

        function petla()
        {
            echo 'PETLA';
        }
            
    }
    $nowszy_obiekt = new nowsza_klasa();
    $zmienna_obj= new nasza_klasa();

    $zmienna_obj->petla();

    //$zmienna_obj = null;
    echo '</br>';
    //echo $zmienna_obj->pole;

    echo 'koniec skryptu</br>';
    //petla();
    $nowszy_obiekt->petla();
?>

<?php

    $polaczenie = new mysqli('localhost','root','','test');//adres, user, haslo, baza

    if (mysqli_connect_errno() !=0)
    {
        echo 'jest blad z polaczeniem: ' .mysqli_connect_error();
        exit;
    }

?>