<?php /* Template Name: Project Template */ ?>
<?php include(TEMPLATEPATH . '/header.php'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<body class="project-page" id="<?php echo $post->post_name;?>">
<script>

$(document).ready(function(){
    $('.work-nav').addClass('selected');
    projectGallery();
    module();
    dispatch();

});

</script>
<?php include(TEMPLATEPATH . '/navigation.php'); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php include(TEMPLATEPATH . '/footer.php'); ?>