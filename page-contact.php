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
			<p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque.
</p>
			<form>
				<ul>
					<li>
						<label>Your Name</label>
						<input type="text" id="contact-name">
					</li>
					<li>
						<label>Email</label>
						<input type="text">
					</li>
					<li>
						<label>Email</label>
						<textarea></textarea>
					</li>
					<li>
						<input type="submit" value="Send" class="black-btn" />
					</li>
				</ul>

			</form>

		</div>

	</section>
<?php include(TEMPLATEPATH . '/footer.php'); ?>
	