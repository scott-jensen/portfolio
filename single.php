<?php get_header(); ?>
<body class="article-page">
    <script>

        $(document).ready(function(){
            $('.writing-nav').addClass('selected');
            $('#add-comment').click(function(){
                $('#comment-form').fadeIn('fast');
                $('#author').focus();
                $('#add-comment').fadeOut('fast');
            });
            module();
            $('.entry').dropcap();
            $('.article-list').preloader();
        });

    </script>
<?php include(TEMPLATEPATH . '/navigation.php'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>

<?php endwhile; endif; ?>


<?php get_footer(); ?>