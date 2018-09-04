<?php
require_once('diagnosis.php');
require_once('ppapMakerDiagnosis.php');
 ?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="stylesheet.css" media="all" />

  </head>



  <body>

    <header><?php echo $title ?></header>

    <main>
      <div class="diagnosis">
        <h1><?php echo $title; ?></h1>
        <h2>PPAPMAKER</h2>
        <p>好きな果物を２つ入力してください</p>

              <form class="diagnosisForm" action="ppapMaker.php" method="post" accept-charset="utf-8">
        <input type="text" name="FirstKeyword">
        <input type="text" name="SecondKeyword">
        <p></p>
        <input type="submit" value="うんっ">
      </form>
        <div class = "ppapMakerDiagnosis">
          <?php PpapMakerDiagnosis::recursive(); ?>
          <div class="ppapMakerDiagnosisRecursive">
            <?php PpapMakerDiagnosis::recursiveFunction(); ?>
          </div>
        </div>

      </div>


    </main>


    <footer>
      <ul>
        <li><a href="http://localhost:8888/ppf/ppapMaker.php">PPAPメーカー</a></li>
        <li><a href="http://localhost:8888/ppf/codeMaker.php">暗号メーカー</a></li>
        <li><a href="http://localhost:8888/ppf/characterMaker.php">キャラクターメーカー</a></li>
      </ul>


    </footer>

  </body>
</html>
