<?php
include 'rooting.php';
include URL.'\\model\\session.php' ;
include URL.'\\model\\database.php';
include URL.'\\model\\cookie.php';
include URL.'\\model\\password.php';
include URL.'\\model\\config.php';

 $sess               = new Session();
 $cook               = new Cookie();
 $currentPage  = "http://$_SERVER[HTTP_HOST]$_SERVER[SCRIPT_NAME]";
 $check             = ($sess->exist("login" , "true") || $cook->exist("login" , "true") )? true : false;
 $loginUrl          ="http://localhost/fashion-gate/login/";
 $homeUrl         ="http://localhost/fashion-gate/home/";
 $request = $page = '';
 if(@$_GET['request']){
  $request =  $_GET['request'];
  $sess->set("request" , $request) ;
 }
 if (@$_GET['page']) {
 $page       = $_GET['page'] ;
 $sess->set("page" , $page) ;
 }


 if(!empty($page) && strcmp($request , 'login') == 0){
  if($check){
   header("location: $page");
  }else{
   header("location: $loginUrl");
  }
}else{
    if(!empty($page) &&  $check){
      $sess->destroy();
      $cook->del("login" , "true");
      header("location: $page");
    }elseif($check && strcmp($currentPage , $loginUrl) == 0){
      header("location: $homeUrl");
    }
  }
