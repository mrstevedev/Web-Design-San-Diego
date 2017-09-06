<header class="banner fixed-top">
  <div class="container">   
    <nav class="navbar nav-primary navbar-expand-md navbar-light" data-theme="white" aria-label="Primary">
        <a class="brand logo col-3 col-lg-4" href="<?= esc_url(home_url('/')); ?>">
          <amp-img src="<?php bloginfo('url')?>/app/uploads/2017/09/logo.svg" alt="Welcome" width="82" height="50"></amp-img>
        </a>  
        
    <!-- Contact Info Again -->
    <form class="form-inline">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <amp-img src="<?php bloginfo('url');?>/app/uploads/2017/09/iconmonstr-email-2.svg" alt="Email Us" width="12.77" height="9.57" class="first"></amp-img>
      </span>
      <div class="contact-container email-info-container">
        <a href="mailto:info@webdesignsandiego.com">info@webdesignsandiego.com</a>
      </div>
    </div>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
      <amp-img src="<?php bloginfo('url');?>/app/uploads/2017/09/iconmonstr-smartphone-3.svg" alt="Email Us" width="8.34" height="14.3" class="second"></amp-img>
      </span>
      <div class="contact-container phone-info-container">
          858.461.8010
      </div>
    </div>
  </form>
    <!-- End Contact Info Again -->

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation','menu_id' => 'primary-navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </div>
    </nav>
  </div>
</header>