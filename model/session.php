<?php

/**
    @CLS_NAME: Session
    @AUTHOR: nady shalaby
    @DATE: 8/22/2015
    @DESC: Session class enables you to set , get and change your Sessions
    with easiness
*/
class Session{

    /** Constructor to start sessions only */
    function __construct(){
        session_start();
    }

    /** check if the Wanted Session Exists or Not*/
    function exist($name , $val){
        if(isset($_SESSION[$name]) && strcmp($_SESSION[$name],$val) == 0){
            return true;
        }
        return false;
    }

    /**set sessions if not Exists */
    function set($name , $val){
        if(!isset($_SESSION[$name])){
            $_SESSION[$name] = $val;
        }

    }

    /** get the demmanded Session if exists*/
    function get($name){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }else{
            return "";
        }

    }

    /** change the Sessions if it  exsits .... if not set it as new one */
    function change($name , $val){

        if(isset($_SESSION[$name])){
            $_SESSION[$name] = $val;
        }else{
            $this->set($name , $val);
        }
    }

    /** destroy the sessions for all domain*/
    function destroy(){
        session_destroy();
    }

}
