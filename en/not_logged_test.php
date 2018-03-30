<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 28-3-2018
 * Time: 22:08
 */
?>

<?php
//include 'scripts/sessions.php';
//session_start();
//ob_start();
?>

<?php

if (!isset($_SESSION['id'])) {

    ?>
    <button data-target="#myModal" data-toggle="modal" class="btn btn-danger" type="button">Password Forget</button>

    <div class="custom-modal">
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header rte">
                        <div role="alert" class="alert alert-danger alert-dismissible">
                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                        <strong>You are not signed in!</strong> you can't do this action unless you are signed in!
                    </div>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Email</label>
                                <input placeholder="Enter Your Email Adress" class="form-control" type="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input placeholder="Enter Your password" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">Login</button>
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

}
?>
