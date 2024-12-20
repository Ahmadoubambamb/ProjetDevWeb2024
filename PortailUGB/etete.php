 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail des Services aux étudiants</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header-content">
            <img src="image/Portail_ugb.png" alt="Logo Université Gaston Berger" class="logo">
        </div>
    </header>

    <main>
    <section class="hero-section">
        <div class="display-container">
            <div class="Mon-image">
               <img id="images" src="" alt="Image Dynamique"  />
            </div>
            <div class="Mes-disc" id="texte"> 
            
            </div>
        </div>
        </section>
      <section class="info-section">  
            <div class="info-box">
                <h2 class="title"><i class="fa fa-newspaper">&nbsp;</i>Informations</h2>
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
                    <h2><i _ngcontent-kje-c113 class="fa fa-graduation-cap"></i>&nbsp;Espace privé</h2>
                    <p>Veuillez vous connecter pour accéder a votre espace privé</p>
                   <a href="http://localhost:81/projetdevweb/portailugb/page_de_connexion.php" class="btn" id="sct">
                    <i class="fa fa-sign-in-alt"></i> Se Connecter</a>
                </div>
                <div class="btn-guide">  
                    <h1><i _ngcontent-kje-c113 class="fa fa-hand-holding"></i>&nbsp;Guide</h1>
                    <p>Pour tout savoir sur l'utilisation de ce portail, veuillez télécharger:</p>
                    <a href="https://portal.ugbdigital.sn/asserts/guides/guide_pdf.pdf" class="btn"><i _ngcontent-kje-c113 class="fa fa-file-pdf"></i>&nbsp;Guide d'utilisation</a>
                    <p></p>
                    <p class="Pp"> Ou consulter</p>
                    <a href="https://portal.ugbdigital.sn/asserts/guides/guide_numerique" class="btn"><i _ngcontent-kje-c113 class="fa fa-globe"></i>&nbsp;Guide en ligne</a>
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

<script>
const data = [
    { image: 'image/Inscription_péda.png', text: `<h1>Inscription pédagogique</h1>
    <h3>Faites votre inscription pédagogique sans faire la queue ni vous déplacer!</h3>
    <p>En ligne et en toute quiétude, faites votre choix d'Unités d'Enseignement et éventuellement de parcours.</p>
    <a class="read-more" href="#">Lire la Suite</a>` },
    { image: 'image/Inscription_admi.png', text: `<h1>Préinscription administrative</h1>
    <h3>Fini les va-et-vient et les longues files d'attente pour vous inscrire. Faites votre préinscription en ligne!</h3>
    <p>« Déclenchez » votre inscription administrative et mettez à jour certaines de vos informations personnelles sans vous déplacer. 
    Désormais, plusieurs étapes de l'inscription administrative peuvent être effectuées en ligne.</p>
    <a class="read-more" href="#">Lire la Suite</a>`},
    { image: 'image/consul_notes.png', text: `<h1>Consultation des notes</h1>
    <h3>En toute confidentialité, consultez vos différentes notes et faites vos réclamations!</h3>
    <p>Vos notes seront visibles dans votre espace privé dès leur publication. Aussi, vous pourrez , 
    au besoin, faire une réclamation.</p><a href="#" class='read-more'>Lire la Suite</a>`},
    { image: 'image/Emploi_temps.png', text:  `<h1>Emploi du temps</h1>
    <h3>Recevez et téléchargez en temps réel votre emplois du temps</h3>
    <p>Vérifiez votre emploi du temps régulièrement pour connaître vos cours.</p><a class="read-more" href="#">Lire la Suite</a>`},
    { image: 'image/information.jpg', text: `<h1>Activation de l'adresse email institutionnelle</h1>
    <h3>En quelques clics, activez vous-même votre email UGB!</h3>
    <p>Activez vous-même l'adresse email institutionnelle (...@ugb.edu.sn) figurant sur votre carte étudiant. 
    L'activation de l'email institutionnel est indispensable pour accéder aux différents services mais aussi pour vous connecter au Wifi.</p>
    <a href="#" class="read-more">Lire la Suite</a>`}
];
let currentIndex = 0;
function changerImageText() {
    const imageElement = document.getElementById('images');
    const textElement = document.getElementById('texte');
    imageElement.src = data[currentIndex].image;
    textElement.innerHTML = data[currentIndex].text;
    currentIndex = (currentIndex + 1) % data.length;
}
setInterval(changerImageText, 3000);
changerImageText();
</script>
</body>
</html>
