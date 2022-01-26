<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li type="none">1.Bukit Bintang</li>
    <li type="none">2.Pantai Sadranan</li>
    <li type="none">3.Candi Borobudur</li>
    <li type="none">4.Candi Prambanan</li>
    <li type="none">5.Keraton Yogyakarta</li>
    <li type="none">6.Malioboro</li>
    <li type="none">7.Pendopo Lawas</li>
    <li type="none">8.Goa Pindul</li>
    <br>
    <br>
    <br>
    <br>
    
    <center>
      
     <form method = "POST" action= "">
     <table>
        <tr>
             <td>Pilih tiket</td>
             <td>:</td>
             <td><input type='number' name='pilih'></td>
        </tr> 
        <tr>
             <td>Jumlah tiket</td>
             <td>:</td>
             <td><input type='number' name='jumlah'></td>
        </tr>
        <tr>
             <td>Input bayar</td>
             <td>:</td>
             <td><input type='number' name='bayar'></td>
        </tr>
        <tr>
             <td></td>
             <td></td>
             <td><input type="submit" name ="simpan" value='KIRIM'></td>
        </tr>
     </table>
     </form>
    </center>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $pilih = $_POST['pilih'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];
    if($pilih == 1){
        $harga = 10000;
        echo "Bukit bintang : Rp.$harga <br>";
        echo "Jumlah tiket: $jumlah <br>";
    }
    elseif($pilih == 2){
        $harga = 15000;
        echo "Pantai sadranan : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    }
    elseif($pilih == 3){
        $harga = 50000;
        echo "Candi borobudur : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    }
    elseif($pilih == 4){
        $harga = 50000;
        echo "Candi prambanan  : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    }
    elseif($pilih == 5){
        $harga = 5000;
        echo "Keraton Yogyakarta : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    }
    elseif($pilih == 6){
        $harga = 5000;
        echo "Malioboro : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    }
    elseif($pilih == 7){
        $harga = 0;
        echo "Pendopo lawas";
        echo "<center><a href='menu.php'>Daftar menu</a></center>";    
    }
    elseif($pilih == 8){
        $harga = 100000;
        echo "Goa pindul : Rp.$harga <br>";
        echo "Jumlah tiket : $jumlah <br>";
    }
   
    echo "<h3>Diskon</h3>";
    if($jumlah > 3){
        $diskon = 0.05;
        echo "Selamat kamu dapet diskon 5% <br>";
    }
    elseif($jumlah < 3){
        $diskon = 0;
        echo "Kamu ga dapat diskon <br>";
    }
    else{
        echo "NO <br>";
    }        

    echo "input bayar : Rp.$bayar <br>";
    $hitungdiskon = $harga * $jumlah * $diskon;
    
    $totalharga = ($harga * $jumlah) - $hitungdiskon;
    echo "total harga  : Rp.$totalharga <br>";
    $kembalian = $bayar - $totalharga;
    echo "Kembalian : Rp.$kembalian <br>";





}