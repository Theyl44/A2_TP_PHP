<?php
class equipe{
    private $nom;
    private $nbr_titre;
    static $nbEquipe;
    const cons = "Nombre d'equipe";

    public function display(){
        echo"L'équipe $this->nom a : $this->nbr_titre titres \n";
    }
    public function setName($name) {
        $this->nom = $name;
    }
    public function setNbr_titre($nbr_titre) {
        $this->nbr_titre = $nbr_titre;
    }
    function __construct($newNbTitre, $newName){
        $this->nbr_titre = $newNbTitre;
        $this->nom = $newName;
        self::$nbEquipe++;
    }
    public function __destruct()
    {
        echo"Destructor\n";
    }
    static function getNbTeam(){
        echo self::cons;
        echo self::$nbEquipe;
        echo "<br>";
    }

}
$p1 = new equipe("RajaCasablanca", 0);
$p1->display();
$p1::getNbTeam();
?>
