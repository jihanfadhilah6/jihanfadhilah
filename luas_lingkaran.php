<h3>Hitung Luas Lingkaran</h3>

<p>Masukkan Jari-Jari Lingkaran</p>
<form action="luas_lingkaran.php" method="post">
    Jari-jari :<input type="text" name="jari2"><br>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if(isset($_POST['submit'])){
    $jari2 = $_POST['jari2'];
    $phi = 3.14;

    $luas_lingkaran = $phi * $jari2 * $jari2; //menghitung luas lingkaran

    echo "Luas lingkaran dengan jari-jari $jari2 maka memiliki <br>";
    echo "Luas : $luas_lingkaran <br>";
}
?>