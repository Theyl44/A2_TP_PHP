<?php
class equipe{
    private $nom;
    private $nbr_titre;
    public function display(){
        echo"L'équipe $this->nom a : $this->nbr_titre titres \n";
    }
    public function setName($name) {
        $this->nom = $name;
    }
    public function setNbr_titre($nbr_titre) {
        $this->nbr_titre = $nbr_titre;
    }
    function __construct($name, $nbr_titre){
        $this->setNbr_titre($nbr_titre);
        $this->setName($name);
    }
    public function __destruct()
    {
        echo"Destructor\n";
    }

}
$p1 = new equipe("RajaCasabianca", 0);
$p1->display();
?>
