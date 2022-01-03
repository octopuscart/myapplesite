<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="manifest" href="/manifest.webmanifest">
        <meta name="theme-color" content="#c7ecff">
        <meta name="author" content="Varbin Development Team">

        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Sofware Company",
            "name": "Varbin Softwares",
            "author": {
            "@type": "Person",
            "name": "Mr. Pankaj pathak"
            },
            "datePublished": "2020-11-10",
            "description": "Top Custom Web and App Development Company",
            "prepTime": "PT20M"
            }
        </script>
        <!-- Document Title -->
        <?php
        meta_tags();
        ?>
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/rs-plugin/css/settings.css" media="screen" />

        <!-- StyleSheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/ionicons.min.css">


        <link href="<?php echo base_url(); ?>assets/theme/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/theme/css/plugin.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/theme/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <!-- template-style-->
        <link href="<?php echo base_url(); ?>assets/theme/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/theme/css/custom.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/theme/css/responsive.css" rel="stylesheet">
    </head>

</head>
<?php
$listofmenu = [
    array("title" => "Home", "link" => site_url("/")),
    array("title" => "Privacy Policy", "link" => site_url("privacy-policy")),
    array("title" => "Terms & Conditions", "link" => site_url("terms-and-conditions")),
    array("title" => "Contact Us", "link" => site_url("contact-us")),
];
?>

<body>
    <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
        <div class="pre-content">
            <div class="logo-pre"><img src="<?php echo base_url(); ?>assets/theme/images/logo.png" alt="Logo" class="img-fluid" /></div>
            <div class="pre-text-"><span></span></div>
        </div>
    </div>
    <!--End Preloader -->
    <!--Start Header -->
    <header class="nav-bg-b main-header navfix fixed-top menu-white header-pr">
        <div class="container-fluid m-pad">
            <div class="menu-header">
                <div class="dsk-logo"><a class="nav-brand" href="<?php echo site_url("/"); ?>">
                        <img src="<?php echo base_url(); ?>assets/theme/images/white-logo.png" alt="Logo" class="mega-white-logo"/>
                        <img src="<?php echo base_url(); ?>assets/theme/images/logo.png" alt="Logo" class="mega-darks-logo"/>
                    </a></div>
                <div class="custom-nav" role="navigation">
                    <ul class="nav-list">
                        <?php
                        foreach ($listofmenu as $key => $value) {
                            ?>
                            <li class=""><a href="<?php echo $value["link"] ?>" class="menu-links"><?php echo $value["title"] ?></a></li>
                        <?php }
                        ?>
                        <!--menu right border-->

                    </ul>
                </div>
                <div class="mobile-menu2">
                    <ul class="mob-nav2">
                        <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>

            </div>
            <!--Mobile Menu-->
            <nav id="main-nav">
                <ul class="first-nav">
                    <?php
                    foreach ($listofmenu as $key => $value) {
                        ?>
                        <li class=""><a  class="menu-links" href="<?php echo $value["link"] ?>" class="menu-links"><?php echo $value["title"] ?></a></li>
                        <?php }
                        ?>

                </ul>

            </nav>
        </div>
    </header>