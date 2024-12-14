<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>portail UGB</title>
</head>
<body>
     <div class ="container">
        
        <form action="traitement.php">
           <!-- <div class="hidden-div">
              <i class='bx user-x'></i> L'email ou mot de passe invalide.
           </div> -->
           <div class="imgback">
              <img src="image/logo_ugb.jpg" alt="Logo UGB">
          </div>
         <div>
            <h1>Service d'Authentification Unique</h1>
         </div>
           <div class ="input-box">
             <label for="mail">Email  institutionnel  UGB</label>
             <input type="email" name="email" placeholder="Ex:xxxx.xxxx@ugb.edu.sn" required>
           </div>
           <div  class ="input-box">
             <label for="password">Mot de passe</label>
             <input type="password" name="password" placeholder="****************" required>
           </div>
           <div class="mesg">
              <div>
                 <span>
                    Activation mail UGB
                 </span>
              </div>
               <div>
                  <span>
                    <a href="#"> Mot de passe oublié ?</a>
                  </span>
               </div>
           </div>
           <div class ="bnt-div">
            <button type ="subimt" class="btn">Connexion</button>
           </div>
        </form>
     </div>
     <script src="connexion.js"> 
       
     </script>
</body>
</html>