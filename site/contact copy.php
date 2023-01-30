<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" rel="stylesheet" href="css/style copy.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Maven+Pro:wght@500&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="\site\img\favicon_io\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="\site\img\favicon_io\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="\site\img\favicon_io\favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Mathieu Gras Photography</title>
</head>
<body>
    <?php include('./components/header.html')?>
        <div  class="contact-page">
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
                        <input class="" type='email' id='email' required/>
                    </div>
                    <div class="object">
                        <p>Objet*</p>
                        <input class="" type='text' id='subject' required/>
                    </div>
                    <div class="message">
                        <p>Message*</p>
                        <textarea class="remark" id="remarque" cols="20" rows="20"></textarea>
                    </div>
                    <div class="sendBtn">
                        <button class="button">Envoyer</button>
                    </div> 
                </div>                 
            </div>
        </div>
    

    <script type="text/javascript" src="js/Jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>