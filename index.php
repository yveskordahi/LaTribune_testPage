<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>La Tribune Charts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/reset.min.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/main-article.css" />
  </head>
  <body>
    <div class="header__before"></div>
    <header class="site-header">
      <div class="wrapper site-header__wrapper">
        <a href="#" class="logo"><img class="logo__image" src="assets/logo-latribune.png" alt="Logo de la tribune"></a>
        <nav class="nav">
        <a class="nav__toggle">
            <img class="nav__toggle__icon" src="assets/burger_menu.svg" alt="burger_menu">
        </a>
          <ul class="nav__wrapper">
            <li class="nav__item"><a class="nav__item__link" href="#">Économie</a></li>
            <li class="nav__item"><a class="nav__item__link" href="#">Bourse</a></li>
            <li class="nav__item"><a class="nav__item__link" href="#">Entreprise & Finance</a></li>
            <li class="nav__item"><a class="nav__item__link" href="#">Tech</a></li>
            <li class="nav__item"><a class="nav__item__link" href="#">Vos finances</a></li>
            <li class="nav__item"><a class="nav__item__link" href="#">Idées</a></li>
            <li class="nav__item"><a class="nav__item__link" href="#">régions</a></li>
            <li class="nav__item"><a class="nav__item__link" href="#">carrières</a></li>
            <li class="nav__item"><a class="nav__item__link" href="#">vidéos</a></li>
          </ul>
        </nav>
      </div>
    </header>
    
    <div class="container__cac_40"></div>

    <main class="main">
    <div class="container">
        <div class="section__top__title">
            <div class="section__top__title__links">
                <a href="#"><img class="links__icon-home" src="assets/home.svg" alt=""></a>
                <p class="links__icon-arrow" >></p>
                <p class="links__article" >Rubrique</p>
                <p class="links__icon-arrow" >></p>
                <p class="links__article">Sujet</p>
            </div>
            <div class="section__top__title__text">La France dans le rouge</div>
            <div class="section__top__title__description">
                <a href="#"><img class="links__icon-home" src="assets/pen-tool.svg" alt=""></a>
                <p class="article__description" >Par <span class="article__redactor__name">Bertrand Dupont, AFP</span> </p>
                <p class="links__separator">|</p>
                <p class="article__description" >05/02/2021, 17:30</p>
                <p class="links__separator">|</p>
                <p class="article__description" >780 mots</p>
            </div>
            <div class="section__top__reading__time">
                <a href="#"><img class="links__icon-home" src="assets/stopwatch.svg" alt=""></a>
                <p class="article__description" >Lecture 5 min.</p>
            </div>

            <hr class="separator">
            <div id="chartdiv"></div>
            <hr class="separator__article">

            <div class="section__article">
            <div class="section__article__text">
            
            </div>
            <div class="sidebar"></div>
            </div>

            
        </div>
        
    </div>
    </main>

    <script src="scripts/header.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="scripts/charts.js"></script>
  </body>
</html>