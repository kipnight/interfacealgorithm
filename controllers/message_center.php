<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo '  <!--tab-links-->

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