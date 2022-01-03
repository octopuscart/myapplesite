<footer>
    <div class="footer-row1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="email-subs">
                        <h3>Get New Insights Weekly</h3>
                        <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="email-subs-form">
                        <form>
                            <input type="email" placeholder="Email Your Address" name="emails">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn">Subscribe <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-svg">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 80" style="enable-background:new 0 0 1920 80;" xml:space="preserve">
            <path class="st0" d="M0,27.2c589.2,129.4,1044-69,1920,31v-60H3.2L0,27.2z"></path>
        </svg>
    </div>
    <div class="footer-row2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-12 text-center">
                    <a class="navbar-brand img-ctr" href="#"> <img src="<?php echo base_url(); ?>assets/theme/images/logo.png" alt="Logo" width="200"></a>
                    <ul class="footer-link-v2 link-hover mt30">
                        <?php
                        $listofmenu = [
                            array("title" => "Home", "link" => site_url("/")),
                  
                            array("title" => "Privacy Policy", "link" => site_url("privacy-policy")),
                            array("title" => "Terms & Conditions", "link" => site_url("terms-and-conditions")),
                            array("title" => "Refund Policy", "link" => site_url("refund-policy")),
                            array("title" => "Contact Us", "link" => site_url("contact-us")),
                        ];
                        ?>
                        <?php
                        foreach ($listofmenu as $key => $value) {
                            ?>
                            <li class=""><a href="<?php echo $value["link"] ?>" ><?php echo $value["title"] ?></a></li>
                        <?php }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr class="hline">
        <div class="footer-row3">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-social-media-icons">
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="footer-">
                                <p>Copyright © <?php echo date("y"); ?> MyApple. All rights reserved. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </footer>



            <!-- js placed at the end of the document so the pages load faster -->
            <script src="<?php echo base_url(); ?>assets/theme/js/vendor/modernizr-3.5.0.min.js"></script>
            <!--<script src="<?php echo base_url(); ?>assets/theme/js/jquery.min.js"></script>-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/theme/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/theme/js/popper.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/theme/js/plugin.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/theme/js/preloader.js"></script>
            <!--common script file-->
            <script src="<?php echo base_url(); ?>assets/theme/js/main.js"></script>
            <script src="<?php echo base_url(); ?>assets/theme/js/custom.js"></script>
            </body>

            </html>