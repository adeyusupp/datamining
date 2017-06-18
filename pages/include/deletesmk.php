<?php
require_once("../conf/conn.php");
    $id = $_POST['del_id'];
	$query = $conn->prepare('DELETE FROM jursmk WHERE id_jursmk = ?');
    $query->bind_param('s', $id);
    $query->execute();
    echo "1";
?>

