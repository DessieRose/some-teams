<?php

require (__DIR__ . "/header.php");
require (__DIR__ . "/data.php");
?>

    <div class="team">
            <?php
                foreach ($teams as $key => $value) {
                ?>
                    <div class="team_name"> 
                        <h2> <?= $key; ?></h2>
                    </div><br>
                    <div class="team_logo">
                        <img src="<?= $value['logo']; ?>" alt="<?= $key; ?>">
                    </div>
                    <div class="team_text">
                        <p>...</p>
                        
                    </div>
                <?php
                }    
            
    ?>




<?php

require (__DIR__ . "/footer.php");
?>