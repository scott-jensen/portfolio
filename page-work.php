<?php include(TEMPLATEPATH . '/header.php'); ?>
<body class="home">

<script>

    $(document).ready(function(){
        //featuredProjects();
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
                <img src="<?php echo bloginfo( 'template_directory' ) . '/images/tout-eventboard-1.png'; ?>" alt="featured project" class=" artwork ipad project-obj object-1" />
                <img src="<?php echo bloginfo( 'template_directory' ) . '/images/tout-eventboard-2.png'; ?>" alt="featured project" class=" artwork ipad project-obj object-2" />
            </div>
            <div class="project-details">
                <article>
                    <h2><span class="box"></span>EventBoard Product</h2>
                    <p>
                        EventBoard builds beautiful, powerful apps and dashboards 
                        that change employee productivity in the enterprise.
                    </p>
                    <a href="work/eventboard-product" class="module-link black-btn" size="full">View Project</a>
                </article>
            </div>
        </li>

       <li class="project-2 tout-project" id="project-2">
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
                <img src="<?php echo bloginfo( 'template_directory' ) . '/images/tout-sample.png'; ?>" alt="featured project" class="ipad project-obj object-1 artwork" />
            </div>
            <div class="project-details">
                <article>
                    <h2><span class="box"></span>iPhone Blueprints</h2>
                    <p>
                        This interactive iBook focusses on the fundamentals of user 
                        interface design as they pertain to iPhone apps.
                    </p>
                    <a href="work/iphone-blueprints" class="module-link black-btn" size="full">View Project</a>
                </article>
            </div>
        </li>

        <li class="project-3 tout-project" id="project-3">
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
                <img src="<?php echo bloginfo( 'template_directory' ) . '/images/tout-track8-1.png'; ?>" alt="featured project" class="ipad project-obj artwork object-1" />
                <img src="<?php echo bloginfo( 'template_directory' ) . '/images/tout-track8-2.png'; ?>" alt="featured project" class="ipad project-obj artwork object-2" />
            </div>
            <div class="project-details">
                <article>
                    <h2><span class="box"></span>Track 8</h2>
                    <p>
                        Track 8 was a music player inspired by the metro design language. 
                        It was flat before flat was cool.
                    </p>
                    <a href="work/track-8" class="module-link black-btn" size="full">View Project</a>
                </article>
            </div>
        </li>
    </ul>
    <!-- I'll add these later
    <div id="next-btn"><a></a></div>
    <div id="prev-btn"><a></a></div>
    -->
</section>
<?php include(TEMPLATEPATH . '/navigation.php'); ?>
<div class="home-content" style="display:none;">
    <section id="project-gallery">
        <div class="wrap">
            <h2><span class="box"></span>Project Gallery</h2>
            <ul class="project-list">
                <li class="project thumb-1" id="eventboard-product">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/eventboard-product-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">EventBoard Product</h4>
                            <div class="project-meta">
                                
                                <p>
                                    Enterprise level apps, websites, and dashboards 
                                    centered around employee productivity
                                </p>
                            </div>

                    </div>
                    <a href="/work/eventboard-product" class="project-link module-link" size="full"></a>
                </li>
                <li class="project thumb-2" id="ender-labs">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/ender-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">Ender Labs</h4>
                            <div class="project-meta">
                                
                                <p>
                                    Beautiful iPhone and iPad apps, employee 
                                    materials, and company website
                                </p>
                            </div>

                    </div>
                    <a href="/work/ender-labs" class="project-link module-link" size="full"></a>
                </li>
                <li class="project thumb-3" id="track-8">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/track8-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">Track 8</h4>
                            <div class="project-meta">
                                <p>
                                    App, website, and iBook that brought the metro 
                                    design language to iOS
                                </p>
                            </div>

                    </div>
                    <a href="/work/track-8" class="project-link module-link" size="full"></a>
                </li>
                <li class="project thumb-4" id="neutron-interactive">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/neutron-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">Neutron Interactive</h4>
                            <div class="project-meta">
                                <p>
                                    Corporate marketing materials, magazine ads, 
                                    tradeshow booths, and other collateral
                                </p>
                            </div>

                    </div>
                    <a href="/work/neutron-interactive" class="project-link module-link" size="full"></a>
                </li>
                <li class="project thumb-5" id="iphone-blueprints">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/blueprints-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">iPhone Blueprints</h4>
                            <div class="project-meta">
                                <p>
                                    Self-published iBook and ePub centered on the 
                                    fundamentals of UI design
                                </p>
                            </div>

                    </div>
                    <a href="/work/iphone-blueprints" class="project-link module-link" size="full" ></a>
                </li>
                <li class="project thumb-6" id="eventboard-marketing">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/eventboard-marketing-thumb.jpg'; ?>" alt="thumbnail" />

                            <h4 class="project-title">EventBoard Marketing</h4>
                            <div class="project-meta">
                                <p>
                                    Company website, print and digital collateral, 
                                    and just about everything else
                                </p>
                            </div>

                    </div>
                    <a href="/work/eventboard-marketing" class="project-link module-link" size="full"></a>
                </li>
            </ul>
        </div>
    </section>

    <section id="dribbble-gallery">
        <div class="wrap">
            <h2><span class="box"></span>From Dribbble</h2>
            <ul class="project-list">

            </ul>
        </div>
    </section>
<?php include(TEMPLATEPATH . '/footer.php'); ?>
