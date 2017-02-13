$(document).ready(function () {

    $('#menu_div  ul li a').click(function () {

        var $linkClicked = $(this).attr('href');
        
      
        var tag = $(this).attr('id');

        document.location.hash = $linkClicked;

        $myvar = document.location.hash;

        var $pageRoot = $linkClicked.replace('#page', '');
        


        if (!$(this).hasClass("active")) {
            $("#menu_div  ul li a").removeClass("active");
            $(this).addClass("active");

            //alert('what is sent to server is '+$pageRoot)

            $.ajax({
                type: "POST",
                url: "../controllers/load.php",
                data: {page: $pageRoot, tag: tag}, 
                dataType: "html",
                success: function (msg) {
                    if (parseInt(msg) !== 0)
                    {
                        $('#main_content').html(msg);
                        //  $('#main-content section').hide().fadeIn();
                    } else {

                        $('#main_content').html('not working kabisa');
                    }
                }

            });

        }
        else {
            event.preventDefault();
        }

    });
});