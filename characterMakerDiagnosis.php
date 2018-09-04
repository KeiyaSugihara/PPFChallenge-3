<?php

header("Content-type: image/png");
$name =$_POST['name'];
$randNum = rand(1,7);
$font = "./Arial Unicode.ttf";


if ( isset($name ))
{
    switch ($randNum) {
      case 1:
       $characterName = $name.'ムカデ女';
       $text =$name.'の内なるキャラクター'."\n\n".$characterName ."\n\n".
       '生命力がとても強い'."\n".'体を半分に切られて'."\n".'飲まず食わずでも１週間生きる';
       $imagepass = "./m84.png";
       CharacterMakerDiagnosis::recursive($imagepass,$font,$text,400);
       break ;

      case 2:
      $characterName = $name.'ジバクアリ';
       $text =$name.'の内なるキャラクター'."\n\n".$characterName ."\n\n".
       '敵に襲われると腹筋を'."\n".'収縮させて自爆する'."\n".'その体液には粘性の毒がある';
       $imagepass = "./m80_5.png";
       CharacterMakerDiagnosis::recursive($imagepass,$font,$text,400);
      break;

      case 3:
       $characterName = $name.'ヒョウモンダコ';
       $text =$name.'の内なるキャラクター'."\n\n".$characterName ."\n\n".
       '一匹の毒で人間が7回死ぬ'."\n".'全身が筋肉で心臓が3つある'."\n".'攻守ともに最強クラス';
       $imagepass = "./m74.png";
       CharacterMakerDiagnosis::recursive($imagepass,$font,$text,250);
      break;

      case 4:
       $characterName = $name.'バッタ';
       $text =$name.'の内なるキャラクター'."\n\n".$characterName ."\n\n".
       '人間大のサイズなら'."\n".'一回のジャンプで９階建ての'."\n".'ビルを優に飛び越せるぞ';
       $imagepass = "m81_5.png";
       CharacterMakerDiagnosis::recursive($imagepass,$font,$text,350);
      break;

      case 5:
      $characterName = $name.'ハエ複数形';
       $text =$name.'の内なるキャラクター'."\n\n".$characterName ."\n\n".
       '人間のどの部分にも寄生できる'."\n".'もしかすると本当に'."\n".'内なるキャラクターかも';
       $imagepass = "./m83.png";
       CharacterMakerDiagnosis::recursive($imagepass,$font,$text,350);
      break;

      case 6:
        $characterName = $name.'オオムラサキ';
       $text =$name.'の内なるキャラクター'."\n\n".$characterName ."\n\n".
       'オオスズメバチすら弾き飛ばす'."\n".'程の羽根の力'."\n".'あなたは生きた台風';
       $imagepass = "./m12.png";
       CharacterMakerDiagnosis::recursive($imagepass,$font,$text,350);
      break;

      default:
       $characterName = $name.'死神';
       $text =$name.'の内なるキャラクター'."\n\n".$characterName ."\n\n".
       '死を司る神'."\n".'りんごが好きらしい'."\n".'たまに本をくれる';
       $imagepass = "./m49.png";
       CharacterMakerDiagnosis::recursive($imagepass,$font,$text,350);
        break;
    }
}

class CharacterMakerDiagnosis{
 public static function recursive($imagepass,$font,$text,$xpoint){
      $im = imagecreatetruecolor(1000, 1000);
      $image     = imagecreatefrompng($imagepass);
      $imageColor1 = imagecolorallocate($image, 0, 0, 0);
      $imColor1 = imagecolorallocate($image, 0, 0, 0);
      $imageColor2 = imagecolorallocate($im, 255, 255, 255);
      $imColor2 = imagecolorallocate($im, 255, 255, 255);
      imagefill($im, 0, 0, $imColor1);
      imagefill($image, 0, 0, $imageColor1);
      imagettftext($im, 20, 0, 350, 600, $imColor2, $font, $text);
      imagecopy($im, $image,$xpoint, 60, 0, 0, 700, 500);
      imagepng($im);
      imagepng($im, './Diagnosis.png');
      magedestroy($image);
      magedestroy($im);
}
}

?>









