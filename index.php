<?php  
/*
	this is main file
*/
get_header();?>
	<div id='main'>
		<div class='wrapper'>
			<div class='main-col'>

				<?php if(have_posts()) : ?>
					<!--php the loop-->
					<?php while(have_posts()) : the_post() ?>
						<div class='post'>
							<h1>
								<a href='<?php the_permalink(); ?>'>
									<?php the_title(); ?>
								</a>
							</h1>		
							<p class='comment'>
								<?php comments_popup_link( __( '无评论', 'farlee' ), __( '评论 1', 'farlee' ), __( '评论 %', 'farlee' ), 'comments-link', __('评论关闭', 'farlee')); ?>
							</p>
							<?php the_excerpt() ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
			<div class='second-col'>
				<ul class='Tags'>
					<h1>Tags</h1>
					<!--循环每一个标签并删除-->
					<?php 
						$tags = get_tags();
						$html = '<div class="post_tags">';
						foreach ( $tags as $tag ) {
							$tag_link = get_tag_link( $tag->term_id );
									
							$html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
							$html .= "{$tag->name}</a></li>";
						}
						$html .= '</div>';
						echo $html;
					?>
				</ul>
			</div>
		</div>
<?php get_footer(); ?>