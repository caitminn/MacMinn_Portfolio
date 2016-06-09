<?php get_header(); ?>

	<div class="main">
		<div class="container">
			<?php 
				if(have_posts()) {
					while(have_posts()) {
						the_post();
					?> 
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></h2>
					<?php 
					$puppyImage = get_field('puppy_image');
					?>
					<img src="<?php echo $puppyImage['url']?>" />
					<h3>Known Tricks</h3>
					<ul>
						<?php
						while(has_sub_field('puppy_tricks')) {
						?>
						<li><?php the_sub_field('trick_name')?></li>
						<?php
						}
						?>
					</ul>
					<?php
					}
				}
			?>
		</div>
	</div>
	
<?php get_footer(); ?>