<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round&display=swap" rel="stylesheet">
    <title>portail UGB</title>
</head>
<body>

     <div class ="container">
        
        <form id="idform">
           <!-- <div class="hidden-div">
              <i class='bx user-x'></i> L'email ou mot de passe invalide.
           </div> -->
           <div class="imgback">
              <img src="image/logo_ugb.jpg" alt="Logo UGB">
          </div>
         <div>
            <h1>Service d'Authentification Unique</h1>
         </div>
           <div class ="input-box" id="inputemail">
             <label for="email">Email  institutionnel  UGB</label>
             <input type="text" name="email" placeholder="Ex:xxxx.xxxx@ugb.edu.sn" >
           </div>
           <div  class ="input-box"  id = "inputpaswd">
             <label for="password">Mot de passe</label>
             <input type="password" name="password" placeholder="****************" >
           </div>
           <div class="mesg">
              <div>
                 <span>
                  <a href="#">  Activation mail UGB</a>
                 </span>
              </div>
               <div>
                  <span>
                    <a href="#"> Mot de passe oublié ?</a>
                  </span>
               </div>
           </div>
           <div class ="bnt-div">
            <button type ="submit" class="btn">Connexion</button>
           </div>
        </form>
     </div>
     <script src="connexion.js"> 
      
     </script>
</body>
</html>


