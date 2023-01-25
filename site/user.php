<?php require_once "php/config.php" ?>
<!DOCTYPE html>
<html>
<head>

</head>
<?php 
if(isset($_SESSION["user"])){
    ?>
    <h1>VOUS ETES GROS</h1>
    <h2> vos infos personelle:</h2>
    <?php echo $_SESSION["user"]['name'] ?>
    <form method="post" action="php/actions/uptateUser.php" enctype="multipart/form-data">
        <h2>Pseudo</h2>
        <input type='text' name='name' value="<?php echo $_SESSION["user"]['name'] ?>" />
        <input type='hidden' name='id' value="<?php echo $_SESSION["user"]['id'] ?>"/>
        <h2>mdp</h2> 
        <input type='password' name='password' value="<?php echo $_SESSION["user"]['password'] ?>" />
        <h2>Email</h2>
        <span class="email"><?php echo $_SESSION["user"]['email'] ?></span>
        <input type='email' name='email' value="<?php echo $_SESSION["user"]['email'] ?>" />
        <h2>num</h2>
        <input type='tel' name='num' value="<?php echo $_SESSION["user"]['num'] ?>" />
        <h2>age</h2>
        <input type='number' name='age' value="<?php echo $_SESSION["user"]['age'] ?>" />
        <h2>adresse</h2>
        <input type='text' name='adresse' value="<?php echo $_SESSION["user"]['adresse'] ?>" />
        <input type='submit'>
    </form>
        

    <a href="php/logout.php">Disconnect</a>
    <?php
    if($_SESSION["user"]["admin"]){
        include("php/view/admin.php");
    }
    
}
else{
    ?>
    <h1>vous vous êtes jamais inscrit ?, quelllllllllllle honte !, veuillez y remédier</h1>
<form method="post" action="php/logup.php">
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
<form method="post" action="php/login.php">
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
<script type="text/javascript" src="../js/Jquery.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>