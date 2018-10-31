<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Fabien Mackowiak">
    <meta name="description" content="Développeur web en formation chez O'clock. Portfolio, outils, contact... Tout y est ! Je suis disponible pour réaliser vos projets web en Haute-Savoie et sur la région de Genève.">
    <meta name="keywords" content="HTML, CSS, JavaScript, Développeur, Annecy, Taninges, Site, Web, Wix, Git, Github, Formation, O'clock, Fabien, Mackowiak, Samoëns, Verchaix, Morillon, Sixt, Haute-Savoie">
    <title>Fabien Mackowiak | Développeur Web</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/cssnew.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="images/Icone discord.png" />
    <?php include("nombre_visiteurs.php"); ?>
  </head>
  <body>
    <main id="main">
      <div class="loader">
        <img src="svg-loaders/tail-spin.svg" id="img-loader" />
      </div>
      <!-- OPEN ROW -->

      <header class="d-flex flex-column" id="openrow">
        <div class="d-flex flex-column" id="divfortitle">
          <h1 id="h1">Fabien Mackowiak</h1>
          <div id="hrfortitle"></div>
          <span id="alth1">Développeur Front-End en formation</span>
        </div>
        <div id="div-white-arrow">
          <img src="images/flecheblanche.png" alt="Fleche blanche pointant vers le bas" id="whitearrow">
        </div>
      </header>

      <!-- ROW 1 -->

      <article class="row flex-column" id="row1">
        <h1 class="main-title-part-1">Ma démarche</h1>
        <div class="step-content">
          <div class="step-content-bloc">
            <div>
              <i class="far fa-comments fa-4x i_blue"></i>
            </div>
            <h2 class="second-title-part-1">Ecoute</h2>
            <p class="step-content-bloc-text">Avant de toucher au code, je prends le temps d'écouter la demande du client concernant son projet. <br> Nous voyons ensuite comment le réaliser, de quelle(s) fonctionnalité(s) il devra être doté et quel thème de couleurs choisir.</p>
          </div>
          <div class="step-content-bloc">
            <div>
              <i class="fas fa-sitemap fa-4x i_blue"></i>
            </div>
            <h2 class="second-title-part-1">Workflow</h2>
            <p class="step-content-bloc-text">Mon workflow est basé sur l'efficacité. <br> Un design sobre et précis. <br> Mon but est que l'utilisateur puisse trouver l'information qu'il recherche rapidement, en naviguant sur un site agréable à utiliser.</p>
          </div>
          <div class="step-content-bloc">
            <div>
              <i class="fas fa-sync-alt fa-4x i_blue"></i>
            </div>
            <h2 class="second-title-part-1">Suivi</h2>
            <p class="step-content-bloc-text">Une fois mis en ligne, le contenu du site doit rester à jour et son design aussi. <br> Je garde toujours un oeil sur mes réalisations afin d'assurer leur bon fonctionnement.</p>
          </div>
        </div>
      </article>

      <!-- ROW 2 #Carousel -->

      <section class="row flex-column" id="row2">

        <h1 class="main-title-part-1" id="row2h1">Mes outils</h1>

        <div class="container">
          <div class="carousel">

            <a href="https://fr.wikipedia.org/wiki/Hypertext_Markup_Language" target="_blank" class="item a">
              <i class="fab fa-html5 fa-2x"></i>
              <h2>HTML</h2>
            </a>

            <a href="https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade" target="_blank" class="item b">
              <i class="fab fa-css3-alt fa-2x"></i>
              <h2>CSS</h2>
            </a>

            <a href="https://fr.wikipedia.org/wiki/PHP" target="_blank" class="item c">
              <i class="fab fa-php fa-2x"></i>
              <h2>PHP</h2>
            </a>

            <a href="https://www.javascript.com/" target="_blank" class="item d">
              <i class="fab fa-js fa-2x"></i>
              <h2>JavaScript</h2>
            </a>

            <a href="https://github.com/" target="_blank" class="item e">
              <i class="fab fa-github fa-2x"></i>
              <h2>GitHub</h2>
            </a>

            <a href="https://www.wix.com/code/home" target="_blank" class="item f">
              <i class="fab fa-wix fa-2x"></i>
              <h2>Wix Code</h2>
            </a>

          </div>
        </div> <!-- /container -->
        <div class="d-flex" id="contain-arrow">
          <div class="prev"><i class="fas fa-arrow-circle-left fa-4x carousel-arrow"></i></div>
          <div class="next"><i class="fas fa-arrow-circle-right fa-4x carousel-arrow"></i></div>
        </div>

        <!-- /carousel -->

        <!-- Skills for mobile -->
        <div id="skills-mobile" class="step-content">
          <a href="https://fr.wikipedia.org/wiki/Hypertext_Markup_Language" target="_blank" class="skills-mobile-link">
            <i class="fab fa-html5 fa-8x skills-mobile-img"></i>
          </a>

          <a href="https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade" target="_blank" class="skills-mobile-link">
            <i class="fab fa-css3-alt fa-8x skills-mobile-img"></i>
          </a>

          <a href="https://fr.wikipedia.org/wiki/PHP" target="_blank" class="skills-mobile-link">
              <i class="fab fa-php fa-8x skills-mobile-img"></i>
          </a>

          <a href="https://www.javascript.com/" target="_blank" class="skills-mobile-link">
            <i class="fab fa-js fa-8x skills-mobile-img"></i>
          </a>

          <a href="https://github.com/" target="_blank" class="skills-mobile-link">
            <i class="fab fa-github fa-8x skills-mobile-img"></i>
          </a>

          <a href="https://www.wix.com/code/home" target="_blank" class="skills-mobile-link">
            <i class="fab fa-wix fa-8x skills-mobile-img"></i>
          </a>
        </div>

        <!-- /Skills for mobile -->

        <div class="d-flex" id="alert-carousel">
          <i class="fas fa-exclamation-circle fa-2x" id="img-alert-carousel"></i>
          <p id="text-alert-carousel">D'autres compétences sont en cours d'apprentissage !</p>
        </div>
      </section>


      <!-- ROW 3 -->

      <section class="row flex-column" id="row3">
        <h1 class="main-title-part-2">Portfolio</h1>
        <div class="step-content" id="step-content-portfolio">

          <a href="https://www.alpesetcanyons.com/" target="_blank" class="step-content-bloc-portfolio">
            <img src="images/screen-alpes-et-canyons.png" alt="Alpes Et Canyons" class="images-portfolio">
          </a>

          <a href="https://www.anothaicie.com/" target="_blank" class="step-content-bloc-portfolio">
            <img src="images/screen-anothai-cie.png" value="screen-anothai-cie2" alt="Anothai cie" class="images-portfolio">
          </a>

          <a class="step-content-bloc-portfolio">
            <img src="images/1280x800.png" alt="Fakeimg" class="images-portfolio">
          </a>

          <a class="step-content-bloc-portfolio">
            <img src="images/1280x800.png" alt="Fakeimg" class="images-portfolio">
          </a>

        </div>
      </section>

      <!-- ROW OBJECTIF -->

      <section id="rowobjectifs" class="row">
        <div class="step-content div-h2-objectifs">
          <div class="separation"></div>
          <h2 class="h2-objectifs">ME CONCERNANT</h2>
          <div class="separation"></div>
        </div>
      </section>
      <article id="articleobjectifs">
        <div id="container_carousel_description">
          <div class="d-flex center" id="container_icons_description">
            <div class="d-flex flex-column icons_description">
              <div class="icon_div" id="1">
                <i class="fas fa-dumbbell fa-5x icons_about"></i>
              </div>
              <h3 class="h3_description">#Loisirs</h3>
            </div>
            <div class="d-flex flex-column icons_description">
              <div class="icon_div" id="2">
                <i class="fas fa-book fa-5x icons_about"></i>
              </div>
              <h3 class="h3_description">#Formation</h3>
            </div>
            <div class="d-flex flex-column icons_description">
              <div class="icon_div" id="3">
                <i class="fas fa-brain fa-5x icons_about"></i>
              </div>
              <h3 class="h3_description">#Qualités</h3>
            </div>
            <div class="d-flex flex-column icons_description">
              <div class="icon_div" id="4">
                <i class="fas fa-sort-amount-up fa-5x icons_about"></i>
              </div>
              <h3 class="h3_description">#Objectifs</h3>
            </div>
          </div>

          <div id="text_container">
            <div class="all_texts text_0">
              <h3 class="title_text1">0</h3>
              <p class="text_text1">N'hésitez pas à cliquer sur les différents icônes ci-dessus afin de découvrir les différentes rubriques.</p>
            </div>
            <div class="all_texts text_1 display_none" >
              <h3 class="title_text1">1</h3>
              <p class="text_text1">N'hésitez pas à cliquer sur les différents icônes ci-dessus afin de découvrir les différentes rubriques.</p>
            </div>
            <div class="all_texts text_2 display_none">
              <h3 class="title_text1">2</h3>
              <p class="text_text1">N'hésitez pas à cliquer sur les différents icônes ci-dessus afin de découvrir les différentes rubriques.</p>
            </div>
            <div class="all_texts text_3 display_none">
              <h3 class="title_text1">3</h3>
              <p class="text_text1">N'hésitez pas à cliquer sur les différents icônes ci-dessus afin de découvrir les différentes rubriques.</p>
            </div>
            <div class="all_texts text_4 display_none">
              <h3 class="title_text1">4</h3>
              <p class="text_text1">N'hésitez pas à cliquer sur les différents icônes ci-dessus afin de découvrir les différentes rubriques.</p>
            </div>
          </div>
        </div>
      </article>

      <!-- ROW 4 -->

      <section class="row flex-column" id="row4">
        <h1 class="main-title-part-2">Contact</h1>
          <div>
            <div class="step-contact">
              <i class="fas fa-envelope fa-3x i_blue"></i>
              <a href="mailto:fmackodev@gmail.com" id="lienmail">fmackodev@gmail.com</a>
            </div>
            <div class="step-contact">
              <i class="fas fa-phone fa-3x i_blue"></i>
              <a href="tel:+33626277924" id="lientel">06 26 27 79 24</a>
            </div>
          </div>
      </section>

      <!-- ROW 5 -->

        <iframe src="https://www.google.com/maps/d/embed?mid=1QCDdz0oTqGMNeIIFIAFSvMxSNgUMx3TU"></iframe>

      <!-- FOOTER -->

      <footer class="d-flex flex-column">
        <div class="d-flex">
          <a href="https://www.linkedin.com/in/fabien-mackowiak-8b0032164/" class="footer-a" target="_blank"><i class="fab fa-linkedin fa-3x socialfooter"></i></a>
          <a href="https://github.com/fabienmacko" class="footer-a" target="_blank"><i class="fab fa-github-square fa-3x socialfooter"></i></a>
        </div>
        <p id="mentions-footer">
          Développé avec <i class="fas fa-heart" id="heart-footer"></i> par <strong>Fabien Mackowiak</strong>
        </p>
      </footer>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="js/jsnew.js"></script>
     <script src="js/jquery-ui.js"></script>
  </body>
</html>
