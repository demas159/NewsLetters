$(document).ready(function() {


    $('.save-button').click(function() {
        if($("#newsletters_create_form")[0].checkValidity())
        {
            var data = $('#newsletters_create_form').serialize();
            $.ajax({
                type: "POST",
                url: "/create",
                data: data,
                success: function(done)
                {

                  $('#form_title').hide();
                  var element = $('#newsletters_create_form');
                      element.toggleClass('hinge animated');
                  var element2 = $('#THANKS');
                      element2.show();
                      element2.toggleClass('bounceInDown animated');
                }
            });
            return false;
        }

    });


    $('.EDIT').click(function() {
        var id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "/admin/load",
            data: {
                id : id,
            },
            success: function(done)
            {
               $('#dialog').html(done);
               $('#dialog').dialog('open');
            }
        });
        return false;
    });


    $('.DELETE').click(function() {
        var id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "/admin/delete",
            data: {
                id : id,
            },
            success: function(done)
            {
                location.reload();
            }
        });
        return false;
    });
$('input[type="checkbox"]').first().hide();


});
