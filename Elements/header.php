<?php session_start();?>

 <?php
    $voitures = new Cars;

    $test1 = $_SERVER["PHP_SELF"];

  
   $chemin = explode("/", $test1);
   echo end($chemin);
    
    if(end($chemin)=="index.php")
              {
              $chemin = "css/main.css";
              }
            else
             {
               $chemin = "../css/main.css";
             }

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= $chemin ?>" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <title><?=$title?></title>
    
</head>
<body>
