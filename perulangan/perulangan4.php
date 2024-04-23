<?php require_once './navbar.php'?>

<div class="container2">
<?php
$bilangan = 5;
for ($a=1; $a<=10; $a++){
echo "Bilangan Sekarang adalah $bilangan <br>"; $bilangan =
$bilangan + $a;
}
?>
</div>

<?php require_once './back.php'?>