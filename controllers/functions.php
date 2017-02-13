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

        $html_script = '  <!--tab-links-->

                <div class="tab-links">
                    <ul id="myTab" class="nav nav-tabs">  
                    <li class="active"><a href="#send_messages" data-toggle="tab">Send Messages </a> </li>    
                    <li><a href="#view_sent_messages" data-toggle="tab">View Sent Messages</a></li>    
                    <li> <a href="#message_template"  data-toggle="tab">Message Templates</a> </li>     
                    </ul>
                </div>
                <!--tab-links-->

                <!--tab-content-->
                <div id="myTabContent" class="tab-content">
                    <br> 
                    <div class="tab-pane fade in active" id="send_messages">                            
                        <div class="panel panel-default"> 
                            <div class="panel-heading"> <h3 class="panel-title">Send Message</h3>                                                
                             </div><!--panel-heading-->                               
                            <div class="panel-body"> 
                                <form role="form"> 
                                    <div class"row ">
                                        <br>
                                        <div   class="form-group col-xs-6 col-md-offset-3"> 
                                         <label class="col-xs-6 col-md-offset-3" for="contact_group">Contacts Group</label>
                                             <select class="form-control contact_group" id="contact_group" name="contact_group" role="menu">                      
                                            </select>
                                         </div> 
                                        <div   class="form-group col-xs-6 col-md-offset-3""> 
                                            <label class="col-xs-6 col-md-offset-3" for="name">Messages</label> 
                                            <textarea id="txt_area_message" class="form-control" rows="7"></textarea>
                                            <br>
                                            <button id="i_send_message_button" type="submit" class="btn btn-primary ">Send <span class="glyphicon glyphicon-send"></span> 
                                            </button>
                                         </div> 
                                    </div>
                                </form> 
                            </div><!--panel-body-->  
                            <div class="panel-footer">
                             </div><!--panel-footer--> 
                         </div><!--panel-->
                    </div> <!--tab-pane send_messages-->



                    <div class="tab-pane fade" id="view_sent_messages"> 
                        <div class="panel panel-default">                                     
                            <div class="panel-heading"> <h3 class="panel-title">Send Message</h3>                                                
                             </div><!--panel-heading-->
                            <div class="panel-body"> View Sent Messages
                            </div><!--panel-body-->                                      
                            <div class="panel-footer">
                             </div><!--panel-footer--> 
                        </div><!--panel-->
                    </div><!--tab-pane-->



                    <div class="tab-pane fade" id="message_template">                          
                                     <div class="panel panel-default"> 
                                            <div class="panel-heading"> <h3 class="panel-title">Send Message</h3>                                                
                                         </div><!--panel-heading-->
                                        <div class="panel-body"> Message Templates
                                        </div><!--panel-body-->                                      
                                        <div class="panel-footer">
                                         </div><!--panel-footer--> 
                                    </div><!--panel--->
                    </div><!--tab-pane message_template-->
                </div><!--tab-content myTabContent-->
