<!-- form UPDATE cat -->


<form action="#" method="post">
    <div class="form-group fa-border">
        <div class="form-group">
            <label for="cat-title">Edit SUB-Category</label>

            <input class="form-control" type="text" name="sub-cat_title">
        </div>

        <div class="form-group">
            <label for="cat-icone">Edit Icon</label>
            <input class="form-control" type="text" name="sub-cat_icon">
        </div>


        <div class="form-group">
            <input class="btn-btn-primary" type="submit" name="update-SUB" value="update SUB-category">
        </div>
    </div>
</form>

<?php
//Update ALL CATEGORY
if (isset($_GET['editSUB'])) {
    $sub_category_id = $_GET['editSUB'];
    $query = "SELECT * FROM `SUB_CATEGORY` WHERE `id` = '{$sub_category_id}'";
    $select_cat_id = mysqli_query($mysqli, $query);
    While ($row = mysqli_fetch_assoc($select_cat_id)) {

        $sub_category_id = $row['id'];
        $sub_cat_title = $row['name'];
        $sub_icon_name = $row['icon_name'];

    }
}

//<!--  EDITING FUNCTION -->

//update function

if (isset($_POST['update-SUB'])) {


    $sub_catTitle = $_POST['sub-cat_title'];
    $sub_icon = $_POST['sub-cat_icon'];
    if ($sub_catTitle == "" || empty($sub_catTitle)) {
//                            nix
    } else {
        $query_UPDATE = "UPDATE `SUB_CATEGORY` SET `name` = '{$sub_catTitle}',`icon_name` = '{$sub_icon}' WHERE id = '{$sub_category_id}' ";

        $update_query = mysqli_query($mysqli, $query_UPDATE);

        if (!$update_query) {

            echo "error update connection";
        }


    }
}
?>