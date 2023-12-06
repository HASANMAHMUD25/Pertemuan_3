<?php
 // Membuat Assosiative Array
 $login = [
     "id" => 786,
     "pass" => 123,
     "role" => "admin",
     "active" => 1,
     "level" => 1
 ];

 // Membuat Output
 echo "ID = ",$login["id"]. "<br>";
 echo "Pasword = ",$login["pass"]. "<br>";
 echo "Role = ",$login["role"]. "<br>";
 echo "Active = ",$login["active"]. "<br>";
 echo "Level = ",$login["level"]. "<br>";


 // Membuat Arry Associative
 $umur = ["Ahmad"=>20, "Ali"=>21, "Dewi"=>19];

 // loop AAssociative Array
 foreach($umur as $key =>  $val){
    echo "key : ".$key.", value " .$val;
    echo "<br>";
 }

?>