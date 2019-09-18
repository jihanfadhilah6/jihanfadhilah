<h3>Hitung Luas Segitiga</h3>

<p>Masukkan ukuran alas dan tinggi segitiga</p>
<form action="luas_segitiga.php" method="post">
    Alas :<input type="text" name="alas"><br>
    Tinggi :<input type="text" name="tinggi"><br>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if(isset($_POST['submit'])){
    $alas = $_POST['alas'];
    $tinggi= $_POST['tinggi'];

    $luas_segitiga = 1/2 * $alas * $tinggi; //menghitung luas segitiga

    echo "Luas segitiga dengan : <br/>";
    echo "alas : $alas <br/>";
    echo "tinggi : $tinggi <br>";
    echo "yaitu : $luas_segitiga";
}
?>