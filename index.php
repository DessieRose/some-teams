<?php
require (__DIR__ . "/components/header.php");
require (__DIR__ . "/components/data.php");
?>

    <div class="boxes">
        <?php
            foreach ($teams as $key => $value) {
            ?> 
            <div class="box"> 
                <a href=""></a>
                <img src="<?= $value['logo']; ?>" alt="<?= $key; ?>">
                <h4> <?= $key; ?> </h4>
            </div><br>
            <?php
            }    
        
?>
<?php
require (__DIR__ . "/components/footer.php");
?>