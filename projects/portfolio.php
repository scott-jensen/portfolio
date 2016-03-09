<?php /* Template Name: Project Template */ ?>
<?php include(TEMPLATEPATH . '/header.php'); ?>

<body class="project-page" id="project1">
<script>

$(document).ready(function(){
    $('.work-nav').addClass('selected');
    projectGallery();
    module();
    dispatch();

});

</script>
<?php include(TEMPLATEPATH . '/navigation.php'); ?>
<div id="full-project">
    <article id="project-info">

        <h1>CCA Trade show</h1>
        <div class="project-details">
            <h4>Client:</h4>
            <p>Neutron Interactive</p>
            <h4>Media:</h4>
            <p>Identity, Web, Print</p>
            <p>
                Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui.
            </p>
           
        </div>
        <div class="related-projects-box">
            <h4>Related Projects:</h4>
            <ul id="related-projects">
                <li><a href="http://betacrumb.com" id="project1" class="related-project"><img src="../images/thumbnail.png" alt="thumbnail"></a></li>
                <li><a href="http://betacrumb.com" id="project2" class="related-project"><img src="../images/thumbnail.png" alt="thumbnail"></a></li>
            </ul>
        </div>

    </article>
    <!--
    <div id="load-wrapper">
        <div id="animation-block">
            <div class="bar1"><div class="bar"></div></div>
            <div class="bar2"><div class="bar"></div></div>
            <div class="bar3"><div class="bar"></div></div>
        </div>
        <span class="loading">Loading</span>
    </div>
-->

    <ul id="project-slides">
        <li id="slide1" class="slide"><img src="../images/project-images/neutron3.jpg" alt="Project Image" class="project-image" /></li>
        <li id="slide2" class="slide"><img src="../images/project-images/blueprints4.jpg" alt="Project Image" class="project-image" /></li>
        <li id="slide3" class="slide"><img src="../images/project-images/enderlabs-5.jpg" alt="Project Image" class="project-image" /></li>
        <li id="slide4" class="slide"><img src="../images/project-images/eventboard-marketing4.jpg" alt="Project Image" class="project-image" /></li>
        <li id="slide5" class="slide"><img src="../images/project-images/eventboard-marketing1.jpg" alt="Project Image" class="project-image" /></li>
        <li id="slide6" class="slide"><img src="../images/project-images/track8-2.jpg" alt="Project Image" class="project-image" /></li>
        <li id="slide7" class="slide"><img src="../images/project-images/track8-3.jpg" alt="Project Image" class="project-image" /></li>
    </ul>

    <div id="next-btn"></div>
    <div id="prev-btn"></div>
</div>
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