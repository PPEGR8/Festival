<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Utilisateur Test</title>
    </head>
    <body>
        <?php
        use modele\metier\Utilisateur;
        require_once __DIR__ . '/../includes/autoload.php';
        echo "<h2>Test unitaire de la classe métier Utilisateur</h2>";
        $objet = new Utilisateur("1", "test","test","test@test.com","log","mdp");
        var_dump($objet);
        ?>
    </body>
</html>
