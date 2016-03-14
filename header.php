<!DOCTYPE html>
<head>
    <!--

    Well Hello there! Usually I make someone buy me a drink before
    I'll show them my code, but I guess for you I can make an
    exception. This site was designed, built, and deployed by yours
    truly. Other than jQuery for a javascript library and Wordpress
    to handle templating and the CMS of the blog, this site was built
    without any pluggins or 3rd party libraries. Yep, every single
    line was hand-crafted with love and purpose. Some of the javascript
    got a little messy - I mean how many times should I really have to
    capture the window width, amiright? I'll clean that up later. But 
    overall it's a site that accurately represents my skill set and
    abilities in both design and front-end development. I sincerely
    hope that you enjoy it!

    -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="alternate" type="application/rss+xml" title="RSS Feed for Beta Crumb" href="feed" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Scott Jensen Design" />
    <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
    <meta name="description" content="<?php 
        if ( is_front_page() ) {
          echo 'I am a designer, artist, writer, and Oxford Comma enthusiast. Most of my work focuses on user interface and user experience design. Take a look!';
        } elseif ( is_home() ) {
          echo 'I am a designer, artist, writer, and Oxford Comma enthusiast. You can find some of my writing and thoughts here. Take a look.';// blog page
        } elseif ( is_single() ){
          $excerpt = strip_tags(get_the_excerpt());
          echo $excerpt; // single page // single page
        } else {
          echo 'I am a designer, artist, writer, and Oxford Comma enthusiast. Most of my work focuses on user interface and user experience design. Take a look!';
        }
    ?>" />
    <title><?php
        if ( is_front_page() ) {
          echo 'Scott Jensen Design';
        } elseif ( is_home() ) {
          echo 'Writing | Scott Jensen Design';// blog page
        } elseif ( is_page('contact')){
          echo 'Contact | Scott Jensen Design';
        } elseif ( is_page('about')){
          echo 'About | Scott Jensen Design';
        } elseif ( is_single() ){
          echo the_title().' | Scott Jensen Design'; // single page
        } else {
          echo 'Scott Jensen Design';
        }
    ?></title>
    <meta property="og:title" content="<?php
        if ( is_front_page() ) {
          echo 'Scott Jensen Design';
        } elseif ( is_home() ) {
          echo 'Writing | Scott Jensen Design';// blog page
        } elseif ( is_page('contact')){
          echo 'Contact | Scott Jensen Design';
        } elseif ( is_page('about')){
          echo 'About | Scott Jensen Design';
        } elseif ( is_single() ){
          echo the_title().' | Scott Jensen Design'; // single page
        } else {
          echo 'Scott Jensen Design';
        }
    ?>" />
    <meta property="og:description" content="<?php
        if ( is_front_page() ) {
          echo 'I am a designer, artist, writer, and Oxford Comma enthusiast. Most of my work focuses on user interface and user experience design. Take a look at my work.';
        } elseif ( is_home() ) {
          echo 'I am a designer, artist, writer, and Oxford Comma enthusiast. You can find some of my writing and thoughts here. Take a look.';// blog page
        } elseif ( is_single() ){
          $excerpt = strip_tags(get_the_excerpt());
          echo $excerpt; // single page
        } else {
          echo 'I am a designer, artist, writer, and Oxford Comma enthusiast. Most of my work focuses on user interface and user experience design. Take a look at my work.';
        }
    ?>" />
    <meta property="og:url" content="<?php echo 'http://scottjensen.design'.$_SERVER['REQUEST_URI']; ?>" />
    <link rel="canonical" href="<?php echo 'http://scottjensen.design'.$_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:image" content="<?php 
        if( is_single()){
            if(has_post_thumbnail( $post->ID ) ){
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                echo $image[0];
            }
            else {
                echo 'http://scottjensen.design/wp-content/uploads/2016/03/Screen-Shot-2016-03-13-at-2.30.00-PM.png';
            }
        } else {
            echo 'http://scottjensen.design/wp-content/uploads/2016/03/Screen-Shot-2016-03-13-at-2.30.00-PM.png';
        }
    ?>" />
    <?php if( is_single() ){ ?>
    <meta property="article:published_time" content="<?php the_time('c') ?>" />
    <?php } ?>
    <link rel="icon" type="image/png" href="<?php echo bloginfo( 'template_directory' ) . '/images/favicon.png'; ?>">

    <!-- Homescreen Bookmark Icon
    <link rel="apple-touch-icon-precomposed" href="sample-icon.png"/>
    -->

    <link rel="stylesheet" href="<?php echo bloginfo( 'template_directory' ) . '/css/reset.css'; ?>" />
    <link rel="stylesheet" href="<?php echo bloginfo( 'template_directory' ) . '/css/base.css'; ?>" />
    <link rel="stylesheet" href="<?php echo bloginfo( 'template_directory' ) . '/css/featured-work.css'; ?>" />
    <link rel="stylesheet" href="<?php echo bloginfo( 'template_directory' ) . '/css/preloader.css'; ?>" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo( 'template_directory' ) . '/js/portfolio.js'; ?>"></script>

    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--> 

</head>
