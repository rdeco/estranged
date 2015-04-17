                 <footer class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="footerImg">
                                <div class="footer opacity">
                                    <div class="row">
                                        <div class="col-xs-3 socialBtns">
                                            <ul class="socialMediaGalleryRow1">
                                                <li class="socialMediaBtn1" data-toggle="tooltip" data-placement="top" title="github">
                                                    <a href="<?php print get_option('estranged_github'); ?>"><img class="socialMediaBtn" src="<?php print IMAGES; ?>/github-75.jpg" alt="social media button"></a>
                                                </li>
                                                <li class="socialMediaBtn2" data-toggle="tooltip" data-placement="top" title="linkedIn">
                                                    <a href="<?php print get_option('estranged_linkedIn'); ?>"><img class="socialMediaBtn" src="<?php print IMAGES; ?>/linkedin-75.jpg" alt="social media button"></a>
                                                </li>
                                                <li class="socialMediaBtn3" data-toggle="tooltip" data-placement="top" title="wordpress">
                                                    <a href="<?php print get_option('estranged_wordpress'); ?>"><img class="socialMediaBtn" src="<?php print IMAGES; ?>/wordPress-75.jpg" alt="social media button"></a>
                                                </li>
                                            </ul>
                                            <ul class="socialMediaGalleryRow2">
                                                <li class="socialMediaBtn4" data-toggle="tooltip" data-placement="bottom" title="twitter">
                                                    <a href="<?php print get_option('estranged_twitter'); ?>"><img class="socialMediaBtn" src="<?php print IMAGES; ?>/twitter-75.jpg" alt="social media button"></a>
                                                </li>
                                                <li class="socialMediaBtn5" data-toggle="tooltip" data-placement="bottom" title="pinterest">
                                                    <a href="<?php print get_option('estranged_pinterest'); ?>"><img class="socialMediaBtn" src="<?php print IMAGES; ?>/pinterest-75.jpg" alt="social media button"></a>
                                                </li>
                                                <li class="socialMediaBtn6" data-toggle="tooltip" data-placement="bottom" title="facebook">
                                                    <a href="<?php print get_option('estranged_facebook'); ?>"><img class="socialMediaBtn" src="<?php print IMAGES; ?>/facebook-75.jpg" alt="social media button"></a>
                                                </li>
                                            </ul>
                                        </div>
                                     
                                        <div class="col-xs-8 col-xs-0ffset-1 col-md-6 lrgMedia ">
                                            <a data-pin-do="embedUser" href="http://www.pinterest.com/rdecojewelry/">Visit R.Deco Jewelry's profile on Pinterest.
                                           	</a>
                                        </div>
                                        <div class="col-md-3 smMedia hidden-xs hidden-sm ">
                                            <div class="fb-like-box" data-href="https://www.facebook.com/rdecojewelry" data-width="325" data-height="275" data-colorscheme="dark" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>                                     </div>
                                        </div>
                                    </div> <!-- .row -->
                                </div> <!-- .footer .opacity -->
                            </div> <!-- .footerImg -->
                        </div> <!-- col-xs-12 -->
                    </div> <!-- .row -->
                    <div class="row">
                        <div class="col-xs-12 copyright">
                            <p class="copyright">&copy <?php bloginfo('name'); ?> | all rights reserved <?=date('Y');?></p>
                        </div>
                    </div>
                </footer>
        <div id="fb-root"></div>
        <?php wp_footer(); ?>

    </body>
</html>
