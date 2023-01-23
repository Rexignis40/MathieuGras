<?php require_once "../php/config.php" ?>
<!DOCTYPE html>
<html>
<head>

</head>
<?php 
if(isset($_SESSION["user"])){
    ?>
    <h1>VOUS ETES GROS</h1>
    <a href="../php/logout.php">Disconnect</a>
    <?php
}
else{
    ?>
    <h1>vous vous êtes jamais inscrit ?, quelllllllllllle honte !, veuillez y remédier</h1>
<form method="post" action="../php/logup.php">
    <p>votre Prénom Nom</p>
    <input type='text' name='name' />
    <p>pegi 18 ?</p>
    <input type='number' name='age' />
    <p>votre E mail/girl</p>
    <input type='email' name='email'/>
    <p>votre mot de passerait pas !</p>
    <input type='password' name='password' />
    <p>votre numéro de carte bancaire</p>
    <input type='tel' name='num' />
    <p>votre adresse</p>
    <input type='text' name='adresse' />
    <input type='submit' value='Créer un compte' />
</form>
<h2>HOPOOOOOOO, vous êtes CONCITOYEN, bien le retour !</h2>
<form method="post" action="../php/login.php">
    <p>votre pseudo</p>
    <input type='name' name='name' />
    <p>votre mot de passerait pas !</p>
    <input type='password' name='password' />
    <p>Me connecter</p>
    <input type='submit' value='Me connecter' />

</form>
<?php
}
?>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
<?php if (isset($_SESSION['error'])){
        echo "M.toast({html: '".$_SESSION['error']."'})";
        unset($_SESSION['error']); 
} ?>
</script>
</body>
</html>