<?php require_once './navbar.php'?>

<div class="container2">
    <?php
    $nilai = 60;
    if($nilai >= 90){
    echo "Nilai Memuaskan";
    }elseif ($nilai >= 80){
    echo "Nilai Bagus";
    }elseif($nilai >=50){
    echo "Nilai Kurang";
    }else{
    echo "Nilai Sangat Kurang";
    }
    ?>
</div>


<?php require_once './back.php'?>