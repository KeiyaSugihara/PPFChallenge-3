<?php


class CodeMakerDiagnosis{
 public static function Recursive(){

        $FirstKeyword = $_POST['FirstKeyword'];
        $FirstKeyword  = str_replace("あ", "11", $FirstKeyword );
        $FirstKeyword  = str_replace("い", "12", $FirstKeyword );
        $FirstKeyword  = str_replace("う", "13", $FirstKeyword );
        $FirstKeyword  = str_replace("え", "14", $FirstKeyword );
        $FirstKeyword  = str_replace("お", "15", $FirstKeyword );
        $FirstKeyword  = str_replace("か", "21", $FirstKeyword );
        $FirstKeyword  = str_replace("き", "22", $FirstKeyword );
        $FirstKeyword  = str_replace("く", "23", $FirstKeyword );
        $FirstKeyword  = str_replace("け", "24", $FirstKeyword );
        $FirstKeyword  = str_replace("こ", "25", $FirstKeyword );
        $FirstKeyword  = str_replace("さ", "31", $FirstKeyword );
        $FirstKeyword  = str_replace("し", "32", $FirstKeyword );
        $FirstKeyword  = str_replace("す", "33", $FirstKeyword );
        $FirstKeyword  = str_replace("せ", "34", $FirstKeyword );
        $FirstKeyword  = str_replace("そ", "35", $FirstKeyword );
        $FirstKeyword  = str_replace("た", "41", $FirstKeyword );
        $FirstKeyword  = str_replace("ち", "42", $FirstKeyword );
        $FirstKeyword  = str_replace("つ", "43", $FirstKeyword );
        $FirstKeyword  = str_replace("て", "44", $FirstKeyword );
        $FirstKeyword  = str_replace("と", "45", $FirstKeyword );
        $FirstKeyword  = str_replace("な", "51", $FirstKeyword );
        $FirstKeyword  = str_replace("に", "52", $FirstKeyword );
        $FirstKeyword  = str_replace("ぬ", "53", $FirstKeyword );
        $FirstKeyword  = str_replace("ね", "54", $FirstKeyword );
        $FirstKeyword  = str_replace("の", "55", $FirstKeyword );
        $FirstKeyword  = str_replace("は", "61", $FirstKeyword );
        $FirstKeyword  = str_replace("ひ", "62", $FirstKeyword );
        $FirstKeyword  = str_replace("ふ", "63", $FirstKeyword );
        $FirstKeyword  = str_replace("へ", "64", $FirstKeyword );
        $FirstKeyword  = str_replace("ほ", "65", $FirstKeyword );
        $FirstKeyword  = str_replace("ま", "71", $FirstKeyword );
        $FirstKeyword  = str_replace("み", "72", $FirstKeyword );
        $FirstKeyword  = str_replace("む", "73", $FirstKeyword );
        $FirstKeyword  = str_replace("め", "74", $FirstKeyword );
        $FirstKeyword  = str_replace("も", "75", $FirstKeyword );
        $FirstKeyword  = str_replace("や", "81", $FirstKeyword );
        $FirstKeyword  = str_replace("ゆ", "83", $FirstKeyword );
        $FirstKeyword  = str_replace("よ", "85", $FirstKeyword );
        $FirstKeyword  = str_replace("ら", "91", $FirstKeyword );
        $FirstKeyword  = str_replace("り", "92", $FirstKeyword );
        $FirstKeyword  = str_replace("る", "93", $FirstKeyword );
        $FirstKeyword  = str_replace("れ", "94", $FirstKeyword );
        $FirstKeyword  = str_replace("ろ", "95", $FirstKeyword );
        $FirstKeyword  = str_replace("わ", "01", $FirstKeyword );
        $FirstKeyword  = str_replace("を", "02", $FirstKeyword );
        $FirstKeyword  = str_replace("ん", "03", $FirstKeyword );


        $FirstKeyword  = str_replace("ぁ", "8011", $FirstKeyword );
        $FirstKeyword  = str_replace("ぃ", "8012", $FirstKeyword );
        $FirstKeyword  = str_replace("ぅ", "8013", $FirstKeyword );
        $FirstKeyword  = str_replace("ぇ", "8014", $FirstKeyword );
        $FirstKeyword  = str_replace("ぉ", "8015", $FirstKeyword );
        $FirstKeyword  = str_replace("ゃ", "8081", $FirstKeyword );
        $FirstKeyword  = str_replace("ゅ", "8083", $FirstKeyword );
        $FirstKeyword  = str_replace("ょ", "8085", $FirstKeyword );
        $FirstKeyword  = str_replace("っ", "8091", $FirstKeyword );

        $FirstKeyword  = str_replace("が", "2104", $FirstKeyword );
        $FirstKeyword  = str_replace("ぎ", "2204", $FirstKeyword );
        $FirstKeyword  = str_replace("ぐ", "2304", $FirstKeyword );
        $FirstKeyword  = str_replace("げ", "2404", $FirstKeyword );
        $FirstKeyword  = str_replace("ご", "2504", $FirstKeyword );
        $FirstKeyword  = str_replace("ざ", "3104", $FirstKeyword );
        $FirstKeyword  = str_replace("じ", "3204", $FirstKeyword );
        $FirstKeyword  = str_replace("ず", "3304", $FirstKeyword );
        $FirstKeyword  = str_replace("ぜ", "3404", $FirstKeyword );
        $FirstKeyword  = str_replace("ぞ", "3504", $FirstKeyword );
        $FirstKeyword  = str_replace("だ", "4104", $FirstKeyword );
        $FirstKeyword  = str_replace("ぢ", "4204", $FirstKeyword );
        $FirstKeyword  = str_replace("づ", "4304", $FirstKeyword );
        $FirstKeyword  = str_replace("で", "4404", $FirstKeyword );
        $FirstKeyword  = str_replace("ど", "4504", $FirstKeyword );

        $FirstKeyword  = str_replace("ば", "6104", $FirstKeyword );
        $FirstKeyword  = str_replace("び", "6204", $FirstKeyword );
        $FirstKeyword  = str_replace("ぶ", "6304", $FirstKeyword );
        $FirstKeyword  = str_replace("べ", "6404", $FirstKeyword );
        $FirstKeyword  = str_replace("ぼ", "6504", $FirstKeyword );

        $FirstKeyword  = str_replace("ぱ", "6105", $FirstKeyword );
        $FirstKeyword  = str_replace("ぴ", "6205", $FirstKeyword );
        $FirstKeyword  = str_replace("ぷ", "6305", $FirstKeyword );
        $FirstKeyword  = str_replace("ぺ", "6405", $FirstKeyword );
        $FirstKeyword  = str_replace("ぽ", "6505", $FirstKeyword );



        echo $FirstKeyword;




      }



}



 ?>