';

        echo $html_script;
    }

    public function create_contact_center() {


        echo ' <div class="tab-links">

                    <ul id="myTab" class="nav nav-tabs">  
                    <li class="active"><a href="#view_contacts" data-toggle="tab">View Contacts </a> </li>    
                     <li><a href="#add_contact" data-toggle="tab">Add Contacts</a></li> 
                    <li><a href="#add_category" data-toggle="tab">Add Category</a></li> 
                    <li><a href="#import_contacts" data-toggle="tab">Import Contact</a></li> 
                    <li> <a href="#export_contacts"  data-toggle="tab">Export Contact</a> </li>     
                    </ul>


                </div>
                <!--tab-links-->

                <!--tab-content-->

                <div id="myTabContent" class="tab-content"> 
                                     <br> 
                                
                                    <div class="tab-pane fade in active" id="view_contacts"> <!--tab-pane view_contacts -->  


                                               
                                            <div class="panel panel-default"> 
                                                  

                                                <div class="panel-heading"> <h3 class="panel-title">Contact</h3>
                                                             <div align="center">

                                                            <ul class="pagination"> <li><a href="#">&laquo;</a></li> <li><a href="#">1</a></li> <li><a href="#">2</a></li> <li><a href="#">3</a></li> <li><a href="#">4</a></li> <li><a href="#">5</a></li> <li><a href="#">&raquo;</a></li> </ul>

                                                         </div>
                                                 </div><!--panel-heading-->

                                                  <div class="panel-body">

                                                    <div  class="table_wrrapper"><!--table_wrrapper-->
                                            

                                            
                                            <div class="table-responsive"><!--table-responsive-->
                                                     <table class="table table-striped">
                                                     <thead>
                                                     <tr>
                                                      <th>#</th>
                                                     <th>Firstname</th>
                                                     <th>Lastname</th>
                                                     <th>Phonenumber</th>
                                                     </tr>
                                                     </thead>
                                                     <tbody>
                                                     <tr>
                                                     <td>1</td>
                                                     <td>Michael</td>
                                                     <td>George</td>
                                                     <td>0727754191</td>
                                                     </tr>
                                                     </tr>
                                                     </thead>
                                                     <tbody>
                                                     <tr>
                                                     <td>1</td>
                                                     <td>Michael</td>
                                                     <td>George</td>
                                                     <td>0727754191</td>
                                                     </tr>  </tr>
                                                     </thead>
                                                     <tbody>
                                                     <tr>
                                                     <td>1</td>
                                                     <td>Michael</td>
                                                     <td>George</td>
                                                     <td>0727754191</td>
                                                     </tr>  </tr>
                                                     </thead>
                                                     <tbody>
                                                     <tr>
                                                     <td>1</td>
                                                     <td>Michael</td>
                                                     <td>George</td>
                                                     <td>0727754191</td>
                                                     </tr>  </tr>
                                                     </thead>
                                                     <tbody>
                                                     <tr>
                                                     <td>1</td>
                                                     <td>Michael</td>
                                                     <td>George</td>
                                                     <td>0727754191</td>
                                                     </tr>
                                                     </tbody>

                                                     </table>
                                               </div>  <!--table-responsive-->



                                        </div><!--table_wrrapper-->


                                                  </div> <!--panel-body-->  
                                                    <div class="panel-footer">
                                                            <div align="center">

                                                           <ul class="pagination"> <li><a href="#">&laquo;</a></li> <li><a href="#">1</a></li> <li><a href="#">2</a></li> <li><a href="#">3</a></li> <li><a href="#">4</a></li> <li><a href="#">5</a></li> <li><a href="#">&raquo;</a></li> </ul>

                                                            </div>
                                                    </div> <!--panel-footer-->
                                             </div>




                                      
                                    </div> <!--tab-pane view_contacts -->





                        <div class="tab-pane fade" id="add_contact"> 
                                <div class="panel panel-default"> 

                                    <div class="panel-heading"> <h3 class="panel-title">Add Contacts</h3>
                                                            
                                     </div><!--panel-heading-->

                                    <div class="panel-body"> 
                     
										<form  role="form"> 
                                            <div class"row">
											
													<div   class="col-xs-4 form-group"> 
														<label for="contact_name">Name</label>
														 <input type="text" class="form-control" id="contact_name" name="contact_name" required>
													 </div> 

													 <div   class="col-xs-3 form-group"> 
															   <label for="phone_number">Number</label>
																 <input type="text" class="form-control" id="phone_number" name="phone_number" required>               
													 </div>

													<div   class="col-xs-5 form-group">                                                             
														<label for="contact_group">Select list</label>  
														<select id="contact_group" name="contact_group" class="form-control"> 
															<option>1</option> <option>2</option> 
														</select> 
													</div> 
												
										 	</div><!--row--> 
												
										</form> 			
												
									</div><!--panel-body-->  
								   
                                    <div class="panel-footer">
						   
										<button id="i_save_contact_button" type="submit" class="btn btn-primary ">Save Contact <span class="glyphicon glyphicon-save"></span> 
										</button>
                                               

                                    </div> <!--panel-footer-->
                                </div><!--panel-->	
                         </div><!--tab-pane import_contacts-->
                    

            
            
            
                        <div class="tab-pane fade" id="add_category"> 
                                <div class="panel panel-default"> 

                                    <div class="panel-heading"> <h3 class="panel-title">Add Contacts Category</h3>
                                                            
                                     </div><!--panel-heading-->

                                    <div class="panel-body"> 
                     
                                        <form  role="form"> 
                                            <div class"row">
											
                                                <div   class="col-xs-4 form-group"> 
                                                        <label for="category_name">Name</label>
                                                         <input type="text" class="form-control" id="category_name" name="category_name" required>
                                                 </div> 
  
                                                </div><!--row--> 

                                        </form> 			
												
                                    </div><!--panel-body-->  
								   
                                    <div class="panel-footer">
						   
                                        <button id="i_save_category_button" type="submit" class="btn btn-primary ">Save Category <span class="glyphicon glyphicon-save"></span> 
                                        </button>


                                    </div> <!--panel-footer-->
                                </div><!--panel-->	
                         </div><!--tab-pane import_contacts-->

            
            
            
                        <div class="tab-pane fade" id="import_contacts"> 
                               
                                <div class="panel panel-default"> 

                                    <div class="panel-heading"> <h3 class="panel-title">Import Contact From Spreadsheets or CSV File</h3>
                                                            
                                     </div><!--panel-heading-->

                                    <div class="panel-body"> 
                                        <form role="form">
                                            <div class="form-group"> 
                                                <label for="inputfile">Choose File Containg Contact To be Uploaded</label>
                                                <input type="file" id="inputfile">
                                                <p class="help-block">Example block-level help text here.</p> 
                                            </div>
                                        </form>
                                   </div>  
                                    <div class="panel-footer">
                                           
                                                        <button id="i_send_message_button" type="submit" class="btn btn-primary ">Import <span class="glyphicon glyphicon-import"></span> 
                                                        </button>
                                               

                                    </div> <!--panel-footer-->
                                </div><!--panel-->
                        </div><!--tab-pane import_contacts-->
                    

                <div class="tab-pane fade" id="export_contacts"> 
                                      
                                    <div class="panel panel-default"> 

                                                 <div class="panel-heading"> <h3 class="panel-title">Export Contact</h3>
                                                            
                                                 </div><!--panel-heading-->
                                           <div class="panel-body">Export Contacts to Spreadsheets or CSV File
                                            
                                             <form role="form"> 
                                                <div class"row ">
                                                    <br>
                                                    <div   class="form-group col-xs-6 col-md-offset-3"> 
                                                     <label class="col-xs-6 col-md-offset-3" for="contact_group">Contacts</label>
                                                         <select class="form-control" id="contact_group" name="contact_group" role="menu">                      
                                                        </select>
                                                     </div> 
 
                                                </div>
                                            </form> 

                                           </div><!--panel-body-->  
                                            <div class="panel-footer">


                                                    
                                                        <button id="i_send_message_button" type="submit" class="btn btn-primary ">Export <span class="glyphicon glyphicon-export"></span> 
                                                        </button>
                                               

                                            </div> <!--panel-footer-->
                                    </div><!--panel-->
                        </div>
                </div>
                <!--tab-content-->;

';
    }

    public function create_report_center() {
        echo 'creating report center';
    }

    public function create_task_center() {

        echo 'creating task center';
    }

    public function create_others_center() {

        echo 'creating other centers';
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

