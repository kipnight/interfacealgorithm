$(document).ready(function () {

    var tag = "checkLogin";

    $.post("requesthandler", {tag: tag}, function (data) {


    }, 'JSON');


    send_messages();
    fetch_contact_groups();

    $("ul.nav li.dropdown").hover(function () {
        $(".dropdown-menu", this).fadeIn();

    }, function () {


        $(".dropdown-menu", this).fadeOut();

    }
    );

    $("#messages").click(function () {

        send_messages();
        fetch_contact_groups();

    });

    $("#contacts").click(function () {

        view_contacts();
        fetch_contact_groups();

    });


    $("#tasks").click(function () {

        alert("messages");
        $("#main_content").html("tasks");
        //	alert("done messages");

    });

    $("#reports").click(function () {

        // alert("messages");
        $("#main_content").html("reports");
        //    alert("done messages");

    });


});


//................................................
//FUNCTIONS
//.............................................

function send_messages() {

    var messages =
            '<!--tab-links-->'

            + '<div class="tab-links">'
            + '<ul id="myTab" class="nav nav-tabs">'
            + '<li class="active"><a href="#send_messages" data-toggle="tab">Send Messages </a> </li>'
            + '<li><a href="#view_sent_messages" data-toggle="tab">View Sent Messages</a></li>'
            + '<li> <a href="#message_template"  data-toggle="tab">Message Templates</a> </li>'
            + '</ul>'
            + '</div>'
            + '<!--tab-links-->'

            + '<!--tab-content-->'
            + '<div id="myTabContent" class="tab-content">'
            + '<br>'
            + '<div class="tab-pane fade in active" id="send_messages"> '
            + '<div class="panel panel-default"> '
            + '<div class="panel-heading"> <h3 class="panel-title">Send Message</h3>'
            + ' </div><!--panel-heading-->'
            + '<div class="panel-body">'
            + '<form role="form">'
            + '<div class"row ">'
            + '<br>'
            + '<div   class="form-group col-xs-6 col-md-offset-3">'
            + '<label class="col-xs-6 col-md-offset-3" for="contact_group">Contacts Group</label>'
            + '<select class="form-control contact_group" id="contact_group" name="contact_group" role="menu">'
            + '</select>'
            + '</div>'
            + '<div   class="form-group col-xs-6 col-md-offset-3"">'
            + '<label class="col-xs-6 col-md-offset-3" for="name">Messages</label>'
            + '<textarea id="txt_area_message" class="form-control" rows="7"></textarea>'
            + '<br>'
            + '<button id="i_send_message_button" type="submit" class="btn btn-primary ">Send <span class="glyphicon glyphicon-send"></span>'
            + '</button>'
            + '</div>'
            + '</div>'
            + '</form> '
            + '</div><!--panel-body-->'
            + '<div class="panel-footer">'
            + ' </div><!--panel-footer--> '
            + '</div><!--panel-->'
            + '</div> <!--tab-pane send_messages-->'



            + '<div class="tab-pane fade" id="view_sent_messages">'
            + '<div class="panel panel-default"> '
            + '<div class="panel-heading"> <h3 class="panel-title">Send Message</h3>'
            + ' </div><!--panel-heading-->'
            + '<div class="panel-body"> View Sent Messages'
            + '</div><!--panel-body-->'
            + '<div class="panel-footer">'
            + ' </div><!--panel-footer--> '
            + '</div><!--panel-->'
            + '</div><!--tab-pane-->'



            + '<div class="tab-pane fade" id="message_template">'
            + '<div class="panel panel-default"> '
            + '<div class="panel-heading"> <h3 class="panel-title">Send Message</h3>'
            + ' </div><!--panel-heading-->'
            + '<div class="panel-body"> Message Templates'
            + '</div><!--panel-body-->'
            + '<div class="panel-footer">'
            + ' </div><!--panel-footer--> '
            + '</div><!--panel--->'
            + '</div><!--tab-pane message_template-->'
            + '</div><!--tab-content myTabContent-->'




    $("#main_content").html(messages);





    //Posting message to servlet

    $("#i_send_message_button").click(function () {


        message_to_send = $("#txt_area_message").val();


        if (message_to_send === null | message_to_send === "") {

            alert('Message to send is blank or null');

        } else {

            var tag = "sendMessage";

            //alert('Message to send is '+message_to_send);

            message_to_send = $("#txt_area_message").val();
            contact_group = $("#contact_group").val();
            alert(message_to_send);

            $.post("requesthandler", {tag: tag, message: message_to_send, contact_group: contact_group}, function (data) {
                //alert(data.success);
                //alert(data.message);
                //alert(data.username);


            }, 'JSON');


        }

        alert('all done');


    });

}





