<html lang="fr">
<?php include('./components/head.html')?>
<body class="contact-page">
    <?php include('./components/header.html')?>
        <div class="row">
            <div class="col m2 hide-on-small-only social">
                <div>
                    <i class="fa-brands fa-instagram"></i>
                    <p>@matt.pty</p>
                </div>
                <div>
                    <i class="fa-brands fa-twitter"></i>
                    <p>@mattptyy</p>
                </div>
            </div>
            <div class="row col m6 offset-m3 s12">
                <div class="col m6 offset-m6 s8 offset-s2 contact-me">
                    <p>Contactez-moi</p>
                </div>
                <form method="post" action="">
                    <div class="formulaire">
                        <div class="prenom">
                            <p class="white-text">Prénom</p>
                            <input class="white name" type='text' name='name' />
                        </div>
                        <div>
                            <p>Nom</p>
                            <input class="surname" type='text' id='family-name' />
                        </div>
                    </div>
                    <p class="white-text">Mail</p>
                    <input class="white" type='email' name='email'/>
                    <p class="white-text ">Objet</p>
                    <input class="white object" type='text' name='subject' />
                    <p class=" white-text">Message</p>
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