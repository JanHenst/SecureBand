<?php
  require __DIR__ . '/../../includes/functions.php';

  $search = $_GET['q'];
  $GetNummer = $_GET['n'];

  $nummer1 = $GetNummer * 4;
  $nummer2 = $nummer1 - 4;
  $nummer3 = 0;

  $con = dbConnect();
  $sql = "SELECT * FROM home WHERE title LIKE '%$search%'";
  $statement = $con->query($sql);

  $Description =  0;
  $divText = 0;
  $aantal = 0;
  $aantalSCP = 0;
  echo "<div class='scps'>";
  foreach ($statement as $iets) {
    $aantalSCP++;
      $nummer3++;
      if($nummer3 > $nummer2 && $nummer3 <= $nummer1){
        $aantal++;
        if($aantal <= 4){
        $Description++;
        $divText++;
        echo "<div class='homeDiv'>";
        echo "<h3 class='homeTitle'>" . $iets['title'] . "</h3>";
        echo '<img class="homeImg" src="images/'.$iets['foto'].'" alt="help" width="250" height="250">';
        echo "<br>";
        echo "<button type='button' name='Description' class='DescriptionButton' onclick='Description$Description()'>Description</button>";
        echo "<p class='homeText' id='homeText$divText' style='visibility: hidden;'>";
        echo $iets['text'];
        echo '</p>';
        echo "</div>";
      }
    }
  }
  echo "</div>";

  $statement = $con->query($sql);
  $paginanummer = 0;
  $booleanFirst = true;
  $checker = 0;

  echo "<div class='paginas'>";
  foreach ($statement as $iets) {
    if($aantalSCP > 4){
      $checker++;
      if($checker == 5){
        $paginanummer++;
        $checker -= 4;
        echo "<input type=button class='paginationButtons' value=" . $paginanummer . " onclick=ajax(" . $paginanummer . ")>";
      } else if($booleanFirst == true){
        $paginanummer++;
        echo "<input type=button class='paginationButtons' value=" . $paginanummer . " onclick=ajax(" . $paginanummer . ")>";
        $booleanFirst = false;
      }
    }
  }
  echo "</div>";
?>
