<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom:1px solid #e1e1e1;">
    <a class="navbar-brand" href="#">
        <img src="<?php echo esc_url(plugins_url('assets/images/logo.png', dirname(__FILE__))); ?>" class="navbar-icon logo" alt="icon">
        Formfacade
    </a>
</nav>
<div class="content">
    <div class="row">
        <div class="col-md-12 col-lg-6 mr-auto ml-auto">
            <h1 style="margin-top:60px;">Embed Google Forms In Your Wordpress</h1>
            <p> From startups to corporates. 2500+ companies trust us. </p>
            <a href="<?php echo esc_url(admin_url('admin.php?page=embed_google_forms'));?>" class="button">Connect</a>
            
        </div>
    </div>
    <div class="col-md-12 col-lg-6 mr-auto ml-auto" style="margin-top:50px;">
        <div class="animation-content" style="text-align:center;">
            <img src="<?php echo esc_url(plugins_url('assets/images/embed.png', dirname(__FILE__))); ?>" class="lazyAnimate img-fluid hero-image" alt="Formfacade embed Google Forms" 
                data-json-src="<?php echo esc_url(plugins_url('assets/images/embed.json', dirname(__FILE__))); ?>">
            <div id="lottie-container" style="display:none"> </div>
        </div>
    </div>
</div>
