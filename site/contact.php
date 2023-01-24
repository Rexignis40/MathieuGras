<html lang="fr">
<?php include('./components/head.html')?>
<link rel="stylesheet" rel="stylesheet" href="css/contact.css">
<body id="forms">
    <?php include('./components/header.html')?>
        <div class="forms row">
            <div class="formulaire col l6 offset-l5">
                <div class="remark white-text"><p>Contactez-moi</p></div>
                <form method="post" action="../php/logup.php">
                    <p class="white-text">Prénom</p>
                    <input class="white name" type='text' name='name' />
                    <p class="white-text">Nom</p>
                    <input class="white surname" type='text' name='name' />
                    <p class="white-text">Votre Email</p>
                    <input class="white" type='email' name='email'/>
                    <p class="white-text">Objet</p>
                    <input class="white" type='text' name='subject' />
                    <p class="white-text">Votre remarque</p>
                    <input class="white" type='text' name='remarque' />
                    <input class="orange" type='submit' value='Envoyer' />
                </form>
            </div>
        </div>
        
        


        <script type="text/javascript" src="js/Jquery.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    

    <?php include('./components/footer.html')?>
</body>
</html>