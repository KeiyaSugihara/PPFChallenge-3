<?php
require_once('diagnosis.php');
 ?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="stylesheet.css">

  </head>



  <body>

    <header><?php echo $title ?></header>

    <main>
      <div class="diagnosis">
        <h1><?php echo $title; ?></h1>
        <h2><?php echo $subTitle ; ?></h2>

        <p><a href="ppapMaker.php">PPAPメーカー</a></p>
        <p><a href="codeMaker.php">暗号メーカー</a></p>
        <p><a href="characterMaker.php">キャラクターメーカー</a></p>

        </div>


      <div class="diagnosisResult">

      </div>
    </main>


    <footer>
      <ul>s
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>


    </footer>

  </body>
</html>
