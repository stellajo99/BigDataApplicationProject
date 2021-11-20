<?php
require_once('config.php');

$sql = "UPDATE user SET pwd='{$_POST['changepw']}' WHERE user_id=1";
$result = $mysqli->query($sql);

if ($result) {
    header('Location: admin.php');
}else {
    echo "Fail to update";
}
mysqli_free_result($result);
mysqli_close($mysqli);
?>