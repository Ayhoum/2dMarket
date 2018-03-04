<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 14-2-2018
 * Time: 12:19
 * here all the required info of the pics can be founded !
 */
?>

<?php

$pic_query  = " SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE ADVERTISEMENT_id = '{$ad_id}' LIMIT 1";
$pic_result = mysqli_query($mysqli,$pic_query);
if (mysqli_num_rows($pic_result) > 0 ){
    while ($row = mysqli_fetch_assoc($pic_result)){
        $pic_id = $row['id'];
        $picture_name = $row['picture_name'];
        $picture_url = $row['picture_url'];
    }

} else {
    $picture_url = "http://www.nsrcel.org/wp-content/uploads/2018/01/product.png";
}
$pic_number     = "SELECT COUNT(*) AS 'pic_count' FROM `ADVERTISEMENT_PICTURE` WHERE ADVERTISEMENT_id = '{$ad_id}'";
$number_result  = mysqli_query($mysqli,$pic_number);
while ($row= mysqli_fetch_assoc($number_result)){
    $pic_count = $row['pic_count'];
}
?>
