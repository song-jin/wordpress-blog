<?php  
/*
	this is the singlepage for SONG
*/
get_header()?>
<div id='main'>
	<div class='single-wrapper'>
			<?php if(have_posts()) : ?>
				<!--php the loop-->
				<?php while(have_posts()) : the_post() ?>
					<div class='post'>
						<h1 class='title'>
							<?php the_title(); ?>
						</h1>
						<div class='meta'>
							<span class='date'>
								发表于：
								<?php the_date(); ?>
							</span>
						</div>
						<div class='content'>
							<?php the_content() ?>
						</div>
					</div>

					<div class='commentTemp'>
						<?php comments_template(); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
	</div>
	<?php get_footer() ?>
