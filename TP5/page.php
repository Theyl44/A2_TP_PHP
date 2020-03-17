<?php
    session_start();
    echo"bonjour ";
    echo $_SESSION['usr']["nom"];
    echo"<br>";
    echo"ta premiere connexion etait : ";
    echo $_SESSION['usr']["date"];
    echo"<br>"
?>
    <a href="<?php echo $_SESSION['usr']['lien'];?>">
    Cliquer pour ouvrir le lien associé </a>
