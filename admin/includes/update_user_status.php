<!-- form UPDATE cat -->




<form action="#" method="post">
    <div class="form-group">
        <label for="AD-title">Edit profile status</label>

        <?php
        //Update ALL CATEGORY
        if (isset($_GET['editAD'])) {
            $user_id = $_GET['editAD'];
            $query = "SELECT * FROM `USER` WHERE `id` = '{$user_id}'";
            $select_user_id = mysqli_query($mysqli, $query);
            While ($row = mysqli_fetch_assoc($select_user_id)) {
                $user_id = $row['id'];
                $profile_status = $row['profile_status'];
                ?>
                <div class="drop-down">
                    <select name="Status">
                    <option value="#"  >-----</option>
                    <option value="BLOCKED"  name="BLOCKED">Blocked</option>
                    <option value="Authorised" name="Authorised">Authorised</option>
                    </select>
                </div>
<!--                <div class="checkbox">-->
<!--                    <label><input type="radio"  name="BLOCKED">BLOCKED</label>-->
<!--                </div>-->
<!--                <div class="checkbox">-->
<!--                    <label><input type="radio"  name="Authorised">Authorised</label>-->
<!--                </div>-->

                <?php
            }
        }

        //<!--  EDITING FUNCTION -->

        //update function

        if (isset($_POST['submit'])) {
            $user_id = $_GET['editAD'];
            $status=$_POST["Status"];
                $query_UPDATE = "UPDATE `USER` SET `profile_status` = '{$status}' WHERE id = '{$user_id}' ";

                $update_query = mysqli_query($mysqli, $query_UPDATE);

                if (!$update_query) {

                    echo "error update connection";
                }
        }
        ?>


    </div>
    <div class="form-group">
        <input class="btn-btn-primary" type="submit" name="submit" value="update-status">
    </div>
</form>