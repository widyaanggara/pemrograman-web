<?php require_once './navbar.php'?>

<div class="container2">
    <div class="content">
        <?php
        echo "<h2>Nilai Mahasiswa : </h2>";
        $nim = '10101001';
        $nama = 'Agung Dimas';
        $prodi = 'Sistem Komputer';
        $nilai = 90;
        echo "NIM : ", $nim, "<br>";
        echo "Nama : ", $nama, "<br>";
        echo "Prodi : ", $prodi, "<br>";
        echo "Nilai : $nilai";
        ?>
    </div>
    
</div>


<?php require_once './back.php'?>
