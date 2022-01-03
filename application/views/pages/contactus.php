<?php

$this->load->view('layout/header');
?>

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-2" data-background="<?php echo base_url(); ?>assets/theme/images/banner/4.jpg">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">

                        </div>
                        <div class="bread-title">
                            <h2> Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->
<!--Start Enquire Form-->
<section class="enquire-form pad-tb">
    <div class="container">
        <div class="row light-bgs">
            <div class="col-lg-6">
                <div class="common-heading text-l">
                    <span>Contact Now</span>
                    <h2 class="mt0">Have Question? Write a Message</h2>
                </div>
                <div class="form-block">
                    <form action="#" method="post" name="feedback-form">
                        <div class="fieldsets row">
                            <div class="col-md-6">
                                <label for="inputname">Your Name</label>
                                <input type="text" placeholder="Full Name" name="name" id="inputname"></div>
                            <div class="col-md-6">
                                <label for="inputemail">Your Email</label>
                                <input type="email" placeholder="Email Address" name="email" id="inputemail">
                            </div>
                        </div>
                        <div class="fieldsets row">
                            <div class="col-md-6"><label for="inputcontact">Your Contact No.</label><input id="inputcontact" type="number" placeholder="Contact Number" name="phone"></div>
                            <div class="col-md-6"><label for="inputsubject">Subject</label><input type="text" id="inputsubject" placeholder="Subject" name="subject"></div>
                        </div>
                        <div class="fieldsets"><label for="inputmessage">Type Here</label><textarea placeholder="Message" name="message" id="inputmessage"></textarea></div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
                            <label class="custom-control-label" for="customCheck">I agree to the <a href="#">Terms &amp; Conditions</a> of MyApple </label>
                        </div>
                        <div class="fieldsets mt20"> <button type="submit" name="submit" class="lnk btn-main bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button> </div>
                        <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 v-center">
                <div class="enquire-image">
                    <img src="<?php echo base_url(); ?>assets/theme/images/about/hellopic.png" alt="enquire" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Enquire Form-->
<?php

$this->load->view('layout/footer');
?>