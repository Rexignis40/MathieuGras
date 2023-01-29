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
                <div class="row col m12 s12">
                    <div class="row name">
                        <div>
                            <p>Prénom*</p>
                            <input class="name" type='text' id='name' required/>
                        </div>
                        <div>
                            <p>Nom</p>
                            <input class="surname" type='text' id='family-name' />
                        </div>
                    </div>
                    <div class="row">
                        <p>Mail*</p>
                        <input class="col m12" type='email' id='email' required/>
                    </div>
                    <div class="row">
                        <p>Objet*</p>
                        <input class="col m7" type='text' id='subject' required/>
                    </div>
                    <div class="row">
                        <p>Message*</p>
                        <textarea class="remark" id="remarque" cols="30" rows="30"></textarea>
                    </div>
                    <div class="row">
                        <button class="col m4 offset-m4 s6 offset-s3 button">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    

    <?php include('./components/footer.html')?>
    
    <script type="text/javascript" src="js/Jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>