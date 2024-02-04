<?php 

 class Action{
    public $db,$session,$custon,$view,$helper;
   
    function user_id(){
       global $_SESSION;
    //    return $action->session->get('user_id');
        return $_SESSION['user_id']['data']['user_id']??'';
    }
    function onlyForAuthUser(){
        if(!$this->session->get('user_id')) header ("Location: /ARB project/");
    }
    function onlyForUnauthUser(){
        if($this->session->get('user_id')) header ("Location: /ARB project/home.php");
        
    }
    function __construct(){
        $this ->db = new Database;
        $this ->session = new Session;
        $this ->custom = new Custom;
        $this ->view = new View;
        $this ->helper = new Hepler;
     
    }
 }
?>