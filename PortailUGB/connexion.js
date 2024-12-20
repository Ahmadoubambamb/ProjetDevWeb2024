
function gererForm(){
    var btn = document.getElementById('idform');
    btn.addEventListener('submit', (e) => {
        e.preventDefault();
      var email = document.querySelector('[name="email"]').value;
      var password = document.querySelector('[name="password"]').value;
      
      if (email === '' || password === '') {
        afficherErreurMessage("L'email ou mot de passe invalide");
        return;
        }
        //sinon si le format du mail n'est pas correct ex:xxxxxxx@ugb.edu.sn aloers messages d'erreur
        else{ 
            var bool = false;
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            bool = true;
            var encien = document.querySelector('.erroh4mail');
              if(encien){
           encien.remove();
            }
             var errordiv = document.createElement('h4');
             errordiv.className = 'erroh4mail';
             errordiv.innerHTML = "L'email saisi n'est incorrect";
            var container = document.querySelector('#inputemail');
            container.appendChild(errordiv);
            setTimeout(() => {
                errordiv.remove();
            }, 6000);
        }
         if (password.length < 6 || password.search(/[a-z]/) === -1 || password.search(/[0-9]/) === -1) {
            bool = true;
            var encien = document.querySelector('.erroh4pwd');
          if(encien){
        encien.remove();
           }
          var errordiv = document.createElement('h4');
           errordiv.className = 'erroh4pwd';
             errordiv.innerHTML = "mot de passse saisi n'est pas correct";
            var container = document.querySelector('#inputpaswd');
    
           container.appendChild(errordiv);
      //supprimer apres 2 secondes
         setTimeout(() => {
          errordiv.remove();
          }, 6000);
      } 

     if( bool === true) return;
    }
     //sinon envoyer les données vers le traitement.php si les donnees ne sont dans la base de données on affiche
     var xhr = new XMLHttpRequest();
     xhr.open('POST', 'traitement.php', true);
     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
     xhr.onreadystatechange = function () {
         if (xhr.readyState === XMLHttpRequest.DONE) {
             if (xhr.status === 200) {
                 var response = JSON.parse(xhr.responseText);
                 if (response.status === "error") {
                    afficherErreurMessage(response.message);
                 } else {
                     // Rediriger si connexion réussie
                     window.location.href = "ins.php"; // Change l'URL
                 }
             } else {
                afficherErreurMessage("Erreur de connexion au serveur");
             }
       }
                           };
     xhr.send('email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
    });
}

function afficherErreurMessage(message){
    var encien = document.querySelector('hidden-div');
    if(encien){
        encien.remove();
    }
    var ctn = document.querySelector('.container');
    var errordiv = document.createElement('div');
    errordiv.className = 'hidden-div';
    errordiv.innerHTML = "<span class='pficon pficon-error-circle-o'></span>"+message;
    ctn.insertBefore(errordiv, ctn.firstChild);
    setTimeout(() => {
        errordiv.remove();
    }, 4000);



}


gererForm();