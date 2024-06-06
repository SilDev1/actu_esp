<?php include('connect.php'); ?>
<div class="navBar-container">
    <a class="navbar-logo" href="http://localhost:8080/actu_esp">
        <img src="static/images/logo.png" alt="logo_esp" width="50" height="44">
    </a>

    <ul class="navbar-nav">
        <?php
            // Affichage des catégories comme liens

            $categories = getCategories($connexion);
            foreach ($categories as $id => $nom) {
                echo '
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="'.$nom.'.php?id='.$id.'">'.$nom.'</a>
                    </li>
                    ';
            }
        ?>
    </ul>
</div>
    
<!-- 
    Comment faire pour envoyer les données à partir du lien sans l'afficher sur URL ?

    J'ai essayer session et j'ai pas reussi à écraser le contenu de la variable à chaque fois que je change de pages 

-->