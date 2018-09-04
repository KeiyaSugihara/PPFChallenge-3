<?php
require_once('diagnosis.php');

 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="stylesheet.css" media="all" />

  </head>



  <body>

    <header><?php echo $title ?></header>

    <main>
      <div class="diagnosis">
        <h1><?php echo $title; ?></h1>
        <h2>CHARACTERMAKER</h2>
        <p>自分の隠れキャラクターを診断してみよう</p>
        <p>名前を入力してください</p>

           <form class="diagnosisForm" action="characterMakerDiagnosis.php" method="post" accept-charset="UTF-8">
           <input type="text" name="name">

           <p></p>
           <input type="submit" value="診断">
           </form>
        <div class = "ppapMakerDiagnosis">

        </div>

      </div>


      <div class="diagnosisResult">

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
