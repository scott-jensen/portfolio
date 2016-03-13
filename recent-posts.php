<h3>Other Posts</h3>
<ul class="article-list">
<?php
$currentID = get_the_ID();
$my_query = new WP_Query( array('showposts' => '3', 'post__not_in' => array($currentID)));
while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
<li>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" /></a>
<?php endif; ?>
	<div class="info">
		<h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
		<?php echo '<p>'.get_the_twitter_excerpt() . '...</p>'; ?>
	</div>
</li>
<?php endwhile; ?>

</ul>