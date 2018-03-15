<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 15-3-2018
 * Time: 20:06
 */
//include 'sessions.php';
include '../../scripts/db_connection.php';
?>
<div class="posts-masonry">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ad</th>
            <th>amount</th>
            <th>date</th>
            <th>auction</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $user_id    = 10;
        $bid_query  = "SELECT  * FROM `BID` WHERE `user_id` = {$user_id} ORDER BY `amount`";
        $bid_result = mysqli_query($mysqli, $bid_query);
        while ($row = mysqli_fetch_assoc($bid_result)) {
            $bid_id = $row['id'];
            $amount = $row['amount'];
            $time = $row['time'];
            $auction_id = $row['AUCTION_id'];

            $auction_query  = "SELECT * FROM `AUCTION` WHERE `id`= '{$auction_id}' ORDER BY `ADVERTISEMENT_id` ";
            $auction_result = mysqli_query($mysqli,$auction_query);
            while ($row = mysqli_fetch_assoc($auction_result)) {
                $ad_id = $row ['ADVERTISEMENT_id'];
        ?>
        <tr>
            <th scope="row"><?php echo $ad_id ;?></th>
            <td><?php echo $amount ;?></td>
            <td><?php echo $time;?></td>
            <td><?php echo $auction_id;?></td>
        </tr>

<?php

            }


        }        ?>

        </tbody>
    </table>


</div>

