<?php
require_once('sy_config.php');$category = $_POST['category'];
$lowerPrice = $_POST['lower'];
$upperPrice = $_POST['upper'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$sql = "INSERT INTO filter(category, lowerPrice, upperPrice) values('$category', $lowerPrice, $upperPrice);";
$result = $mysqli->query($sql);

if ($result) {
    header('Location: sy_1_recommendation.php');
}else {
    echo "Fail to update";
}
mysqli_free_result($result);
mysqli_close($mysqli);

?>