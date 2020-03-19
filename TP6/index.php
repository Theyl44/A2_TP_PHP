<?php
class equipe{
    public $nom;
    public $nbr_titre;
    function display(){
        echo"L'équipe $this->nom a : $this->nbr_titre titres \n";
    }
}
$p1 = new equipe();
$p1->nom = "Real Madrid";
$p1->nbr_titre = 10;
$p1->display();
?>
