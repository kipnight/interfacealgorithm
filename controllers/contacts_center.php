<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




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