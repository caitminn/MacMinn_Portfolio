<?php /* Template Name: Main Page */ ?>
<?php get_header(); ?>


<?php 
if(have_posts()) {
	while(have_posts()) {
		the_post();
?>

<section class='hero'>
	
</section>

<section class='wrapper'>
	
	<section class='about'>
		<h2><?php the_field('about_title'); ?></h2>
		
	</section>

	<section class='portfolio'>
		<h2><?php the_field('portfolio_title'); ?></h2>
		
	</section>

	<section class='skills'>
		<h2><?php the_field('skills_title'); ?></h2>
		
	</section>

	<section class='contact'>
		<h2><?php the_field('contact_title'); ?></h2>
		<section class='contactContainer'>
			<aside class='contactInfo'>
				<h3><?php the_field('contact_info'); ?></h3>
				<span>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<?php the_field('address'); ?>
				</span>
				<span>
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<?php the_field('email_address'); ?>
				</span>
				<span>
					<i class="fa fa-mobile" aria-hidden="true"></i>
					<?php the_field('telephone'); ?>
				</span>
			</aside>
			<section class='contactForm'>
				<h3><?php the_field('contact_form_title'); ?></h3>
				<form>
					<?php the_field('contact_form'); ?>
				</form>
			</section>
		</section>
	</section>

</section>

<?php
	}
}
?>

<?php endwhile; // end the loop?>
<?php get_footer(); ?>