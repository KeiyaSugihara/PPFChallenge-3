<?php
require_once('codeMakerDiagnosis.php');
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
        <h2>暗号メーカー</h2>
         <p>好きな言葉をひらがなで入力してください</p>

         <form class="diagnosisForm" action="codeMaker.php" method="post" accept-charset="utf-8">
        <input type="text" name="FirstKeyword">
        <p></p>
        <input type="submit" value=" 暗号化 " >
      </form>
        <div class="codeDiagnosis">
          <?php CodeMakerDiagnosis::Recursive(); ?>

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
