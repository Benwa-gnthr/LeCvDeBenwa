<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- FONTS & ICONS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300&family=Libre+Franklin&family=Merriweather+Sans&family=REM:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>MonCV</title>
</head>
<body id="body">

    <nav>
      
        <a href="#body" id="circle"></a>
        <div id="nav_left">
            <span class="mini_circle"></span>
            <div class="name"><h1>Benoit Gonthier</h1></div>
            <div class="etudiant">Étudiant en Developpement Web</div>
        </div>



        <div id="nav_right">
            <a href="#cv"><div class="list">CV</div></a>
            <a href="#portfolio"><div class="list">Portfolio</div></a>
            <a href="#form"><div class="list">Contact</div></a>
        </div>

    </nav>

    <div id="intro">
            <div id="id_pict_container">
                <img id="id_pict" src="./Images/photo 5.jpg" alt="Yo moi c'est Benoit" height="400px" width="400px">
            </div>

            <ul id="center">

            <li><h1>Bonjour, moi c'est Benoit !</h1></li>   

            <li>
                <h2 id="about">À propos de moi</h2>
                <br>
                <p>Étudiant en developpement web à l'Agence nationale pour la formation professionnelle des adultes (AFPA) d'Olivet. Je suis actuellement à la recherche d'un stage en developpement web. Les dates du stage en entreprise sont les suivantes: 22 Janvier 2024 au 29 Mars 2024.</p>
            </li>
            <li>
                <div id="circle_list">
                    <a href="#cv"><div class="circle circle1" >CV</div></a>
                    <a href="#portfolio"><div class="circle circle2" >Portfolio</div></a>
                    <a href="#form"><div class="circle circle3" >Contact</div></a>
                </div>
            </li>
    </div>
    <div class="mouse_container">
       <div class="mouse"></div>  
    </div>
    
<br>

<span id="cv"></span>
<div id="title_container" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
        <h1 class="title">Curriculum Vitae</h1>
</div>
        <h2 class="mini_title" data-aos="fade-up" data-aos-delay="300"
        data-aos-duration="1000" style="color: #d9376e;">Expérience Professionelle</h2>  
<br>
        <div id="pro_list">
            
            <div class="pro1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <h4 class="annee">2022 :</h4>
                Equipier en Zone de Retrait de Marchandise au Castorama d'Olivet
            </div>
            <div class="pro2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <h4 class="annee">2022 :</h4> 
                Manutentionnaire en intérim à Movianto France à Saint-Cyr-en-Val.
            </div>
            <div class="pro3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <h4 class="annee">2021 :</h4> 
                Conseiller de vente en plomberie chauffage au Castorama d'Olivet.
            </div>
            <div class="pro4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <h4 class="annee">2021 :</h4> 
                Manutentionnaire en intérim au Castorama Olivet.
            </div>
            <div class="pro5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <h4 class="annee">2018 / 2020:</h4> 
                Reserviste dans l'armée de l'air à la base de Romorantin-Lanthenay.
            </div>

        </div>

        <h2 class="mini_title" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" style="color: #d9376e;">Dîplomes et Formations</h2>
        

<br>

        <div id="scolar_list">
            <div class="scolar1" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000">
                <h4 class="annee">Juillet 2023 à "maintenant":</h4> 
                Formation Developpeur Web et Web Mobile, à l'AFPA d'Olivet
            </div>
            <div class="scolar2" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000">
                <h4 class="annee">Septembre-Décembre 2022:</h4> 
                Formation Préparatoire aux metiers du numérique, à l'AFPA d'Olivet.
            </div>
            <div class="scolar3" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000">
                <h4 class="annee">Année scolaire 2021-2022:</h4> 
                L1: Chimie, Physique, Science de la Terre, à l'université d'Orléans.
            </div>
            <div class="scolar4" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000">
                <h4 class="annee">Année scolaire 2019-2020:</h4> 
                Baccalauréat Scientifique, au lycée Claude de France de Romorantin-Lanthenay.
            </div>
        </div>

        <span id="portfolio"></span>
        
        <div id="title_container" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <h1 class="title">Portfolio</h1>
    </div>
<br>
        <div id="container_port">
            <div class="carousel">
                <img src="./Images/maison_de_luxe.PNG" width="954px" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000" class="mdl">
                <img src="./Images/Jeu.PNG" alt="" height="400px" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000" class="jeu">
                <img src="./Images/calculatrice.PNG" alt="" height="400px" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000" class="calc">
            </div>
        </div>

        <div id="form">
            <form method="post" data-aos="fade" data-aos-delay="300" data-aos-duration="1000">
                <fieldset>
                    
                <h1 class="contact_title" style="color: #eff0f3;">Contact</h1>
                    <div class="contact_text" data-aos="fade-down" data-aos-delay="300">
                        Cette fiche de contact n'est pas fonctionnelle. 
                        <br>Vous avez apprécié mon travail ? 
                        <br>Contactez moi par mail ou par téléphone !
                    </div>
                    <div class="input_contact">
                        <div class="input_wrapper">
                            <input class="text" type="text" placeholder="Votre Nom" name="Nom" required>   
    
                            <input class="text" type="email" placeholder="Votre E-mail" name="email" required>
                        
                            <input class="text" type="tel" placeholder="Votre Téléphone" name="telephone" required>                         
                        </div>

                        <textarea placeholder="Un commentaire ?" id="" cols="20" rows="8" class="text" name="comments" required></textarea>
                    
                    </div>

                    
                <div id="button">                
                        
                    <input class="btn" type="submit" value="OK">
                        
                    <button class="btn">CANCEL</button>
                    
                </div>    
                <br>
                </fieldset>
            </form>
        </div>
    
        <footer>
        <ul class="foot_list">
            <li class="foot_title"><h4>Téléphone</h4></li>
            <li>06 04 50 11 60</li>
        </ul>

        <ul class="foot_list">
            <li class="foot_title"><h4>E-mail</h4></li>
            <li><a href="mailto:bgonthier974@gmail.com">bgonthier974@gmail.com</a></li>
        </ul>

        <ul class="foot_list">
            <li class="foot_title"><h4>Mon CV</h4></li>
            <li><a href="./Assets/CV.pdf"><img src="./Images/icone_CV.png" alt="Mon CV" class="foot_logo"></a></li>
        </ul>
    </footer>
    <!-- Script JS -->
    <script>AOS.init();</script>
</body>
</html>