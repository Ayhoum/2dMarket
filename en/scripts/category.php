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
while ($row = mysqli_fetch_assoc($cat_result)) {
    $cat_id     = $row['id'];
    $cat_name   = $row['name'];
    $icon_name  = $row['icon_name'];
    ?>

    <li><a href="all_product.php?cat_id=<?php echo $cat_id; ?>"><i class="<?php echo $icon_name; ?>"></i><?php echo $cat_name; ?><span>(1029)</span></a></li>
<?php
}
?>