<?php require_once './navbar.php'?>

<div class="container2">
    <?php
    $bil = 1;
    while ($bil <= 17)
    {
    echo "Bilangan sekarang adalah $bil<br />";
    $bil++;
    }
    echo "Nilai bilangan selanjutnya adalah:".$bil;
    ?>
</div>


<?php require_once './back.php'?>