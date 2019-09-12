<?php
$sql  = "SELECT * FROM game";
$statement = $con->query($sql);
 ?>
 <div class="GameInfoAlles">
   <?php
   $Description =  0;
   $divText = 0;
   foreach ($statement as $iets) {
     $Description++;
     $divText++;
     echo "<div class='game-infoDiv'>";
     echo "<h2 class='game-infoTitle'>" . $iets['title'] . "</h2>";
     echo '<img class="game-infoImg" src="images/'.$iets['foto'].'" alt="help" height="250">';
     echo "<br>";
     echo "<p class='game-infoText'>";
     echo $iets['text'];
     echo '</p>';
     echo "</div>";
   }
   ?>
 </div>
