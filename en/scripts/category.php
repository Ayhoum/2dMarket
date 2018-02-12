<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 20:27
 */

?>
<?php
$cat_query  = "SELECT * FROM `CATEGORY`";
$cat_result = mysqli_query($mysqli, $cat_query);
while ($row = mysqli_fetch_assoc($cat_result)){
    $cat_id   = $row['id'];
    $cat_name = $row['name'];
}
?>

        <li><a href="#"><i class="flaticon-data"></i><?php echo $cat_name; ?><span>(1029)</span></a></li>
