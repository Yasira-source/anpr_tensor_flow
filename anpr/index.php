<?php
include('dashboard/dashboard/inc/db/session.php');
include('includes/header.php');
?>

<body
    class="home page-template-default page page-id-6 wp-embed-responsive theme-kanni woocommerce-no-js layout-wide page-with-slider no-breadcrumb wpb-js-composer js-comp-ver-6.5.0 vc_responsive">

    <!-- **Wrapper** -->
    <div class="wrapper">

        <!-- ** Inner Wrapper ** -->
        <div class="inner-wrapper">
            <!-- ** Header Wrapper ** -->
            <div id="header-wrapper" class="header-top-relative">
                <?php include_once('includes/nav_bar.php');
                include_once('includes/slider.php');
                ?>

                <!-- ** Breadcrumb ** -->
                <!-- ** Breadcrumb End ** -->
            </div><!-- ** Header Wrapper - End ** -->

            <!-- **Main** -->
            <div id="main">

                <!-- ** Container ** -->
                <div class="container">
                    <!-- Primary -->
                    <section id="primary" class="content-full-width">
                        <!-- #post-6 -->
                        <div id="post-6" class="post-6 page type-page status-publish hentry">
                            <div style='background-attachment:fixed !important;' data-vc-full-width="true"
                                data-vc-full-width-init="false"
                                class="vc_row wpb_row vc_row-fluid dt-skin-primary-bg dt-sc-dark-bg move-to-top vc_custom_1534489783234 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h2 style="font-size: 24px;text-align: center"
                                                class="vc_custom_heading light-weight vc_custom_1534163959505">Raise
                                                your Complaint to Our System Experts</h2>
                                            <?php
                                            if (isset($_SESSION['error'])) {
                                                echo '
        <h2 style="font-size: 24px;text-align: center"
                                                class="vc_custom_heading light-weight vc_custom_1534163959505">' . $_SESSION['error'] . '</h2>
                                            
          
          
        ';
                                                unset($_SESSION['error']);
                                            }
                                            if (isset($_SESSION['success'])) {
                                                echo '
        <h2 style="font-size: 24px;text-align: center"
                                                class="vc_custom_heading light-weight vc_custom_1534163959505">' . $_SESSION['success'] . '</h2>
                                            
          
          
        ';
                                                unset($_SESSION['success']);
                                            }
                                            ?>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-2">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="space-both-sides wpb_column vc_column_container vc_col-sm-8">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div role="form" class="wpcf7" id="wpcf7-f278-p6-o1"
                                                                lang="en-US" dir="ltr">
                                                                <div class="screen-reader-response">
                                                                    <p role="status" aria-live="polite"
                                                                        aria-atomic="true"></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form action="complaints.php" method="post"
                                                                    class="init assessment-form"
                                                                    novalidate="novalidate" data-status="init">
                                                                    <!-- <div style="display: none;">
                                                                        <input type="hidden" name="_wpcf7"
                                                                            value="278" />
                                                                        <input type="hidden" name="_wpcf7_version"
                                                                            value="5.3.2" />
                                                                        <input type="hidden" name="_wpcf7_locale"
                                                                            value="en_US" />
                                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                                            value="wpcf7-f278-p6-o1" />
                                                                        <input type="hidden"
                                                                            name="_wpcf7_container_post" value="6" />
                                                                        <input type="hidden"
                                                                            name="_wpcf7_posted_data_hash" value="" />
                                                                        <input type="hidden"
                                                                            name="_wpcf7_recaptcha_response" value="" />
                                                                    </div> -->
                                                                    <div class="column dt-sc-one-third first"><i
                                                                            class="fa fa-home"></i><span
                                                                            class="wpcf7-form-control-wrap first_name"><input
                                                                                type="text" name="first_name" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Name" /></span></div>
                                                                    <div class="column dt-sc-one-third"><i
                                                                            class="fa fa-building"></i><span
                                                                            class="wpcf7-form-control-wrap state_name"><select
                                                                                name="state_name"
                                                                                class="wpcf7-form-control wpcf7-select"
                                                                                aria-invalid="false">
                                                                                <option value="City">City</option>
                                                                                <option value="Kampala">Kampala
                                                                                </option>
                                                                                <option value="Mbarara">Mbarara</option>
                                                                                <option value="Ibanda">Ibanda
                                                                                </option>
                                                                                <option value="Mbale">Mbale</option>
                                                                                <option value="Hoima">Hoima</option>
                                                                                <option value="Lira">Lira</option>
                                                                                <option value="Kabale">Kabale</option>
                                                                                <option value="Entebbe">Entebbe</option>
                                                                            </select></span></div>
                                                                    <div class="column dt-sc-one-third"><i
                                                                            class="fa fa-mobile"></i><span
                                                                            class="wpcf7-form-control-wrap tel"><input
                                                                                type="tel" name="tel" value="" size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Mobile No" /></span></div>
                                                                    <div class="column dt-sc-one-column first address">
                                                                        <i class="fa fa-map"></i><span
                                                                            class="wpcf7-form-control-wrap text-844"><input
                                                                                type="text" name="text-844" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text"
                                                                                aria-invalid="false"
                                                                                placeholder="Address" /></span>
                                                                    </div>
                                                                    <div class="column dt-sc-one-column first"><i
                                                                            class="fa fa-envelope"></i><span
                                                                            class="wpcf7-form-control-wrap textarea-960"><textarea
                                                                                name="textarea-960" cols="40" rows="10"
                                                                                class="wpcf7-form-control wpcf7-textarea"
                                                                                aria-invalid="false"
                                                                                placeholder="Message"></textarea></span>
                                                                    </div>
                                                                    <div class="aligncenter">
                                                                        <p class="submit-here"><input type="submit"
                                                                                value="submit" name="submit"
                                                                                class="wpcf7-form-control" />
                                                                        </p>
                                                                    </div>
                                                                    <div class="wpcf7-response-output"
                                                                        aria-hidden="true"></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-2">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1531200945754">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="1531462091155-7a7161d7-37ef" class="dt-sc-empty-space"></div>
                                            <div class='dt-sc-title with-two-border aligncenter'>
                                                <h2>Solutions We Offer</h2>
                                            </div>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-icon-box type4 '>
                                                                <div class="icon-wrapper"><img width="120" height="120"
                                                                        src="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img1.png"
                                                                        class="attachment-full" alt="" loading="lazy"
                                                                        srcset="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img1.png 120w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img1-100x100.png 100w"
                                                                        sizes="(max-width: 120px) 100vw, 120px" /></div>
                                                                <div class="icon-content">
                                                                    <h4><a href='#' title='' target='_self'>Toll Gate
                                                                            Payments & Clearances
                                                                        </a></h4>
                                                                    <p>Pay for <strong>Kampala - Northern Bypass
                                                                            Highway</strong> <br>and avoid waiting in
                                                                        long ques during rush hours <br>
                                                                        <a href="#">Read More<i
                                                                                class="fa fa-angle-right"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div id="1531459144828-249f5c90-0d2f"
                                                                class="dt-sc-empty-space"></div>
                                                            <div class='dt-sc-icon-box type4 '>
                                                                <div class="icon-wrapper"><img width="60" height="60"
                                                                        src="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img4.png"
                                                                        class="attachment-full" alt="img" loading="lazy"
                                                                        srcset="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img4.png 60w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img4-120x120.png 120w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img4-100x100.png 100w"
                                                                        sizes="(max-width: 60px) 100vw, 60px" /></div>
                                                                <div class="icon-content">
                                                                    <h4><a href='#' title='' target='_self'>Report
                                                                            Vehicle
                                                                            &amp; Mortocylce Traffic Violations</a></h4>
                                                                    <p>Have you witnessed a vehicle or mortocycle
                                                                        violate traffic rules but have no time to visit
                                                                        Police stations<br>Submit it here<br>
                                                                        <a href="#">Read More<i
                                                                                class="fa fa-angle-right"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div id="1531977519280-ed061ec1-c51a"
                                                                class="dt-sc-empty-space"></div>
                                                            <div class='dt-sc-icon-box type4 '>
                                                                <div class="icon-wrapper"><img width="60" height="60"
                                                                        src="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img7.png"
                                                                        class="attachment-full" alt="img" loading="lazy"
                                                                        srcset="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img7.png 60w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img7-120x120.png 120w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img7-100x100.png 100w"
                                                                        sizes="(max-width: 60px) 100vw, 60px" /></div>
                                                                <div class="icon-content">
                                                                    <h4><a href='#' title='' target='_self'>Check
                                                                            Individual Status</a></h4>
                                                                    <p>Have you been accused of traffic rules violation
                                                                        of recent , check out your accusation status
                                                                        <br>
                                                                        <a href="#">Read More<i
                                                                                class="fa fa-angle-right"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-icon-box type4 '>
                                                                <div class="icon-wrapper"><img width="60" height="60"
                                                                        src="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img2.png"
                                                                        class="attachment-full" alt="img" loading="lazy"
                                                                        srcset="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img2.png 60w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img2-120x120.png 120w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img2-100x100.png 100w"
                                                                        sizes="(max-width: 60px) 100vw, 60px" /></div>
                                                                <div class="icon-content">
                                                                    <h4><a href='#' title='' target='_self'>Vehicle
                                                                            Status
                                                                        </a></h4>
                                                                    <p>Check & Verify the traffic rule violation status
                                                                        of your vehicle / mortocycle to avoid being
                                                                        bumped into by traffic officers <br>
                                                                        <a href="#">Read More<i
                                                                                class="fa fa-angle-right"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div id="1531459145257-05175f21-e9d3"
                                                                class="dt-sc-empty-space"></div>
                                                            <div class='dt-sc-icon-box type4 '>
                                                                <div class="icon-wrapper"><img width="60" height="60"
                                                                        src="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img5.png"
                                                                        class="attachment-full" alt="img" loading="lazy"
                                                                        srcset="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img5.png 60w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img5-120x120.png 120w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img5-100x100.png 100w"
                                                                        sizes="(max-width: 60px) 100vw, 60px" /></div>
                                                                <div class="icon-content">
                                                                    <h4><a href='#' title='' target='_self'>Traffic
                                                                            Payments
                                                                        </a></h4>
                                                                    <p>Pay for your traffic charges easily and
                                                                        seamlessly using our safer online payment
                                                                        channel . <br>Instant Clearance after successful
                                                                        Payment<br>
                                                                        <a href="#">Read More<i
                                                                                class="fa fa-angle-right"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div id="1531977533787-670b5aca-efbe"
                                                                class="dt-sc-empty-space"></div>
                                                            <div class='dt-sc-icon-box type4 '>
                                                                <div class="icon-wrapper"><img width="60" height="60"
                                                                        src="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img8.png"
                                                                        class="attachment-full" alt="img" loading="lazy"
                                                                        srcset="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img8.png 60w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img8-120x120.png 120w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img8-100x100.png 100w"
                                                                        sizes="(max-width: 60px) 100vw, 60px" /></div>
                                                                <div class="icon-content">
                                                                    <h4><a href='#' title='' target='_self'>Traffic
                                                                            Monitoring
                                                                        </a></h4>
                                                                    <p>Are you a traffic Officer but need to know what's
                                                                        happening on the roads <br>Worry no more , we
                                                                        got you<br>
                                                                        <a href="#">Read More<i
                                                                                class="fa fa-angle-right"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-icon-box type4 '>
                                                                <div class="icon-wrapper"><img width="60" height="60"
                                                                        src="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img3.png"
                                                                        class="attachment-full" alt="img" loading="lazy"
                                                                        srcset="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img3.png 60w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img3-120x120.png 120w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img3-100x100.png 100w"
                                                                        sizes="(max-width: 60px) 100vw, 60px" /></div>
                                                                <div class="icon-content">
                                                                    <h4><a href='#' title='' target='_self'>Lincence
                                                                            Plate Recognition</a></h4>
                                                                    <p>Just upload an image containing vehicle with
                                                                        license plate and watch our system decipher the
                                                                        license plate. <br>
                                                                        <a href="#">Read More<i
                                                                                class="fa fa-angle-right"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div id="1531459145684-da44b75b-51f8"
                                                                class="dt-sc-empty-space"></div>
                                                            <div class='dt-sc-icon-box type4 '>
                                                                <div class="icon-wrapper"><img width="60" height="60"
                                                                        src="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img6.png"
                                                                        class="attachment-full" alt="img" loading="lazy"
                                                                        srcset="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img6.png 60w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img6-120x120.png 120w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img6-100x100.png 100w"
                                                                        sizes="(max-width: 60px) 100vw, 60px" /></div>
                                                                <div class="icon-content">
                                                                    <h4><a href='#' title='' target='_self'>Vehicle
                                                                            Details
                                                                        </a></h4>
                                                                    <p>Just upload an image containing vehicle with
                                                                        license plate (up to 10MB) and watch our system
                                                                        decipher the license plate, vehicle make and
                                                                        model. <br>
                                                                        <a href="#">Read More<i
                                                                                class="fa fa-angle-right"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div id="1531977547439-43ffa621-e9cc"
                                                                class="dt-sc-empty-space"></div>
                                                            <div class='dt-sc-icon-box type4 '>
                                                                <div class="icon-wrapper"><img width="60" height="60"
                                                                        src="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img9.png"
                                                                        class="attachment-full" alt="img" loading="lazy"
                                                                        srcset="https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img9.png 60w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img9-120x120.png 120w, https://kanni.wpengine.com/wp-content/uploads/2018/08/icon-img9-100x100.png 100w"
                                                                        sizes="(max-width: 60px) 100vw, 60px" /></div>
                                                                <div class="icon-content">
                                                                    <h4><a href='#' title='' target='_self'>Highway
                                                                            Monitoring
                                                                        </a></h4>
                                                                    <p>Monitor vehicles at different junctions of the
                                                                        highway, identify stolen vehicles and more! <br>
                                                                        <a href="#">Read More<i
                                                                                class="fa fa-angle-right"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="1531459145920-dd4ed79d-fe21" class="dt-sc-empty-space"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                data-vc-stretch-content="true"
                                class="vc_row wpb_row vc_row-fluid fullwidth-section1 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                    <div class="vc_column-inner vc_custom_1532949066085">
                                        <div class="wpb_wrapper">
                                            <div id="1530773787940-4a7dcbd7-6ac0" class="dt-sc-empty-space"></div>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-2">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="dt-sc-primary-trans dt-sc-dark-bg wpb_column vc_column_container vc_col-sm-8">
                                                    <div class="vc_column-inner vc_custom_1530774148618">
                                                        <div class="wpb_wrapper">
                                                            <h2 style="font-size: 48px;text-align: center"
                                                                class="vc_custom_heading vc_custom_1530774324462">
                                                                Reasons Why Should<br />
                                                                Choose Us?</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-2">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="1530773802941-ef9f053a-5042" class="dt-sc-empty-space"></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="space-left-side rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                    <div class="vc_column-inner vc_custom_1532949074000">
                                        <div class="wpb_wrapper">
                                            <div id="1530773756983-2e4a19f0-38d4" class="dt-sc-empty-space"></div>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1534935060008">
                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-icon-box type5 '>
                                                                <div class="icon-wrapper"><span class='fa fa-clock-o'>
                                                                    </span></div>
                                                                <div class="icon-content">
                                                                    <h4>24/7/365 Support</h4>
                                                                    <p>Maecenas nec odio et ante tincidunt tempus. Donec
                                                                        vitae sapien ut libero venenatis faucibus.</p>
                                                                </div>
                                                            </div>
                                                            <div class='dt-sc-icon-box type5 '>
                                                                <div class="icon-wrapper"><span class='fa fa-money'>
                                                                    </span></div>
                                                                <div class="icon-content">
                                                                    <h4>Affordable Rates</h4>
                                                                    <p>Maecenas nec odio et ante tincidunt tempus. Donec
                                                                        vitae sapien ut libero venenatis faucibus.</p>
                                                                </div>
                                                            </div>
                                                            <div class='dt-sc-icon-box type5 '>
                                                                <div class="icon-wrapper"><span class='fa fa-bar-chart'>
                                                                    </span></div>
                                                                <div class="icon-content">
                                                                    <h4>Different Range</h4>
                                                                    <p>Maecenas nec odio et ante tincidunt tempus. Donec
                                                                        vitae sapien ut libero venenatis faucibus.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-icon-box type5 '>
                                                                <div class="icon-wrapper"><span class='fa fa-check'>
                                                                    </span></div>
                                                                <div class="icon-content">
                                                                    <h4>Trustworthy</h4>
                                                                    <p>Maecenas nec odio et ante tincidunt tempus. Donec
                                                                        vitae sapien ut libero venenatis faucibus.</p>
                                                                </div>
                                                            </div>
                                                            <div class='dt-sc-icon-box type5 '>
                                                                <div class="icon-wrapper"><span
                                                                        class='fa fa-thumbs-o-up'> </span></div>
                                                                <div class="icon-content">
                                                                    <h4>Reliable and Proven</h4>
                                                                    <p>Maecenas nec odio et ante tincidunt tempus. Donec
                                                                        vitae sapien ut libero venenatis faucibus.</p>
                                                                </div>
                                                            </div>
                                                            <div class='dt-sc-icon-box type5 '>
                                                                <div class="icon-wrapper"><span class='fa fa-users'>
                                                                    </span></div>
                                                                <div class="icon-content">
                                                                    <h4>Experts and Staff</h4>
                                                                    <p>Maecenas nec odio et ante tincidunt tempus. Donec
                                                                        vitae sapien ut libero venenatis faucibus.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="1530773774766-16701486-1bc3" class="dt-sc-empty-space"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="1531201055863-eac026f1-b4bf" class="dt-sc-empty-space"></div>
                                            <div class='dt-sc-title with-two-border aligncenter'>
                                                <h2>Our Best Features</h2>
                                            </div>
                                            <div class='dt-sc-tabs-vertical-frame-container type3' data-effect='fade'>
                                                <ul class='dt-sc-tabs-vertical-frame'>
                                                    <li><a href="javascript:void(0);"><span
                                                                class='fa fa-cog'></span>Access Control System</a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class='fa fa-lock'></span>Alarm System</a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class='fa fa-book'></span>Record Movements</a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class='fa fa-video-camera'></span>Retail Video
                                                            Analytics</a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class='fa fa-file-video-o'></span>Ip Video</a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class='fa fa-file-text-o'></span>Video Verifications</a>
                                                    </li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class='fa fa-mixcloud'></span>Cloud Monitoring</a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class='fa fa-wrench'></span>Door Controls</a></li>
                                                    <li><a href="javascript:void(0);"><span
                                                                class='fa fa-mobile'></span>Smart Phone Security</a>
                                                    </li>
                                                </ul>
                                                <div class='dt-sc-tabs-vertical-frame-content'>
                                                    <h3 style="font-size: 28px;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1532935428762">
                                                        Safety in your Surroundings</h3>
                                                    <p style="font-size: 18px;color: #878787;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1530861803086">
                                                        <strong>Where Caution Blends with Technology!</strong>
                                                    </p>
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1532492847339">
                                                        <div class="wpb_wrapper">
                                                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit
                                                                id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                                Donec vitae sapien ut libero venenatis faucibus. In enim
                                                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                                Donec vitae sapien ut libero venenatis faucibus. In enim
                                                                justo, rhoncus ut, imperdiet a, venenatis vitae,
                                                                justjusto, rhoncus ut, imperdiet a, venenatis vitaeo</p>

                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-toggle-group-set  simple'>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Surveillance Scam
                                                                    Kit</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>CCTV Design House</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Counting Technology</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Smart Clamp Claws</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='dt-sc-tabs-vertical-frame-content'>
                                                    <h3 style="font-size: 28px;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1532928717274">
                                                        Stay Secured from Fire Harms</h3>
                                                    <p style="font-size: 18px;color: #878787;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1533016475147">
                                                        <strong>Fire alarm technology will keep your family safe, no
                                                            matter what happens</strong>
                                                    </p>
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1530861841135">
                                                        <div class="wpb_wrapper">
                                                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit
                                                                id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                                Donec vitae sapien ut libero venenatis faucibus. In enim
                                                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-toggle-group-set  simple'>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Automatic Detection</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Reducing False
                                                                    Alarms</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Addressable Fire Alarm
                                                                    System</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Remotely Monitored Fire
                                                                    Alarm</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='dt-sc-tabs-vertical-frame-content'>
                                                    <h3 style="font-size: 28px;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1533016510152">
                                                        Protect Your Home From Anywhere</h3>
                                                    <p style="font-size: 18px;color: #878787;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1533016524280">
                                                        <strong>Monitor your home from anywhere and anytime</strong>
                                                    </p>
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1530861841135">
                                                        <div class="wpb_wrapper">
                                                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit
                                                                id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                                Donec vitae sapien ut libero venenatis faucibus. In enim
                                                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-toggle-group-set  simple'>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Centralized Control
                                                                    Panel</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Surveillance
                                                                    Monitoring</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Video Analysis</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Live Recording</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='dt-sc-tabs-vertical-frame-content'>
                                                    <h3 style="font-size: 28px;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1532935447922">
                                                        Enhance Your Customer Experience</h3>
                                                    <p style="font-size: 18px;color: #878787;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1532935577173">
                                                        <strong>Track and analyze buying behavior of each buyer with
                                                            video analytics system</strong>
                                                    </p>
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1530861841135">
                                                        <div class="wpb_wrapper">
                                                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit
                                                                id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                                Donec vitae sapien ut libero venenatis faucibus. In enim
                                                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-toggle-group-set  simple'>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Customer Enter/Exit
                                                                    Counts</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Mapping Customer
                                                                    Journeys</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Identifying Store
                                                                    Performance</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Event Based
                                                                    Analysis</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='dt-sc-tabs-vertical-frame-content'>
                                                    <h3 style="font-size: 28px;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1532937863087">
                                                        Protect Your Home From Anywhere</h3>
                                                    <p style="font-size: 18px;color: #878787;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1533016606580">
                                                        <strong>Monitor and record video remotely with awesome IP
                                                            network</strong>
                                                    </p>
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1530861841135">
                                                        <div class="wpb_wrapper">
                                                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit
                                                                id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                                Donec vitae sapien ut libero venenatis faucibus. In enim
                                                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-toggle-group-set  simple'>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Local File Storage</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Remote Video
                                                                    Monitoring</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Mobile Monitoring</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Secure Wireless
                                                                    Transmission</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='dt-sc-tabs-vertical-frame-content'>
                                                    <h3 style="font-size: 28px;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1532942523039">
                                                        Enhance Your Customer safety</h3>
                                                    <p style="font-size: 18px;color: #878787;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1532942543391">
                                                        <strong>Install real-time video verification and protect your
                                                            consumers, selling, and profits.</strong>
                                                    </p>
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1530861841135">
                                                        <div class="wpb_wrapper">
                                                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit
                                                                id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                                Donec vitae sapien ut libero venenatis faucibus. In enim
                                                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-toggle-group-set  simple'>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>False Alarm
                                                                    Reduction</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Fact-Based
                                                                    Responses</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Greater Customer
                                                                    Safety</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Videofied System</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='dt-sc-tabs-vertical-frame-content'>
                                                    <h3 style="font-size: 28px;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1533017172397">
                                                        Easily Monitor the Dynamic Environments</h3>
                                                    <p style="font-size: 18px;color: #878787;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1533016672113">
                                                        <strong>Easily evaluate and monitor cloud-based services and
                                                            applications</strong>
                                                    </p>
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1530861841135">
                                                        <div class="wpb_wrapper">
                                                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit
                                                                id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                                Donec vitae sapien ut libero venenatis faucibus. In enim
                                                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-toggle-group-set  simple'>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Proactive Detection</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Efficient
                                                                    Monitoring</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Global Visibility</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Customized Alerts</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='dt-sc-tabs-vertical-frame-content'>
                                                    <h3 style="font-size: 28px;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1533016776532">
                                                        High-Quality Safe and Secure Access</h3>
                                                    <p style="font-size: 18px;color: #878787;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1533016794214">
                                                        <strong>Keep safe your home with authorized personal safe and
                                                            secure access</strong>
                                                    </p>
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1530861841135">
                                                        <div class="wpb_wrapper">
                                                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit
                                                                id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                                Donec vitae sapien ut libero venenatis faucibus. In enim
                                                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-toggle-group-set  simple'>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Real-time
                                                                    Notification</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Key- less Electric
                                                                    Lock</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Card and PIN option</a>
                                                            </h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Bio-metric Fingerprint
                                                                    Option</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='dt-sc-tabs-vertical-frame-content'>
                                                    <h3 style="font-size: 28px;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1533016873631">
                                                        Keep your house close, anywhere you are</h3>
                                                    <p style="font-size: 18px;color: #878787;text-align: left"
                                                        class="vc_custom_heading vcr_heading-right vc_custom_1533016929391">
                                                        <strong>Monitor and control your home’s devices with enhanced
                                                            smartphone accessibility</strong>
                                                    </p>
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1530861841135">
                                                        <div class="wpb_wrapper">
                                                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit
                                                                id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                                Donec vitae sapien ut libero venenatis faucibus. In enim
                                                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-toggle-group-set  simple'>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Complete Wireless
                                                                    Technology</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Control on Unauthorized
                                                                    Use</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Evaluate the Power
                                                                    Consumption</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                        <div class="dt-sc-toggle-frame">
                                                            <h5 class='dt-sc-toggle'><a href='#'>Ease of
                                                                    Installation</a></h5>
                                                            <div class="dt-sc-toggle-content" style="display: none;">
                                                                <div class="block">Nam quam nunc, blandit vel, luctus
                                                                    pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                                                    ante tincidunt tempus. Donec vitae sapien ut libero
                                                                    venenatis faucibus. In enim justo, rhoncus ut,
                                                                    imperdiet a, venenatis vitae, justo. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="1531201177799-c5f388e4-925d" class="dt-sc-empty-space"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                class="vc_row wpb_row vc_row-fluid dt-sc-dark-bg vc_custom_1533096963542 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class='dt-sc-title with-two-border aligncenter'>
                                                <h2>Our Process</h2>
                                            </div>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div
                                                    class="aligncenter rs_col-sm-12 wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-icon-box type3 circle'>
                                                                <div class="icon-wrapper"><span class='fa fa-cogs'>
                                                                    </span></div>
                                                                <div class="icon-content">
                                                                    <h5>Your Need</h5>
                                                                    <h4>Search the Service You need</h4>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="aligncenter rs_col-sm-12 wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-icon-box type3 circle'>
                                                                <div class="icon-wrapper"><span
                                                                        class='fa fa-envelope-square'> </span></div>
                                                                <div class="icon-content">
                                                                    <h5>Enquiry</h5>
                                                                    <h4>For enquiring make a call or mail us</h4>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="aligncenter rs_col-sm-12 wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-icon-box type3 circle'>
                                                                <div class="icon-wrapper"><span
                                                                        class='fa fa-check-square-o'> </span></div>
                                                                <div class="icon-content">
                                                                    <h5>Confirm</h5>
                                                                    <h4>Get your Quote and confirm us</h4>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="aligncenter rs_col-sm-12 wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-icon-box type3 circle'>
                                                                <div class="icon-wrapper"><span class='fa fa-smile-o'>
                                                                    </span></div>
                                                                <div class="icon-content">
                                                                    <h5>Stay Calm</h5>
                                                                    <h4>Feel free and Relax Yourself</h4>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p
                                                        style="font-size: 30px; text-align: center; line-height: normal;">
                                                        Want to know more? It’s as easy.. Call Us on <span
                                                            class="dt-skin-primary-color">(00) 1234567890</span></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1531980236844">
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="1531736402599-606b423f-fc11" class="dt-sc-empty-space"></div>
                                            <div class="woocommerce columns-1">
                                                <ul class="products columns-1">
                                                    <li class="product-category product first">
                                                        <div class="woo-type1">
                                                            <div class="no-column">
                                                                <div class="product-wrapper">
                                                                    <h5><a href="https://kanni.wpengine.com/product-category/intruder-alarm-system/"
                                                                            title="Intruder Alarm System">Intruder Alarm
                                                                            System <i class="count">(1)</i></a></h5>
                                                                    <div class="product-thumb"><a
                                                                            href="https://kanni.wpengine.com/product-category/intruder-alarm-system/"
                                                                            title="Intruder Alarm System"><span
                                                                                class="image"><img
                                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam5-250x250.png"
                                                                                    alt="Intruder Alarm System"
                                                                                    width="250" height="250"
                                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam5-250x250.png 250w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam5-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam5-300x300.png 300w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam5-768x768.png 768w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam5-750x750.png 750w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam5-540x540.png 540w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam5-600x600.png 600w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam5-100x100.png 100w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam5.png 800w"
                                                                                    sizes="(max-width: 250px) 100vw, 250px" /></span></a>
                                                                    </div>
                                                                    <div class="product-details"><a
                                                                            href="https://kanni.wpengine.com/product-category/intruder-alarm-system/"
                                                                            title="Intruder Alarm System">Know More</a>
                                                                    </div>
                                                                </div> <!-- .product-wrapper -->
                                                            </div> <!-- .column -->
                                                        </div> <!-- .style -->
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="woocommerce columns-1">
                                                <ul class="products columns-1">
                                                    <li class="product-category product first">
                                                        <div class="woo-type1">
                                                            <div class="no-column">
                                                                <div class="product-wrapper">
                                                                    <h5><a href="https://kanni.wpengine.com/product-category/hd-security-camera-system/"
                                                                            title="HD Security Camera System">HD
                                                                            Security Camera System <i
                                                                                class="count">(5)</i></a></h5>
                                                                    <div class="product-thumb"><a
                                                                            href="https://kanni.wpengine.com/product-category/hd-security-camera-system/"
                                                                            title="HD Security Camera System"><span
                                                                                class="image"><img
                                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam1-250x250.png"
                                                                                    alt="HD Security Camera System"
                                                                                    width="250" height="250"
                                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam1-250x250.png 250w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam1-300x300.png 300w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam1-768x768.png 768w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam1-750x750.png 750w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam1-540x540.png 540w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam1-600x600.png 600w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam1-100x100.png 100w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam1.png 800w"
                                                                                    sizes="(max-width: 250px) 100vw, 250px" /></span></a>
                                                                    </div>
                                                                    <div class="product-details"><a
                                                                            href="https://kanni.wpengine.com/product-category/hd-security-camera-system/"
                                                                            title="HD Security Camera System">Know
                                                                            More</a></div>
                                                                </div> <!-- .product-wrapper -->
                                                            </div> <!-- .column -->
                                                        </div> <!-- .style -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="aligncenter wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class='dt-sc-title with-two-border aligncenter'>
                                                <h2>Our Products</h2>
                                            </div>
                                            <div id="1531737141457-943a7a34-7d58" class="dt-sc-empty-space"></div>
                                            <div class="woocommerce columns-1">
                                                <ul class="products columns-1">
                                                    <li class="product-category product first">
                                                        <div class="woo-type1">
                                                            <div class="no-column">
                                                                <div class="product-wrapper">
                                                                    <h5><a href="https://kanni.wpengine.com/product-category/network-video-recorder-nvr/"
                                                                            title="Network Video Recorder (NVR)">Network
                                                                            Video Recorder (NVR) <i
                                                                                class="count">(1)</i></a></h5>
                                                                    <div class="product-thumb"><a
                                                                            href="https://kanni.wpengine.com/product-category/network-video-recorder-nvr/"
                                                                            title="Network Video Recorder (NVR)"><span
                                                                                class="image"><img
                                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam4-250x250.png"
                                                                                    alt="Network Video Recorder (NVR)"
                                                                                    width="250" height="250"
                                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam4-250x250.png 250w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam4-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam4-300x300.png 300w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam4-768x768.png 768w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam4-750x750.png 750w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam4-540x540.png 540w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam4-600x600.png 600w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam4-100x100.png 100w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam4.png 800w"
                                                                                    sizes="(max-width: 250px) 100vw, 250px" /></span></a>
                                                                    </div>
                                                                    <div class="product-details"><a
                                                                            href="https://kanni.wpengine.com/product-category/network-video-recorder-nvr/"
                                                                            title="Network Video Recorder (NVR)">Know
                                                                            More</a></div>
                                                                </div> <!-- .product-wrapper -->
                                                            </div> <!-- .column -->
                                                        </div> <!-- .style -->
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="1531737416413-1850717c-16e3" class="dt-sc-empty-space"></div><a
                                                href='shop/index.html' target='_self' title=''
                                                class='dt-sc-button   medium   black rounded-border  default filled'>
                                                View All </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="1531736495989-78d2fcae-bf79" class="dt-sc-empty-space"></div>
                                            <div class="woocommerce columns-1">
                                                <ul class="products columns-1">
                                                    <li class="product-category product first">
                                                        <div class="woo-type1">
                                                            <div class="no-column">
                                                                <div class="product-wrapper">
                                                                    <h5><a href="https://kanni.wpengine.com/product-category/dome-cameras/"
                                                                            title="Dome Cameras">Dome Cameras <i
                                                                                class="count">(3)</i></a></h5>
                                                                    <div class="product-thumb"><a
                                                                            href="https://kanni.wpengine.com/product-category/dome-cameras/"
                                                                            title="Dome Cameras"><span
                                                                                class="image"><img
                                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam2-250x250.png"
                                                                                    alt="Dome Cameras" width="250"
                                                                                    height="250"
                                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam2-250x250.png 250w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam2-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam2-300x300.png 300w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam2-768x768.png 768w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam2-750x750.png 750w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam2-540x540.png 540w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam2-600x600.png 600w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam2-100x100.png 100w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam2.png 800w"
                                                                                    sizes="(max-width: 250px) 100vw, 250px" /></span></a>
                                                                    </div>
                                                                    <div class="product-details"><a
                                                                            href="https://kanni.wpengine.com/product-category/dome-cameras/"
                                                                            title="Dome Cameras">Know More</a></div>
                                                                </div> <!-- .product-wrapper -->
                                                            </div> <!-- .column -->
                                                        </div> <!-- .style -->
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="woocommerce columns-1">
                                                <ul class="products columns-1">
                                                    <li class="product-category product first">
                                                        <div class="woo-type1">
                                                            <div class="no-column">
                                                                <div class="product-wrapper">
                                                                    <h5><a href="https://kanni.wpengine.com/product-category/digital-video-recorder-dvr/"
                                                                            title="Digital Video Recorder (DVR)">Digital
                                                                            Video Recorder (DVR) <i
                                                                                class="count">(2)</i></a></h5>
                                                                    <div class="product-thumb"><a
                                                                            href="https://kanni.wpengine.com/product-category/digital-video-recorder-dvr/"
                                                                            title="Digital Video Recorder (DVR)"><span
                                                                                class="image"><img
                                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam3-250x250.png"
                                                                                    alt="Digital Video Recorder (DVR)"
                                                                                    width="250" height="250"
                                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam3-250x250.png 250w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam3-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam3-300x300.png 300w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam3-768x768.png 768w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam3-750x750.png 750w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam3-540x540.png 540w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam3-600x600.png 600w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam3-100x100.png 100w, https://kanni.wpengine.com/wp-content/uploads/2018/07/cctv-cam3.png 800w"
                                                                                    sizes="(max-width: 250px) 100vw, 250px" /></span></a>
                                                                    </div>
                                                                    <div class="product-details"><a
                                                                            href="https://kanni.wpengine.com/product-category/digital-video-recorder-dvr/"
                                                                            title="Digital Video Recorder (DVR)">Know
                                                                            More</a></div>
                                                                </div> <!-- .product-wrapper -->
                                                            </div> <!-- .column -->
                                                        </div> <!-- .style -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                class="vc_row wpb_row vc_row-fluid vcr_float_right vc_custom_1532427576735 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="fw3-section wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                    <div class="vc_column-inner vc_custom_1534164513898">
                                        <div class="wpb_wrapper">
                                            <h2>Security Alarm System</h2>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid dt-sc-custom-mscrollbar"
                                                style="max-height:320px;">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p>Cum sociis natoque penatibus et magnis dis
                                                                        parturient montes, nascetur ridiculus mus. Donec
                                                                        quam felis, ultricies nec, pellentesque eu,
                                                                        pretium quis, sem. Nulla consequat massa quis
                                                                        enim. Donec pede justo, fringilla vel, aliquet
                                                                        nec, vulputate eget, arcu. In enim justo,
                                                                        rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <h5>You can Watch and Control from Anywhere and Anytime</h5>
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p>Cum sociis natoque penatibus et magnis dis
                                                                        parturient</p>

                                                                </div>
                                                            </div>
                                                            <a href='#' title='Room Lighting' target='_self'
                                                                class='dt-sc-boxed-tooltip dt-sc-tooltip-top'><i
                                                                    class="fa fa-lightbulb-o"></i></a><a href='#'
                                                                title='Alarm System' target='_self'
                                                                class='dt-sc-boxed-tooltip dt-sc-tooltip-top'><i
                                                                    class="fa fa-lock"></i></a><a href='#'
                                                                title='Disarmed' target='_self'
                                                                class='dt-sc-boxed-tooltip dt-sc-tooltip-top'><i
                                                                    class="fa fa-calendar-check-o"></i></a><a href='#'
                                                                title='Video Security' target='_self'
                                                                class='dt-sc-boxed-tooltip dt-sc-tooltip-top'><i
                                                                    class="fa fa-video-camera"></i></a><a href='#'
                                                                title='Room Temperature' target='_self'
                                                                class='dt-sc-boxed-tooltip dt-sc-tooltip-top'><i
                                                                    class="fa fa-thermometer"></i></a>
                                                            <div id="1533894646628-78cfee93-219a"
                                                                class="dt-sc-empty-space"></div><a href='#'
                                                                target='_self' title=''
                                                                class='dt-sc-button   medium   rounded-border  default filled'>
                                                                Enquire Now </a>
                                                            <div id="1533895502938-0860ee17-4c5f"
                                                                class="dt-sc-empty-space"></div>
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p>Cum sociis natoque penatibus et magnis dis
                                                                        parturient montes, nascetur ridiculus mus. Donec
                                                                        quam felis, ultricies nec, pellentesque eu,
                                                                        pretium quis, sem. Nulla consequat massa quis
                                                                        enim. Donec pede justo, fringilla vel, aliquet
                                                                        nec, vulputate eget, arcu. In enim justo,
                                                                        rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <h5>You can Watch and Control from Anywhere and Anytime</h5>
                                                            <div
                                                                class="wpb_text_column wpb_content_element  vc_custom_1532079011593">
                                                                <div class="wpb_wrapper">
                                                                    <p>Cum sociis natoque penatibus et magnis dis
                                                                        parturient montes, nascetur ridiculus mus. Donec
                                                                        quam felis, ultricies nec, pellentesque eu,
                                                                        pretium quis, sem. Nulla consequat massa quis
                                                                        enim. Donec pede justo, fringilla vel, aliquet
                                                                        nec, vulputate eget, arcu. In enim justo,
                                                                        rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                                    </p>

                                                                </div>
                                                            </div>

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p>Cum sociis natoque penatibus et magnis dis
                                                                        parturient montes, nascetur ridiculus mus. Donec
                                                                        quam felis, ultricies nec, pellentesque eu,
                                                                        pretium quis, sem. Nulla consequat massa quis
                                                                        enim. Donec pede justo, fringilla vel, aliquet
                                                                        nec, vulputate eget, arcu. In enim justo,
                                                                        rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                                    </p>

                                                                </div>
                                                            </div>

                                                            <div
                                                                class="wpb_text_column wpb_content_element  vc_custom_1530942172626">
                                                                <div class="wpb_wrapper">
                                                                    <p>Cum sociis natoque penatibus et magnis dis
                                                                        parturient</p>

                                                                </div>
                                                            </div>
                                                            <div id="1531997689649-e8d76352-f8ba"
                                                                class="dt-sc-empty-space"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="1531201264081-a82362a7-8a1d" class="dt-sc-empty-space"></div>
                                            <div class='dt-sc-title with-two-border aligncenter'>
                                                <h2>Security Solutions</h2>
                                            </div>
                                            <div class="carousel_items ">
                                                <div class="dt-sc-carousel-wrapper dt_carousel" data-visible="3"
                                                    data-scroll="1" data-auto="" data-animation="scroll">
                                                    <div class='dt-sc-image-caption  type1'>
                                                        <div class='dt-sc-image-wrapper'><img width="650" height="427"
                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/img1.jpg"
                                                                class="attachment-full" alt="img" loading="lazy"
                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/img1.jpg 650w, https://kanni.wpengine.com/wp-content/uploads/2018/07/img1-600x394.jpg 600w, https://kanni.wpengine.com/wp-content/uploads/2018/07/img1-300x197.jpg 300w, https://kanni.wpengine.com/wp-content/uploads/2018/07/img1-540x355.jpg 540w, https://kanni.wpengine.com/wp-content/uploads/2018/07/img1-420x275.jpg 420w"
                                                                sizes="(max-width: 650px) 100vw, 650px" />
                                                            <div class='icon-wrapper'><span class='fa fa-wrench'>
                                                                </span></div>
                                                        </div>
                                                        <div class='dt-sc-image-content'>
                                                            <div class='dt-sc-image-title'>
                                                                <h3><a href="#" target="_self">Display with Video Door
                                                                        Phone</a></h3>
                                                            </div>
                                                            <p>Aenean leo ligula, porttitor eu, consequat vitae,
                                                                eleifend ac, enim. Aliquam lorem ante, dapibus in,
                                                                viverra quis, feugiat a, tellus.<br><a href="#">Read
                                                                    More<i class="fa fa-angle-right"></i></a></p>
                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-image-caption  type1'>
                                                        <div class='dt-sc-image-wrapper'><img width="650" height="427"
                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-1.jpg"
                                                                class="attachment-full" alt="" loading="lazy"
                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-1.jpg 650w, https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-1-300x197.jpg 300w, https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-1-540x355.jpg 540w, https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-1-420x275.jpg 420w, https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-1-600x394.jpg 600w"
                                                                sizes="(max-width: 650px) 100vw, 650px" />
                                                            <div class='icon-wrapper'><span class='fa fa-gear'> </span>
                                                            </div>
                                                        </div>
                                                        <div class='dt-sc-image-content'>
                                                            <div class='dt-sc-image-title'>
                                                                <h3><a href="#" target="_self">Detect with Fire Alarm
                                                                        System</a></h3>
                                                            </div>
                                                            <p>Aenean leo ligula, porttitor eu, consequat vitae,
                                                                eleifend ac, enim. Aliquam lorem ante, dapibus in,
                                                                viverra quis, feugiat a, tellus.<br><a href="#">Read
                                                                    More<i class="fa fa-angle-right"></i></a></p>
                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-image-caption  type1'>
                                                        <div class='dt-sc-image-wrapper'><img width="650" height="427"
                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/img18.jpg"
                                                                class="attachment-full" alt="img" loading="lazy"
                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/img18.jpg 650w, https://kanni.wpengine.com/wp-content/uploads/2018/07/img18-300x197.jpg 300w, https://kanni.wpengine.com/wp-content/uploads/2018/07/img18-540x355.jpg 540w, https://kanni.wpengine.com/wp-content/uploads/2018/07/img18-420x275.jpg 420w, https://kanni.wpengine.com/wp-content/uploads/2018/07/img18-600x394.jpg 600w"
                                                                sizes="(max-width: 650px) 100vw, 650px" />
                                                            <div class='icon-wrapper'><span class='fa fa-camera-retro'>
                                                                </span></div>
                                                        </div>
                                                        <div class='dt-sc-image-content'>
                                                            <div class='dt-sc-image-title'>
                                                                <h3><a href="#" target="_self">Discover with CCTV
                                                                        Surveillance</a></h3>
                                                            </div>
                                                            <p>Aenean leo ligula, porttitor eu, consequat vitae,
                                                                eleifend ac, enim. Aliquam lorem ante, dapibus in,
                                                                viverra quis, feugiat a, tellus.<br><a href="#">Read
                                                                    More<i class="fa fa-angle-right"></i></a></p>
                                                        </div>
                                                    </div>
                                                    <div class='dt-sc-image-caption  type1'>
                                                        <div class='dt-sc-image-wrapper'><img width="650" height="427"
                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-5.jpg"
                                                                class="attachment-full" alt="" loading="lazy"
                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-5.jpg 650w, https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-5-300x197.jpg 300w, https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-5-540x355.jpg 540w, https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-5-420x275.jpg 420w, https://kanni.wpengine.com/wp-content/uploads/2018/07/security-solutions-5-600x394.jpg 600w"
                                                                sizes="(max-width: 650px) 100vw, 650px" />
                                                            <div class='icon-wrapper'><span class='fa fa-plug'> </span>
                                                            </div>
                                                        </div>
                                                        <div class='dt-sc-image-content'>
                                                            <div class='dt-sc-image-title'>
                                                                <h3><a href="#" target="_self">Simplify Life with Smart
                                                                        Home</a></h3>
                                                            </div>
                                                            <p>Aenean leo ligula, porttitor eu, consequat vitae,
                                                                eleifend ac, enim. Aliquam lorem ante, dapibus in,
                                                                viverra quis, feugiat a, tellus.<br><a href="#">Read
                                                                    More<i class="fa fa-angle-right"></i></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dt-carousel-pagination"></div>
                                            </div>
                                            <div id="1531201281720-b9db8e1a-3030" class="dt-sc-empty-space"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style='background-attachment:fixed !important;' data-vc-full-width="true"
                                data-vc-full-width-init="false"
                                class="vc_row wpb_row vc_row-fluid dt-skin-primary-bg dt-sc-dark-bg vc_custom_1534489798266 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="1531201315565-cbb906c0-45bd" class="dt-sc-empty-space"></div>
                                            <div class='dt-sc-title with-two-border aligncenter'>
                                                <h2>Tell Your Security Needs</h2>
                                            </div>
                                            <h5>Interested In:</h5>
                                            <div role="form" class="wpcf7" id="wpcf7-f82-p6-o2" lang="en-US" dir="ltr">
                                                <div class="screen-reader-response">
                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                    <ul></ul>
                                                </div>
                                                <form action="https://kanni.wpengine.com/#wpcf7-f82-p6-o2" method="post"
                                                    class="wpcf7-form init security-form" novalidate="novalidate"
                                                    data-status="init">
                                                    <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="82" />
                                                        <input type="hidden" name="_wpcf7_version" value="5.3.2" />
                                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                            value="wpcf7-f82-p6-o2" />
                                                        <input type="hidden" name="_wpcf7_container_post" value="6" />
                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                        <input type="hidden" name="_wpcf7_recaptcha_response"
                                                            value="" />
                                                    </div>
                                                    <div class="vc_row wpb_row vc_row-fluid">
                                                        <div
                                                            class="rs_col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper"><span
                                                                        class="wpcf7-form-control-wrap checkbox-160"><span
                                                                            class="wpcf7-form-control wpcf7-checkbox"><span
                                                                                class="wpcf7-list-item first last"><input
                                                                                    type="checkbox"
                                                                                    name="checkbox-160&#091;&#093;"
                                                                                    value="Video Verification" /><span
                                                                                    class="wpcf7-list-item-label">Video
                                                                                    Verification</span></span></span></span><span
                                                                        class="wpcf7-form-control-wrap checkbox-281"><span
                                                                            class="wpcf7-form-control wpcf7-checkbox"><span
                                                                                class="wpcf7-list-item first last"><input
                                                                                    type="checkbox"
                                                                                    name="checkbox-281&#091;&#093;"
                                                                                    value="Retail Video Analytics" /><span
                                                                                    class="wpcf7-list-item-label">Retail
                                                                                    Video
                                                                                    Analytics</span></span></span></span><span
                                                                        class="wpcf7-form-control-wrap checkbox-82"><span
                                                                            class="wpcf7-form-control wpcf7-checkbox"><span
                                                                                class="wpcf7-list-item first last"><input
                                                                                    type="checkbox"
                                                                                    name="checkbox-82&#091;&#093;"
                                                                                    value="24 Hour Monitoring" /><span
                                                                                    class="wpcf7-list-item-label">24
                                                                                    Hour
                                                                                    Monitoring</span></span></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="rs_col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper"><span
                                                                        class="wpcf7-form-control-wrap checkbox-82"><span
                                                                            class="wpcf7-form-control wpcf7-checkbox"><span
                                                                                class="wpcf7-list-item first last"><input
                                                                                    type="checkbox"
                                                                                    name="checkbox-82&#091;&#093;"
                                                                                    value="Access Control Systems" /><span
                                                                                    class="wpcf7-list-item-label">Access
                                                                                    Control
                                                                                    Systems</span></span></span></span><span
                                                                        class="wpcf7-form-control-wrap checkbox-82"><span
                                                                            class="wpcf7-form-control wpcf7-checkbox"><span
                                                                                class="wpcf7-list-item first last"><input
                                                                                    type="checkbox"
                                                                                    name="checkbox-82&#091;&#093;"
                                                                                    value="Smart Phone Security" /><span
                                                                                    class="wpcf7-list-item-label">Smart
                                                                                    Phone
                                                                                    Security</span></span></span></span><span
                                                                        class="wpcf7-form-control-wrap checkbox-82"><span
                                                                            class="wpcf7-form-control wpcf7-checkbox"><span
                                                                                class="wpcf7-list-item first last"><input
                                                                                    type="checkbox"
                                                                                    name="checkbox-82&#091;&#093;"
                                                                                    value="Cloud Monitoring" /><span
                                                                                    class="wpcf7-list-item-label">Cloud
                                                                                    Monitoring</span></span></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="rs_col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper"><span
                                                                        class="wpcf7-form-control-wrap checkbox-82"><span
                                                                            class="wpcf7-form-control wpcf7-checkbox"><span
                                                                                class="wpcf7-list-item first last"><input
                                                                                    type="checkbox"
                                                                                    name="checkbox-82&#091;&#093;"
                                                                                    value="Alarm Systems" /><span
                                                                                    class="wpcf7-list-item-label">Alarm
                                                                                    Systems</span></span></span></span><span
                                                                        class="wpcf7-form-control-wrap checkbox-82"><span
                                                                            class="wpcf7-form-control wpcf7-checkbox"><span
                                                                                class="wpcf7-list-item first last"><input
                                                                                    type="checkbox"
                                                                                    name="checkbox-82&#091;&#093;"
                                                                                    value="IP Video" /><span
                                                                                    class="wpcf7-list-item-label">IP
                                                                                    Video</span></span></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="rs_col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper"><span
                                                                        class="wpcf7-form-control-wrap checkbox-82"><span
                                                                            class="wpcf7-form-control wpcf7-checkbox"><span
                                                                                class="wpcf7-list-item first last"><input
                                                                                    type="checkbox"
                                                                                    name="checkbox-82&#091;&#093;"
                                                                                    value="Door Controls" /><span
                                                                                    class="wpcf7-list-item-label">Door
                                                                                    Controls</span></span></span></span><span
                                                                        class="wpcf7-form-control-wrap checkbox-82"><span
                                                                            class="wpcf7-form-control wpcf7-checkbox"><span
                                                                                class="wpcf7-list-item first last"><input
                                                                                    type="checkbox"
                                                                                    name="checkbox-82&#091;&#093;"
                                                                                    value="Record Movements" /><span
                                                                                    class="wpcf7-list-item-label">Record
                                                                                    Movements</span></span></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='dt-sc-clear '> </div>
                                                        <div class='dt-sc-hr-invisible-small '> </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper"><span
                                                                        class="wpcf7-form-control-wrap text-424"><input
                                                                            type="text" name="text-424" value=""
                                                                            size="40"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Your Name *" /></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper"><span
                                                                        class="wpcf7-form-control-wrap email-654"><input
                                                                            type="email" name="email-654" value=""
                                                                            size="40"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Email Address *" /></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper"><span
                                                                        class="wpcf7-form-control-wrap tel-60"><input
                                                                            type="tel" name="tel-60" value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Phone Number *" /></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper"><span
                                                                        class="wpcf7-form-control-wrap text-531"><input
                                                                            type="text" name="text-531" value=""
                                                                            size="40"
                                                                            class="wpcf7-form-control wpcf7-text"
                                                                            aria-invalid="false"
                                                                            placeholder="Company Name" /></span></div>
                                                            </div>
                                                        </div>
                                                        <div class='dt-sc-clear '> </div>
                                                        <div class='dt-sc-clear '> </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper"><span
                                                                        class="wpcf7-form-control-wrap textarea-220"><textarea
                                                                            name="textarea-220" cols="40" rows="10"
                                                                            class="wpcf7-form-control wpcf7-textarea"
                                                                            aria-invalid="false"
                                                                            placeholder="Your Text Here..."></textarea></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='dt-sc-hr-invisible-xsmall '> </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper"><input type="submit"
                                                                        value="Send Now"
                                                                        class="wpcf7-form-control wpcf7-submit" /></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                </form>
                                            </div>
                                            <div id="1531201331746-9509448b-8fc6" class="dt-sc-empty-space"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="1531201369747-8d560452-3a43" class="dt-sc-empty-space"></div>
                                            <div class="dt-sc-special-testimonial-container ">
                                                <div
                                                    class="wpb_column vc_column_container vc_col-sm-6 dt-sc-skin-highlight extend-bg-fullwidth-left extend-bg-color-skin">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="alignright">
                                                                <h2>Hear from Our Clients</h2>
                                                                <div class="dt-sc-hr-invisible-xsmall"> </div>
                                                                <div class="dt-sc-clear"></div>
                                                                <div class="dt-sc-testimonial-special-wrapper">
                                                                    <ul class="dt-sc-testimonial-special">
                                                                        <li class="dt-sc-testimonial-wrapper">
                                                                            <div
                                                                                class="dt-sc-testimonial special-testimonial-carousel">
                                                                                <div class="dt-sc-testimonial-quote">
                                                                                    <blockquote><q>Etiam ultricies nisi
                                                                                            vel augue. Curabitur
                                                                                            ullamcorper ultricies nisi.
                                                                                            Nam eget dui. Etiam
                                                                                            rhoncus.</q></blockquote>
                                                                                </div>
                                                                                <div class="dt-sc-testimonial-author">
                                                                                    <cite>Steve Austin<small>Managing
                                                                                            Director</small></cite>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dt-sc-testimonial-wrapper">
                                                                            <div
                                                                                class="dt-sc-testimonial special-testimonial-carousel">
                                                                                <div class="dt-sc-testimonial-quote">
                                                                                    <blockquote><q>Etiam ultricies nisi
                                                                                            vel augue. Curabitur
                                                                                            ullamcorper ultricies nisi.
                                                                                            Nam eget dui. Etiam
                                                                                            rhoncus.</q></blockquote>
                                                                                </div>
                                                                                <div class="dt-sc-testimonial-author">
                                                                                    <cite>Emma Watson<small>Chief
                                                                                            Executive
                                                                                            Officer</small></cite>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dt-sc-testimonial-wrapper">
                                                                            <div
                                                                                class="dt-sc-testimonial special-testimonial-carousel">
                                                                                <div class="dt-sc-testimonial-quote">
                                                                                    <blockquote><q>Etiam ultricies nisi
                                                                                            vel augue. Curabitur
                                                                                            ullamcorper ultricies nisi.
                                                                                            Nam eget dui. Etiam
                                                                                            rhoncus.</q></blockquote>
                                                                                </div>
                                                                                <div class="dt-sc-testimonial-author">
                                                                                    <cite>Harry
                                                                                        Porter<small>Administrative
                                                                                            Manager</small></cite>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dt-sc-testimonial-wrapper">
                                                                            <div
                                                                                class="dt-sc-testimonial special-testimonial-carousel">
                                                                                <div class="dt-sc-testimonial-quote">
                                                                                    <blockquote><q>Etiam ultricies nisi
                                                                                            vel augue. Curabitur
                                                                                            ullamcorper ultricies nisi.
                                                                                            Nam eget dui. Etiam
                                                                                            rhoncus.</q></blockquote>
                                                                                </div>
                                                                                <div class="dt-sc-testimonial-author">
                                                                                    <cite>Amelia Jackson<small>Chief
                                                                                            Financial
                                                                                            Officer</small></cite>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dt-sc-testimonial-wrapper">
                                                                            <div
                                                                                class="dt-sc-testimonial special-testimonial-carousel">
                                                                                <div class="dt-sc-testimonial-quote">
                                                                                    <blockquote><q>Etiam ultricies nisi
                                                                                            vel augue. Curabitur
                                                                                            ullamcorper ultricies nisi.
                                                                                            Nam eget dui. Etiam
                                                                                            rhoncus.</q></blockquote>
                                                                                </div>
                                                                                <div class="dt-sc-testimonial-author">
                                                                                    <cite>Olivia Jacob<small>Business
                                                                                            Manager</small></cite>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dt-sc-testimonial-wrapper">
                                                                            <div
                                                                                class="dt-sc-testimonial special-testimonial-carousel">
                                                                                <div class="dt-sc-testimonial-quote">
                                                                                    <blockquote><q>Etiam ultricies nisi
                                                                                            vel augue. Curabitur
                                                                                            ullamcorper ultricies nisi.
                                                                                            Nam eget dui. Etiam
                                                                                            rhoncus.</q></blockquote>
                                                                                </div>
                                                                                <div class="dt-sc-testimonial-author">
                                                                                    <cite>George
                                                                                        William<small>Administrative
                                                                                            Assistant</small></cite>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dt-sc-testimonial-wrapper">
                                                                            <div
                                                                                class="dt-sc-testimonial special-testimonial-carousel">
                                                                                <div class="dt-sc-testimonial-quote">
                                                                                    <blockquote><q>Etiam ultricies nisi
                                                                                            vel augue. Curabitur
                                                                                            ullamcorper ultricies nisi.
                                                                                            Nam eget dui. Etiam
                                                                                            rhoncus.</q></blockquote>
                                                                                </div>
                                                                                <div class="dt-sc-testimonial-author">
                                                                                    <cite>David Richard<small>Investment
                                                                                            Adviser</small></cite>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="dt-sc-testimonial-wrapper">
                                                                            <div
                                                                                class="dt-sc-testimonial special-testimonial-carousel">
                                                                                <div class="dt-sc-testimonial-quote">
                                                                                    <blockquote><q>Etiam ultricies nisi
                                                                                            vel augue. Curabitur
                                                                                            ullamcorper ultricies nisi.
                                                                                            Nam eget dui. Etiam
                                                                                            rhoncus.</q></blockquote>
                                                                                </div>
                                                                                <div class="dt-sc-testimonial-author">
                                                                                    <cite>John Richard<small>Chief
                                                                                            Financial
                                                                                            Officer</small></cite>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <ul class="dt-sc-testimonial-images">
                                                                <li>
                                                                    <div><a href="#"><img width="190" height="190"
                                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim2.jpg"
                                                                                class="attachment-full" alt="img"
                                                                                loading="lazy"
                                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim2.jpg 190w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim2-150x150.jpg 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim2-100x100.jpg 100w"
                                                                                sizes="(max-width: 190px) 100vw, 190px" /></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div><a href="#"><img width="190" height="190"
                                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim3.jpg"
                                                                                class="attachment-full" alt="img"
                                                                                loading="lazy"
                                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim3.jpg 190w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim3-150x150.jpg 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim3-100x100.jpg 100w"
                                                                                sizes="(max-width: 190px) 100vw, 190px" /></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div><a href="#"><img width="190" height="190"
                                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim4.jpg"
                                                                                class="attachment-full" alt="img"
                                                                                loading="lazy"
                                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim4.jpg 190w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim4-150x150.jpg 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim4-100x100.jpg 100w"
                                                                                sizes="(max-width: 190px) 100vw, 190px" /></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div><a href="#"><img width="190" height="190"
                                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim1.jpg"
                                                                                class="attachment-full" alt="img"
                                                                                loading="lazy"
                                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim1.jpg 190w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim1-100x100.jpg 100w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim1-150x150.jpg 150w"
                                                                                sizes="(max-width: 190px) 100vw, 190px" /></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div><a href="#"><img width="190" height="190"
                                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim5.jpg"
                                                                                class="attachment-full" alt="img"
                                                                                loading="lazy"
                                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim5.jpg 190w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim5-150x150.jpg 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim5-100x100.jpg 100w"
                                                                                sizes="(max-width: 190px) 100vw, 190px" /></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div><a href="#"><img width="190" height="190"
                                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim6.jpg"
                                                                                class="attachment-full" alt="img"
                                                                                loading="lazy"
                                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim6.jpg 190w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim6-150x150.jpg 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim6-100x100.jpg 100w"
                                                                                sizes="(max-width: 190px) 100vw, 190px" /></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div><a href="#"><img width="190" height="190"
                                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim7.jpg"
                                                                                class="attachment-full" alt="img"
                                                                                loading="lazy"
                                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim7.jpg 190w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim7-150x150.jpg 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim7-100x100.jpg 100w"
                                                                                sizes="(max-width: 190px) 100vw, 190px" /></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div><a href="#"><img width="190" height="190"
                                                                                src="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim8.jpg"
                                                                                class="attachment-full" alt="img"
                                                                                loading="lazy"
                                                                                srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/testim8.jpg 190w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim8-150x150.jpg 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/testim8-100x100.jpg 100w"
                                                                                sizes="(max-width: 190px) 100vw, 190px" /></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="1531201389251-c82be5dd-e024" class="dt-sc-empty-space"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                class="vc_row wpb_row vc_row-fluid dt-skin-primary-bg dt-sc-dark-bg vc_custom_1532407363459 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-9">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h5 style="font-size: 28px;color: #222222;text-align: left"
                                                class="vc_custom_heading vcr_float_right vc_custom_1534504727142">Have
                                                any ideas in your mind?</h5>
                                            <h2 style="font-size: 46px;color: #ffffff;text-align: left"
                                                class="vc_custom_heading vcr_float_right">We provide leading security
                                                systems</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="alignright wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"><a href='#' target='_self' title=''
                                                class='dt-sc-button   large   black rounded-border  default filled'>
                                                Request a Quote </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="1531201419096-562075f7-49c6" class="dt-sc-empty-space"></div>
                                            <div class='dt-sc-title with-two-border aligncenter'>
                                                <h2>Companies We Have as Clients</h2>
                                            </div>
                                            <div
                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533365873624 vc_row-no-padding">
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-image-flip'><img width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client1-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client1-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client1-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client1-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /><img
                                                                    width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client1-hover-2.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client1-hover-2.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client1-hover-2-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client1-hover-2-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-image-flip'><img width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client3-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client3-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client3-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client3-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /><img
                                                                    width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client3-hover-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client3-hover-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client3-hover-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client3-hover-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-image-flip'><img width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client5-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client5-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client5-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client5-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /><img
                                                                    width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client5-hover-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client5-hover-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client5-hover-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client5-hover-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="last wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-image-flip'><img width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client7-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client7-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client7-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client7-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /><img
                                                                    width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client7-hover-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client7-hover-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client7-hover-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client7-hover-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533365882816 vc_row-has-fill vc_row-no-padding">
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-image-flip'><img width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client2-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client2-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client2-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client2-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /><img
                                                                    width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client2-hover-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client2-hover-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client2-hover-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client2-hover-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-image-flip'><img width="194" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client4-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client4-1.png 194w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client4-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client4-1-100x100.png 100w"
                                                                    sizes="(max-width: 194px) 100vw, 194px" /><img
                                                                    width="194" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client4-hover-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client4-hover-1.png 194w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client4-hover-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client4-hover-1-100x100.png 100w"
                                                                    sizes="(max-width: 194px) 100vw, 194px" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-image-flip'><img width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client6-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client6-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client6-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client6-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /><img
                                                                    width="196" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client6-hover-1.png"
                                                                    class="attachment-full" alt="" loading="lazy"
                                                                    srcset="https://kanni.wpengine.com/wp-content/uploads/2018/07/client6-hover-1.png 196w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client6-hover-1-150x150.png 150w, https://kanni.wpengine.com/wp-content/uploads/2018/07/client6-hover-1-100x100.png 100w"
                                                                    sizes="(max-width: 196px) 100vw, 196px" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="last wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class='dt-sc-image-flip'><img width="175" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client8-1.png"
                                                                    class="attachment-full" alt="" loading="lazy" /><img
                                                                    width="175" height="195"
                                                                    src="https://kanni.wpengine.com/wp-content/uploads/2018/07/client8-hover-1.png"
                                                                    class="attachment-full" alt="" loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="1531201437021-c0b3ed7a-a680" class="dt-sc-empty-space"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- #post-6 -->
                    </section><!-- Primary End -->
                </div>
                <!-- ** Container End ** -->

            </div><!-- **Main - End ** -->
            <?php include_once('includes/footer.php'); ?>
        </div><!-- **Inner Wrapper - End** -->

    </div><!-- **Wrapper - End** -->

    <div class="dt-cookie-consent cookiebar-hidden dt-cookiemessage-bottom">
        <div class="container">
            <p class="dt_cookie_text">This site uses cookies. By continuing to browse the site, you are agreeing to our
                use of cookies.</p><a href='#'
                class='dt-sc-button filled small dt-cookie-consent-button dt-cookie-consent-button-1  dt-cookie-close-bar '
                data-contents='a6fe7a635a3ae90b600d28d9abace894'>Close</a><a href='privacy-policy/index.html'
                class='dt-sc-button filled small dt-cookie-consent-button dt-cookie-consent-button-2 dt-extra-cookie-btn'>Click
                Here</a><a href='#dt-consent-extra-info'
                class='dt-sc-button filled small dt-cookie-consent-button dt-cookie-consent-button-3 dt-extra-cookie-btn dt-cookie-info-btn '>Modal
                Box</a>
        </div>
    </div>
    <div id='dt-consent-extra-info' class='dt-inline-modal main_color zoom-anim-dialog mfp-hide'>

        <h4>Cookie and Privacy Settings</h4>

        <div class='dt-sc-tabs-vertical-container ' data-effect='fade'>
            <ul class='dt-sc-tabs-vertical'>
                <li><a href="javascript:void(0);">How we use cookies</a></li>
                <li><a href="javascript:void(0);">Essential Website Cookies</a></li>
                <li><a href="javascript:void(0);">Google Analytics Cookies</a></li>
                <li><a href="javascript:void(0);">Other external services</a></li>
                <li><a href="javascript:void(0);">Privacy Policy</a></li>
            </ul>
            <div class='dt-sc-tabs-vertical-content'>We may request cookies to be set on your device. We use cookies to
                let us know when you visit our websites, how you interact with us, to enrich your user experience, and
                to customize your relationship with our website. <br><br>Click on the different category headings to
                find out more. You can also change some of your preferences. Note that blocking some types of cookies
                may impact your experience on our websites and the services we are able to offer.</div>
            <div class='dt-sc-tabs-vertical-content'>These cookies are strictly necessary to provide you with services
                available through our website and to use some of its features. <br><br>Because these cookies are
                strictly necessary to deliver the website, you cannot refuse them without impacting how our site
                functions. You can block or delete them by changing your browser settings and force blocking all cookies
                on this website.</div>
            <div class='dt-sc-tabs-vertical-content'>These cookies collect information that is used either in aggregate
                form to help us understand how our website is being used or how effective our marketing campaigns are,
                or to help us customize our website and application for you in order to enhance your experience.
                <br><br>If you do not want that we track your visist to our site you can disable tracking in your
                browser here: <div class="dt-toggle-switch"><label><input type="checkbox" checked="checked"
                            id="dtPrivacyGoogleTrackingDisabled" name="dtPrivacyGoogleTrackingDisabled"
                            class="dtPrivacyGoogleTrackingDisabled"><span>Click to enable/disable google analytics
                            tracking.</span></label></div>
            </div>
            <div class='dt-sc-tabs-vertical-content'>We also use different external services like Google Webfonts,
                Google Maps and external Video providers. Since these providers may collect personal data like your IP
                address we allow you to block them here. Please be aware that this might heavily reduce the
                functionality and appearance of our site. Changes will take effect once you reload the page.<br><br>

                Google Webfont Settings:
                <div class="dt-toggle-switch"><label><input type="checkbox" checked="checked"
                            id="dtPrivacyGoogleWebfontsDisabled" name="dtPrivacyGoogleWebfontsDisabled"
                            class="dtPrivacyGoogleWebfontsDisabled"><span>Click to enable/disable google
                            webfonts.</span></label></div>

                Google Map Settings:
                <div class="dt-toggle-switch"><label><input type="checkbox" checked="checked"
                            id="dtPrivacyGoogleMapsDisabled" name="dtPrivacyGoogleMapsDisabled"
                            class="dtPrivacyGoogleMapsDisabled"><span>Click to enable/disable google
                            maps.</span></label></div>

                Vimeo and Youtube video embeds:
                <div class="dt-toggle-switch"><label><input type="checkbox" checked="checked"
                            id="dtPrivacyVideoEmbedsDisabled" name="dtPrivacyVideoEmbedsDisabled"
                            class="dtPrivacyVideoEmbedsDisabled"><span>Click to enable/disable video
                            embeds.</span></label></div>
            </div>
            <div class='dt-sc-tabs-vertical-content'>You can read about our cookies and privacy settings in detail on
                our Privacy Policy Page. <br><br> <a href='privacy-policy/index.html'>Privacy Policy</a></div>
        </div>
    </div>
    <?php include_once('includes/bottom_scripts.php'); ?>
</body>

</html>