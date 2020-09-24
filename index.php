<!-- GOAL: nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto

area quadrato: lato * lato
perimetro quadrato: 4 * lato
volume cubo: lato * lato * lato
superficie cubo: 6 * lato * lato

N.B.: definire ogni variabile e metodo pubblico come detto in classe -->


<?php

class Square {

  public $lato;

  public function __construct($lato) {

    $this -> lato = $lato;
  }

  public function getArea() {

    return $this -> lato * $this -> lato;
  }

  public function getPer() {

    return 4 * $this -> lato;
  }

  public function strValues() {

    return "lato: " . $this -> lato . "<br>"
        . "area: " . $this -> getArea() . "<br>"
        . "per: " . $this -> getPer() . "<br>";

  }

  public function __toString() {

    return "Square:<br>" . $this -> strValues() . "<br>";
  }

}


class Cube extends Square {

  public function __construct($lato)
  {
    parent::__construct($lato);
  }

}

$cube1 = new Cube(10);
echo $cube1;



 ?>
