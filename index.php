<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
        <link rel="stylesheet" href="css/app.css" />
        <title>Portfolio</title>
    </head>
    <body>
        <header>
            <nav>
                <a class="logo anchor-link" href="#home">GENZOWEB</a>
                <a id="head-icon" class="header-icon" href="#"></a>
                <div id="shadow"></div>
                <div class="menu">
                    <ul>
                        <li>
                            <a class="anchor-link" href="#home">Accueil</a>
                        </li>
                        <li>
                            <a class="anchor-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a class="anchor-link" href="#competences">Compétences</a>
                        </li>
                        <li>
                            <a class="anchor-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <section id="home" class="home">
                <div class="parallax"></div>
                <div class="text-home">
                    <p>Développeur Web | GENZOWEB</p>
                </div>
            </section>

            <section id="portfolio">
                <h2 class="center">PORTFOLIO</h2>
                <h3 class="center realisations">Mes réalisations</h3>
                <div class="portfolio-list">
                    <div class="card">
                        <a class="link-card" href="http://www.genzo.fr/projet1/index.html">
                            <div class="zoom">
                                <div class="image-card">
                                    <img src="images/p1.png" alt="">
                                </div>
                            </div>
                            <div class="title-card">   
                                <div class="center text-card">
                                    <p>HTML / CSS</p>
                                    <p>Intégrez la maquette du site d'une agence web</p>
                                </div> 
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a class="link-card" href="http://www.genzo.fr/projet2/">
                            <div class="zoom">
                                <div class="image-card">
                                    <img src="images/p2.jpg" alt="">
                                </div>
                            </div>
                            <div class="title-card">   
                                <div class="center text-card">
                                    <p>WORDPRESS</p>
                                    <p>Créez un site en personnalisant un thème WordPress</p>
                                </div> 
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a class="link-card" href="http://www.genzo.fr/projet3/">
                            <div class="zoom">
                                <div class="image-card">
                                    <img src="images/p3.png" alt="">
                                </div>
                            </div>
                            <div class="title-card">   
                                <div class="center text-card">
                                    <p>JAVASCRIPT</p>
                                    <p>Concevez une carte interactive de location de vélos</p>
                                </div> 
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a class="link-card" href="http://www.genzo.fr/projet4/">
                            <div class="zoom">
                                <div class="image-card">
                                    <img src="images/p4.png" alt="">
                                </div>
                            </div>
                            <div class="title-card">   
                                <div class="center text-card">
                                    <p>PHP</p>
                                    <p>Créez un blog pour un écrivain</p>
                                </div> 
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a class="link-card" href="http://www.genzo.fr/projet5/">
                            <div class="zoom">                    
                                <div class="image-card">
                                    <img src="images/p5.png" alt="">
                                </div>
                            </div>
                            <div class="title-card">   
                                <div class="center text-card">
                                    <p>PHP</p>
                                    <p>Effectuez un projet personnel</p>
                                </div> 
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a class="link-card" href="http://www.genzo.fr/mesrecettes/public/">
                            <div class="zoom">
                                <div class="image-card">
                                    <img src="images/p6.png" alt="">
                                </div>
                            </div>
                            <div class="title-card">   
                                <div class="center text-card">
                                    <p>PHP / SYMFONY</p>
                                    <p>Réalisation blog de recettes</p>
                                </div> 
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <section id="competences">
                <h2 class="center">COMPÉTENCES</h2>
                <div class="competences">
                    <div class="competences-text">
                        <div class="presentation">
                            <h3>Présentation :</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Rerum at quas, corrupti sit inventore repellendus, itaque sed et 
                                quo omnis id molestiae ut consequuntur ipsa illo minus, similique impedit iure.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Rerum at quas, corrupti sit inventore repellendus, itaque sed et 
                                quo omnis id molestiae ut consequuntur ipsa illo minus, similique impedit iure.
                            </p>
                        </div>
                    </div>
                    <div class="competences-graph">
                        <div>
                            <div class="competences-graph-title">
                                <h4>HTML / CSS</h4>
                            </div>
                            <div class="bar">
                                <span class="active-bar-html"></span>
                                <p class="percent-html">80%</p>
                            </div>
                        </div>
                        <div>
                            <div class="competences-graph-title">
                                <h4>WORDPRESS</h4>
                            </div>
                            <div class="bar">
                                <span class="active-bar-wp"></span>
                                <p class="percent-wp">50%</p>
                            </div>
                        </div>
                        <div>
                            <div class="competences-graph-title">
                                <h4>JAVASCRIPT</h4>
                            </div>
                            <div class="bar">
                                <span class="active-bar-js"></span>
                                <p class="percent-js">60%</p>
                            </div>
                        </div>
                        <div>
                            <div class="competences-graph-title">
                                <h4>PHP</h4>
                            </div>
                            <div class="bar">
                                <span class="active-bar-php"></span>
                                <p class="percent-php">70%</p>
                            </div>
                        </div>
                        <div>
                            <div class="competences-graph-title">
                                <h4>SYMFONY</h4>
                            </div>
                            <div class="bar">
                                <span class="active-bar-sf"></span>
                                <p class="percent-sf">50%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact">
                <h2 class="center">ME CONTACTER</h2>
                <div class="form-contact">
                    <?php if (isset($_SESSION['success'])): ?><p class="success-message"><?= $_SESSION['success'];?></p><?php endif;?>

                    <?php if (isset($_SESSION['errors']['formEmpty'])):?><p class="errors-message"><?= $_SESSION['errors']['formEmpty'];?></p><?php endif;?>

                    <form action="contact-form.php" method="post">
                        <div>
                            <input class="form-input" type="text" id="name" name="name" placeholder="Nom" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '';?>">
                        </div>
                        <div>
                            <?php if (isset($_SESSION['errors']['emailValid'])):?><p class="errors-message"><?= $_SESSION['errors']['emailValid'];?></p><?php endif;?>
                            <input class="form-input" type="email" id="email" name="email" placeholder="Email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '';?>">
                        </div>
                        <div>
                            <textarea class="form-textarea" id="message" name="message" placeholder="Message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';?></textarea>
                        </div>
                        <div>
                            <input class="form-submit" type="submit" name="contact-submit" value="Envoyer">
                        </div>
                    </form>
                </div>
            </section>    
        </main> 

        <footer>
            <div class="footer center">
                Réalisation <a class="anchor-link" href="#home">GENZOWEB</a> | Mentions légales | © GENZOWEB
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/anchor.js"></script>
        <script src="js/backgroundImage.js"></script>
    </body>
</html>

<?php
    unset($_SESSION['errors']);
    unset($_SESSION['inputs']);
    unset($_SESSION['success']);
?>