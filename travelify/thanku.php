<?php    
/*
Template name: thanku
*/
include"headerthanku.php";
?>



<div class="main">
<div class="header">

<div class="hright">
</div>
<!--hright-->
<div class="hleft">
<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('thnku') ) : ?>
<?php endif; ?> 
</div>
<!--hleft-->
<div class="contact-info">
<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('contact-info') ) : ?>
<?php endif; ?> 
</div>
<!--contact-->
<div class="logo">
<img src="<?php bloginfo('template_url'); ?>/images/logofooter.png" />
</div>
<!--logo-->
</div>
<!--header-->


</div>
<!--main-->

<?php wp_footer() ?>











