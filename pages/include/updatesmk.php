<?php
require_once("../conf/conn.php");
    $id_jurusan = $_POST['id_jurusan'];
    $jurusan = $_POST['jurusan'];
	$SQL=$conn->prepare("UPDATE jursmk SET jurusan_smk='$jurusan' WHERE id_jursmk='$id_jurusan'");
    $SQL->execute();
    echo "1";
?>
