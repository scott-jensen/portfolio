<?php include(TEMPLATEPATH . '/header.php'); ?>
<body class="home">

<script>

    $(document).ready(function(){
        featuredProjects();
        homeScroll();
        dribbbleGallery();
        module(); 
        dispatch();    
    });

</script>

<section id="tout">
    
    <ul id="featured-projects">
        <li class="project-1 tout-project" id="project-1">
            <div class="background tout-element">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div> 
                <div class="bar bar4"></div>
                <div class="bar bar5"></div>
                <div class="bar bar6"></div>
                <div class="bar bar7"></div>
                <div class="bar bar8"></div>
                <div class="bar bar9"></div>
                <div class="bar bar10"></div>
                <div class="bar bar11"></div>
                <div class="bar bar12"></div>
            </div>
            <div class="middleground tout-element">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div> 
                <div class="bar bar4"></div>
                <div class="bar bar5"></div>
                <div class="bar bar6"></div>
                <div class="bar bar7"></div>
                <div class="bar bar8"></div>
                <div class="bar bar9"></div>
            </div>
            <div class="foreground tout-element">
                <div class="bar bar1 project-obj"></div>
                <div class="bar bar2 project-obj"></div>
                <div class="bar bar3 project-obj"></div> 
                <div class="bar bar4 project-obj"></div>
                <div class="bar bar5 project-obj"></div>
                <div class="bar bar6 project-obj"></div>
                <img src="<?php echo bloginfo( 'template_directory' ) . '/images/tout-sample.png'; ?>" alt="featured project" class=" artwork ipad project-obj" />
            </div>
            <div class="project-details">
                <article>
                    <h2><span class="box"></span>Project Title</h2>
                    <p>
                        Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue.
                    </p>
                    <a href="projects/project1.html" class="module-link black-btn" size="full">View Project</a>
                </article>
            </div>
        </li>

       <li class="project-1 tout-project" id="project-2">
            <div class="background tout-element">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div> 
                <div class="bar bar4"></div>
                <div class="bar bar5"></div>
                <div class="bar bar6"></div>
                <div class="bar bar7"></div>
                <div class="bar bar8"></div>
                <div class="bar bar9"></div>
                <div class="bar bar10"></div>
                <div class="bar bar11"></div>
                <div class="bar bar12"></div>
            </div>
            <div class="middleground tout-element">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div> 
                <div class="bar bar4"></div>
                <div class="bar bar5"></div>
                <div class="bar bar6"></div>
                <div class="bar bar7"></div>
                <div class="bar bar8"></div>
                <div class="bar bar9"></div>
            </div>
            <div class="foreground tout-element">
                <div class="bar bar1 project-obj"></div>
                <div class="bar bar2 project-obj"></div>
                <div class="bar bar3 project-obj"></div> 
                <div class="bar bar4 project-obj"></div>
                <div class="bar bar5 project-obj"></div>
                <div class="bar bar6 project-obj"></div>
                <img src="<?php echo bloginfo( 'template_directory' ) . '/images/tout-sample.png'; ?>" alt="featured project" class="ipad project-obj artwork" />
            </div>
            <div class="project-details">
                <article>
                    <h2><span class="box"></span>Project Title</h2>
                    <p>
                        Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue.
                    </p>
                    <a href="projects/project1.html" class="module-link black-btn" size="full">View Project</a>
                </article>
            </div>
        </li>

        <li class="project-1 tout-project" id="project-3">
            <div class="background tout-element">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div> 
                <div class="bar bar4"></div>
                <div class="bar bar5"></div>
                <div class="bar bar6"></div>
                <div class="bar bar7"></div>
                <div class="bar bar8"></div>
                <div class="bar bar9"></div>
                <div class="bar bar10"></div>
                <div class="bar bar11"></div>
                <div class="bar bar12"></div>
            </div>
            <div class="middleground tout-element">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div> 
                <div class="bar bar4"></div>
                <div class="bar bar5"></div>
                <div class="bar bar6"></div>
                <div class="bar bar7"></div>
                <div class="bar bar8"></div>
                <div class="bar bar9"></div>
            </div>
            <div class="foreground tout-element">
                <div class="bar bar1 project-obj"></div>
                <div class="bar bar2 project-obj"></div>
                <div class="bar bar3 project-obj"></div> 
                <div class="bar bar4 project-obj"></div>
                <div class="bar bar5 project-obj"></div>
                <div class="bar bar6 project-obj"></div>
                <img src="<?php echo bloginfo( 'template_directory' ) . '/images/tout-sample.png'; ?>" alt="featured project" class="ipad project-obj artwork" />
            </div>
            <div class="project-details">
                <article>
                    <h2><span class="box"></span>Project Title</h2>
                    <p>
                        Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue.
                    </p>
                    <a href="projects/project1.html" class="module-link black-btn" size="full">View Project</a>
                </article>
            </div>
        </li>
    </ul>

</section>
<?php include(TEMPLATEPATH . '/navigation.php'); ?>
<div class="home-content">
    <section id="project-gallery">
        <div class="wrap">
            <h2><span class="box"></span>Project Gallery</h2>
            <ul class="project-list">
                <li class="project thumb-1" id="project1">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/eventboard-product-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">EventBoard Product</h4>
                            <div class="project-meta">
                                
                                <p>Identity, Website, Print</p>
                            </div>

                    </div>
                    <a href="portfolio/project-1" class="project-link module-link" size="full"></a>
                </li>
                <li class="project thumb-2" id="project2">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/ender-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">Ender Labs</h4>
                            <div class="project-meta">
                                <h5>Media:</h5>
                                <p>Identity, Website, Print</p>
                            </div>

                    </div>
                    <a href="" class="project-link"></a>
                </li>
                <li class="project thumb-3" id="project3">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/track8-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">Ender Labs</h4>
                            <div class="project-meta">
                                <h5>Media:</h5>
                                <p>Identity, Website, Print</p>
                            </div>

                    </div>
                    <a href="" class="project-link"></a>
                </li>
                <li class="project thumb-4" id="project4">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/neutron-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">Ender Labs</h4>
                            <div class="project-meta">
                                <h5>Media:</h5>
                                <p>Identity, Website, Print</p>
                            </div>

                    </div>
                    <a href="" class="project-link"></a>
                </li>
                <li class="project thumb-5" id="project5">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/blueprints-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">Ender Labs</h4>
                            <div class="project-meta">
                                <h5>Media:</h5>
                                <p>Identity, Website, Print</p>
                            </div>

                    </div>
                    <a href="" class="project-link"></a>
                </li>
                <li class="project thumb-6" id="project6">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/eventboard-marketing-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">Ender Labs</h4>
                            <div class="project-meta">
                                <h5>Media:</h5>
                                <p>Identity, Website, Print</p>
                            </div>

                    </div>
                    <a href="" class="project-link"></a>
                </li>
            </ul>
        </div>
    </section>

    <section id="dribbble-gallery">
        <div class="wrap">
            <h2><span class="box"></span>From Dribbble</h2>
            <ul class="project-list">
                <!-- Placeholder Dribbble Project
                <li class="project thumb-1" id="">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="images/thumbnail.png" alt="thumbnail" />

                            <h4 class="project-title">Ender Labs</h4>
                            <div class="project-meta">
                                <h5>Media:</h5>
                                <p>Identity, Website, Print</p>
                            </div>

                    </div>
                    <a href="" class="project-link"></a>
                </li>
                -->
            </ul>
        </div>
    </section>
<?php include(TEMPLATEPATH . '/footer.php'); ?>
