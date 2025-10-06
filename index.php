<?php
require (__DIR__ . "/components/header.php");
require (__DIR__ . "/components/data.php");
?>

    <!-- slideshow start -->
    <div class="slideshow-container">
        <div class="slideshow-text">
            <h2>U-20 World Cup tiebreakers</h2> 
        </div>
        <div class="slideshow-images">
            <div class="header-img"><img src="https://images.unsplash.com/photo-1506183478292-c7c59060a75b?q=80&w=3733&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="fotboll"></div>
        </div>
    
        <!-- <div class="slideshow-images fade">
            <img src="https://images.unsplash.com/photo-1588263573393-9ae5eeccc7ec?q=80&w=1365&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="football field in Norway">
            <div class="slideshow-text">Fotboll like never before</div>
        </div>

        <div class="slideshow-images fade">
            <img src="https://images.unsplash.com/photo-1630512476874-86006ae33669?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="player at the goal post football">
            <div class="slideshow-text">The last match ended in penalties</div>
        </div> -->
    </div>
    <!-- slideshow end -->

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
            <a href="">
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
require (__DIR__ . "/components/footer.php");
?>