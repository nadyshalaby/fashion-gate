<?php

/**
CLS_NAME : Cookie
AUTHOR : nady shalaby
DATE : 5/9/2015
*/

class Cookie {

    //set method to create new cookie if not exists
    function set($name , $value , $time){
        if (!isset($_COOKIE[$name])){
            setCookie($name,$value,$time);
            return true;
        }
        return false;
    }

    //get method return the value of the specified cookie if exist
    function get($name ){
        if (isset($_COOKIE[$name])){
            return $_COOKIE[$name];
        }
        return null;
    }

    // del method deletes the specified cookie if exist
    function del($name , $value){
        if (isset($_COOKIE[$name])){
            setCookie($name,$value, -1);
            return true;
        }
        return false;
    }

    //change method alter an existing method
    function change($name , $value , $time){
        if(isset($_COOKIE[$name])){
            setCookie($name , $value , $time);
            return true;
        }
        return false;
    }

    //exist method checks the existance of specified cookie
    function exist($name , $value){
      return (isset($_COOKIE[$name]) && strcmp($this->get($name) , $value) == 0);
    }

}
