<?php
// menggunakan perulangan sebanyak 20 kali
for($bilangan = 1; $bilangan <= 20; $bilangan++){
    // cek kondisi jika nilai dibagi 2 sama dengan 0 maka genap 
    if( ($bilangan % 2) == 0){
        echo "$bilangan Adalah Bilangan Genap<br>";
    }else {
		echo "$bilangan Adalah Bilangan Ganjil<br>";
	}	
}
?>