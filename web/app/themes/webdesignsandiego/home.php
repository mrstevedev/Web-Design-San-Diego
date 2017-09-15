<?php /*Template Name: Home Template */ ?>
<div id="section-one" class="section-one animated fadeIn">
  <section class="container">
    <h1>San Diego Web Design</h1>
    <h1>An Innovative Digital Agency</h1>
    <h2>We design beautiful <span class="ampersand">&</span> modern experiences</h2>
    <a href="<?php bloginfo('url')?>/learn-more" title="Click here to learn more" class="btn learn-more box curmudgeon">Learn More</a>
  </section>
  <?php //echo Caldera_Forms::render_form( 'CF59bb48c8372c9' );?>
    <div id="yelp-reviews">
  <h3>Yelp Reviews</h3>
    <div id="yelp-biz-badge-rrc-58yAEFLuj7Qxrwzr8VTFwA">
      <a href="http://yelp.com/biz/eric-strate-seo-expert-san-diego?utm_medium=badge_star_rating_reviews&amp;utm_source=biz_review_badge" target="_blank"></a>
    </div>    
  </div>
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
  <div class="container-fluid headline">Services</div>
    <section class="left-side column col-lg-3">
      <div class="container">
        <h1>Web Development</h1>
        <p>Our website development and proprietary templates for businesses are affordable and created to just work. We made this after many years of hearing about limited budgets. We have made custom websites and eCommerce sites from scratch using our proprietary methods. All our websites are Google Mobile Friendly and up to date.</p>
      </div>
    </section>
    <section class="right-side column col-lg-3">
      <div class="container">
      <h1>Search Engine Optimization</h1>
        <p>Do you already have a website? Need help ranking your business higher for organic search results? We are experts in Search Engine Optimization and we can definitely help your business be seen on the first pages, which will drive more traffic and sales.</p>
      </div>
      </section>
      <section class="right-side right-side-top-right over column col-lg-6">
      <div class="container">
        <h1>We Know How to get you Visible.</h1>
        <p>Something here about SEO and how we can do this and that.</p>
      </div>
  </section>
<section class="left-side column col-lg-3">
      <div class="container">
        <h1>PAID ADVERTISING, PPC</h1>
        <p>We will manage your PPC account perfectly, and make sure you are not wasting money and receiving the best ROI as possible. We offer a one-time setup or monthly management of your campaigns.</p>
      </div>
</section>
<section class="right-side column col-lg-3">
<div class="container">
        <h1>HOSTING/MAINTANENCE</h1>
        <p>We are with the fastest and most reliable hosting that is local. This helps not only with ranking but with fast loading pages.</p>
      </div>
</section>
  </section>
  <div class="arrow-down">
      <button class="arrow right sectionTwoBtmBtn1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="40px" viewBox="0 0 50 55" xml:space="preserve">
          <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
        0.375,0.375 45.63,38.087 0.375,75.8 "/>
        </svg>
      </button>
    </div>
</div>
<div id="section-three" class="section-two section-two-btm">
<section class="column-top col-lg-12">

<section class="left-side column col-lg-7">
      <div class="container">
        <h1>About Us</h1>
        <p>Founded by Eric and Kayla Strate, we have over 10 years combined experience in helping companies in San Diego succeed online. Our focus starts with quality, and ends with customer satisfaction.
We are a local company located in Del Mar, CA., and we have a strong understanding of the San Diego County market. We bring expertise in website development, designs that convert visitors into contacts, and expert Digital Marketing services. We also provide lightning fast web hosting, to compliment your blazing fast website. We can handle your hosting, updates, and maintenance issues which is all included in our monthly service plan. We have pricing for every business needs. If you are a new startup with limited budget, we have a solution for you. If you need a custom website from the ground up, we can help you as well. We offer a proprietary and custom WordPress theme that is easy to navigate, modify, lightweight, responsive and is Google mobile-friendly. Once your website is designed to perfection and launched, you are not left searching for help to promote. We can help you with our expert digital marketing implementations to increase your traffic for more sales. Call or contact us today for your tailored quote.</p>
        <span class="strikethrough"></span>
      </div>
</section>
<section class="right-side column col-lg-5">
<div class="container">
        <h1></h1>
        <p>Helping Your Business Build Success Online and be the Best!
Develop Your Path to Greatness
Our business is helping your business succeed online. We believe that traffic equals sales, and with great traffic, you need a website that can convert those people into sales.</p>
      </div>
</section>
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
<div id="section-four" class="section-four">
  <section class="col-lg-12">
    <div class="container-fluid">
    <section class="column col-lg-4">
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
        <?php 
        $args = array(
          'post_type'=>'post',
          'posts_per_page' => 2,          
          'category__not_in' => array( 3 )
        );
        $query = new WP_Query( $args );
        while( $query->have_posts() ){
          $query->the_post();
          echo ' <section class="column col-lg-4">
          <div class="container">';
          get_template_part('templates/content', get_post_format() );           
          echo '</div>
          </section>';
        }
        ?>
    </div>
  </section>
  <div class="arrow-down">
      <button class="arrow right sectionFiveBtn1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="40px" viewBox="0 0 50 55" xml:space="preserve">
          <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
        0.375,0.375 45.63,38.087 0.375,75.8 "/>
        </svg>
      </button>
    </div>
</div>
<div id="section-five" class="section-four section-five">
  <section class="container">
    <section class="col-lg-8 contact-column-left">
      <h1>Have An Idea? A Project in Mind?</h1>
      <h1>Let's Chat</h1>
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