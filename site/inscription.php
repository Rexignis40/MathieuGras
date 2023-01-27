<?php require_once "php/config.php" ?>
<!DOCTYPE html>
<html>
<head>
<?php include('./components/head.html')?>
</head>
<body id="use">
<?php include('./components/header.html')?>

    <div class="row">
        <div class="col l4 offset-l4 inscription">
            <h1>S'INSCRIRE</h1>
            <form method="post" action="php/logup.php">
                <p>votre Prénom Nom</p>
                <input type='text' name='name' />
                <p>Age</p>
                <input type='number' name='age' />
                <p>votre E mail</p>
                <input type='email' name='email'/>
                <p>votre mot de passe</p>
                <input type='password' name='password' />
                <p>votre numéro de téléphone</p>
                <input type='tel' name='num' />
                <p>votre adresse</p>
                <input type='text' name='adresse' />
                <div class="count"><input class="butonuser" type='submit' value='Créer un compte' /></div>
            </form>
        </div>
    </div>
    <?php include('./components/footer.html')?>
<script type="text/javascript" src="../js/Jquery.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>