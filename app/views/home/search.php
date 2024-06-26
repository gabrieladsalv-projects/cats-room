<?php
    require_once('../templates/header.php');
?>

<main>
    <header>
        <h2>CatConnect</h2>
        <nav>
            <input type="text"><img src="#" alt="Search">Share cat photos
            <ul>
                <li><a href="discover.php">Home</a></li>
                <li><a href="cat-categories.php">Cat Categories</a></li>
                <li><a href="#">Purrfectly Us</a></li>
                <li><a href="../auth/profile.php">My Cat Profile</a></li>
                <li><a href="#" class="share-discover">Share Meow</a></li>
            </ul>
        </nav>
    </header>
    <div class="result-container">
        <h1>Search Results</h1>
        <div class="result">
        <?php
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<h2>" . $row['titulo'] . "</h2>";
                echo "<p>" . $row['conteudo'] . "</p>";
                // Adicione aqui mais informações que você deseja exibir
            } 
        ?>
        </div>
    </div>
</main>

<?php
    require_once('../templates/footer.php');
?>