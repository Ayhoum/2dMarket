<!-- form UPDATE cat -->
<form action="#" method="post">
    <div class="form-group">
        <label for="cat-title">Edit Description</label>

        <?php
        //Update ALL CATEGORY
        if (isset($_GET['editAD'])) {
            $Ad_id = $_GET['editAD'];

            $query_select = "SELECT * FROM ADVERTISEMENT WHERE `id` = '{$Ad_id}'";
            $select_ad_id = mysqli_query($mysqli, $query_select);
            While ($row = mysqli_fetch_assoc($select_ad_id)) {

                $ad_id = $row['id'];
                $ad_description = $row['description'];
                ?>


                <input value=" " class="form-control" type="text" name="description">

                <?php
            }
        }

        //<!--  EDITING FUNCTION -->

        //update function

        if (isset($_POST['submit'])) {


            $add_description = $_POST['description'];
            if ($add_description == "" || empty($add_description)) {
//                            nix
            } else {
                $query_UPDATE = "UPDATE `ADVERTISEMENT` SET `description` = '{$add_description}' WHERE id = '{$ad_id}' ";

                $update_query = mysqli_query($mysqli, $query_UPDATE);

                if (!$update_query) {

                    echo "error update connection";
                }


            }
        }
        ?>


    </div>
    <div class="form-group">
        <input class="btn-btn-primary" type="submit" name="submit" value="update description">
    </div>
</form>