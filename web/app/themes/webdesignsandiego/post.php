<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<?php
if(isset($_POST['submitlogin']))
{
    $name = isset($_POST['name']) ? $_POST['name'] : '' ;
    $output = [
            'name' => $name
    ];
header("Content-type: application/json");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Origin: *.ampproject.org");
header("AMP-Access-Control-Allow-Source-Origin: https://webdesignsandiego.stevenpulido.com");
header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");

echo json_encode($output);
die();

}
?>