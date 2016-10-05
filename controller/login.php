<?php
   require_once '../bootstrap.php';
    // login Section
     //check the database for the username and password if ture set new session
    if (isset($_POST[ 'logUserName']) && isset($_POST[ 'logPassword']) && isset($_POST[ 'login'])){
        $userName    = (htmlentities(trim($_POST['logUserName'])));
        $password    = (htmlentities(trim($_POST['logPassword'])));

        if (!empty($userName)  && !empty($password)){
                $db = new Database($_host , $_database , $_username , $_password);
                $db->setQuery("SELECT `username` , `password` FROM `users` WHERE `username` = ?;" , array($userName));
                $db->setMode(Database::ASSOC);
                $pass = new Password($password);
                $actualPassword = $db->getRow()['password'];
                if ($db->countOfRows() > 0 && $pass->check($password , $actualPassword)){
                    $sess->set("login" , "true");

                    // if the remmeber me check box is checked it will set new session for a week and will redirect to the home page
                    if(isset($_POST['remMe']) && strcmp($_POST['remMe'] , 'true') == 0){
                      $cook->set("login" , "true" , time() + (60 * 60 * 60 * 24 * 7));
                    }

                    if(!empty($sess->get("page"))){
                      header('location: '.$sess->get("page"));
                    }else{
                      header('location: '.$homeUrl);
                    }
                }else{
                   echo '<div class="alert alert-danger fade in " > <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> please make sure that your data is correct ... </div>';
                 }
        }
        else{
               echo '<div class="alert alert-danger fade in " > <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> please fill out the input fields with the right data ...</div>' ;
        }
    }
        // Registeration Section
    elseif(isset($_POST["regFullName"]) && isset($_POST["regEmail"]) && isset($_POST["regUserName"]) && isset($_POST["regPassword"]) && isset($_POST["regConfirmPassword"]) && isset($_POST["register"])){
        $fullname       = (htmlentities(trim($_POST['regFullName'])));
        $email          = (htmlentities(trim($_POST['regEmail'])));
        $username       = (htmlentities(trim($_POST['regUserName'])));
        $password       = (htmlentities(trim($_POST['regPassword'])));
        $rePassword     = (htmlentities(trim($_POST['regConfirmPassword'])));
        $check          = false;
        $requiredFields = [];


        // validate the input fields
        if(empty($fullname)){
            $check = true;
            array_push($requiredFields , "Full name");
        }

        if(empty($email)){
            $check = true;
            array_push($requiredFields , "Email");
        }

        if(empty($username)){
            $check = true;
            array_push($requiredFields , "Username");
        }

        if(empty($password)){
            $check = true;
            array_push($requiredFields , "Password");
        }

        if(empty($rePassword)){
            $check = true;
            array_push($requiredFields , "Confirm Password");
        }

        if($check){
            echo '<div class="alert alert-danger fade in " > <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> These Fields ['.implode($requiredFields, ", ").' ] are required <br></div>' ;
        }
        else{
            if(strcmp($password , $rePassword) != 0 ){
                echo '<div class="alert alert-danger fade in " > <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Passwords Doesn\'t match <br> </div>';
            }else{
                // registeration goes here ...
                $query = "INSERT INTO `users` VALUES('' , '$username' , '$fullname' , '".(new Password($password))."', '$email' , '')";
                $db = new Database($_host , $_database , $_username , $_password);
                if($db->setQuery($query)){
                  echo '<div class="alert alert-success fade in " > <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> you have registered successfully <br></div>';
                }
            }
        }

    }