function view_contacts() {


    var contacts =
            '<div class="tab-links">'

            + '<ul id="myTab" class="nav nav-tabs">'
            + '<li class="active"><a href="#view_contacts" data-toggle="tab">View Contacts </a> </li>'
            + '<li><a href="#add_contact" data-toggle="tab">Add Contacts</a></li>'
            + '<li><a href="#add_category" data-toggle="tab">Add Category</a></li>'
            + '<li><a href="#import_contacts" data-toggle="tab">Import Contact</a></li>'
            + '<li> <a href="#export_contacts"  data-toggle="tab">Export Contact</a> </li>'
            + '</ul>'


            + '</div>'
            + '<!--tab-links-->'

            + '<!--tab-content-->'

            + '<div id="myTabContent" class="tab-content">'
            + '<br>'

            + '<div class="tab-pane fade in active" id="view_contacts"> <!--tab-pane view_contacts --> '



            + '<div class="panel panel-default"> '


            + '<div class="panel-heading"> <h3 class="panel-title">Contact</h3>'
            + '<div align="center">'

            + '<ul class="pagination"> <li><a href="#">&laquo;</a></li> <li><a href="#">1</a></li> <li><a href="#">2</a></li> <li><a href="#">3</a></li> <li><a href="#">4</a></li> <li><a href="#">5</a></li> <li><a href="#">&raquo;</a></li> </ul>'

            + '</div>'
            + ' </div><!--panel-heading-->'

            + '<div class="panel-body">'

            + '<div  class="table_wrrapper"><!--table_wrrapper-->'



            + '<div class="table-responsive"><!--table-responsive-->'
            + '<table class="table table-striped">'
            + '<thead>'
            + '<tr>'
            + ' <th>#</th>'
            + '<th>Firstname</th>'
            + '<th>Lastname</th>'
            + '<th>Phonenumber</th>'
            + '</tr>'
            + '</thead>'
            + '<tbody>'
            + '<tr>'
            + '<td>1</td>'
            + '<td>Michael</td>'
            + '<td>George</td>'
            + '<td>0727754191</td>'
            + '</tr>'
            + '</tr>'
            + '</thead>'
            + '<tbody>'
            + '<tr>'
            + '<td>1</td>'
            + '<td>Michael</td>'
            + '<td>George</td>'
            + '<td>0727754191</td>'
            + '</tr>' + '</tr>'
            + '</thead>'
            + '<tbody>'
            + '<tr>'
            + '<td>1</td>'
            + '<td>Michael</td>'
            + '<td>George</td>'
            + '<td>0727754191</td>'
            + '</tr>' + '</tr>'
            + '</thead>'
            + '<tbody>'
            + '<tr>'
            + '<td>1</td>'
            + '<td>Michael</td>'
            + '<td>George</td>'
            + '<td>0727754191</td>'
            + '</tr>' + '</tr>'
            + '</thead>'
            + '<tbody>'
            + '<tr>'
            + '<td>1</td>'
            + '<td>Michael</td>'
            + '<td>George</td>'
            + '<td>0727754191</td>'
            + '</tr>'
            + '</tbody>'

            + '</table>'
            + ' </div>  <!--table-responsive-->'



            + '</div><!--table_wrrapper-->'


            + '</div> <!--panel-body-->'
            + '<div class="panel-footer">'
            + '<div align="center">'

            + '<ul class="pagination"> <li><a href="#">&laquo;</a></li> <li><a href="#">1</a></li> <li><a href="#">2</a></li> <li><a href="#">3</a></li> <li><a href="#">4</a></li> <li><a href="#">5</a></li> <li><a href="#">&raquo;</a></li> </ul>'

            + '</div>'
            + '</div> <!--panel-footer-->'
            + '</div>'





            + '</div> <!--tab-pane view_contacts -->'





            + '<div class="tab-pane fade" id="add_contact">'
            + '<div class="panel panel-default"> '

            + '<div class="panel-heading"> <h3 class="panel-title">Add Contacts</h3>'

            + ' </div><!--panel-heading-->'

            + '<div class="panel-body"> '

            + '<form  role="form">'
            + '<div class"row">'

            + '<div   class="col-xs-4 form-group">'
            + '<label for="contact_name">Name</label>'
            + ' <input type="text" class="form-control" id="contact_name" name="contact_name" required>'
            + '</div>'

            + '<div   class="col-xs-3 form-group">'
            + '<label for="phone_number">Number</label>'
            + ' <input type="text" class="form-control" id="phone_number" name="phone_number" required>'
            + '</div>'

            + '<div   class="col-xs-5 form-group">'
            + '<label for="contact_group">Select list</label> '
            + '<select id="contact_group" name="contact_group" class="form-control">'
            + '<option>1</option> <option>2</option>'
            + '</select>'
            + '</div>'

            + '</div><!--row-->'

            + '</form> '

            + '</div><!--panel-body-->'

            + '<div class="panel-footer">'

            + '<button id="i_save_contact_button" type="submit" class="btn btn-primary ">Save Contact <span class="glyphicon glyphicon-save"></span>'
            + '</button>'


            + '</div> <!--panel-footer-->'
            + '</div><!--panel-->'
            + '</div><!--tab-pane import_contacts-->'





            + '<div class="tab-pane fade" id="add_category">'
            + '<div class="panel panel-default"> '

            + '<div class="panel-heading"> <h3 class="panel-title">Add Contacts Category</h3>'

            + ' </div><!--panel-heading-->'

            + '<div class="panel-body"> '

            + '<form  role="form">'
            + '<div class"row">'

            + '<div   class="col-xs-4 form-group">'
            + '<label for="category_name">Name</label>'
            + ' <input type="text" class="form-control" id="category_name" name="category_name" required>'
            + '</div>'

            + '</div><!--row-->'

            + '</form> '

            + '</div><!--panel-body-->'

            + '<div class="panel-footer">'

            + '<button id="i_save_category_button" type="submit" class="btn btn-primary ">Save Category <span class="glyphicon glyphicon-save"></span>'
            + '</button>'


            + '</div> <!--panel-footer-->'
            + '</div><!--panel-->'
            + '</div><!--tab-pane import_contacts-->'




            + '<div class="tab-pane fade" id="import_contacts">'

            + '<div class="panel panel-default"> '

            + '<div class="panel-heading"> <h3 class="panel-title">Import Contact From Spreadsheets or CSV File</h3>'

            + ' </div><!--panel-heading-->'

            + '<div class="panel-body"> '
            + '<form role="form">'
            + '<div class="form-group">'
            + '<label for="inputfile">Choose File Containg Contact To be Uploaded</label>'
            + '<input type="file" id="inputfile">'
            + '<p class="help-block">Example block-level help text here.</p>'
            + '</div>'
            + '</form>'
            + '</div>'
            + '<div class="panel-footer">'

            + '<button id="i_send_message_button" type="submit" class="btn btn-primary ">Import <span class="glyphicon glyphicon-import"></span>'
            + '</button>'


            + '</div> <!--panel-footer-->'
            + '</div><!--panel-->'
            + '</div><!--tab-pane import_contacts-->'


            + '<div class="tab-pane fade" id="export_contacts">'

            + '<div class="panel panel-default"> '

            + '<div class="panel-heading"> <h3 class="panel-title">Export Contact</h3>'

            + ' </div><!--panel-heading-->'
            + '<div class="panel-body">Export Contacts to Spreadsheets or CSV File'

            + '<form role="form">'
            + '<div class"row ">'
            + '<br>'
            + '<div   class="form-group col-xs-6 col-md-offset-3">'
            + '<label class="col-xs-6 col-md-offset-3" for="contact_group">Contacts</label>'
            + '<select class="form-control" id="contact_group" name="contact_group" role="menu">'
            + '</select>'
            + '</div>'

            + '</div>'
            + '</form> '

            + '</div><!--panel-body-->'
            + '<div class="panel-footer">'



            + '<button id="i_send_message_button" type="submit" class="btn btn-primary ">Export <span class="glyphicon glyphicon-export"></span>'
            + '</button>'


            + '</div> <!--panel-footer-->'
            + '</div><!--panel-->'
            + '</div>'
            + '</div>'
            + '<!--tab-content-->';


    $("#main_content").html(contacts);


    //Posting message to servlet

    $("#contact_name").focusout(function () {
        if ($("#contact_name").val() !== "" | null)
        {
            $("#dashboard_messages").removeClass().addClass('hidden');

        } else {

            $("#dashboard_messages").removeClass().addClass('alert alert-danger').html("Please enter Names");

        }


    });


    $("#phone_number").focusout(function () {
        if ($("#phone_number").val() !== "" | null)
        {
            $("#dashboard_messages").removeClass().addClass('hidden');

        } else {

            $("#dashboard_messages").removeClass().addClass('alert alert-danger').html("Please enter Phone number");

        }


    });


    $("#contact_group").focusout(function () {
        if ($("#contact_group").val() !== "" | null)
        {
            $("#dashboard_messages").removeClass().addClass('hidden');

        } else {

            $("#dashboard_messages").removeClass().addClass('alert alert-danger').html("Please Choose Group for this contact");

        }


    });


    $("#i_save_contact_button").click(function () {



        contact_name = $("#contact_name").val();

        phone_number = $("#phone_number").val();

        contact_group = $("#contact_group").val();


        if (contact_name === null | contact_name === "" | phone_number === null | phone_number === "" | contact_group === null | contact_group === "") {

            if (contact_name === null | contact_name === "") {


                $("#dashboard_messages").removeClass().addClass('alert alert-danger').html("Please enter Names");


            } else if (phone_number === null | phone_number === "") {

                $("#dashboard_messages").removeClass().addClass('alert alert-danger').html("Please enter Phone number");



            } else if (contact_group === null | contact_group === "") {

                $("#dashboard_messages").removeClass().addClass('alert alert-danger').html("Please Choose Group for this contact");
            }


        } else {



            //alert('Message to send is '+message_to_send);

            //alert(' gggg '+contact_name+'  '+phone_number +' gggg'+contact_group+' ');
            var tag = "saveContact";
            $.post("requesthandler", {tag: tag, contact_name: contact_name, phone_number: phone_number, contact_group: contact_group}, function (data) {


                if (data.success === 1)
                {


                    $("#dashboard_messages").removeClass().addClass('alert alert-success').html(data.message);

                } else {
                    $("#dashboard_messages").removeClass().addClass('alert alert-danger').html(data.message);


                }

            }, 'JSON');


        }

        //alert('all done');


    });





    $("#category_name").focusout(function () {
        if ($("#category_name").val() !== "" | null)
        {
            $("#dashboard_messages").removeClass().addClass('hidden');

        } else {

            $("#dashboard_messages").removeClass().addClass('alert alert-danger').html("Please Category Names");

        }


    });


    $("#i_save_category_button").click(function () {



        category_name = $("#category_name").val();


        if (category_name === null | category_name === "") {


            $("#dashboard_messages").removeClass().addClass('alert alert-danger').html("Please enter Names");



        } else {



            //alert('Message to send is '+message_to_send);

            //alert(' gggg '+contact_name+'  '+phone_number +' gggg'+contact_group+' ');
            var tag = "saveCategory";
            $.post("requesthandler", {tag: tag, category_name: category_name}, function (data) {


                if (data.success === 1)
                {


                    $("#dashboard_messages").removeClass().addClass('alert alert-success').html(data.message);

                } else {
                    $("#dashboard_messages").removeClass().addClass('alert alert-danger').html(data.message);


                }

            }, 'JSON');


        }

        //alert('all done');


    });







}

function fetch_contact_groups( ) {



    $.post("requesthandler", {tag: "getContactGroups"}, function (data) {
        var list = '<option value="" >Choose Group</option>';

        for (var i = 0; i < data.length; i++) {
            list = list + '<option value="' + data[i]["id"] + '"> ' + data[i]["category"] + '</option>';

        }
        $("#contact_group").html(list);
        //$('#loading_country').addClass('hidden');
    }, 'JSON');



}