<?php

add_settings_section(
  'wp_trigger_github_general_settings_section',
  'WP Trigger Github Settings',
  array($this, 'my_section_options_callback'),
  'wp_trigger_github_general_settings'
);

add_settings_field(
  'option_username',
  'Repository Owner Name',
  array($this, 'my_textbox_callback'),
  'wp_trigger_github_general_settings',
  'wp_trigger_github_general_settings_section',
  array(
    'option_username'
  )
);

add_settings_field(
  'option_repo',
  'Repository Name',
  array($this, 'my_textbox_callback'),
  'wp_trigger_github_general_settings',
  'wp_trigger_github_general_settings_section',
  array(
    'option_repo'
  )
);

add_settings_field(
  'option_token',
  'Personal Access Token',
  array($this, 'my_password_callback'),
  'wp_trigger_github_general_settings',
  'wp_trigger_github_general_settings_section',
  array(
    'option_token'
  )
);

add_settings_field(
  'option_workflow',
  'Actions Workflow Name',
  array($this, 'my_textbox_callback'),
  'wp_trigger_github_general_settings',
  'wp_trigger_github_general_settings_section',
  array(
    'option_workflow'
  )
);

add_settings_field(
  'option_trigger',
  'Trigger on save',
  array($this, 'my_checkbox_callback'),
  'wp_trigger_github_general_settings',
  'wp_trigger_github_general_settings_section',
  array(
    'option_trigger'
  )
);


register_setting('wp_trigger_github_general_settings', 'option_token');
register_setting('wp_trigger_github_general_settings', 'option_username');
register_setting('wp_trigger_github_general_settings', 'option_repo');
register_setting('wp_trigger_github_general_settings', 'option_workflow');
register_setting('wp_trigger_github_general_settings', 'option_trigger');
