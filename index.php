<?php get_header(); ?>
<body class="writing">
	<script>

        $(document).ready(function(){
            $('.writing-nav').addClass('selected');
            module();
        });

    </script>
<?php include('navigation.php'); ?>
<section id="content">
    <div class="wrap">
    	<section id="article-content">
    		<ul class="article-list">
	    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		    	<li class="article-lead">
		    		<h2><a href="<?php the_permalink(); ?>"><span class="box"></span><?php the_title(); ?></a></h2>
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" class="article-cover" alt="<?php the_title(); ?>" /></a>
					<?php endif; ?>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="black-btn">Read More &raquo;</a>
				</li>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
			</ul>
		</section>
		<aside>
			<?php include('my-books.php'); ?>
			<?php include('twitter-feed.php'); ?>
		</aside>
    </div>
</section>

<?php get_footer(); ?>