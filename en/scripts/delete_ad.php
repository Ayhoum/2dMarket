<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 20-2-2018
 * Time: 16:51
 */
?>
<?php
$ad_id = $_GET['ad_id'];
$delete_query = "DELETE FROM `ADVERTISEMENT` WHERE id = '{$ad_id}'";

$delete_result = mysqli_query($mysqli, $delete_query);


header("Location: ../personal_ads.php");
?>

