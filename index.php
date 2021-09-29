<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="logoM.png"/>

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/css/styles.css" />


    <!--==================== ICONify ====================-->
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>

    <!--==================== JS SMTP JS ====================-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>

    <script type="text/javascript">
    (function() {
        emailjs.init("user_vD3pDdKzDOm6SiJYCpItq");
    })();
    </script>
    <script type="text/javascript">
        window.onload = function() {
            document.getElementById('contact-form').addEventListener('submit', function(event) {
                event.preventDefault();


                var tempParams = {
                    sender_name: document.getElementById("sender-name").value,
                    sender_mail: document.getElementById("sender-mail").value,
                    sender_subject: document.getElementById("sender-subject").value,
                    sender_message: document.getElementById("sender-message").value,
                };

                // these IDs from the previous steps
                emailjs.send('service_e7tkgud', 'template_nhhevaw', tempParams)
                    .then(function() {
                        console.log('SUCCESS!');
                        sendAlert('Message envoyé !');
                    }, function(error) {
                        console.log('FAILED...' + error);
                        sendAlert('Erreur...'+ error);
                    });

            });
        };
    </script>

    <title>Mikail Kalkan Portfolio</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <img src="logoM2.png" alt="logo" height="60" width="60">
            <a href="#" class="nav__logo">Mikail</a>

            <div id="nav-menu" class="nav__menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i>Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i>A propos de moi
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i>Skills
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#qualification" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i>Qualification
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i>Portfolio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i>Contactez Moi
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <!-- Theme change button-->

                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/mikail-kalkan-a71b7520a/" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://github.com/Mikail-design-Pro" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>

                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <mask id="mask0" mask-type="alpha">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                </mask>
                <g mask="url(#mask0)">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />

                  <image
                    class="home__blob-img"
                    x="0"
                    y="0"
                    xlink:href="assets/img/mike.jpg"
                  />
                </g>
              </svg>
                    </div>

                    <div class="home__data">
                        <h1 class="home_title">Hi, I'am Mikail</h1>
                        <h3 class="home__subtitle">Full Stack developer</h3>
                        <p class="home__description">
                           Creative web solution, digital and numeric 
                        </p>
                        <a href="#contact" class="button button--flex">
                Contactez Moi
                <i class="uil uil-message button__icon"></i>
              </a>
                    </div>
                </div>

                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Défiler</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section__title">À propos de moi</h2>
            <span class="section__subtitle">Mon introduction</span>

            <div class="about__container container grid">
                <img src="assets/img/mik.jpg" alt="" class="about__img" />

                <div class="about__data">
                    <p class="about__description">
                    Web développer, fan de nouvelles technologies. Je garde toujours un œil sur les nouveautés du moment. Bricoleur du dimanche, j’adore voir le fonctionnement des objets de tous les jours. Compétiteur, je suis un grand fan de sport de combat. Touche à tout je suis aussi curieux d’apprendre plus sur toutes les branches du développement.
                    </p>

                    <div class="about__info">
                        <div>
                            <span class="about__info-title">01+</span>
                            <span class="about__info-name">Ans <br />d'experience</span>
                        </div>

                        <div>
                            <span class="about__info-title">10+</span>
                            <span class="about__info-name">Brief <br /> Completer</span>
                        </div>

                        <div>
                            <span class="about__info-title">02+</span>
                            <span class="about__info-name">Projet <br /> Client</span>
                        </div>
                    </div>

                    <div class="about__buttons">
                        <a download href="assets/pdf/Mikailkalkancv.pdf" class="button button--flex">
                            Télécharger CV
                            <i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">Mon niveaux technique</span>

            <div class="skills__container container grid">
                <div>
                    <!--==================== SKILLS 1 ====================-->
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Front-End developer</h1>
                                <span class="skills__subtitle">1 ans</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__names">HTML</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__names">CSS</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__names">XAML</h3>
                                    <span class="skills__number">40%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__xaml"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--==================== SKILLS 2 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Back-End developer</h1>
                                <span class="skills__subtitle">1 ans</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">C#</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__cSharp"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Firebase</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__firebase"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <!--==================== SKILLS 3 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-swatchbook skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Designer</h1>
                                <span class="skills__subtitle">1 ans</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Gimp</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__gimp"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Photoshop</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__photoshop"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Blender</h3>
                                    <span class="skills__number">35%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__blender"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section" id="qualification">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">Mon cursus personel</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target='#education'>
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>

                    <div class="qualification__button button--flex" data-target='#work'>
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Travail
                    </div>
                </div>

                <div class="qualification__sections">
                    <!--==================== QUALIFICATION CONTENT====================-->
                    <div class="qualification__content qualification__active" data-content id ="education">
                        <!--==================== QUALIFICATION 1====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Web developer - Formation</h3>
                                <span class="qualification__subtitle">Narbonne - Formation Simplon</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020 - Actuel 
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 2====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">Titulaire Baccalauréat STI2D</h3>
                                <span class="qualification__subtitle">Narbonne - Lycée Louise Michel</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2014-2015
                                </div>
                            </div>

                        </div>

                        <!--==================== QUALIFICATION 3====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Habilitation H0/B0 et S.S.T </h3>
                                <span class="qualification__subtitle">Narbonne - IN'ESS</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019-2020
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>

                        </div>
                    </div>

                    <!--==================== QUALIFICATION CONTENT 2====================-->
                    <div class="qualification__content" data-content id ="work">
                        <!--==================== QUALIFICATION  1====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            
                            <div>
                                <h3 class="qualification__title">Development application Excel Coifure - Stage UNIVR</h3>
                                <span class="qualification__subtitle">Narbonne - Societé UNIVR </span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Juin- Aout 2021
                                </div>
                            </div>

                            
                        </div>

                        <!--==================== QUALIFICATION 2====================-->
                        <div class="qualification__data">

                            <div>
                                <h3 class="qualification__title">Prestation site pour l'auto ecole Montlhery</h3>
                                <span class="qualification__subtitle">Narbonne - <a href="https://auto-ecole-montlhery-narbonne.com/"> Montlhery</a> </span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Mars 2021
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 3====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>
                            <div>
                                <h3 class="qualification__title">Employer polyvalent restoration</h3>
                                <span class="qualification__subtitle">Narbonne - KFC</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019-2020
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Mes diférents projets </span>

            <!--==================== Tri ====================-->

            <div class="portfolio__tri">

                <a href="index.php?id=html#portfolio" class="portfolio__tri-button button button--flex" target="" el="noopener noreferrer">
                    <span class="tri-s">HTML5</span><span class="iconify tri__icon" data-icon="akar-icons:html-fill"></span>
                </a>

                <a href="index.php?id=javascript#portfolio"  class="portfolio__tri-button button button--flex" target="" el="noopener noreferrer">
                    <span class="tri-s">JavaScript</span><span class="iconify tri__icon" data-icon="tabler:brand-javascript"></span>
                </a>

                <a href="index.php?id=php#portfolio" class="portfolio__tri-button button button--flex" target="" el="noopener noreferrer">
                    <span class="tri-s">PHP</span> <span class="iconify tri__icon tri__icon" data-icon="akar-icons:php-fill"></span>
                </a>

                <a href="index.php?#portfolio" class="portfolio__tri-button button button--flex" target="" el="noopener noreferrer">
                    <span class="tri-s">Tout</span> <span class="iconify tri__icon" data-icon="bi:border-all"></span>
                </a>
            </div>
                <!--==================== SWIPER ====================-->
            <?php require ("admin/db_conn.php") ?>

            <?php 
                if(isset($_GET['id']) && !empty($_GET['id'])){
                    // on clean la valeur d'id
                    $sort = strip_tags($_GET['id']);
                }else{
                    $sort = "%";
                }

                $sql = 'SELECT * FROM articles WHERE category LIKE :category' ;

                $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

                $sth->execute(array(':category' =>  $sort));
                $all_articles = $sth->fetchAll();

            ?>
            <!-- Swiper -->
            <div class="portfolio__container swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach($all_articles as $article){ ?>
                            
                    <div class="<?= $article['category']; ?> swiper-slide portfolio__content grid">
                        <img src="assets/img/<?= $article['first_image']; ?>" alt="<?= $article['first_image']; ?>" class="portfolio__img">
                
                        <div class="portfolio__data">
                            <h3 class="portfolio__title"><?= $article['title']; ?></h3>
                            <span class="portfolio__category"><?= $article['category']; ?></span>
                            <p class="portfolio__description"><?= $article['short_description']; ?></p>
                            <a href="page/page.php?id=<?= $article['id']; ?>" class="button button--flex button--small portfolio__button">
                            Voir plus 
                            <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <?php }?>
                </div>
                <!-- Add Arrow / pagination -->
                            
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                </div>

                <div class="swiper-pagination"></div>
            </div>

        </section>

        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section">
            <div class="project__bg">
                <div class="project__containner container grid">
                    <div class="project__data">
                        <h2 class="project__title">Vous avez un nouveau projet ?</h2>
                        <p class="project__description">N'hésitez pas à me contacter</p>
                        <a href="#contact" class="button button--flex button--white">
                            Contactez Moi
                            <i class="uil uil-message project__icon button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== CONTACT ME ====================-->
        <section class="contact section" id="contact">
            <h2 class="section__title">Contactez Moi</h2>
            <span class="section__subtitle">Me solliciter</span>

            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Appelez moi</h3>
                            <span class="contact__subtitle">06-46-67-34-69</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact__subtitle">mikailkalkanpro@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Localisation</h3>
                            <span class="contact__subtitle">France - Narbonne</span>
                        </div>
                    </div>
                </div>

                <form name="contact__form" class="contact__form grid" id="contact-form" method="POST">
                    <div id="alert-div" class="alert__div">
                        <span class="alert__span" id="alert-span" onclick="this.parentElement.style.display='none';"></span>
                    </div>
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="user_name" class="contact__label">Nom</label>
                            <input type="text" name="user_name" id="sender-name" class="contact__input" required>
                        </div>
                        <div class="contact__content">
                            <label for="user_email" class="contact__label">Email</label>
                            <input type="email" name="user_email" id="sender-mail" class="contact__input" required>
                        </div>
                    </div>
                    <div class="contact__content">
                        <label for="projet" class="contact__label">Projet</label>
                        <input type="text" name="projet" id="sender-subject" class="contact__input" required>
                    </div>
                    <div class="contact__content">
                        <label for="message" class="contact__label">Message</label>
                        <textarea name="message" id="sender-message" cols="0" rows="7" class="contact__input" required></textarea>
                    </div>

                    <input id="mail-form-button" class="button button--flex" type="submit" value="Envoyer">
                </form>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Mikail</h1>
                    <span class="footer__subtitle">Full Stack developer junior</span>
                </div>

                <ul class="footer__links">
                    <li><a href="#qualification" class="footer__link">Qualification</a></li>
                    <li><a href="#portfolio" class="footer__link">Portfolio</a></li>
                    <li><a href="#contact" class="footer__link">Contact</a></li>
                </ul>

                <div class="footer__socials">
                    <a href="https://www.instagram.com/myzrodmike/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://twitter.com/Myn_Kill" target="_blank" class="footer__social">
                        <i class="uil uil-twitter"></i>
                    </a>
                </div>
            </div>

            <p class="footer__copy">&#169; Mk Web Creative Solution. All Right</p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>

    
</body>

</html>