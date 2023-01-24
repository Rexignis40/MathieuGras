<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" rel="stylesheet" href="../css/contact.css">
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Maven+Pro:wght@500&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Mathieu Gras Photography</title>
</head>
    <body>
        <?php include('../components/header.html')?>
        <div class="row">
            <div class="formulaire row col l6 offset-l5">
                <div class="contact white-text"><p>Contactez-moi</p></div>
                <form method="post" action="../php/logup.php">
                    <p class="white-text">Prénom</p>
                    <input class="white" type='text' name='name' />
                    <p class="white-text">Nom</p>
                    <input class="white" type='text' name='name' />
                    <p class="white-text">votre Email</p>
                    <input class="white" type='email' name='email'/>
                    <p class="white-text">sujet</p>
                    <input class="white" type='text' name='subject' />
                    <p class="white-text">votre remarque</p>
                    <input class="white" type='text' name='remarque' />
                    <input class="orange" type='submit' value='Envoyer' />
                </form>
            </div>
        </div>
        
        


        <script type="text/javascript" src="js/Jquery.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>