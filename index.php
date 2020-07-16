<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
        <link rel="stylesheet" href="css/app.css" />
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" /><![endif]-->
        <title>Portfolio</title>
    </head>
    <body>
        <header>
            <nav>
                <a class="logo anchor-link" href="#home">GW</a>
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
                    <h1>Développeur Web | GENZOWEB</h1>
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
                                <div class="text-image-card">
                                    <p>Réalisé pendant ma formation</p>
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
                                <div class="text-image-card">
                                    <p>Réalisé pendant ma formation</p>
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
                                <div class="text-image-card">
                                    <p>Réalisé pendant ma formation en utilisant une API</p>
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
                                <div class="text-image-card">
                                    <p>Réalisé pendant ma formation</p>
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
                                <div class="text-image-card">
                                    <p>Réalisé pendant ma formation en utilisant une API</p>
                                </div>
                            </div>
                            <div class="title-card">   
                                <div class="center text-card">
                                    <p>PHP</p>
                                    <p>Projet personnel pour finaliser la formation</p>
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
                                <div class="text-image-card">
                                    <p>Projet personnel</p>
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
                    <div class="competences-graph margin10">
                        <div>
                            <div class="competences-graph-title">
                                <h4>HTML / CSS</h4>
                            </div>
                            <div class="bar-competences">
                                <div class="bar bar-color"></div>
                                <div class="bar margin10 bar-color"></div>
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div>
                            <div class="competences-graph-title">
                                <h4>WORDPRESS</h4>
                            </div>
                            <div class="bar-competences">
                                <div class="bar bar-color"></div>
                                <div class="bar margin10"></div>
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div>
                            <div class="competences-graph-title">
                                <h4>JAVASCRIPT</h4>
                            </div>
                            <div class="bar-competences">
                                <div class="bar bar-color"></div>
                                <div class="bar margin10 bar-color"></div>
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div>
                            <div class="competences-graph-title">
                                <h4>PHP</h4>
                            </div>
                            <div class="bar-competences">
                                <div class="bar bar-color"></div>
                                <div class="bar margin10 bar-color"></div>
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div>
                            <div class="competences-graph-title">
                                <h4>SYMFONY</h4>
                            </div>
                            <div class="bar-competences">
                                <div class="bar bar-color"></div>
                                <div class="bar margin10"></div>
                                <div class="bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="competences-text margin10">
                        <h3>Présentation :</h3>
                        <p>
                            Je m'appelle Julien, je suis né en 1982. <br />
                            Après plusieurs années professionnelles dans le monde de l'industrie, le manque de réflexion et d'épanouissement 
                            m'ont fait réagir.
                        </p>
                        <p class="mt">
                            J'ai décidé de me diriger vers un domaine pour lequel je me suis découvert une nouvelle passion, à savoir 
                            la programmation Web.
                            J'ai donc choisi de me reconvertir dans le milieu de l'informatique.
                        </p>
                        <p class="mt">
                            Travaillant en équipe de 2*8, j'ai suivi une formation en ligne diplômante (enregistré au RNCP niveau 5/ BAC+2) 
                            de Développeur Web pendant 1an. <br />
                            En plus des langages de programmation, j'ai appris l'architecture MVC, la POO et les intéractions avec des API. <br />
                            Cette formation m'a permis d'acquérir de nouvelles compétences au travers de projets web et m'a conforté dans le
                            choix de ma reconversion professionnelle.         
                        </p>
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
            <section>
                <div id="mentions">
                    <div class="bloc-mentions">
                        <h2>Mentions légales</h2>
                        <h3>Présentation du site :</h3>
                        <p>En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site www.genzo.fr l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
                        <p><span>Propriétaire et créateur : </span>GenzoWeb</p>              
                        <p><span>Responsable publication : </span>GenzoWeb - <a href="mailto:genzo10@hotmail.fr">genzo10@hotmail.fr</a></p>              
                        <p><span>Sité conçu et réalisé : </span>GenzoWeb</p>              
                        <p>
                            <span>Hébergeur :</span> <br />
                            Ionos by 1&1 <br />
                            7 Place de la Gare <br />
                            57200 Sarreguemines <br />
                            Tél : <i>09 70 80 89 11</i>
                        </p>
                        <h3>Propriété intellectuelle :</h3>
                        <p>L’ensemble de ce site relève des législations Françaises et Internationales sur les droits d’auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés pour les textes et les photographies de ce site. La reproduction de tout ou partie de ce site sur un support électronique ou autre quel qu’il soit, est formellement interdite sauf autorisation écrite de l’auteur, conformément à l’article L 122-4 du Code de la Propriété intellectuelle.</p>  
                        <h3>Politique de confidentialité :</h3>
                        <p>En aucun cas, les données recueillies sur le site <a href="http://www.genzo.fr">www.genzo.fr</a> ne seront cédées ou vendues à des tiers. Aucune adresse email ne sera transmise à des tiers sauf avec l’accord écrit des intéressés.</p>
                    </div>
                </div>
                <div id="mentions-shadow"></div>
            </section>

        <footer class="footer center">
            <div class="text-footer">
                <div>
                    Réalisation <a class="anchor-link" href="#home">GENZOWEB</a> |
                    <span id="link-mentions">Mentions légales</span> | 
                </div>
                <div>© GENZOWEB</div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/initMentions.js"></script>
        <script src="js/app.js"></script>
        <script src="js/anchor.js"></script>
        <script src="js/mentions.js"></script>
        <script src="js/backgroundImage.js"></script>

    </body>
</html>

<?php
    unset($_SESSION['errors']);
    unset($_SESSION['inputs']);
    unset($_SESSION['success']);
?>