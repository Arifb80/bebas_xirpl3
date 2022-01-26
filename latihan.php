<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ol>1.Bukit bintang</ol>
    <ol>2.Pantai sadranan</ol>
    <ol>3.candi borobudur</ol>
    <ol>4.keraton yogyakarta</ol>
    <ol>5.malioboro</ol>
    <ol>6.pendopo lawas</ol>
    <ol>7.goa pindul</ol>
    <center>
     <form method = "POST" action= "">
     <table>
         <tr>

         </tr>
        <tr>
             <td>Pilih</td>
             <td>:</td>
             <td><input type='text' name='pilih'></td>
        <tr>
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


if($pilih == 1){
    echo "1. Bukit Bintang Rp 10.000"."<br>";
}
elseif($pilih == 2){
    echo "2. Pantai sadranan Rp 15.000"."<br>";
}
elseif($pilih == 3){
    echo "3. Candi borobudur Rp 50.000"."<br>";
}
elseif($pilih == 4){
    echo "4. Candi Perambanan Rp 50.000"."<br>";
}
elseif($pilih == 5){
    echo "5. Keraton Yogyakarta Rp 5.000"."<br>";
}
elseif($pilih == 6){
    echo "6. Malioboro Rp 5.000"."<br>";
}
elseif($pilih == 7){
    echo "7. Pendopo Lawas Kafe"."<br>";
}
elseif($pilih == 8){
    echo "8. Goa pindul Rp 100.00"."<br>";
}
}
?>