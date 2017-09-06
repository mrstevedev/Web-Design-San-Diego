<?php /*Template Name: Home Template */ ?>

<!-- The Homepage is comprised of four sections -->
<div id="section-one" class="section-one animated fadeIn">
  <section class="container">
    <h1>San Diego Web Design</h1>
    <h1>An Innovative Digital Agency</h1>
    <h2>We design beautiful <span class="ampersand">&</span> modern experiences</h2>
    <a href="<?php bloginfo('url')?>/learn-more" title="Click here to learn more" class="btn learn-more box curmudgeon">Learn More</a>
  </section>

    </section><?php  Ninja_Forms()->display( 2 ); ?>

    <div class="arrow-down">
      <button class="arrow right sectionTwoBtn1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="40px" viewBox="0 0 50 80" xml:space="preserve">
          <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
        0.375,0.375 45.63,38.087 0.375,75.8 "/>
        </svg>
      </button>
    </div>
</div>

<div id="section-two" class="section-two">
  <section class="column-top col-lg-12">
    <section class="left-side over column col-lg-6">
      <div class="container">
        <h1>We Have the Technical Covered.</h1>
        <p>We can deliver web applications in various modern technologies.</p>
        <p>Wordpress, PHP, Ruby on Rails, Javascript, ReactJS, AngularJS,  VueJS.</p>
        <span class="strikethrough"></span><a href="">Learn More</a>
      </div>
    </section>
    <section class="left-side column col-lg-6">
      <div class="container">
        <h1>Web Development</h1>
        <p>We have the technical covered for you.</p>
        <span class="strikethrough"></span><a href="">Learn More</a>
      </div>
    </section>
   
    <section class="right-side column col-lg-6">
      <div class="container">
      <h1>Search Engine Optimization</h1>
        <p>Something here about SEO best practices.</p>
        <span class="strikethrough"></span><a href="">Learn More</a>
      </div>
      </section>
      <section class="right-side over column col-lg-6">
      <div class="container">
        <h1>We Know How to get you Visible.</h1>
        <p>We can deliver web applications in various modern technologies.</p>
        <p>Wordpress, PHP, Ruby on Rails, Javascript, ReactJS, AngularJS,  VueJS.</p>
        <span class="strikethrough"></span><a href="">Learn More</a>
      </div>
    </section>
  </section>
  <div class="arrow-down">
      <button class="arrow right sectionTwoBtn3">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="40px" viewBox="0 0 50 55" xml:space="preserve">
          <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
        0.375,0.375 45.63,38.087 0.375,75.8 "/>
        </svg>
      </button>
    </div>
</div>

<div id="section-three" class="section-two section-two-btm">
<section class="column-top col-lg-12">
<section class="left-side column col-lg-6">
      <div class="container">
        <h1>PAID ADVERTISING, PPC</h1>
        <p>We have the technical covered for you.</p>
        <span class="strikethrough"></span><a href="">Learn More</a>
      </div>
</section>
<section class="right-side column col-lg-6">
<div class="container">
        <h1>HOSTING/MAINTANENCE</h1>
        <p>We do hosting. More here about how we do hosting & something about maintenance.</p>
        <span class="strikethrough"></span><a href="">Learn More</a>
      </div>
</section>
</section>
  <div class="arrow-down">
      <button class="arrow right sectionThreeBtn1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="40px" viewBox="0 0 50 55" xml:space="preserve">
          <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
        0.375,0.375 45.63,38.087 0.375,75.8 "/>
        </svg>
      </button>
    </div>
</div>

<div id="section-four" class="section-three">
  <section class="col-lg-12">
    <div class="container">
    <section class="blog-preview-left column col-lg-6">

      <!-- Use WPQuery to grab the latest post and display it in thi section only -->
      <?php 

        $featuredArgs = array(
          'post_type' => 'post',
          'category_name' => 'featured',
          'posts_per_page' => 1
        );

        $featuredQuery = new WP_Query( $featuredArgs );

        while( $featuredQuery->have_posts() ){
          $featuredQuery->the_post();
          get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); 
          
        }
      
      ?>
     
    </section>

    <section class="blog-preview-right column col-lg-6">
      <div class="container">

        <?php 
        
        $args = array(
          'post_type'=>'post',
          'posts_per_page' => 2,          
          'category__not_in' => array( 3 )
        );

        $query = new WP_Query( $args );

        while( $query->have_posts() ){
          $query->the_post();
          get_template_part('templates/content', get_post_format() );           
        }
        
        ?>
     
      </div>
    </section>
    </div>
  </section>
  <div class="arrow-down">
      <button class="arrow right sectionFourBtn1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="40px" viewBox="0 0 50 55" xml:space="preserve">
          <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
        0.375,0.375 45.63,38.087 0.375,75.8 "/>
        </svg>
      </button>
    </div>
</div>

<div id="section-five" class="section-four">
  <section class="container">
    <section class="col-lg-8 contact-column-left">
      <h1>Have An Idea? A Project in Mind?</h1>
      <h1>Let's Chat</h1>
      <?php  Ninja_Forms()->display( 3 ); ?> 
    </section>
    <section class="col-lg-4 contact-column-right">
      <p class="local">Your local Marketing Agency. San Diego, CA 92104</p>
      <p class="phone-contact">858.461.8010</p>
      <p class="email-contact"><a href="mailto:info@webdesignsandiego.com">info@webdesignsandiego.com</a></p>
    </section>
  </section>
</div>
<a href="#" class="backtotopBtn cd-top">
  <div class="back-to-top">
      <i class="svg-triangle" aria-hidden="true"></i>
  </div>
</a>
