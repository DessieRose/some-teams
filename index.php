<?php
require (__DIR__ . "/components/header.php");
require (__DIR__ . "/components/data.php");
?>

    <div class="boxes">
        <?php
            foreach ($teams as $key => $value) {
            ?> <a href="/components/teams.php">
                    <div class="box"> 
                        <h3> Ranking: <?= $value['uefa-coefficient-ranking']; ?></h3>
                        <img src="<?= $value['logo']; ?>" alt="<?= $key; ?>">
                        <h4> <?= $key; ?> </h4>
                    </div><br>
                </a>
            <?php
            }    
        
?>
<?php
require (__DIR__ . "/components/footer.php");
?>