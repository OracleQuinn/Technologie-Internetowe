<?php
    echo '<h1><font color=RoyalBlue>16.10.2022</font></h1>';
?>

<?php

    echo '<h3><font color=LightCoral>Utworzyć klasę człowiek, z polem wzrost, w argumencie konstruktowara podać wartość pola wzrost.</font></h3>';

    class Czlowiek {
        public $wzrost;
        
        function __construct($height){
            $this->wzrost = $height;
        }

        function __destruct()
        {
            echo '<h4>Destruktor z klasy Czlowiek</h4>';
        }
    }
?>

<?php
    echo '<h3><font color=LightCoral>Utworzyć klasę pracownik, potomną do klasy człowiek. Dodatkowe pola liczba godzin, metoda zwiększ etat.</font></h3>';

    class Pracownik extends Czlowiek {
        public $liczbaGodzin; 

        function __construct() {
            parent::__construct(185); // wywolujemy konstruktor z klasy nadrzednej, bez strzalki bo nie mamy jeszcze zmiennej obiektowej
            $this->liczbaGodzin = 168; 
        }

        function zwiekszEtat() {
            $this->liczbaGodzin += 40;

            echo 'Po zwiększeniu etatu liczba godzin wynosi: ' .$this->liczbaGodzin . '<br/>';
        }

        function __destruct()
        {
            echo '<h4>Destruktor z klasy Pracownik</h4>';
        }

    }
?>

<?php
    echo '<h3><font color=LightCoral>Utworzyć klasę uczeń potomną do klasy człowiek. Pole średnia ocen i metoda wyświetlająca średnią oceny i wzrost..</font></h3>';

    class Uczen extends Czlowiek {
        public $sredniaOcen;

        function __construct(){
            parent::__construct(177);
            $this->sredniaOcen = 4.5;
        }

        public function wyswietl() {
            echo 'Średnia ocen wynosi: ' . $this->sredniaOcen . ', a wzrost: ' . $this->wzrost;
        }

        function __destruct()
        {
            echo '<h4>Destruktor z klasy Uczen</h4>';
        }
    }
?>

<?php
    echo '<h3><font color=LightCoral>Utworzyć obiekty klas i sprawdzić dzaiłanie metod, utworzyć destruktory w kadej klasie i sprawdzić ich działanie (oraz działanie ich stosów - kolejność wykonywania destruktorów).</font></h3>';

    $obiektCzlowiek = new Czlowiek(200);
    $obiektPracownik = new Pracownik();
    $obiektUczen = new Uczen();

    $obiektPracownik->zwiekszEtat();
    $obiektUczen->wyswietl();
?>