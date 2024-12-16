function gererForm(){
    const btn = document.querySelector('.btn');
    btn.addEventListener('click', (e) => {
      const email = document.querySelector('[name="email"]').value;
      const password = document.querySelector('[name="password"]').value;
      if (email === '' || password === '') {
         var errordiv = document.createElement('div');
         errordiv.className = 'hidden-div';
         errordiv.innerHTML = '<i class=\'bx user-x\'></i> L\'email ou mot de passe invalide.';
   var container = document.querySelector('.container');
        //ajouter au debut 
        container.insertBefore(errordiv, container.firstChild);
        //supprimer apres 2 secondes
        setTimeout(() => {
            errordiv.remove();
        }, 4000);
         //e.preventDefault(); //empêche le formulaire de s'envoyer
         return false; //empêche le formulaire de s'envoyer
        }
        //sinon si le mot de de passe est incorrect afficher un message d'erreur
        else if (password.length < 6 || password.search(/[a-z]/) === -1 || password.search(/[0-9]/) === -1) {
            var errordiv = document.createElement('h4');
         errordiv.className = 'erroh4';
         errordiv.innerHTML = 'Le mot de passe saisi n’est pas correct';
         var container = document.querySelector('#inputpaswd');
         //ajouter en bas de input de name="password"
         container.appendChild(errordiv);
         //supprimer apres 2 secondes
         setTimeout(() => {
             errordiv.remove();
         }, 4000);
         //e.preventDefault(); //empêche le formulaire de s'envoyer
          //empêche le formulaire de s'envoyer
        }
        //sinon si le format du mail n'est pas correct ex:xxxxxxx@ugb.edu.sn aloers messages d'erreur
       
         if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            var errordiv = document.createElement('h4');
         errordiv.className = 'erroh4';
         errordiv.innerHTML = 'Format du mail incorrect';
         var container = document.querySelector('#inputemail');
         //ajouter en bas de input de name="email"
         container.appendChild(errordiv);
         //supprimer apres 2 secondes
         setTimeout(() => {
             errordiv.remove();
         }, 4000);
         e.preventDefault(); //empêche le formulaire de s'envoyer
        }
         //sinon si tout est correct et que les donnees sont incoherentes dans la base de donnees traiter par le traitement.php afficher erreur de mot de pass ou mail 
         else {

     //sinon envoyer les données vers le traitement.php si les donnees ne sont dans la base de données on affiche
     var xhr = new XMLHttpRequest();
      xhr.open('POST', 'traitement.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          console.log(xhr.responseText);
        }
      };
      xhr.send('email=' + email + '&password=' + password);}
    });

}

gererForm();