<?php
require_once("conf/conn.php");
if(!empty($_POST["unameKirim"])) {
	$query = $conn->prepare('SELECT * FROM user WHERE username = ?');
    $query->bind_param('s', $_POST["unameKirim"]);
    $query->execute();
    $result=$query->get_result();
    $jumrow=$result->num_rows;
	echo $jumrow;
}
?>