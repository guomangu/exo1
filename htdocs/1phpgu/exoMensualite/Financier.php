<?php
//Class
class Financier
{
    //Attributs
    public $capital="";
    public $interet ="";
    public $duree ="";
//Constructors
function __construct($_capital, $_interet, $_duree) 
{
    $this->capital = $_capital;
    $this->interet = $_interet;
    $this->duree = $_duree;
}
//Methods
function calculMensualite()
{
    return round(($this->capital*(($this->interet/100)/12))/(1-(1+(($this->interet/100)/12))**-($this->duree*12)), 
    2, PHP_ROUND_HALF_UP);
}
//a= (K x Tm)/Q
//a= (capital * (ta/12)) / (1-(1+ta/12)**-(duree*12))
//a= ($capital*($interet/12))/(1-(1+$interet/12)**-($duree*12))
function genererTableau()
{
   echo "
   <table class='tablebase'name='tablebase'> 
   <thead>  
   <tr>
       <th>numero de mois</th>
       <th>partie Intérêts</th>
       <th>partie Amortissement</th>
       <th>capital restant dû</th>
       <th>Mensualités</th>
   </tr>
   </thead>
   <tbody>";
    $nbMois=1;
    $partieInteret=0;
    $partieAmortissement=0;
    $capitalRestant=0;
    $mensualite=$this->calculMensualite();
   do {
       echo "<tr>";
      if ($nbMois==1) {
        $capitalRestant=$this->capital;
      }else{
        $capitalRestant=$capitalRestant-$partieAmortissement;
      }
      $partieInteret=$capitalRestant*($this->interet/(12*100));
      $partieAmortissement=$mensualite-$partieInteret;
      echo "<td>".$nbMois."</td><td>".round($partieInteret,2)."</td><td>".round($partieAmortissement,2)."</td>".
      "</td><td>".round($capitalRestant,2)."</td><td>".$mensualite."</td></tr>";
      $nbMois++;
    }
    while ($nbMois <= ($this->duree*12)) ;
   echo "</tbody></table>";
}
}