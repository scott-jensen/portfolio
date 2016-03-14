<?php include(TEMPLATEPATH . '/header.php'); ?>
<body class="contact-page dark">
	<script>
    $(document).ready(function(){
    	$('.contact-nav').addClass('selected');
    	if(self == top){
    		$('body').removeClass('dark');
    		$('body').addClass('contact-not-inline');
    	};
    	setTimeout(function(){
    		$('#contact-name').focus();
    	}, 50);
    	
    	$('#submit-button').click(function(event){
    		event.preventDefault();
    		
    		var inputCount = 0;
			$('.form-field').each(function(){
				if($(this).val() != ''){
					inputCount++
					$(this).removeClass('error-input');
				}
				else{
					$(this).addClass('error-input');
				}

			});
			
			if($('#contact-robot').val() == '18'){
				$('#contact-robot').removeClass('error-input');
			}
			else {
				inputCount--;
				$('#contact-robot').addClass('error-input');
			};
			if (inputCount == 4){
				//submit the form
				$('#the-form').submit();
				return true;
			};
			return true;

    	});
    });
    	
    </script>
<?php include(TEMPLATEPATH . '/navigation.php'); ?>
	<section class="contact-me">

		<div class="wrap">
			<h2><span class="box"></span>Say Hello!</h2>
			
			<form method="post" name="myemailform" id="the-form" action="<?php echo bloginfo( 'template_directory' ) . '/form-to-email.php'; ?>">
                
				<ul>
					<li>
						<label>Your Name</label>
						<input type="text" name="name" id="contact-name" class="form-field">
					</li>
					<li>
						<label>Email</label>
						<input type="text" name="email" id="contact-email" class="form-field">
					</li>
					<li>
						<label for='robot'>13 + 5 = ?</label>
                		<input type="text" name="robot" id="contact-robot" class="form-field">
					<li>
						<label>Your Message</label>
						<textarea name="message" id="contact-message" class="form-field"></textarea>
					</li>
					<li>
						<input type="submit" name='submit-btn' value="submit" class="black-btn" id="submit-button" />
					</li>
				</ul>

			</form>

		</div>

	</section>
<?php include(TEMPLATEPATH . '/footer.php'); ?>
	