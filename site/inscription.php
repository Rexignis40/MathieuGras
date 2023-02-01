<?php require_once "php/config.php" ?>
<!DOCTYPE html>
<html>
<head>
<?php include('./components/head.html')?>
</head>
<body>
<?php include('./components/header.html')?>

<div class="use row">
        <div class="connection col l4 offset-l4 ">
            <div class="test">
                <h2>S'INSCRIRE</h2>
            </div>
            <div class="test">
                <form method="post" action="php/logup.php">
                    <p>votre Prénom Nom</p>
                    <input class="white-text" type='text' name='name' />
                    <p>Age</p>
                    <input class="white-text" type='number' name='age' />
                    <p>votre E mail</p>
                    <input class="white-text" type='email' name='email'/>
                    <p>votre mot de passe</p>
                    <input class="white-text" type='password' name='password' />
                    <p>votre numéro de téléphone</p>
                    <input class="white-text" type='tel' name='num' />
                    <p>votre adresse</p>
                    <input class="white-text" type='text' name='adresse' />
                    <div class="count"><input class="butonuser" type='submit' value='Créer un compte' /></div>
                </form>
            </div>
            <div class="conditions">
                <p>En continuant, vous acceptez les Conditions d’utilisation et reconnaissez avoir lu notre Politique de confidentialité. Informations concernant la collecte de données</p>
                <a href="user.php">Vous êtes déja inscrit? Connectez-vous</a>
            </div>
        </div>
</div>
    <?php include('./components/footer.html'); ?>
</body>
    <?php include("./components/script.php"); ?>
</html>