<?php
require __DIR__ . '/../../includes/functions.php';
$con = dbConnect();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jan van der Henst">
    <title>SCP Foundation</title>
    <link rel="stylesheet" href="css/homecss/home.css">
    <link rel="stylesheet" href="css/infocss/info.css">
    <link rel="stylesheet" href="css/gamecss/game.css">
    <link rel="stylesheet" href="css/agendacss/agenda.css">
    <link rel="stylesheet" href="css/formcss/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="navbar">
      <h1>SCP Foundation</h1>
      <div class="dropdown">
        <i class="fa fa-bars" onclick="myFunction()"></i>
        <div class="dropdown-content" id="myDropdown">
          <a href="home">Home</a>
          <a href="information">Information</a>
          <a href="game-info">Game-info</a>
          <a href="agenda">Agenda</a>
          <a href="form">Contact</a>
        </div>
      </div>
    </div>
    <script>
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(e) {
          if (!e.target.matches('.fa')) {
          var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
              myDropdown.classList.remove('show');
            }
          }
        }
      </script>
