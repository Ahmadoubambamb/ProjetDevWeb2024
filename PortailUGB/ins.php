<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Étudiant-UGB</title>
    <link rel="stylesheet" href="ins.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>
<body>
    <div class="container">
       
        <div class="sidebar">
            <div class="logo-container">
                <img src="image/logo_ugb.jpg" alt="Logo UGB" class="logo">
                <h3>Portail de Service aux Etudiants</h3>
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="Accueil.php"><i class="fas fa-home"></i>Accueil</a></li>
                    <li><a href="profile.php"><i class="fas fa-user"></i>Profil</a></li>
                    <li><a href="inscriptions.php"><i class="fas fa-file-alt"></i>Mes inscriptions</a></li>
                    <li><a href="#notes.php"><i class="fas fa-eye"></i> Consultation des Notes</a></li>
                    <li><a href="documents.php"><i class="fas fa-folder"></i>Documents</a></li>
                    <li><a href="Aides.php"><i class="fas fa-sign-out-alt"></i>Aides</a></li>
                </ul>
            </nav>
        </div>

   
        <div class="main-content">
         
            <header class="top-header">
                <button class="menu-toggle">
                    <i class="fas fa-bars"></i><em>   <i> | </i>  </em>
                    <em>  </em>
                </button>
                <h2> <button class="c021_1">
                    <i class="fa-solid fa-bars"></i></button>
                    <i class="fas fa-graduation-cap"></i>Portail de Service aux Etudiants
                </h2>
                <div class="user-info">
                    <span class="user-name">Fatou Badji</span>
                    <img src="image/bea.jpg" alt="Photo de profil" class="avatar">
                    <li><a href="etete.php"><i class="fas fa-sign-out-alt"></i>Déconnexion</a></li>
                </div>
            </header>

          <div class="content-tous">
            <div class="content-wrapper">
                <!-- Tabs -->
                <div class="tabs">
                    <button class="tab-button active" data-tab="info-personnelles">
                        <i class="fas fa-user"></i> Informations personnelles
                    </button>
                    <button class="tab-button" data-tab="formation">
                        <i class="fas fa-graduation-cap"></i> Formations
                    </button>
                </div>

                <!-- Personal Information Tab -->
                <div id="info-personnelles" class="tab-content active">
                    <div class="form-card">
                        <h2  class="fas fa-user" >Informations personnelles</h2>
                        <form id="personal-info-form" action="update_info.php" method="POST">
                            <div class="form-group">
                                <label for="code_etudiant">Code étudiant</label>
                                <input type="text" id="code_etudiant" name="code_etudiant" value="P31 2142" readonly>
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" id="prenom" name="prenom" required>
                            </div>
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" id="nom" name="nom" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="date_naissance">Date de naissance</label>
                                <input type="date" id="date_naissance" name="date_naissance" required>
                            </div>
                            <div class="form-group">
                                <label for="telephone">Téléphone</label>
                                <input type="tel" id="telephone" name="telephone" required>
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" id="adresse" name="adresse" required>
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" id="photo" name="photo" accept="image/*">
                            </div>
                            <button type="submit" class="btn-submit">
                                <i class="fas fa-save"></i> Enregistrer les modifications
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Formation Tab -->
                <div id="formation" class="tab-content">
                    <div class="form-card">
                        <h2 class="fas fa-graduation-cap">Inscription à une formation</h2>
                        <div class="info-box">
                            <p><i class="fas fa-info-circle"></i> Un étudiant ne peut avoir qu'une seule inscription par année académique
                                <h2 >Veuillez remplir ce formulaire d'abord</h2>
                                <h3>Les champs grisés ne peuvent pas etre modifiés.Les champs précégés par "<em>*</em>" sont <em>obligatoires</em>.</h3>
                                <h3>Si vous y trouver des erreurs,veuillez les signalés a la scolarité</h3>
                            </p>
                        </div>
                        <form id="formation-form" action="inscription.php" method="POST">
                            <div class="form-group">
                                <label for="formation">Formation *</label>
                                <select id="formation" name="formation" required>
                                    <option value="">Sélectionnez une formation</option>
                                    <option value="informatique">Informatique</option>
                                    <option value="mathematiques">Mathématiques</option>
                                    <option value="physique">Physique</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="niveau">Niveau *</label>
                                <select id="niveau" name="niveau" required>
                                    <option value="">Sélectionnez un niveau</option>
                                    <option value="L1">Licence 1</option>
                                    <option value="L2">Licence 2</option>
                                    <option value="L3">Licence 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="annee">Année académique *</label>
                                <select id="annee" name="annee" required>
                                    <option value="">Sélectionnez une année</option>
                                    <option value="2023-2024">2023-2024</option>
                                    <option value="2024-2025">2024-2025</option>
                                </select>
                            </div>
                            <button type="submit" class="btn-submit">
                                <i class="fas fa-check"></i> Valider l'inscription
                            </button>
                        </form>

                        <!-- Liste des inscriptions -->
                        <div class="inscriptions-list">
                            <h3>Mes inscriptions</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Formation</th>
                                        <th>Niveau</th>
                                        <th>Année</th>
                                        <th>Date d'inscription</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Informatique</td>
                                        <td>L3</td>
                                        <td>2023-2024</td>
                                        <td>15/10/2023</td>
                                        <td><span class="status active">Active</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toto">
                <i class="fa fa-hourglass-half" ></i> 
                <span>Étapes</span>
                    <div class="step-item active">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Démarrage</h3>
                        </div>
                    </div>
                    <div class="step-line"></div>
                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Formation</h3>
                        </div>
                    </div>
                    <div class="step-line"></div>
                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Frais d'inscription</h3>
                        </div>
                    </div>
                    <div class="step-line"></div>
                    <div class="step-item">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Bibliothèque</h3>
                        </div>
                    </div>
                    <div class="step-line"></div>
                    <div class="step-item">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Visite médicale</h3>
                        </div>
                    </div>
                    <div class="step-line"></div>
                    <div class="step-item">
                        <div class="step-number">6</div>
                        <div class="step-content">
                            <h3>Carte étudiant</h3>
                        </div>
                    </div>
            </div>
          </div>
          
        </div>
    </div>

    <script>
        // Gestion des onglets
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
                // Retire la classe active de tous les onglets
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
                
                // Ajoute la classe active à l'onglet cliqué
                button.classList.add('active');
                document.getElementById(button.dataset.tab).classList.add('active');
            });
        });

        // Toggle menu mobile
        document.querySelector('.menu-toggle').addEventListener('click', () => {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>