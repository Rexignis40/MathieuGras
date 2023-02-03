<html lang="fr">
<?php require_once("php/config.php");
  include('./components/head.html')?>
<body>
    <?php include('./components/header.html')?>
    
    <div class="row portfolio">
        <?php
        $myfile = fopen("php/json/portfolio.json", "r"); 
        $json = json_decode(fread($myfile, filesize("php/json/portfolio.json")), true)["portfolio"];
        fclose($myfile);
        ?>
        <!-- Carousel 1 -->
        <div class="col s12 m6 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio1Img1">
                    <?php
                    if(isset($json[0])){
                        $elm = json_decode($json[0], true);
                        $html = "";
                        $html .= '<h2>'. $elm["title"] .'</h2><p class="white-text">'.$elm["description"].'</p>';
                        echo $html;
                    ?>
                </div>
                <div class="carousel-item white-text carouselPortfolioImg carouselPortfolio1Img2"></div>
                <div class="carousel-item white-text carouselPortfolioImg carouselPortfolio1Img3"></div>
                <div class="carousel-item white-text carouselPortfolioImg carouselPortfolio1Img4"></div>
                <?php }?>
            </div>
        </div>
        <!-- Carousel 2 -->
        <div class="col s12 m6 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio2Img1">
                    <?php
                    if(isset($json[1])){
                        $elm = json_decode($json[1], true);
                        $html = "";
                        $html .= '<h2>'. $elm["title"] .'</h2><p class="white-text">'.$elm["description"].'</p>';
                        echo $html;
                    ?>
                </div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio2Img2"></div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio2Img3"></div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio2Img4"></div>
                <?php }?>
            </div>
        </div>
        <!-- Carousel 3 -->
        <div class="col s12 m6 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio3Img1">
                    <?php
                    if(isset($json[2])){
                        $elm = json_decode($json[2], true);
                        $html = "";
                        $html .= '<h2>'. $elm["title"] .'</h2><p class="white-text">'.$elm["description"].'</p>';
                        echo $html;
                    ?>
                </div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio3Img2"></div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio3Img3"></div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio3Img4"></div>
                <?php }?>
            </div>
        </div>
        <!-- Carousel 4 -->
        <div class="col s12 m6 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio4Img1">
                    <?php
                    if(isset($json[3])){
                        $elm = json_decode($json[3], true);
                        $html = "";
                        $html .= '<h2>'. $elm["title"] .'</h2><p class="white-text">'.$elm["description"].'</p>';
                        echo $html;
                    ?>
                </div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio4Img2"></div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio4Img3"></div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio4Img4"></div>
                <?php }?>
            </div>
        </div>
        <!-- Carousel 5 -->
        <div class="col s12 m6 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio5Img1">
                    <?php
                    if(isset($json[4])){
                        $elm = json_decode($json[4], true);
                        $html = "";
                        $html .= '<h2>'. $elm["title"] .'</h2><p class="white-text">'.$elm["description"].'</p>';
                        echo $html;
                    ?>
                </div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio5Img2"></div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio5Img3"></div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio5Img4"></div>
                <?php }?>
            </div>
        </div>
        <!-- Carousel 6 -->
        <div class="col s12 m6 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio6Img1">
                    <?php
                    if(isset($json[5])){
                        $elm = json_decode($json[5], true);
                        $html = "";
                        $html .= '<h2>'. $elm["title"] .'</h2><p class="white-text">'.$elm["description"].'</p>';
                        echo $html;
                    ?>
                </div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio6Img2"></div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio6Img3"></div>
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio6Img4"></div>
                <?php }?>
            </div>
        </div> 
    </div>
    
        
    <?php include('./components/footer.html'); ?>
</body>
    <?php include("./components/script.php"); ?>
</html>