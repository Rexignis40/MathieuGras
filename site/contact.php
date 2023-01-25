<html lang="fr">
<?php include('./components/head.html')?>
<link rel="stylesheet" rel="stylesheet" href="css/contact.css">
<body id="forms">
    <?php include('./components/header.html')?>
        <div class=" row">
            <div class=" col l6 offset-l5">
                <div class="contactMe white-text"><p>Contactez-moi</p></div>
                <form method="post" action="">
                    <div class="formulaire">
                        <div class="prenom">
                            <p class="white-text">Prénom*</p>
                            <input class="white name" type='text' name='name' />
                        </div>
                        <div class="prenom1">
                            <p class="white-text">Nom</p>
                            <input class="white surname" type='text' name='name' />
                        </div>
                    </div>
                    <p class="white-text">Votre Email*</p>
                    <input class="white" type='email' name='email'/>
                    <p class="white-text ">Objet*</p>
                    <input class="white object" type='text' name='subject' />
                    <p class=" white-text">Votre remarque*</p>
                    <textarea class="white remark " name="remarque" id="" cols="30" rows="30"></textarea>
                    <div class="verification"><input class="buton white-text" type='submit' value='Envoyer' /></div>
                    
                </form>
            </div>
        </div>
    

    <?php include('./components/footer.html')?>
    
    <script type="text/javascript" src="js/Jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>