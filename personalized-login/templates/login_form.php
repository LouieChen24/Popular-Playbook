<div id="login-form">
    <div class="container">
        <h3>Log Into Your Account</h3>
<?php if ( $attributes['show_title'] ) : ?>
    <h2><?php _e( 'Sign In', 'personalize-login' ); ?></h2>
<?php endif; ?>

<!-- Show errors if there are any -->
<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
    <?php foreach ( $attributes['errors'] as $error ) : ?>
        <p class="login-error">
            <?php echo $error; ?>
        </p>
    <?php endforeach; ?>
<?php endif; ?>

<!-- Show logged out message if user just logged out -->
<?php if ( $attributes['logged_out'] ) : ?>
    <p class="login-info">
        <?php _e( 'You have signed out. Would you like to sign in again?', 'personalize-login' ); ?>
    </p>
<?php endif; ?>


<div class="login-page"> 
  <form method="post" action="<?php echo wp_login_url(); ?>">
      <div class="form-group">
        <input type="text" name="log" placeholder ="Email" id="user_login">
</div>
      <div class="form-group">
        <input type="password" name="pwd" placeholder ="Password" id="user_pass">
</div>
      <div class="form-group">
        <a href="<?php echo wp_lostpassword_url(); ?>">
          <?php _e( 'Forgot your password?', 'personalize-login' ); ?>
        </a>
      </div>
      <div class="form-group">
        <input class ="button-submit" type="submit" value="<?php _e( 'Sign In', 'personalize-login' ); ?>">
</div>
      <div class="form-group">
          <div class="signup-container">
              Don't Have An Account? <a href="<?php echo wp_registration_url(); ?>">Sign Up
          </div>
      </div>
  </form>
    </div>
    </div>