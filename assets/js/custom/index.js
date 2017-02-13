/*NanoAge POS
 *George Kipnight
 *Jquery 1.10.2
 *bootstrap 3.0
 */

$(document).ready(function (e) {

    $('#btnLogin').click(function (e) {
        //getting 
        var $txtusername = $('#txtusername');
        var $txtpassword = $('#txtpassword');

        var $alertdiv = $('#response');
        var username = $txtusername.val();
        var password = $txtpassword.val();
        var progress = '<span ><img src="assets/gif/gps.gif" width="32" height="32" /> Authenticating... <span>';


        if (username == '') {
            $alertdiv.removeClass().addClass('alert alert-danger').html("Enter Username");
            $txtusername.focus();
            return;
        }
        if (password == '') {
            $alertdiv.removeClass().addClass('alert alert-danger').html("Enter Password").show();
            $txtpassword.focus();
            return;
        }

        //password and user name entered
        else {
            $alertdiv.removeClass().addClass('alert alert-info').html(progress).show();
            $.post('controllers/processor.php', {tag: 'login', username: username, password: password}, function (data) {
                switch (data.success) {
                    case 1:
                        $alertdiv.removeClass().addClass('alert alert-success')
                                .html('<span class="glyphicon glyphicon-thumbs-up"></span> ' + data.message).show('slow');
                        location.replace('views/dashboard.php');
                        break;
                    case 0:
                        $alertdiv
                                .removeClass()
                                .addClass('alert alert-danger')
                                .html('<span class="glyphicon glyphicon-thumbs-down"></span> ' + data.message).show('slow');
                        break;
                }
            }, "JSON");
        }
    });
});///doc.ready