<?php

function dbConnect()
{

    $config = require __DIR__ . '/config.php';

    try {
        $dsn = 'mysql:host=' . $config['DB_HOST'] . ';dbname=' . $config['DB_NAME'];

        $connection = new PDO($dsn, $config['DB_USER'], $config['DB_PASSWORD']);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;

    } catch (\PDOException $e) {
        echo 'Fout bij maken van database verbinding: ' . $e->getMessage();
    }

}

function scripts(){
  $con = dbConnect();
  $sql = "SELECT * FROM home";
  $statement = $con->query($sql);

  $Description =  0;
  $divText = 0;

  for ($i=0; $i < 4; $i++) {
    $Description++;
    $divText++;
    echo "<script>function Description$Description() {
       var x = this.document.getElementById('homeText$divText');
       if (x.style.visibility === 'hidden') {
         x.style.visibility = '';
       } else {
         x.style.visibility = 'hidden';
       }
     }
       </script>";
  }
}
