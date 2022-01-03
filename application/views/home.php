<?php
$this->load->view('layout/header');
?>



<!--End Header -->
<!--Start Hero-->
<!--Start Hero-->
<section class="hero-card-web mobile-app-" id="home">
    <div class="hero-main-rp container-fluid">
        <div class="row mt-3">
            <div class="col-lg-5 v-center">
                <div class="hero-heading-sec2 niwax" data-rellax-speed="3">
                    <h1 class="wow fadeIn" data-wow-delay="0.2s">Discover people nearby, find  friends or the love!</h1>
                    <p class="wow fadeIn" data-wow-delay="0.4s">MyApple is not only a dating app, it enables you to meet to new people, attractive singles, and enjoy entertaining live videos in real time.</p>
                    <div class="content-sec  d-flex mt40 v-center text-w wow fadeIn" data-wow-delay="0.6s">
                        <div class="mr25">
                            <a href="#" class="btn-main bg-btn4 lnk">
                                <img src="<?php echo base_url(); ?>assets/theme/images/playstore_w.png" style="    height: 45px;" class="img-fluid"> 
                            </a>

                        </div>
                        <div class="mr25">

                            <a href="#" class="btn-main bg-btn4 lnk">
                                <img src="<?php echo base_url(); ?>assets/theme/images/appstore_w.png" style="    height: 45px;" class="img-fluid"> 
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-7 v-center">
                <div class="app-hero-bnr wow fadeIn" data-wow-delay="0.4s"> <img src="<?php echo base_url(); ?>assets/theme/images/hero/mobile_hero_banner.png" alt="niwax mobile app development company" class="img-fluid"> </div>
            </div>
        </div>
    </div>
</section>
<!--End Hero-->
<!--End Hero-->



<!--Start About-->
<section class="about-agency pad-tb" style="padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 v-center">
                <div class="image-block">
                    <img src="<?php echo base_url(); ?>assets/theme/images/ad/handapp.png" alt="about" class="img-fluid no-shadow" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="common-heading text-l">
                    <span>GETTING OVER SOMEONE YOU DON’T KNOW WELL</span>
                    <h2>THE FANTASY OF DATING SOMEONE</h2>
                    <p>
                        We often meet that special person when we’re least expecting it. MyApple is the app that connects you to the people you,

                    </p>
                    <p class="mt20">
                        Some time people used the net to find friends or to meet other people online who share the same hobbies and other likings.
                        People have used the web to find someone to spend time with, whether that’s for a short time or a long-term relationship. 
                    </p>

                    <p class="mt20">
                        Love needs both emotional and physical attraction.
                        All of us want to share happiness, sorrow, and life experiences with someone else. 
                        If love is based just on physical attraction, at some point you will begin to wonder if your relationship has a future.
                        A deep friendship is also essential.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->
<!--Start Clients-->
<section class="clients-section-app pad-tb" id="clients">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading text-w">
                    <span>Our happy Users</span>
                    <h2 class="mb30">Some of our Users</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="client-logoset">
                    <ul class="row text-center clearfix apppg">
                        <?php
                        $clients = [1,2,3,4,5,6,7,8,9,10,11,12];
                        foreach ($clients as $key => $value) {
                            ?>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".2s">
                                <div class="brand-logo hoshd"><img src="https://i.pravatar.cc/150?img=<?php echo $key+1;?>" alt="clients" class="img-fluid"></div>
                            
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Clients-->

<!--Start Testinomial-->
<section class="testinomial-section pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 v-center">
                <div class="common-heading text-l">
                    <span>Users Testimonial</span>
                    <h2 class="mb0">What our Users say about our App.</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-card-a pl25">

                    <div class="testimonial-card">
                        <div class="t-text">
                            <p>Amazing app for connecting people could be better with fixing problems with notifications not happening while they are set on. And be q tad cheaper</p>
                        </div>
                        <div class="client-thumbs mt30">
                            <div class="media v-center">
                                <div class="user-image bdr-radius"><img src="<?php echo base_url(); ?>assets/theme/images/user-thumb/ur1.jpg" alt="girl" class="img-fluid" /></div>
                                <div class="media-body user-info">
                                    <h5>Hei Hang</h5>
                                    <p>Goolge Review,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testinomial-->


<?php
$this->load->view('layout/footer');
?>