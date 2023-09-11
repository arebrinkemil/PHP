<?php 
$colors = array("aqua", "cornflowerblue", "aquamarine");



$width ='350px'; 
$height ='260px';


foreach ($colors as &$color) {
   ?> <div style="width: <?php echo $width ?>; height: <?php echo $height ?>; background-color: <?php echo $color ?>;"></div>
   <?php
    }
?>



