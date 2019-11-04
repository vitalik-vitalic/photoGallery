/**
 * Created by teacher on 03.06.2019.
 */
$(function () {    

    /*Объектный литерал*/
    var fx = {
        "initModal" : function () {
            if($('.modal-window').length ==0)
            {
                $('<div>').attr('id', 'jquery-overlay').appendTo('body');
                return $('<div>').addClass('modal-window').appendTo('body');
            }else{
                return $('.modal-window');
            }
        }
    };

    $('.m_click').click(function () {
        console.log("ok");
        var data = $(this).attr('data-id');
        var modal = fx.initModal();
        $('<a>').attr('href','#').addClass('modal-close-btn').html('&times;').click(function (e) {
            e.preventDefault();
            $('.modal-window').remove();
            $('#jquery-overlay').remove();
        }).appendTo(modal);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            type: 'POST'
        });

        $.ajax({
            url: "/ajax/gallery",
            type: "POST",
            data: "id="+data,
            success: function (data) {
                console.log(data);
                modal.append(data);
            },
            error: function (msg) {
                console.log(msg);
            }
        })
        //console.log(data);
    })
    
})