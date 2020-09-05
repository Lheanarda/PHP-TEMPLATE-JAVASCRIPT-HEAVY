<?php 
require '_loader.php';
require MAIN_LAYOUT_ROUTE.'header.php'; 
$kecamatans = fetchMasterKecamatan($pdo);
?>
<br>
<a href="page2">Go to page 2</a>
<?php foreach($kecamatans as $kecamatan): ?>
    <p><?=$kecamatan->nm_kecamatan?></p>
<?php endforeach; ?>
<br>
<?php require MAIN_LAYOUT_ROUTE.'footer.php'; ?>