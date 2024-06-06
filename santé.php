<?php include('main.php') ?>
<div class="container">
    <div class="articles-container">
        <?php
            $idCategorie = $_GET['id'];
            // Affichage des articles
            foreach ($categories as $id => $nom) {
                $articles = getArticlesByCategory($connexion, $id);
                echo "<div class='articles' id='category-$id'>";
                    if ($idCategorie == $id) echo "<h2>$nom</h2>";
                    foreach ($articles as $article) {
                        if($idCategorie == $article['categorie']) {
                            echo "<div class='article'>";
                            echo "<h4>" . $article['titre'] . "</h4>";
                            echo "<p>" . $article['contenu'] . "</p>";
                            echo "</div>";
                        }   
                    }
                echo "</div>";
            }
            // Fermeture de la connexion
            $connexion->close();
        ?>
    </div>
</div>

<footer>
    <?php include('footer.php') ?>
</footer>