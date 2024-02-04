<?php 
  class Hepler{
    public static $is_pageIsAvailable=false;

    public function UID(){
      $str='xyzqwtyu'.time();
      return str_shuffle($str);
    }
    public function loadcss($file_name,){
      return ASSET_URL. 'css/'.$file_name;
    }

    public function loadjs($file_name,){
      return ASSET_URL. 'js/'.$file_name;
    }
    public function isAnyEmpty($array){
      foreach($array as $key =>$value){
        if(!$value) return $key;
      }
      return false;
    }
    public function redirect($route){
      header("location:".SITE_URL.$route);
    }


    public function url($route){
      return SITE_URL.$route;
    }
    public function route($path_url,$function){
      $address_bar_url= $_SERVER['PATH_INFO'] ?? NULL;

      if(!$address_bar_url && $path_url == '/'){
        self::$is_pageIsAvailable=true;
        $function(array());
      }


      $is_valid = true;
    
      // for removing '/' from starting and ending in url
      $address_bar_url= rtrim($address_bar_url,'/');
      $address_bar_url= ltrim($address_bar_url,'/');

      $abu_data=explode('/',$address_bar_url);
      $pu_data=explode('/',$path_url);
      $data = array();

      foreach($pu_data as $index=> $parameter){
        if(!isset($abu_data[$index]))return;
        if($abu_data[$index] == $parameter){
          
        }elseif(str_contains($parameter,'$')){
          $data[ltrim($parameter,'$')] = $abu_data[$index];
        }else{
          $is_valid= false;
        }
      }
    
      

      if($is_valid){
        self::$is_pageIsAvailable=true;
        $function($data);
      }
    }
  }
?>