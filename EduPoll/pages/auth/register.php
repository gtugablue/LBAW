<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  include_once('../common/utils.php');
  
  $smarty->display('auth/register.tpl');
?>