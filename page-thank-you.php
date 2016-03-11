<?php include(TEMPLATEPATH . '/header.php'); ?>
<body class="contact-page dark">
	<script>
    $(document).ready(function(){
    	$('.contact-nav').addClass('selected');
    	if(self == top){
    		$('body').removeClass('dark');
    		$('body').addClass('contact-not-inline');
    	}
    	
    })
    	
    </script>
<?php include(TEMPLATEPATH . '/navigation.php'); ?>
	<section class="contact-me">

		<div class="wrap">
			<h2><span class="box"></span>Message Received!</h2>
			<img src="<?php echo bloginfo( 'template_directory' ) . '/images/dance-bmo-1.gif'; ?>" alt="BMO" />
			<p>
				Thanks for reaching out! I'm probably just perched 
				over my laptop, hitting refresh on my email, and just waiting 
				for a message like that to come in. But even I know how to 
				play hard to get; so it might be up to 24 hours before I get 
				back to you.
			</p>

			

		</div>

	</section>
<?php include(TEMPLATEPATH . '/footer.php'); ?>
	