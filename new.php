<?php

if (count($argv) > 1)
{
  require 'ksm/User.php';
  $username = $argv[1];
  $user = new User($username);
  var_dump($user);
  echo('Stop');
}else{
  die('No Parameters');
}
//
die('My New Repo with another submodule branch');
