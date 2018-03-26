<!-- form UPDATE cat -->
<form action="#" method="post">
    <div class="form-group">
        <label for="cat-title">Edit Category</label>

        <?php
        //Update ALL CATEGORY
        if (isset($_GET['edit'])) {
            $category_id = $_GET['edit'];

            $query = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id}'";
            $select_cat_id = mysqli_query($mysqli, $query);
            While ($row = mysqli_fetch_assoc($select_cat_id)) {

                $category_id = $row['id'];
                $cat_title = $row['name'];
                ?>


                <input value="<?php if (isset($cat_title)) {
                    echo $cat_title;
                } ?>" class="form-control" type="text" name="cat_title">

                <?php
            }
        }

        //<!--  EDITING FUNCTION -->

        //update function

        if (isset($_POST['update-category'])) {


            $catTitle = $_POST['name'];
            if ($catTitle == "" || empty($catTitle)) {
//                            nix
            } else {
                $query_UPDATE = "UPDATE `CATEGORY` SET `name` = '{$catTitle}' WHERE id = '{$category_id}' ";

                $update_query = mysqli_query($mysqli, $query_UPDATE);

                if (!$update_query) {

                    echo "error update connection";
                }


            }
        }
        ?>


    </div>
    <div class="form-group">
        <input class="btn-btn-primary" type="submit" name="submit" value="update-category">
    </div>
</form>