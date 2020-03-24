<form method="post">
    Nom : <input type="text", name="nom">
    <br>
    Prenom : <input type="text", name="prenom">
    <br>
    Mail : <input type="text", name="mail">
    <br>
    Age : <select name='age'><br>";
        option value=''>--Age--</option>
            <option value='0-20'>0-20</option>
            <option value='20-40'>20-40</option>
            <option value='40-60'>40-60</option>
            <option value='60-80'>60-80</option>
        </select>
    <br>
    Monsieur :  <input type='radio' name='sexe' value='Monsieur'/>
    Madame :  <input type='radio' name='sexe' value='Madame'/>
    <br>
    <input type='submit' value='send'/>
    </form>
</form>

<?php
class formulaire
{
    private $nom;
    private $prenom;
    private $mail;
    private $age;
    private $sexe;

    function setNom($c)
    {
        $this->nom = $c;
    }

    function setPrenom($c)
    {
        $this->prenom = $c;
    }

    function setMail($c)
    {
        $this->mail = $c;
    }

    function setAge($c)
    {
        $this->age = $c;
    }

    function setSexe($c)
    {
        $this->sexe = $c;
    }

    function __construct()
    {
        $this->setNom($_POST['nom']);
        $this->setPrenom($_POST['prenom']);
        $this->setMail($_POST['mail']);
        $this->setAge($_POST['age']);
        $this->setSexe($_POST['sexe']);
    }

    function display()
    {
        echo "Nom : " . $this->nom . "<br>";
        echo "Prenom : " . $this->prenom . "<br>";
        echo "Mail : " . $this->mail . "<br>";
        echo "Age : " . $this->age . "<br>";
        echo "Sexe : " . $this->sexe . "<br>";
    }
}
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['age']) && isset($_POST['sexe'])) {
        $form = new formulaire();
        $form->display();
    }else{
        echo"<h1>Veuillez Remplir le formulaire d'inscription</h1>";
        echo"<br>";
    }
?>