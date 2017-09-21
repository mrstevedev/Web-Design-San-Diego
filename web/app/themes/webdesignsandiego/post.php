<?php /*Template Name: post Template */ ?>
<?php
if(isset($_POST['submitlogin']))
{
    $name = isset($_POST['name']) ? $_POST['name'] : '' ;
    $output = [
            'name' => $name
    ];
header("Content-type: application/json");
header("Access-Control-Allow-Credentials: true");
header("AMP-Same-Origin: true");
header('AMP-Access-Control-Allow-Source-Origin: '.'http://'. $_SERVER['HTTP_HOST']);
header("Access-Control-Allow-Origin: *.ampproject.org");
#header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
echo json_encode($output);
die();

}
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<div class="container amp-success-page">

</div>