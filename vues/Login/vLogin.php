<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/cssLogin.css" rel="stylesheet" type="text/css">
        <title>Formulaire d'identification</title>
    </head>
    <body>
        <h1>Festival</h1>
        <form id="blocLogin" action="cLogin.php" method="post">
            <input type="text" name="login" class="sign-up-input" placeholder="Login"><br />
            <input type="password" name="pwd" class="sign-up-input" placeholder="Mot de passe"><br />
            <input type="submit" value="Connexion" class="sign-up-button">
            <form id="blocLogin" action="cLogout.php" method="post">
                <input type="submit" value="Annuler" class="sign-up-button">
            </form>
        </form>
    </body>
</html>