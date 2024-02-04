<?php
  include ('load.php');
$url = $_GET['url'];
$action->db->delete('resumes',"url= '$url'");
header ("Location: /ARB project/dashboard.php?rdelete=true");