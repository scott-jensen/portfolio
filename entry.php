<section id="content">
    <div class="wrap">
    	<h1 id="article-title"><span class="box"></span><?php the_title(); ?></h1>
    	<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<img src="<?php echo $image[0]; ?>" class="article-cover" alt="<?php the_title(); ?>" />
		<?php endif; ?>
    	<section id="article-content">
    		<article class="entry">
    			<div class="post-date"><?php echo get_the_date(); ?></div>
    			<?php the_content(); ?>
			</article>
			
            <section class="share-links">
                <h4>Share This:</h4>
                <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>:%20<?php the_permalink(); ?>&amp;via=_scottjensen" target="_blank" class="twitter">Twitter</a>
                <a onclick="
				    window.open(
				      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
				      'facebook-share-dialog', 
				      'width=626,height=436'); 
				    return false;" 
				class="facebook">Facebook</a>
            </section>
            <section class="about-me">
                <img src="<?php echo bloginfo( 'template_directory' ) . '/images/avatar.png'; ?>" class="avatar" alt="Scott Jensen" />
                <h4>Hi There!</h4>
                <p>I'm Scott, and I love writing things like this. But I spend most of my time working as a designer. <br /><a href="http://scottjensen.design">See my work&raquo;</a></p>
            </section>
			<?php # if ( ! post_password_required() ) comments_template( '', true ); ?>
		</section>
		<aside>
			<?php include(TEMPLATEPATH . '/recent-posts.php'); ?>
		</aside>
	</div>
</section>

