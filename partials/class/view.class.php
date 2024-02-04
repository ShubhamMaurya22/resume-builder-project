<?php 
  class View{
    public function load($page,$data=array()){
      global $action;
      extract($data,EXTR_SKIP);
      include("partials/$page.php");
      // include("$page.php");
    }
  }
?>