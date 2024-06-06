<?php
    // Connexion à la base de données
    $serveur = "localhost";
    $utilisateur = "root";
    $motdepasse = "";
    $base_de_donnees = "actu_esp";

    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base_de_donnees);

    // Vérification de la connexion

    if ($connexion->connect_error) {
        die("La connexion a échoué : " . $connexion->connect_error);
    }

     // Fonction pour récupérer les catégories
     function getCategories($connexion) {
        $categories = array();

        $requete = "SELECT * FROM categorie";
        $resultat = $connexion->query($requete);

        if ($resultat->num_rows > 0) {
            while($row = $resultat->fetch_assoc()) {
                $categories[$row['id']] = $row['libelle'];
            }
        }

        return $categories;
    }


    // Fonction pour récupérer les articles par catégorie
    function getArticlesByCategory($connexion, $categorie_id) {
        $articles = array();

        $requete = "SELECT * FROM article WHERE categorie = $categorie_id";
        $resultat = $connexion->query($requete);

        if ($resultat->num_rows > 0) {
            while($row = $resultat->fetch_assoc()) {
                $articles[] = $row;
            }
        }

        return $articles;
    }