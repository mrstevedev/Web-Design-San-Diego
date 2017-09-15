<header class="banner fixed-top">
  <div class="container-fluid">   
    <nav class="navbar nav-primary navbar-expand-md navbar-light" data-theme="white" aria-label="Primary">
        <a class="brand logo col-3 col-sm-2 col-md-2 col-lg-1" href="<?= esc_url(home_url('/')); ?>">
          <amp-img src="<?php bloginfo('url')?>/app/uploads/2017/09/logo.svg" srcset="<?php bloginfo('url')?>/app/uploads/2017/09/logo.svg 62w" alt="Welcome" width="72" height="50" layout="responsive"></amp-img>
        </a>          
    <div class="form-inline col-7 col-md-3">
    <div class="input-group">
      <div class="contact-container email-info-container">
        <a href="mailto:info@webdesignsandiego.com">info@webdesignsandiego.com</a>
      </div>
    </div>
    |
    <div class="input-group">
      <div class="contact-container phone-info-container">
          <a href="tel:858.461.8010">858.461.8010</a>
      </div>
    </div>
</div>
<button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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


<div class="collapse navbar-collapse" id="navbarSupportedContent">
   
   
  </div>