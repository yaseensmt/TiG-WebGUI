<?php

$config = array(
  'admin_user' => 'admin',
  'admin_pass' => '$2y$10$N1SMwCO4L7AsjHCt1.ZQQOsem.2hM8j6IT1F5Fd5NLRhRXQyr532.'
);

if ( $auth_details = fopen(RASPI_CONFIG.'/raspap.auth', 'r') ) {
  $config['admin_user'] = trim(fgets($auth_details));
  $config['admin_pass'] = trim(fgets($auth_details));
  fclose($auth_details);
}

?>
