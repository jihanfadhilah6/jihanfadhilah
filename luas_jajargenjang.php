<h3>Hitung Luas Jajar Genjang</h3>

<p>Masukkan ukuran alas dan tinggi jajar genjang</p>
<form action="luas_jajargenjang.php" method="post">
    Alas :<input type="text" name="alas"><br>
    Tinggi :<input type="text" name="tinggi"><br>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if(isset($_POST['submit'])){
    $alas = $_POST['alas'];
    $tinggi= $_POST['tinggi'];

    $luas_jajargenjang = $alas * $tinggi; //menghitung luas jajar genjang

    echo "Luas jajar genjang yang memiliki <br/>";
    echo "alas : $alas <br/>";
    echo "tinggi : $tinggi <br/>";
    echo "yaitu : $luas_jajargenjang";
}
?>