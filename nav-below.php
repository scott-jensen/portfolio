<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav id="nav-below" class="navigation centered-content" role="navigation">
<span class="nav-previous"><?php next_posts_link(sprintf( __( '%s older', 'blankslate' ), '<span class="meta-nav">&larr;</span>' ) ) ?></span>
<span class="nav-next"><?php previous_posts_link(sprintf( __( 'newer %s', 'blankslate' ), '<span class="meta-nav">&rarr;</span>' ) ) ?></span>
</nav>
<?php } ?>