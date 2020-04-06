<div class="wrap">
    <h2>WP Trigger Github Settings</h2>
    <?php settings_errors(); ?>
    <form method="POST" action="options.php">
      <?php
          settings_fields( 'wp_trigger_github_general_settings' );
          do_settings_sections( 'wp_trigger_github_general_settings' );
      ?>
      <?php submit_button(); ?>
    </form>
</div>
