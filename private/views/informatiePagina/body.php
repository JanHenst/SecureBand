<?php
$sql  = "SELECT * FROM info";
$statement = $con->query($sql);
 ?>
 <div class="evenMakkelijk">
   <?php

   foreach ($statement as $iets) {
     echo "<div class='infoDiv'>";
     echo "<h2 class='infoTitle'>" . $iets['title'] . "</h2>";
     echo '<img class="infoImg" src="images/'.$iets['foto'].'" alt="help" width="300" height="300">';
     echo "<br>";
     echo "<p class='infoText' id='infoText'>";
     echo $iets['text'];
     echo '</p>';
     echo "</div>";

   }
   ?>
 </div>
