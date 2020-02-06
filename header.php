<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fork-awesome/1.1.7/css/fork-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/icofont/icofont.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="fixed-nav">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url();?>"><span class="logo-main">Advocates</span> for <br /><span class="logo-main-1">Peace and Change</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse float-right" id="navbarTogglerDemo02">
                <!-- <ul style="margin-left: auto;" class="navbar-nav mt-2 mt-lg-0"> -->
                    <?php
                        $args = array(
                            'menu_id'         => '',
                            'menu_class'        => 'navbar-nav mt-2 mt-lg-0',
                            'theme_location' => 'primary',
                        );?>

                    <?php wp_nav_menu($args); ?>
                    <button class="btn btn-lg btn-warning"><a style="color:#52616B; font-weight: 900;" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=U9UCLYKZH488U&source=url">Donate</a></button>
                                              

                <!-- </ul> -->
            </div>
        </div>
      </nav>
    <header>
        <div class="container">
            <div class="header-hero">
                <div>
                    <h1>We Advocate for Peace and Change</h1>
                    <p>Our vision is to have a firm group of advocates for humanitarian situations around the world. We hope to be the voice of all refugees in our communities. Our aim is to create an educated and diverse community that welcomes all individuals</p>
                </div>
            </div>
        </div>
    </header>