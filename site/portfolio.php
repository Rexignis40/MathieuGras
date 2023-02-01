<html lang="fr">
<?php require_once("php/config.php");
  include('./components/head.html')?>
<body>
    <?php include('./components/header.html')?>
    
    <div class="row">
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio" href="#one">
                    <?php
                    $myfile = fopen("php/json/portfolio.json", "r"); 
                    $json = json_decode(fread($myfile, filesize("php/json/portfolio.json")), true)["portfolio"];
                    fclose($myfile);
                    $html = "";
                    for($i = 0; $i < 1; $i++){
                        $elm = json_decode($json[$i], true);
                        $html .= '<h2>'. $elm["title"] .'</h2><p class="white-text">'.$elm["desc"].'</p>';
                    }
                    echo $html;
                    ?>
                </div>
                <div class="carousel-item white-text" href="#two!"></div>
                <div class="carousel-item white-text" href="#three!"></div>
                <div class="carousel-item white-text" href="#four!"></div>
            </div>
        </div>
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio" href="#one!">
                <h2>TITRE</h2>
                <p class="white-text">DATE - LIEU</p>
                </div>
                <div class="carousel-item white-text black" href="#two!"></div>
                <div class="carousel-item white-text" href="#three!"></div>
                <div class="carousel-item white-text" href="#four!"></div>
            </div>
        </div>
        <div class="col s12 l4">

            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio" href="#one!">
                <h2>TITRE</h2>
                <p class="white-text">DATE - LIEU</p>
                </div>
                <div class="carousel-item white-text" href="#two!"></div>
                <div class="carousel-item white-text" href="#three!"></div>
                <div class="carousel-item white-text" href="#four!"></div>
            </div>
        </div>
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio" href="#one!">
                <h2>TITRE</h2>
                <p class="white-text">DATE - LIEU</p>
                </div>
                <div class="carousel-item white-text" href="#two!"></div>
                <div class="carousel-item white-text" href="#three!"></div>
                <div class="carousel-item white-text" href="#four!"></div>
            </div>
        </div>
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio" href="#one!">
                <h2>TITRE</h2>
                <p class="white-text">DATE - LIEU</p>
                </div>
                <div class="carousel-item" href="#two!"></div>
                <div class="carousel-item" href="#three!"></div>
                <div class="carousel-item" href="#four!"></div>
            </div>
        </div>
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio" href="#one!">
                <h2>TITRE</h2>
                <p class="white-text">DATE - LIEU</p>
                </div>
                <div class="carousel-item" href="#two!"></div>
                <div class="carousel-item" href="#three!"></div>
                <div class="carousel-item" href="#four!"></div>
            </div>
        </div> 
    </div>
    
        
    <?php include('./components/footer.html'); ?>
</body>
    <?php include("./components/script.php"); ?>
<script>
    document.body.addEventListener("load",GetPortfolio());
</script>
</html>