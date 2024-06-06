<?php include('main.php') ?>

<div class="container">
    <div class="articles-container">
        <?php
            // include('connect.php');

            // Affichage des articles
            foreach ($categories as $id => $nom) {
                $articles = getArticlesByCategory($connexion, $id);
                echo "<div class='articles' id='category-$id'>";
                echo "<h2>$nom</h2>";
                foreach ($articles as $article) {
                    echo "<div class='article'>";
                    echo "<h4>" . $article['titre'] . "</h4>";
                    echo "<p>" . $article['contenu'] . "</p>";
                    echo "</div>";
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