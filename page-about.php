<?php include(TEMPLATEPATH . '/header.php'); ?>
<body class="article-page about">
    <script>

        $(document).ready(function(){
            $('.about-nav').addClass('selected');
            contactForm();
            pieChart();
            module();
            $('.entry').dropcap();
        });

    </script>
<?php include(TEMPLATEPATH . '/navigation.php'); ?>

<section id="content">
    <div class="wrap">

        <h1 id="article-title"><span class="box"></span>Let Me Introduce Myself</h1>
        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/article-image.jpg'; ?>" alt="" class="article-cover" />
        <section id="article-content">

                    <article class="entry" id="entry">
                    
                    <p>
                        Aot the last time. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congu. Proin quis tortor orci. Etiam at Risus et justo dignissim congue. Donec cone lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus ongu. Proin quis tortor orci. Etiam at Risus et justo dignissim congue. Donec cone lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus
                    </p>
                    <p>
                        Not the last time. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse <a href="">dictum</a> feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congu. Proin quis tortor orci. <a href="">Etiam at Risus</a> et justo dignissim congue. 
                    </p>
                    <h2><span class="box"></span>My Skillset</h2>

                     <p>
                        Not the last time. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congu. Proin quis tortor orci. Etiam at Risus et justo dignissim congue. 
                    </p>
                    <div class="abilities-section">
                        <section class="pie-chart">
                            <h3>How I Spend My Time</h3>
                            <figure id="skill-pie">
                                <!-- Special thanks to Patrick Denny for help on this http://codepen.io/AtomicNoggin/pen/fEish -->
                                <div class="pie selected" id="design-slice" data-start="0" data-value="150"></div>
                                <div class="pie" id="development-slice" data-start="150" data-value="110"></div>
                                <div class="pie" id="writing-slice" data-start="260" data-value="60"></div>
                                <div class="pie" id="illustration-slice" data-start="330" data-value="30"></div>
                                
                            </figure>
                        </section>
                        <section class="design-abilities abilities">

                            <h4>Design</h4>
                            <ul>
                                <li class="ability">
                                    UI / UX
                                    <div class="bar-graph">
                                        <div class="fill" value="100"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Visual Design
                                    <div class="bar-graph">
                                        <div class="fill" value="100"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Marketing Design
                                    <div class="bar-graph">
                                        <div class="fill" value="85"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Art Direction
                                    <div class="bar-graph">
                                        <div class="fill" value="75"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Branding
                                    <div class="bar-graph">
                                        <div class="fill" value="70"></div>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <section class="development-abilities abilities">

                            <h4>Development</h4>
                            <ul>
                                <li class="ability">
                                    HTML
                                    <div class="bar-graph">
                                        <div class="fill" value="85"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    CSS
                                    <div class="bar-graph">
                                        <div class="fill" value="85"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Javascript / JQuery
                                    <div class="bar-graph">
                                        <div class="fill" value="60"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    PHP
                                    <div class="bar-graph">
                                        <div class="fill" value="35"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Django
                                    <div class="bar-graph">
                                        <div class="fill" value="8"></div>
                                    </div>
                                </li>

                            </ul>
                        </section>

                        <section class="writing-abilities abilities">

                            <h4>Writing</h4>
                            <ul>
                                <li class="ability">
                                    Descriptive
                                    <div class="bar-graph">
                                        <div class="fill" value="65"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Persuasive
                                    <div class="bar-graph">
                                        <div class="fill" value="60"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Narative
                                    <div class="bar-graph">
                                        <div class="fill" value="50"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Editing
                                    <div class="bar-graph">
                                        <div class="fill" value="40"></div>
                                    </div>
                                </li>


                            </ul>
                        </section>
                        <section class="illustration-abilities abilities">

                            <h4>Illustration</h4>
                            <ul>
                                <li class="ability">
                                    Vector Graphics
                                    <div class="bar-graph">
                                        <div class="fill" value="95"></div>
                                    </div>
                                </li>

                                <li class="ability">
                                    Iconography
                                    <div class="bar-graph">
                                        <div class="fill" value="85"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Sketching
                                    <div class="bar-graph">
                                        <div class="fill" value="80"></div>
                                    </div>
                                </li>
                                
                                <li class="ability">
                                    Digital Painting
                                    <div class="bar-graph">
                                        <div class="fill" value="50"></div>
                                    </div>
                                </li>
                                <li class="ability">
                                    Drawing on Whiteboards
                                    <div class="bar-graph">
                                        <div class="fill" value="1"></div>
                                    </div>
                                </li>


                            </ul>
                        </section>
                    </div>

                    <h2><span class="box"></span>Where You'll Find My Work</h2>
                    <ul class="press-logos full-width">
                        <li>
                            <a href="http://lifehacker.com/5908148/track-8-is-a-beautiful-metro-inspired-music-player-for-the-ipad" target="_blank"><img src="<?php echo bloginfo( 'template_directory' ) . '/images/logo-lifehacker.jpg'; ?>" alt="Lifehacker" /></a>
                        </li>
                        <li>
                            <a href="http://www.wsj.com/articles/new-office-flashpoint-who-gets-the-conference-room-1413307377" target="_blank"><img src="<?php echo bloginfo( 'template_directory' ) . '/images/logo-wsj.jpg'; ?>" alt="WSJ" /></a>
                        </li>
                        <li>
                            <a href="http://beautifulpixels.com/books/iphone-blueprints-a-delicious-guide-for-effective-ui-design/" target="_blank"><img src="<?php echo bloginfo( 'template_directory' ) . '/images/logo-bp.jpg'; ?>" alt="Beautiful Pixels" /></a>
                        </li>
                        <li>
                            <a href="http://techcrunch.com/2015/11/11/eventboard-a-smart-conference-room-booking-startup-raises-6-5m/" target="_blank"><img src="<?php echo bloginfo( 'template_directory' ) . '/images/logo-techcrunch.jpg'; ?>" alt="VentureBeat" /></a>
                        </li>
                        <li>
                            <a href="http://www.forbes.com/sites/katiasavchuk/2014/10/01/room-scheduling-startup-raises-1-5-million-from-google-ventures-marc-benioff-zetta-venture-partners/" target="_blank"><img src="<?php echo bloginfo( 'template_directory' ) . '/images/logo-forbes.jpg'; ?>" alt="Forbes" /></a>
                        </li>
                        
                        
                    </ul>
    
                    </article>
                    

        </section>


        <aside>

            <h3 class="find-me"><img src="<?php echo bloginfo( 'template_directory' ) . '/images/avatar.png'; ?>" alt="avatar" class="avatar" />Where You <br />Can Find Me</h3>
            <ul class="share-links social-media">
                <li>
                    <a href="https://twitter.com/_scottjensen" target="_blank" class="twitter">Twitter</a>
                    <h4>Twitter</h4>
                    <p>@_ScottJensen</p>
                </li>
                <li>
                    <a href="https://dribbble.com/scottjensen" target="_blank" class="dribbble">Dribbble</a>
                    <h4>Dribbble</h4>
                    <p>/scottjensen</p>
                </li>
                <li>
                    <a href="https://github.com/scott-jensen" target="_blank" class="github">Github</a>
                    <h4>Github</h4>
                    <p>/scott-jensen</p>
                </li>

               
            </ul>
            
        </aside>
    </div>

</section>
<?php include(TEMPLATEPATH . '/footer.php'); ?>