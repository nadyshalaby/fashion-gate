<?php

/**
CLS_NAME : Password
AUTHOR : Nady shalaby
DATE : 5/9/2015
ABOUT : Password hasing class

*/

class Password {

  private $pass ;

  // constructor to rehash password according ot PHP default algorithm
  function __construct($pass){
    $this->pass = $pass;
  }

  // check method used to verify the rightness of password
  function check($pass , $value){
    return password_verify($pass , $value);
  }

  // rehash password if it needs to be rehashed
  function rehash($value){
    if(password_needs_rehash($value , PASSWORD_DEFAULT)){
      return password_hash($value , PASSWORD_DEFAULT);
    }

    return $value;
  }

  function __toString(){
    return password_hash($this->pass,PASSWORD_DEFAULT);
  }
}
