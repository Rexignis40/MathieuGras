<html lang="fr">
<?php require_once("php/config.php");
  include('./components/head.html')?>
<body>
    <?php include('./components/header.html')?>
    
    <div class="row">
        <?php
        $myfile = fopen("php/json/portfolio.json", "r"); 
        $json = json_decode(fread($myfile, filesize("php/json/portfolio.json")), true)["portfolio"];
        fclose($myfile);
        ?>
        <!-- Carousel 1 -->
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselPortfolioImg carouselPortfolio1Img1">
                    <?php
                    if(isset($json[0])){
                    $html = "";
                    $html .= '<h2>'. $json[0]["title"] .'</h2><p class="white-text">'.$json[0]["desc"].'</p>';
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
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio2Img1">
                    <?php
                    if(isset($json[1])){
                    $html = "";
                    $html .= '<h2>'. $json[1]["title"] .'</h2><p class="white-text">'.$json[1]["desc"].'</p>';
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
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio3Img1">
                    <?php
                    if(isset($json[2])){
                    $html = "";
                    $html .= '<h2>'. $json[2]["title"] .'</h2><p class="white-text">'.$json[2]["desc"].'</p>';
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
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio4Img1">
                    <?php
                    if(isset($json[3])){
                    $html = "";
                    $html .= '<h2>'. $json[3]["title"] .'</h2><p class="white-text">'.$json[3]["desc"].'</p>';
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
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio5Img1">
                    <?php
                    if(isset($json[4])){
                    $html = "";
                    $html .= '<h2>'. $json[4]["title"] .'</h2><p class="white-text">'.$json[4]["desc"].'</p>';
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
        <div class="col s12 l4">
            <div class="carousel carousel-slider center carouselPortfolio">
                <div class="carousel-item white-text carouselImgPortfolio carouselPortfolio6Img1">
                    <?php
                    if(isset($json[5])){
                    $html = "";
                    $html .= '<h2>'. $json[5]["title"] .'</h2><p class="white-text">'.$json[5]["desc"].'</p>';
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