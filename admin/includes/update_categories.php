<!-- form UPDATE cat -->


<form action="#" method="post">
    <div class="form-group fa-border">
    <div class="form-group">
        <label for="cat-title">Edit Category</label>

        <input value="<?php if (isset($cat_title)) {
            echo $cat_title;
        } ?>" class="form-control" type="text" name="cat_title">
    </div>
    <div class="form-group">
        <label for="cat-lang">Edit Lang</label>
        <input class="form-control" type="text" name="cat_language">
    </div>
    <div class="form-group">
        <label for="cat-icone">Edit Icon</label>
        <input class="form-control" type="text" name="cat_icon">
    </div>


    <div class="form-group">
        <input class="btn-btn-primary" type="submit" name="update-category" value="update-category">
    </div>
    </div>
</form>

<?php
//Update ALL CATEGORY
if (isset($_GET['edit'])) {
    $category_id = $_GET['edit'];

    $query = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id}'";
    $select_cat_id = mysqli_query($mysqli, $query);
    While ($row = mysqli_fetch_assoc($select_cat_id)) {

        $category_id = $row['id'];
        $cat_title = $row['name'];
        $category_language = $row['lang'];
        $icon_name = $row['icon_name'];


    }
}

//<!--  EDITING FUNCTION -->

//update function

if (isset($_POST['update-category'])) {


    $catTitle = $_POST['cat_title'];
    $category_lan = $_POST['cat_language'];
    $icon = $_POST['cat_icon'];
    if ($catTitle == "" || empty($catTitle)) {
//                            nix
    } else {
        $query_UPDATE = "UPDATE `CATEGORY` SET `name` = '{$catTitle}',`lang` = '{$category_lan}',`icon_name` = '{$icon}' WHERE id = '{$category_id}' ";

        $update_query = mysqli_query($mysqli, $query_UPDATE);

        if (!$update_query) {

            echo "error update connection";
        }


    }
}
?>