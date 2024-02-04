<?php
session_start();
//  echo 'Logging you out. Please wait';

 session_destroy();
 header ("Location: /ARB project?logoutsuccess=true");


?>