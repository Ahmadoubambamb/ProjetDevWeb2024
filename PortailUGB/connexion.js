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
         e.preventDefault(); //empêche le formulaire de s'envoyer
         return false; //empêche le formulaire de s'envoyer
        }
    });
}

gererForm();