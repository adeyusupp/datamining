<?php
require_once("../conf/conn.php");
    $id_jurusan = $_POST['id_jurusan'];
    $jurusan = $_POST['jurusan'];
	$SQL=$conn->prepare("UPDATE juruniv SET jurusan_univ='$jurusan' WHERE id_juruniv='$id_jurusan'");
    $SQL->execute();
    echo "1";
?>
