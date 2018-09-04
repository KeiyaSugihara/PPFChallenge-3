<?php

class PpapMakerDiagnosis{
 public static function recursive(){

        $FirstKeyword =$_POST['FirstKeyword'];
        $SecondKeyword =$_POST['SecondKeyword'];
        if(isset($FirstKeyword )){
                echo "I have a pen<br />";
                echo "I have a $FirstKeyword<br />";
                echo "うぅん<br />";
                echo "$FirstKeyword pen<br><br>";

                echo "I have a pen<br />";
                echo "I have a $SecondKeyword<br />";
                echo "うぅん<br />";
                echo "$SecondKeyword pen<br /><br />";



                echo "$FirstKeyword pen~~~~~<br />";
                echo "$SecondKeyword pen~~~~~<br />";
                echo "うぅん<br /><br /><br /><br />";
        }
}

public static function recursiveFunction(){
        $FirstKeyword =$_POST['FirstKeyword'];
        $SecondKeyword =$_POST['SecondKeyword'];
        if(isset($FirstKeyword )){
           echo "pen $SecondKeyword$FirstKeyword pen";
         }
}

}


 ?>
