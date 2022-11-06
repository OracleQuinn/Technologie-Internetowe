<?php
// Utworzyć obiekty klasy: osobowka 
// Wykorzystać utworzone metody - sprawdzając ich działanie (i ograniczenia)

class auto {
    public $predkosc;
    public $ladunek;
    public $liczba_pasazerow;

    public function __construct($p, $l, $lp){
        if ($p >= 0){
            $this->predkosc = $p;
        }
        else {
            echo "<br/Prędkość nie może być ujemna!";
            $this->predkosc = 0;
        }
        $this->ladunek = $l;
        $this->liczba_pasazerow = $lp;
    }

    public function przyspiesz(){
        $this->predkosc += 5;
    }

    public function zwolnij(){
        if ($this->predkosc -= 5 >= 0){
            $this->predkosc -= 5;
        }
        else {
            echo "<br/Prędkość nie może być ujemna!";
        }
    }
}

class osobowka extends auto {
    public $max_liczba_pasazerow;

    public function __construct(){
       $this->max_liczba_pasazerow = 5;
       parent::__construct(10, "5", 0);
    }

    public function wsiadanie(){
        if ($this->liczba_pasazerow < $this->max_liczba_pasazerow){
            if ($this->liczba_pasazerow == $this->max_liczba_pasazerow - 1){
                if ($this->predkosc == 0){
                    $this->liczba_pasazerowe += 1;
                }
                else {
                    echo "<br/>Samochód musi się zatrzymać - zmniejszanie prędkości!";
                    parent::zwolnij();

                }
            }
            $this->liczba_pasazerow += 1;
        }
        else {
            echo "<br/>Więcej pasażerów się nie zmieści!";
        }
    }

    public function wysiadanie(){
        if ($this->liczba_pasazerow > 0){
            $this->liczba_pasazerow -= 1;
        }
        else {
            echo "<br/>W aucie nie ma pasażerów!";
        }
    }

    public function wyswietl(){
        echo '<br/>predkosc: ' . $this->predkosc . ' liczba pasazerow: ' . $this->liczba_pasazerow;
    }
}

$object = new osobowka;
$object->wsiadanie();
$object->wsiadanie();
$object->wsiadanie();
$object->wsiadanie();
$object->wsiadanie();
$object->wsiadanie();

$object->wysiadanie();
$object->wysiadanie();
$object->wysiadanie();
$object->wysiadanie();
$object->wyswietl();

?>