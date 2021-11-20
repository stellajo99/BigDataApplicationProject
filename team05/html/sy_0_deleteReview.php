<?php
require_once('sy_config.php');
settype($_POST['id'], 'integer');
$filtered = array(
    'id'=>mysqli_real_escape_string($mysqli, $_POST['id'])
);

$sql = "DELETE FROM review WHERE review_id = {$filtered['id']}";
$result = $mysqli->query($sql);

if ($result) {
    header('Location: sy_0_admin.php');
}else {
    echo "Fail to delete";
}
mysqli_free_result($result);
mysqli_close($mysqli);
?>