<?php
/**
* Template Name: Front Page
*
* @package WordPress
* @subpackage Aspire 
*/
get_header();
?>
<section id="hero" class="animatedParent">
<img src="<?php echo get_template_directory_uri(); ?>/images/hero.png" class="animated fadeIn img-responsive" />
<a href="#goto"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" class="animated shakeUp arrow delay-250" /></a>
<section>
<section id="text-slider">
<div class="container">
<div class="owl-carousel owl-theme">
	<?php
	while( have_rows('straplines') ): the_row();
	$line1 = get_sub_field('line_one');
	$line2 = get_sub_field('line_two');
	?>
<div class="item">
<h1><span><?php echo $line1; ?></span>
<?php echo $line2; ?></h1>
</div>

	<?php endwhile; ?>
</div>
</div>
</section>
<section class="text-center">

<hgroup class="animatedParent">
<h2 class='animated bounceInLeft'>For the support and resources<br>
to run your own business</h2>
<h3 id="goto" class='animated bounceInRight delay-250'>
Ask Nick Anything!
</h3>
</hgroup>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
<?php echo do_shortcode("[contact-form-7 id='10' title='Contact form 1']"); ?>
    </div>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo" />
</section>
<?php
get_footer();
?>