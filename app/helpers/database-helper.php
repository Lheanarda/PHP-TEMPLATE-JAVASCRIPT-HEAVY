<?php 
$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
$pdo = new PDO($dsn,DB_USER,DB_PASS);

#SET DATABASE FETCH TO ALWAYS OBJECT
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

##### SAMPLE #####
function fetchMasterKecamatan($pdo){
    $sql = 'SELECT*FROM m_kecamatan';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return  $stmt->fetchAll();
}

function fetchUniqueKecamatan($pdo,$id){
    $sql = "SELECT*FROM m_kecamatan WHERE id_kecamatan = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function addKecamatan($pdo,$kode,$nama,$geo){
    $sql = "INSERT INTO m_kecamatan (kd_kecamatan,nm_kecamatan,geojson_kecamatan) VALUES (:kode,:nama,:geo)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['kode'=>$kode,'nama'=>$nama,'geo'=>$geo]);
    ?>
    <script type="text/javascript">
        window.alert('Sukses tersimpan');
        window.location.href="<?=url('kecamatan') ?>";
    </script>
    <?php
}
?>