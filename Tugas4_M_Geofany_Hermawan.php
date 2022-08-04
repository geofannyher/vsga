<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<h2>Menentukan bilangan Ganjil Genap di PHP</h2>
    <!-- form input untuk memasukkan jumlah bintang -->
	<form method="POST" action="">  
	 <h3>Masukan jumlah Bintang: </h3> 
      <input type="text" name="bin" id="bin" >
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
	<br>
    <!-- tag php -->
    <?php
    // pengecekan jika tombol submit dari form di tekan
    if(isset($_POST['submit'])){
        // maka akan mengeksekusi code di bwah dengna mendeklarasikan terlebih dahulu
    $bin = "";
    // lalu menangkap dari input
    $bin = $_POST['bin'];
        // dan menggunakan for untuk perulangan jumlah bintangnya dari variabel $bin
    for($a = 1; $a <= $bin; $a++){
        // for digunakan lagi untuk  memanipulasi inputan yang di isi
        for ($b = 1; $b <= $a; $b++){
            // dan output yang di hasilkan berupa bintang dan beris baru
            echo"*";
                }
            echo "<br>";
            }
                }
            ?>
</body>
</html>