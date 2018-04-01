<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 28-3-2018
 * Time: 18:44
 */

?>

<section class="section-padding gray">
    <!-- Main Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <h3 class="main-title text-left">
                        Browse Ads By Countries
                    </h3>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <!-- Countries Masonry Grid -->
                    <div id="ads-countries" class="posts-masonry">


                        <?php
                        $countries_query  = "SELECT DISTINCT `country` FROM `ADDRESS` ";
                        $countries_result = mysqli_query($mysqli, $countries_query);
                        while ($row = mysqli_fetch_assoc($countries_result)){
                            $country = $row['country'];

                            $country_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country = '{$country}' && ADVERTISEMENT.lang = 'EN'";
                            $country_result = mysqli_query($mysqli, $country_query);
                            $num_ads = mysqli_num_rows($country_result);
                        ?>
                        <!-- Country Ads -->
                        <div class="col-sm-6 col-xs-12 col-md-4">
                            <a href="ads_per_country.php?country=<?php echo $country;?>">
                                <div class="country-box">
                                    <img class="img-responsive" src="images/logo_files/logo_png.png" alt="">
                                    <div class="country-description">
                                        <h2 class="country-name"><?php echo $country;?></h2>
                                        <p class="country-ads"><span><?php echo $num_ads;?></span> Ads</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Countries Masonry Grid End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container End -->
</section>

