<div id="login-form">
   <div class="container">
      <h3>Forgot Your Password?</h3>
	<?php if ( $attributes['show_title'] ) : ?>
		<h3><?php _e( 'Forgot Your Password?', 'personalize-login' ); ?></h3>
	<?php endif; ?>

	<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
		<?php foreach ( $attributes['errors'] as $error ) : ?>
			<p>
				<?php echo $error; ?>
			</p>
		<?php endforeach; ?>
	<?php endif; ?>

	<p>
		<?php
			_e(
				"Enter your email address and we'll send you a link you can use to pick a new password.",
				'personalize_login'
			);
		?>
	</p>

   <div class="login-page">
	<form action="<?php echo wp_lostpassword_url(); ?>" method="post">
		<div class="form-group">
			<input type="text" name="user_login" id="user_login" placeholder="Email">
		</div>

		<div class="form-group">
			<input class ="button-submit" type="submit" name="submit" class="lostpassword-button"
			       value="<?php _e( 'Reset Password', 'personalize-login' ); ?>"/>
		</div>
	</form>
</div>