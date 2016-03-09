<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />

    <title>Scott Jensen Design</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- iTunes App Link 
    <meta name="apple-itunes-app" content="app-id=55555555">
    -->

    <!-- Homescreen Bookmark Icon
    <link rel="apple-touch-icon-precomposed" href="sample-icon.png"/>
    -->

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/featured-work.css" />
    <link rel="stylesheet" href="css/preloader.css" />

    
    <!-- Load Jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/portfolio.js"></script>

    <script>

        $(document).ready(function(){
            featuredProjects();
            homeScroll();
            dribbbleGallery();
            module(); 
            dispatch();    
        });

    </script>

    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--> 

</head>
<body class="home">

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
                <img src="images/tout-sample.png" alt="featured project" class=" artwork ipad project-obj" />
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
                <img src="images/tout-sample.png" alt="featured project" class="ipad project-obj artwork" />
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
                <img src="images/tout-sample.png" alt="featured project" class="ipad project-obj artwork" />
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

<header id="site-header">
    <div class="wrap">
        <div id="logo">
            <a href="index.html">
                <div class="logo-1"></div>
                <div class="logo-2"></div>
                <div class="logo-3"></div>
                <div class="logo-4"></div>
            </a>
        </div>
        <h1 id="wordmark">Scott Jensen <span>Design</span></h1>
        <nav id="site-nav">
            <ul id="main-nav">    
                <li><a class="black-btn work-nav">Work</a></li>
                <li><a href="writing.html" class="black-btn writing-nav">Writing</a></li>
                <li><a href="about.html" class="black-btn about-nav">About</a></li>
                <li><a href="contact.html" class="black-btn contact-nav module-link">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="home-content">
    <section id="project-gallery">
        <div class="wrap">
            <h2><span class="box"></span>Project Gallery</h2>
            <ul class="project-list">
                <li class="project thumb-1" id="project1">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="images/eventboard-product-thumb.jpg" alt="thumbnail" />

                            <h4 class="project-title">EventBoard Product</h4>
                            <div class="project-meta">
                                
                                <p>Identity, Website, Print</p>
                            </div>

                    </div>
                    <a href="projects/project1.html" class="project-link module-link" size="full"></a>
                </li>
                <li class="project thumb-2" id="project2">
                    <div class="live-area">
                        <div class="overlay"></div>
                        <img src="images/ender-thumb.jpg" alt="thumbnail" />

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
                        <img src="images/track8-thumb.jpg" alt="thumbnail" />

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
                        <img src="images/neutron-thumb.jpg" alt="thumbnail" />

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
                        <img src="images/blueprints-thumb.jpg" alt="thumbnail" />

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
                        <img src="images/eventboard-marketing-thumb.jpg" alt="thumbnail" />

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

<footer>
    <div class="wrap">
        <p>
        &copy; 2015 Scott Jensen
        </p>
        <div class="share-links">
            <a href="https://twitter.com/_scottjensen" target="_blank" class="twitter">Twitter</a>
            <a href="https://dribbble.com/scottjensen" target="_blank" class="dribbble">Dribbble</a>
            <a href="https://github.com/scott-jensen" target="_blank" class="github">Github</a>
        </div>
    </div>
</footer>
</body>
</html>