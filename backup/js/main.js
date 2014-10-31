(function () {

    // handle and display error response
    menabird.handleErrorResponse = function( errors ){
        var html = '';
        var error = $('.error');
        var error_name = error.attr('class');

        $.each(errors, function(index, value){
            var add_class =  "alert alert-danger";

               $('.error#'+index).addClass(add_class).hide().html( value ).fadeIn('200'); // output from a selector, must have class 'output'

            html += value + '<br>'; // output all as html
        });
    }

    menabird.htmlDisplayResponse = function( data, form ){
        if(data.errors){
            menabird.handleErrorResponse( data.errors );
        }

        $.notify(data.message, {className: data.status, globalPosition: "bottom right"});

        form.find('.to-clear').val('');
        form.find('input[type="submit"], button[type="submit"]').removeAttr('disabled');
    };
})();

