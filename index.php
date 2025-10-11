<?php
require (__DIR__ . "components/header.php");
require (__DIR__ . "components/data.php");
?>

    <!-- header image -->
    <div class="header-img-container">
        <div class="header-img-text">
            <h2>U-20 World Cup tiebreakers</h2> 
        </div>
        <div class="header-image">
            <div class="header-img"><img src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2670" alt="fotboll"></div>
        </div>
    </div>

    <!-- Container ranking -->
    <div class="container_ranking">
        <div class="ranking_title">
            <h2>UEFA RANKING</h2>
        </div>

        <div class="ranking_description">
            <div class="team-logo"></div>
            <div class="team-name"><h3>Teams</h3></div>
            <div class="team-country"><h3>Contry</h3></div>
            <div class="team-rank"><h3>Ranking</h3></div>
            <div class="arrow"></div>
        </div>

        <?php foreach ($teams as $key => $value): 
            if (preg_match('/\((.*?)\)/', $value['league'], $m)); ?>
            <a href="<?= $value['url']; ?>">
                <div class="ranking_row">   
                    <div class="team-logo"><img src="<?= $value['logo']; ?>" alt="<?= $key; ?>"></div>
                    <div class="team-name"><p><?= $key; ?></p></div>
                    <div class="team-country"><p><?= $m[1]; ?></p></div>
                    <div class="team-rank"><p><?= $value['uefa-coefficient-ranking']; ?></p></div>
                    <div class="arrow">&#8594;</div>
                </div>
            </a>
        <?php endforeach; ?>   
    </div>



<?php
require (__DIR__ . "components/footer.php");
?>