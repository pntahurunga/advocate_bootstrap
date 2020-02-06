<!-- footer -->
<div class="mt-5 pt-5 pb-5 footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-xs-12 about-company">
              
              <a class="navbar-brand" href="<?php echo home_url();?>"><span class="logo-main">Advocates</span> <span style="color: #52616B;">for</span> <br /><span class="logo-main-1">Peace and Change</span></a>
              <p class="pr-5 text-white-50">We hope to be the voice of all refugees in our communities. Our aim is to create an educated and diverse community that welcomes all individuals</p>
            </div>
            <div class="col-lg-3 col-xs-12 links">
              <h4 class="mt-lg-0 mt-sm-3">Menu</h4>
                <ul class="m-0 p-0">
                <?php
                    $args = array(
                        'theme_location' => 'footer'
                    );
                ?>

                <?php wp_nav_menu($args); ?>
                </ul>
            </div>
            <div class="col-lg-4 col-xs-12 location">
              <h4 class="mt-lg-0 mt-sm-4">Get in touch</h4>
              <p><a href="https://www.google.com/maps/dir//3202+Mapledale+Ave,+Cleveland,+OH+44109/@41.454545,-81.706349,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x8830efe4efe30f75:0x4c3f71505f9e44ad!2m2!1d-81.7041362!2d41.454634!3e0?hl=en" target="_blank" rel="noopener noreferrer">3202 Mapledale Avenue Cleveland,OH44109</a></p>
              <p class="mb-0"><i class="fa fa-phone mr-3"></i><a href="tel:+1(216) 456-1921">(216) 456-1921</a></p>
              <p><i class="fa fa-envelope-o mr-3"></i><a href="mailto:info@advocates4peace.com">info@advocates4peace.com</a></p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col copyright">
              <p class=""><small class="text-white-50">&copy; <?php echo date('Y'); ?>. All Rights Reserved. | Theme by <a href="https://npacifique.us" style="font-weight: 700; color:#d2d2d2;" >Pacifique</a></small> &nbsp; <span class="text-white-50"></span> </p>
            </div>
          </div>
        </div>
    </div>


</body>
</html>