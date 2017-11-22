<div id="login-form">
	<div class="container">
		<h3>Register An Account</h3>
	<?php if ( $attributes['show_title'] ) : ?>
		<h3><?php _e( 'Register', 'personalize-login' ); ?></h3>
	<?php endif; ?>

	<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
		<?php foreach ( $attributes['errors'] as $error ) : ?>
			<p>
				<?php echo $error; ?>
			</p>
		<?php endforeach; ?>
	<?php endif; ?>

	<div class="login-page">
	  <form action="<?php echo wp_registration_url(); ?>" method="post">
		<div class="form-group">
			<input type="text" name="email" id="email" placeholder ="Email">
</div>
		<div class="form-group">
			<input type="text" name="first_name" id="first-name" placeholder="First Name">
</div>

		<div class="form-group">
			<input type="text" name="last_name" id="last-name" placeholder ="Last Name">
</div>

		<div class="form-group">
			<?php _e( 'Note: Your password will be generated automatically and emailed to the address you specify above.', 'personalize-login' ); ?>
</div>

		<?php if ( $attributes['recaptcha_site_key'] ) : ?>
			<div class="recaptcha-container">
				<div class="g-recaptcha" data-sitekey="<?php echo $attributes['recaptcha_site_key']; ?>"></div>
			</div>
		<?php endif; ?>

		<p></p>

		<div class="form-group">
			<input class ="button-submit" type="submit" name="submit" 
			       value="<?php _e( 'Register', 'personalize-login' ); ?>"/>
</div>
	</form>
</div>
</div>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>