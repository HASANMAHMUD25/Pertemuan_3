<?php
 // Membuat Index Array
 $kendaraan = ["Mobil", "Sepeda", "Truk", "Motor", "Bus"];

 // Menampilkan Output
 echo "Nama-nama Alat Transfortasi : <br>";
 echo $kendaraan[0],"<br>";
 echo $kendaraan[1],"<br>";
 echo $kendaraan[2],"<br>";
 echo $kendaraan[3],"<br>";
 echo $kendaraan[4],"<br>";

 echo "==========================<br>";

 // Quiz
 $hewan = ["Kucing", 
         "Kelinci", 
         "Kambing", 
         "Sapi", 
         "Banteng", 
         "Iguana",
         "Buaya",
         "Kancil",
         "Kadal"];

    echo "Nama-nama Hewan:";
    echo $hewan[0],"<br>";
    echo $hewan[1],"<br>";
    echo $hewan[2],"<br>";
    echo $hewan[3],"<br>";
    echo $hewan[4],"<br>";
    echo $hewan[5],"<br>";
    echo $hewan[6],"<br>";
    echo $hewan[7],"<br>";
    echo $hewan[8],"<br>";

 echo "==========================<br>";
   
    $_fruits = ["Pepaya", "Mangga", "pisang", "Jambu"];
    $jml_data = count($_fruits);

    for($i = 0;$i<$jml_data;$i++){
        echo "Buah Index - "."adalah ".$_fruits[$i];
        echo "<br>";
    }
    
?>