<?php
include ('cards.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="icon" href="assets/images/Logo.png" type="image/jpg">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/b801844dc1.js" crossorigin="anonymous"></script>

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">

  <title>Brainster Labs</title>
</head>
<body class="bg-yellow">
  <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-yellow col py-3 w-100" id="top">
      <a class="navbar-brand d-flex flex-column align-items-center mx-lg-5 ml-4 logo" href="index.php" id="wrapper-hide"><img src="assets/images/logo.png" width="50" height="50" alt="brainster-logo" class="mx-lg-3 text-dark"><span class="navbar-logo-caption text-uppercase text-dark">Brainster</span></a>
      <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="toggler-hide">
        <span class="border-0 menu-logo" id="menu-logo"><i class="fas fa-ellipsis-v fa-2x"></i></span>
        <span class="border-0 menu-logo" id="menu-logo-2"><i class="fas fa-times fa-2x"></i></span>
      </button>

      <div class="collapse navbar-collapse h-100" id="navbarSupportedContent">
        <ul class="navbar-nav w-100 d-flex justify-content-around" id="topColor">
          <li class="nav-item">
            <a class="nav-link font-weight-bold mx-4 ml-md-auto effect-2 " href="https://marketpreneurs.brainster.co/" target="_blank">Академија за маркетинг</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold mx-4 ml-md-auto effect-2" href="https://codepreneurs.brainster.co/" target="_blank">Академија за програмирање</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold mx-4 ml-md-auto effect-2" href="https://datascience.brainster.co/" target="_blank">Академија за data science</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold mx-4 ml-md-auto effect-2" href="https://design.brainster.co/" target="_blank">Академија за дизајн</a>
          </li>
          <li class="nav-item">
            <a href="formStudent.php"><button class="btn btn-red student-btn text-light font-weight-bold ml-4 ml-md-auto mr-md-4">Вработи наш студент</button></a>
          </li>
        </ul>
      </div>
    </nav><!-- NAVBAR END  -->
  <div class="container-fluid w-100 p-0 m-0" id="wrapper">
    <!-- JUMBOTRON -->
    <div class="row w-100 m-0 p-0">
      <div class="col w-100 d-flex justify-content-center align-items-center m-0 p-0 jumbotron" id="container">
        <p class="display-3 jumbotron-header p-4 text-center">Brainster Labs</p>
        <img src="assets/images/jumbotron5.jpg" alt="">
        <img src="assets/images/jumbotron2.jpg" alt="">
        <img src="assets/images/jumbotron3.jpg" alt="">
        <img src="assets/images/jumbotron4.jpg" alt="">
      </div>
    </div><!-- JUMBOTRON -->

    <!-- CARD FILTER -->
    <div class="row w-100 m-0 p-0 filter-outer d-flex flex-row" id="filter-outer">
      <label for="marketing" class="w-100">
      <div class="col-lg-4 col-12 m-0 p-0 d-flex justify-content-between align-items-center pr-5 filter" id="filter-marketing" title="Click Me">
        <input type="checkbox" id="marketing" name="marketing" class="hidden"/>
        <p class="pl-md-4 pl-3 py-4 pr-1 m-0 font-weight-500 text-left">Проекти на студенти по академијата <br><span class="font-italic">за маркетинг</span></p>
        <i class="fas fa-check-circle fa-2x"></i>
      </div>
      </label>
      <label for="programming" class="w-100">
      <div class="col-lg-4 col-12 m-0 p-0 d-flex justify-content-between align-items-center pr-5 filter" id="filter-programming" title="Click Me">
        <input type="checkbox" id="programming" class="hidden" name="programming"/>
        <p class="pl-md-4 pl-3 py-4 pr-1 m-0 font-weight-500 text-left">Проекти на студенти по академијата <br><span class="font-italic">за програмирање</span></p> 
        <i class="fas fa-check-circle fa-2x"></i>
      </div>
      </label>
      <label for="design" class="w-100">
      <div class="col-lg-4 col-12 m-0 p-0 d-flex justify-content-between align-items-center pr-5 filter" id="filter-design" title="Click Me">
        <input type="checkbox" id="design" class="hidden" name="design"/> 
        <p class="pl-md-4 pl-3 py-4 pr-1 m-0 font-weight-500 text-left">Проекти на студенти по академијата <br><span class="font-italic">за дизајн</span>
        </p><i class="fas fa-check-circle fa-2x"></i>
      </div>
    </div>
    </label>
    <!-- CARD FILTER END -->
    <!-- CARDS DIV -->
    <p class="text-dark display-2 text-center font-weight-normal pt-3 w-100 projects-headline my-5">Проекти</p>
    <div class="bg-yellow mx-xl-5 px-xl-5 mx-lg-3 px-lg-3 px-1 mx-1">
      <div class="row m-0 py-3 mx-xl-5 px-xl-5 mx-lg-2 px-lg-2 mx-md-auto d-flex justify-content-lg-start justify-content-center align-items-center" id="cards">
        <!-- marketing----------------------->
        <?php
        foreach($marketingCards as $marketingCard) {
        echo "<div class='col-12 col-md-5 col-lg-4 {$marketingCard['typeClass']}'>";
            echo "<div class='card border-0 '>";
                echo "<img src='{$marketingCard['image']}' class='card-img m-0 p-0' alt='...'>";
                echo "<div class='card-body'>";
                    echo "<p class='bg-yellow text-dark font-weight-bold d-inline px-2'>Академија за {$marketingCard['type']}</p>";
                    echo "<p class='card-title h5 mt-2'>{$marketingCard['headline']}</p>";
                    echo "<p class='card-text'>{$marketingCard['description']}</p>";
                    echo "<p class='card-subtitle font-weight-bold'>{$marketingCard['academyStart']} - {$marketingCard['academyEnd']}</p>";
                    echo "<div class='text-right'>";
                        echo "<a class='btn btn-red text-white mt-3 mb-0' href='{$marketingCard['seeMore']}'>Дознај повеќе</a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
            echo "</div>";
            };
            ?><!-- marketing end------------------->

            <!-- programming--------------------->
            <?php
            foreach($programmingCards as $programmingCard) {
            echo "<div class='col-12 col-md-5 col-lg-4 {$programmingCard['typeClass']}'>";
            echo "<div class='card border-0 '>";
                echo "<img src='{$programmingCard['image']}' class='card-img m-0 p-0' alt='...'>";
                echo "<div class='card-body'>";
                    echo "<p class='bg-yellow text-dark font-weight-bold d-inline px-2'>Академија за {$programmingCard['type']}</p>";
                    echo "<p class='card-title h5 mt-2'>{$programmingCard['headline']}</p>";
                    echo "<p class='card-text'>{$programmingCard['description']}</p>";
                    echo "<p class='card-subtitle font-weight-bold'>{$programmingCard['academyStart']} - {$programmingCard['academyEnd']}</p>";
                    echo "<div class='text-right'>";
                        echo "<a class='btn btn-red text-white mt-3 mb-0' href='{$programmingCard['seeMore']}'>Дознај повеќе</a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
            echo "</div><br>";
            };
            ?><!-- programming end----------------->

            <!-- design-------------------------->
            <?php
            foreach($designCards as $designCard) {
            echo "<div class='col-12 col-md-5 col-lg-4 {$designCard['typeClass']}'>";
            echo "<div class='card border-0'>";
                echo "<img src='{$designCard['image']}' class='card-img m-0 p-0' alt='...'>";
                echo "<div class='card-body'>";
                    echo "<p class='bg-yellow text-dark font-weight-bold d-inline px-2'>Академија за {$designCard['type']}</p>";
                    echo "<p class='card-title h5 mt-2'>{$designCard['headline']}</p>";
                    echo "<p class='card-text'>{$designCard['description']}</p>";
                    echo "<p class='card-subtitle font-weight-bold'>{$designCard['academyStart']} - {$designCard['academyEnd']}</p>";
                    echo "<div class='text-right'>";
                        echo "<a class='btn btn-red text-white mt-3 mb-0' href='{$designCard['seeMore']}'>Дознај повеќе</a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
            echo "</div><br>";
            };
            ?><!-- design end---------------------->
      </div>
    </div><!-- CARDS DIV END -->

    <!-- BACK ON TOP BUTTON -->
    <a id="scrollToTopBtn" class="text-dark text-center d-inline-block back-on-top w-100" title="Back To Top" data-toggle="tooltip" data-placement="top"><i class="fas fa-chevron-circle-up fa-2x"></i></a>

    <!-- FOOTER -->
    <?php include "footer.html"?>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <script>
    $("[data-toggle=tooltip]").tooltip();
  </script>
  <script src="assets/script/navbar.js"></script><!--navbar script-->
  <script src="assets/script/filter.js"></script><!--card filter script-->
  <script src="assets/script/scrollToTop.js"></script><!--scroll to top script-->
</body>
</html>