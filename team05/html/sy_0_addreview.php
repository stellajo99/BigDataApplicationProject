<!--sy_0_addreview.php 에서 여러 개의 SQL 쿼리 한 번에 처리하기 위해 transaction 사용-->
<?php
require_once('sy_config.php');
session_start();
$username = "";
if( isset( $_SESSION['username'] ) ) {
  $username =  $_SESSION['username'];
}
require_once('sy_config.php');
$name = $_POST['name'];
$location = $_POST['location'];
$country = $_POST['country'];
$price = $_POST['price'];
$rating = $_POST['rating'];
$content = $_POST['content']; 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


try {
    $mysqli->autocommit(FALSE);
    $mysqli->begin_transaction();
    $mysqli->query("INSERT INTO restaurant(name, location, country, avg_price) values('$name','$location','$country',$price);");
    //$mysqli->query("SELECT rest_id from restaurant WHERE name='$name';");
    $mysqli->query("INSERT INTO review (user_id, rest_id, content, rating) VALUES ((SELECT user_id FROM user WHERE username = '$username'), (SELECT rest_id from restaurant WHERE name='$name'), '$content', $rating);");
    
    $mysqli->commit();
    $mysqli->autocommit(TRUE);
    $mysqli->close();
    header('Location: sy_0_admin.php');
} catch (mysqli_sql_exception $exception) {
    $mysqli->rollback();
    $mysqli->autocommit(TRUE);
    echo $exception;
    echo 'rollback';
}
?>