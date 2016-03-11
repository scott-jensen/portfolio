<?php include(TEMPLATEPATH . '/header.php'); ?>
<body class="contact-page dark">
	<script>
    $(document).ready(function(){
    	$('.contact-nav').addClass('selected');
    	if(self == top){
    		$('body').removeClass('dark');
    		$('body').addClass('contact-not-inline');
    	}
    	setTimeout(function(){
    		$('#contact-name').focus();
    	}, 50)
    	
    })
    	
    </script>
<?php include(TEMPLATEPATH . '/navigation.php'); ?>
	<section class="contact-me">

		<div class="wrap">
			<h2><span class="box"></span>Say Hello!</h2>
			
			<form method="post" name="myemailform" action="<?php echo bloginfo( 'template_directory' ) . '/form-to-email.php'; ?>">
                
				<ul>
					<li>
						<label>Your Name</label>
						<input type="text" name="name" id="contact-name">
					</li>
					<li>
						<label>Email</label>
						<input type="text" name="email">
					</li>
					<li>
						<label for='robot'>13 + 5 = ?</label>
                		<input type="text" name="robot">
					<li>
						<label>Your Message</label>
						<textarea name="message"></textarea>
					</li>
					<li>
						<input type="submit" name='submit' value="submit" class="black-btn" />
					</li>
				</ul>

			</form>

		</div>

	</section>
<?php include(TEMPLATEPATH . '/footer.php'); ?>
	