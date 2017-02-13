<?php

//
session_start();

require('functions.php');

$alpha = new alpha();

//chech if a tag 
if (isset($_POST['tag'])) {

    $tag = $alpha->clean($_POST['tag']);

    //after cleaning the tag we need to call the appropriate fucntion base on the tag
    //in this case if tag is login do the following
    //when the tag is login, ie someone is login in
    //check if username and password were sent on the post request


    switch ($tag) {
        case "login":

            if (isset($_POST['username']) && isset($_POST['password'])) {

                //
                $username = $_POST['username'];
                $password = $_POST['password'];

                //using alpha class function, validate_user  to validate username 
                //and assigning the returned value to $result variable
                $result = $alpha->validate_user($username, $password);

                if ($result == "nomatch") {
                    //incorrect details
                    echo json_encode(array('success' => 0, 'message' => 'Incorrect Username or jjjor Password'));
                    ;
                } else if ($result == "deactivated") {
                    echo json_encode(array('success' => 0, 'message' => 'Account Deactivated. Contact System Admin'));
                    ;
                } else if ($result == "notexist") {
                    //user does not exist
                    echo json_encode(array('success' => 0, 'message' => 'Incorrect Username or Password'));
                    ;
                } else {

                    // the validate_user() function returned an array results  that we are putting as session data
                    $_SESSION['admin_names'] = $result['name'];
                    $_SESSION['admin_id'] = $result['id'];
                    $_SESSION['admin_email'] = $result['email'];
                    $_SESSION['admin_username'] = $result['username'];
                    $_SESSION['admin_login_status'] = 'true';


                    echo json_encode(array('success' => 1, 'message' => 'Login Successful......Redirecting'));
                    ;
                }
            } else {
                $isoc->redirect404();
            }


            break;

        case "messages":

            $response = $alpha->create_message_center();
            //echo json_encode(array('success' => 1, 'response' => $response));
            break;
        case "contacts":
            
             $response = $alpha->create_contact_center();

            //echo json_encode(array('success' => 1, 'response' => $response));
            break;
        
        case "reports":
            
              $response = $alpha->create_report_center();
            //echo json_encode(array('success' => 1, 'response' => $response));
            break;
        
        case "tasks":
            
              $response = $alpha->create_task_center();
            
            //echo json_encode(array('success' => 1, 'response' => $response));
            break;
        
        case "others":
            
              $response = $alpha->create_others_center();
            //echo json_encode(array('success' => 1, 'response' => $response));
            break;

        default:
           // echo json_encode(array('success' => 1, 'response' => $response));
    }
} else {
    //no tag variable has been set, that mean some one trying to access page directly
    die("0");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

