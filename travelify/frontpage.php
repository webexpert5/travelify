<?php    
/*
Template name:Frontpage
*/
include"headerland.php";
?>



<div class="main">
<div class="header">
<div class="htop">
<img src="<?php bloginfo('template_url'); ?>/images/5-star-yelp-dentist-sacramento.png" />
</div>
<!---htop-->
<div class="hright">
<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('contact') ) : ?>
<?php endif; ?>  
</div>
<!--HRIGHT-->
</div>
<!---header-->
</div>
<!--main-->
<div class="content">
<div class="testimonial">
<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('testimonial') ) : ?>
<?php endif; ?> 
</div>
<!--testimonial-->
<div class="cleft">
<img src="<?php bloginfo('template_url'); ?>/images/services.jpg" />
</div>
<!--cleft-->
</div>
<!--content-->
<div class="content">
<div class="logo">
<img src="<?php bloginfo('template_url'); ?>/images/flogo.png" />
</div>
<!---logo-->
<div class="services">
<h2>OUR SERVICES</h2>
<ul>
<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('services') ) : ?>
<?php endif; ?> 
</ul>
</div>
<!--services-->
<div class="text">
<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('text') ) : ?>
<?php endif; ?> 
</div>
<!---text-->
</div>
<!--content--><br />
<div class="copyright">
<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('copyright') ) : ?>
<?php endif; ?> 
</div>
<!--copyright-->

<?php wp_footer() ?>











