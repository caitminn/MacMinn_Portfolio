<?php /* Template Name: Main Page */ ?>
<?php get_header(); ?>


<?php 
if(have_posts()) {
	while(have_posts()) {
		the_post();
?>

		<?php 
		$heroImage = get_field('hero_image');
		?>
<header style='background: url("<?php echo $heroImage['url']?>") center center no-repeat; background-size: cover'>

	<nav class="mainNav">
	  <?php wp_nav_menu( array(
	    'container' => false,
	    'theme_location' => 'primary'
	  )); ?>
	</nav>
</header>

<section class='about' id='about'>
	<h2><?php the_field('about_title'); ?></h2>
	<section class='aboutContainer wrapper'>
		<aside class='headshot'>
			<?php 
			$headshot = get_field('about_image');
			?>
			<img src="<?php echo $headshot['url']?>" />
		</aside>
		<article class='aboutDesc'>
			<p><?php the_field('about'); ?></p>
		</article>
	</section>
	
</section>

<section class='portfolio wrapper' id='portfolio'>
	<h2><?php the_field('portfolio_title'); ?></h2>
	<section class='portfolioContainer'>
		<?php 
			$portfolioArgs = array(
				'post_type' => 'portfolio',
				'posts_per_page' => -1,
				'order' => 'ASC',
				// 'orderby' => 'title'
			);
			$portfolioQuery = new WP_Query($portfolioArgs);
				if( $portfolioQuery -> have_posts() ) {
					while( $portfolioQuery -> have_posts() ) {
						$portfolioQuery -> the_post();
		?>
		<section class='portfolioItem'>
			<figure>
				<?php 
				$portfolioImage = get_field('portfolio_image');
				?>
				<img src='<?php echo $portfolioImage["url"]?>' />
			</figure>
			<div class='portfolioContent'>
				<h3><?php the_title(); ?></h3>
				<p><?php the_field('portfolio_description'); ?></p>
				<ul>
					<?php
						while(has_sub_field('portfolio_tags')) {
					?>
					<li><?php the_sub_field('tags')?></li>
					<?php
					}
					?>
			</ul>
			<a href='<?php the_field("portfolio_item_link"); ?>'><button> View Live Project</button></a>
			</div>
		</section>

		<?php
					}
				}
			wp_reset_postdata();
		?>
	</section>
</section>

<section class='skills' id='skills'>
	<h2><?php the_field('skills_title'); ?></h2>
	<section class='skillContainer wrapper'>
		<div class='skill'>
			<span><?php the_field('skill1_icon'); ?></span>
			<h4><?php the_field('skill1_title'); ?><h4>
			<p><?php the_field('skill1_description'); ?><p>
		</div>
		<div class='skill'>
			<span><?php the_field('skill2_icon'); ?></span>
			<h4><?php the_field('skill2_title'); ?><h4>
			<p><?php the_field('skill2_description'); ?><p>
		</div>
		<div class='skill'>
			<span><?php the_field('skill3_icon'); ?></span>
			<h4><?php the_field('skill3_title'); ?><h4>
			<p><?php the_field('skill3_description'); ?><p>
		</div>
		<div class='skill'>
			<span><?php the_field('skill4_icon'); ?></span>
			<h4><?php the_field('skill4_title'); ?><h4>
			<p><?php the_field('skill4_description'); ?><p>
		</div>
		<div class='skill'>
			<span><?php the_field('skill5_icon'); ?></span>
			<h4><?php the_field('skill5_title'); ?><h4>
			<p><?php the_field('skill5_description'); ?><p>
		</div>
		<div class='skill'>
			<span><?php the_field('skill6_icon'); ?></span>
			<h4><?php the_field('skill6_title'); ?><h4>
			<p><?php the_field('skill6_description'); ?><p>
		</div>
		<div class='skill'>
			<span><?php the_field('skill7_icon'); ?></span>
			<h4><?php the_field('skill7_title'); ?><h4>
			<p><?php the_field('skill7_description'); ?><p>
		</div>
		<div class='skill'>
			<span><?php the_field('skill8_icon'); ?></span>
			<h4><?php the_field('skill8_title'); ?><h4>
			<p><?php the_field('skill8_description'); ?><p>
		</div>
	</section>
</section>

<section class='contact' id='contact'>
	<h2><?php the_field('contact_title'); ?></h2>
	<section class='contactContainer wrapper'>
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

<section class='socialFooter'>
	<div class='wrapper'>
		<?php wp_nav_menu( array(
			'container' => false,
			'theme_location' => 'footer'
		)); ?>
	</div>
	
</section>

<?php
	} //End while 
} //End if
?>


<?php get_footer(); ?>