<?php require_once './navbar.php'?>

<div class="container2">
    <?php
    function tampil_ganjil(){
    for ($i =1; $i<=20; $i++){
    if ($i % 2 == 1){
    echo "$i ";
    }
    }
    }
    //pemanggil fungsi
    echo "Bilanggan ganjil dari 1-20 :<br/>"; tampil_ganjil();
    ?>
</div>
<?php require_once './back.php'?>
