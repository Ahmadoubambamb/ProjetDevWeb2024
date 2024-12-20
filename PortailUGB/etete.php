 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail des Services aux étudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="header-content">
            <img src="image/Portail_ugb.png" alt="Logo Université Gaston Berger" class="logo">
        </div>
    </header>

    <main>
        <section class="hero-section">
           <!-- <div class="hero-content">  -->
                <div class="hero-image">
                    <img src="image/information.jpg" alt="Illustration de préinscription">  
  
                </div>
                <div class="hero-text">
                  <h3>Préinscription administrative</h3>
                    <p>Fini les va-et-vient et les longues files d'attente pour vous inscrire.</p>
                    <p> Faites votre préinscription en ligne !</p>
                    <p>Déclenchez votre inscription administrative</p>
                    <p>et mettez a jour vos informations personnelles via ce dispositif.</p>
                    <p>Plusieurs étapes de l'inscription administrative peuvent etre effectuées en ligne.</p>  
                </div>
           <!--    </div>  -->
        </section>

      <section class="info-section">  
            <div class="info-box">
                <h2 class="title">Informations</h2>
               <?php require("connexion_BD.php");
                // Requête SQL pour récupérer les informations de la base de données
               $conn = connection();
                $requete = "SELECT image,titre,contenu FROM information limit 3";
                $resultat = mysqli_query($conn, $requete);
                
                while($row = mysqli_fetch_assoc($resultat)) {
                    echo "<div class='infos'>";
                      echo "<img src='image/$row[image]' alt='$row[image]' class='imgs'/>";
                       echo "<div class = 'news-content'>";
                         echo "<h4 class='news-title'>$row[titre]</h4>";
                         echo "<p class = 'news-description'>$row[contenu]<a href='#' class='read-more'>Lire la suite</a></p>";
                       echo "</div>";
                    echo "</div>";
                }
                // Fermeture de la connexion à la base de données
                mysqli_close($conn);
               ?>
            </div>
            <div class="sidebar">
                <div class="btn-cte">
                    <h2>Espace privé</h2>
                    <p>Veuillez vous connecter pour accéder a votre espace privé</p>
                   <a href="http://localhost:81/projetdevweb/portailugb/page_de_connexion.php" class="btn" id="sct"> Se Connecter</a>
                </div>
                <div class="btn-guide">  
                    <h1>Guide</h1>
                    <p>Pour tout savoir sur l'utilisation de ce portail, veuillez télécharger:</p>
                    <a href="https://portal.ugbdigital.sn/asserts/guides/guide_pdf.pdf" class="btn">Guide d'utilisation</a>
                    <p></p>
                    <p class="Pp"> Ou consulter</p>
                    <a href="https://portal.ugbdigital.sn/asserts/guides/guide_numerique" class="btn">Guide en ligne</a>
                </div>
            </div>
        </section>  
     

        <section class="video-section">
            <iframe  src="https://www.youtube.com/embed/xZhfQyfUOLQ" title="Présentation du Portail de Services aux Etudiants de l&#39;UGB - PSE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Université Gaston Berger. Tous droits réservés.</p>
    </footer>
    <script src="charger.js">
        
    </script>
</body>
</html>
