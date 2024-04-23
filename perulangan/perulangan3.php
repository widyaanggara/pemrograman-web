<?php require_once './navbar.php'?>

<div class="container2">
    <?php
    $bil = 5;
    while ($bil <= 100)
    {
    if ($bil % 10 == 0) echo $bil. "<br />";
    $bil++;
    }
    ?>
</div>

<?php require_once './back.php'?>