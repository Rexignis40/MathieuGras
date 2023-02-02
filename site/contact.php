<html lang="fr">
<?php require_once("php/config.php");
  include('./components/head.html')?>
<body class="contact-page">
    <?php include('./components/header.html')?>
        <div>
            <div class="component">
                <div class="contact-me">
                    <p>Contactez-moi</p>
                </div>
                <div class="contactForm">
                    <div class="firstNameAndName">
                        <div class="firstname">
                            <p>Prénom*</p>
                            <input class="name" type='text' id='name' required/>
                        </div>
                        <div class="name">
                            <p>Nom</p>
                            <input class="surname" type='text' id='family-name'/>
                        </div>
                    </div>
                    <div class="mail">
                        <p>Mail*</p>
                        <input class="email" type='email' id='email' required/>
                    </div>
                    <div class="object">
                        <p>Objet*</p>
                        <input class="object" type='text' id='subject' required/>
                    </div>
                    <div class="message">
                        <p>Message*</p>
                        <textarea class="remark" id="remarque" cols="20" rows="20"></textarea>
                    </div>
                    <div class="file">
                        <input class="button" id="f" type="file" value="Joindre un fichier">
                    </div> 
                    <div class="sendBtn">
                        <button onclick="mail()" class="button">Envoyer</button>
                    </div> 
                </div>                 
            </div>
        </div>
    
    <?php include('./components/footer.html')?>

    
</body>
<?php include("./components/script.php"); ?>
</html>