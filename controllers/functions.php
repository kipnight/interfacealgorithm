<?php

class alpha {

    private $db;
    private $link;

    //this is the constructor for this class    
    function __construct() {
        require('_db_con.php');
        $this->db = new db_connect();
        $this->link = $this->db->connect();
    }

    //for cleaning stings from UX,
    public function clean($input) {

        $input = trim($input);
        $input = htmlspecialchars($input);
        $input = mysql_real_escape_string($input);

        return $input;
    }

    public function validate_user($username, $password) {
        //this function validate a username and password

        $username = $this->clean($username);
        $password = $this->clean($password);

        $sql = "SELECT * FROM users WHERE username='" . $username . "'";

        $query = mysql_query($sql) or die(mysql_error());

        if (mysql_num_rows($query) > 0) {

            //if there is a result from running the above statement, 
            //assign query result to $results below
             $results = mysql_fetch_array($query);
             
        

            //out of the  array variable $results, index salt is assigned to variable $salt
            $salt = $results['salt'];

            //out of the  array variable $results, index user_pass is assigned to variable $encrypted_password
            //NB user_pass is in encrypted form
            $encrypted_password = $results['password'];

            $hash = $this->checkEnrcyption($salt, $password); //"8gOLTdjV9A30Eju+ft8kH4sci+NmOGIwYmE5ZGFj";

            if ($encrypted_password == $hash) {

                if ($results['user_status'] == 'deactivated') {
                    return "deactivated"; //Deactivated
                } else {
                    $this->lastloggedin($results['id']);
                    //user exists correct details
                    return $results;
                }
            } else {
                return "nomatch"; //wrong details
            }
        } else {
            return "notexist"; //not exist
        }
    }

    public function checkEnrcyption($salt, $password) {
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
        return $hash;
    }

    //Updates Last Login time now

    public function lastloggedin($userid) {

        $sql = "UPDATE  users SET  last_login =  NOW() WHERE id = '$userid'";
        $query = mysql_query($sql, $this->link) or die(mysql_error());
        if (mysql_affected_rows($this->link) == 1) {

            return true;
        } else {
            return false;
        }
    }
    
      public function create_message_center() {

             echo json_encode(array('success' => 1, 'message' => 'message ilifika yawa'));
        
           
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

