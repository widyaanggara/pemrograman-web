<?php require_once './navbar.php'?>

<div class="container2">
    <div class="content">
    <?php
$mahasiswa = array("Lina", "Arni", "Jona", "Punjabi", "Marcus",
"Marlin");
echo "<strong>Nama Mahasiswa sebelum diurutkan : </strong><br
/>";
foreach($mahasiswa as $data => $nama){
echo "$data: $nama"."<br />";
 }
sort($mahasiswa);
echo "<strong>Nama Mahasiswa setelah diurutkan : </strong><br
/>";
foreach($mahasiswa as $data => $nama){
echo "$data: $nama"."<br />";
 }

?>
    </div>
</div>


<?php require_once './back.php'?>
