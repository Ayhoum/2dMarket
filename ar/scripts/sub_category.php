<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 20:27
 */

?>
<?php
$cat_id = $_GET['cat_id'];

$cat_query  = "SELECT * FROM `SUB_CATEGORY` WHERE CATEGORY_id = {$cat_id}";
$cat_result = mysqli_query($mysqli, $cat_query);
while ($row = mysqli_fetch_assoc($cat_result)) {
    $sub_cat_id     = $row['id'];
    $sub_cat_name   = $row['name'];
    $sub_icon_name  = $row['icon_name'];

    $count_query = "SELECT COUNT(*) AS 'CAT_count' FROM `ADVERTISEMENT` WHERE CATEGORY_id = '{$cat_id}' ";
    $count_result = mysqli_query($mysqli,$count_query);
    while ($row = mysqli_fetch_assoc($count_result)){
        $cat_count = $row['CAT_count'];
    }

    ?>

    <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $sub_cat_id; ?>&dis=all&price=all&order=latest"><i class="<?php echo $sub_cat_name; ?>"></i><?php echo $sub_cat_name; ?><span style="color: #985f0d">(<?php echo $cat_count;?>)</span></a></li>
<?php
}
?>