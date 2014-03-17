<?php 
/*
	tag page for SONG
*/
get_header()?>
<div id='main'>
	<div class='tag-wrapper'>
		<!--直接列出标签名还有文章标题就可以了-->
		<?php if(have_posts()) : ?>
			<!--php the loop-->
			<h1 class='tag-name'><?php the_tags('') ?></h1>
			<?php while(have_posts()) : the_post() ?>
				<div class='post'>
					<p>
						<a href='<?php the_permalink(); ?>'>
							<?php the_title(); ?>
						</a>
					</p>		
					<p class='comment'>
						<?php comments_popup_link( __( '无评论', 'farlee' ), __( '评论 1', 'farlee' ), __( '评论 %', 'farlee' ), 'comments-link', __('评论关闭', 'farlee')); ?>
					</p>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer() ?>