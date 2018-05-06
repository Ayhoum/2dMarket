<?php
/**
 * Created by PhpStorm.
 * User: sulim
 * Date: 4-3-2018
 * Time: 13:31
 */

function add_categories()
{
    global $mysqli;

    //ADD CATEGORY
    if (isset($_POST['submit'])) {
        $cat_title = mysqli_real_escape_string($mysqli, ($_POST['cat_title']));
        $cat_lang = mysqli_real_escape_string($mysqli,($_POST['cat_lang']));
        $cat_ICON = mysqli_real_escape_string($mysqli,($_POST['cat_ICON']));
        if ($cat_title == "" || empty($cat_title) || $cat_lang == "" || empty($cat_lang) ||$cat_ICON == "" || empty($cat_ICON) ) {
//
            echo '<strong style="color: red">'." Please, Fill all the fields! ".'</strong> <hr>';

        } else {
            $query = "INSERT INTO `CATEGORY`(`name`,`lang`,`icon_name`) VALUES ('{$cat_title}','{$cat_lang}','{$cat_ICON}') ";
            $create_category_query = mysqli_query($mysqli, $query);

            if (!$create_category_query) {
                die('QUERY FAILED' . mysqli_error($mysqli));
            }
        }
    }
}

function findAllCategories()
{
    global $mysqli;
    //SHOW ALL CATEGORY
    $query = "SELECT * FROM CATEGORY";
    $select_cat = mysqli_query($mysqli, $query);
    While ($row = mysqli_fetch_assoc($select_cat)) {
        $category_title = $row['name'];
        $category_language = $row['lang'];
        $cat_id = $row['id'];
        $icon_name= $row['icon_name'];


        echo "<tr>";
        echo " <td>{$cat_id}</td>";
        echo " <td>{$category_title}</td>";
        echo " <td>{$category_language}</td>";
        echo " <td>$icon_name</td>";
        echo " <td><a href='cat.php?delete={$cat_id}'>Delete</td>";
        echo " <td><a href='cat.php?edit={$cat_id}'>Edit</td>";
        echo " <td><a href='sub-categories.php?category-id={$cat_id}'>Show Sub-categories</td>";

        echo "</tr>";
    }


}

function deletCategories()
{
    global $mysqli;
    //DELETE CATEGORY
    if (isset($_GET['delete'])) {
        $the_cat_id = $_GET['delete'];
        $delete_query = "DELETE FROM CATEGORY WHERE id = {$the_cat_id} ";

        $delete_excut = mysqli_query($mysqli, $delete_query);

    }
}



//############################//

function findAllSubCategories()
{
    global $mysqli;
    //SHOW ALL CATEGORY
    $cat_id=$_GET['category-id'];

    $query = "SELECT * FROM SUB_CATEGORY WHERE  `CATEGORY_id`= '{$cat_id}' ";
    $select_cat = mysqli_query($mysqli, $query);
    While ($row = mysqli_fetch_assoc($select_cat)) {
        $sub_category_title = $row['name'];

        $sub_cat_id = $row['id'];
        $sub_icon_name= $row['icon_name'];


        echo "<tr>";
        echo " <td>{$sub_cat_id}</td>";
        echo " <td>{$sub_category_title}</td>";
        echo " <td>$sub_icon_name</td>";

        echo " <td><a href='sub-categories.php?deleteSUB={$sub_cat_id}'>Delete</td>";
        echo " <td><a href='sub-categories.php?editSUB={$sub_cat_id}'>Edit</td>";


        echo "</tr>";
    }


}
function add_SUB_categories()
{
    global $mysqli;

    //ADD sub CATEGORY
   global $cat_id;
    if (isset($_POST['submit_SUB'])) {
        $sub_cat_title = mysqli_real_escape_string($mysqli, ($_POST['SUB_cat_title']));

        $sub_cat_ICON = mysqli_real_escape_string($mysqli,($_POST['SUB_ICON']));
        if ($sub_cat_title == "" || empty($sub_cat_title) ||$sub_cat_ICON == "" || empty($sub_cat_ICON) ) {
//ss
            echo '<strong style="color: red">'." Please, fill all the fields! ".'</strong>';
        } else {
            $query = "INSERT INTO `SUB_CATEGORY`(`name`,`icon_name`,`CATEGORY_id`) VALUES ('{$sub_cat_title}','{$sub_cat_ICON}','{$cat_id}') ";

            $create_category_query = mysqli_query($mysqli, $query);

            if (!$create_category_query) {
                die('QUERY FAILED' ." ". mysqli_error($mysqli));
            }
        }
    }
}

function delet_SUB_Categories()
{
    global $mysqli;
    //DELETE CATEGORY
    if (isset($_GET['deleteSUB'])) {
        $the_SUB_cat_id = $_GET['deleteSUB'];
        $delete_query = "DELETE FROM SUB_CATEGORY WHERE id = {$the_SUB_cat_id} ";

        $delete_excut = mysqli_query($mysqli, $delete_query);

    }
}



//#################################//

function findAllAds()
{
    global $mysqli;
    //SHOW everything about the ads


    $query = "SELECT * FROM ADVERTISEMENT";
    $select_AD = mysqli_query($mysqli, $query);
    While ($row = mysqli_fetch_assoc($select_AD)) {
        $AD_id = $row['id'];
        $AD_Title = $row['title'];
        $AD_Language = $row['lang'];
        $AD_Selling_Type = $row['selling_type'];
        $AD_status = $row['status'];
        $AD_Delivery_Type = $row['delivery_type'];
        $AD_Description = $row['description'];
        $AD_Ad_Type = $row['ad_type'];
        $AD_Date = $row['date'];
        $AD_Condition = $row['condition'];
        $AD_price = $row['price'];

        echo "<tr>";
        echo "<td>$AD_id</td>";
        echo "<td>$AD_Title</td>";
        echo "<td>$AD_Language</td>";
        echo "<td>$AD_Selling_Type</td>";
        echo "<td>$AD_status</td>";
        echo "<td>$AD_Delivery_Type</td>";
        echo "<td>$AD_Description</td>";
        echo "<td>$AD_Ad_Type</td>";
        echo "<td>$AD_Date</td>";
        echo "<td>$AD_Condition</td>";
        echo "<td>$AD_price</td>";
        echo " <td><a href='ADS.php?editAD={$AD_id}'>Edit</td>";
        echo "</tr>";


    }


}


function findUsersAdmin()
{
    global $mysqli;
    //SHOW everything about the ads


    $query = "SELECT * FROM `USER`";
    $select_USER = mysqli_query($mysqli, $query);
    While ($row = mysqli_fetch_assoc($select_USER)) {
        $user_id = $row['id'];
        $firstname = $row['first_name'];
        $lastname = $row['last_name'];
        $email = $row['email'];
        $profile_status = $row['profile_status'];


        echo "<tr>";
        echo "<td>$user_id</td>";
        echo "<td>$firstname</td>";
        echo "<td>$lastname</td>";
        echo "<td>$email</td>";
        echo "<td>$profile_status</td>";

        echo " <td><a href='accounts_users.php?editAD={$user_id}'>Edit Profile Status</td>";


        echo "</tr>";


    }


}





