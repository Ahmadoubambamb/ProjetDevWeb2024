function charger(){
    var container = document.querySelector('.info-box');
    var xhr = new XMLHttpRequest();
    //appel du fichier chargerInfo.php afin de recuperer le resultat image , contenu , titre des 4 requetes sur la table informations 
    xhr.open('GET', 'chargerInfo.php', true);
    xhr.onload = function(){
        if(this.status === 200){
            var response = JSON.parse(this.responseText);
            var html = '';
            response.forEach(function(info){
                html += '<div class="info-box-item">';
                html += '<img src="' + info.image + '" alt="' + info.titre + '">';
                html += '<h3>' + info.titre + '</h3>';
                html += '<p>' + info.contenu + '</p>';
                html += '</div>';
            });
            container.innerHTML += html;
        }
    };
    xhr.send();
    // ca n'affiche pas que faire comment dois-je ecrire le code du fichier chargerInfo.php
    // et comment puis-je faire pour afficher les données dans le container?
    // et comment puis-je faire pour que la fonction charger() soit appelée automatiquement à chaque fois qu'une nouvelle page est chargée? voici comment faire.
    // document.addEventListener('DOMContentLoaded', charger);
    // setInterval(charger, 5000); // on mettra ce code dans la fonction charger()
    // pour que la fonction charger() soit appelée automatiquement à chaque fois qu'une nouvelle page est chargée, vous pouvez utiliser l'événement 'DOMContentLoaded' de JavaScript ou utiliser un service de chargement de page comme 'load' ou 'DOMContentLoaded'.
    // document.addEventListener('DOMContentLoaded', charger);
    // setInterval(charger, 5000); // on mettra ce code dans la fonction charger()
    // pour que la fonction charger() soit appelée automatiquement à chaque fois qu'une nouvelle page est chargée, vous pouvez utiliser l'événement 'DOMContentLoaded' de JavaScript ou utiliser un service de chargement de page comme 'load' ou 'DOMContentLoaded'.
    // document.addEventListener('DOMContentLoaded', charger);
    // setInterval(charger, 5000); // on mettra ce code dans la fonction charger()

    // voici le code qu'il faut ecrire dans chargerInfo.php pour effectuer les quatres requete sur la base de données de notre serveur phpmyadmin afin de pouvoir afficher les results avce la fonction charger.
    // $requete = $bdd->prepare('SELECT * FROM informations LIMIT 4');
    // $requete->execute();
    // $donnees = $requete->fetchAll(PDO::FETCH_ASSOC);
    // $reponse = array('status' => 'ok', 'data' => $donnees);
    // echo json_encode($reponse);
    // exit;

   
}
charger();


/*
 xhr.open('GET', 'chargerInfo.php', true);
    xhr.onload = function(){
        if(this.status === 200){
            var response = JSON.parse(this.responseText);
            // creation des elements HTML
            var img = document.createElement('img');
            img.src =  response.image;
            var content = document.createElement('p');
            content.textContent = response.contenu;
            var titre = document.createElement('h2');
            titre.textContent = response.titre;
            //ajout des elements dans le container
            container.appendChild(titre);
            container.appendChild(img);
            container.appendChild(content);
        }
        xhr.onerror = function(){
            console.error('Erreur lors de la récupération des données');
        };
        xhr.send();
    };
*/