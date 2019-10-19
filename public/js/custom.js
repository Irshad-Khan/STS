
// Flash messages Script
$(document).ready(function(){
    setTimeout(function() {
        $('.flash-message').remove();
    }, 3000);
});

// Script for Employee work history create.blade.php
$(document).ready(function() {
    
    $( "#suitqty" ).keyup(function() {
        $( "#suitprice" ).prop( "disabled", false );
      });

      $('#suitqty').on('focusout', function() {
        if(this.value === ''){
            $('#suitprice').val('');
            $( "#suitprice" ).prop( "disabled", true );
        }
    });

    $( "#shirtqty" ).keyup(function() {
        $( "#shirtprice" ).prop( "disabled", false );
      });

      $('#shirtqty').on('focusout', function() {
        if(this.value === ''){
            $('#shirtprice').val('');
            $( "#shirtprice" ).prop( "disabled", true );
        }
    });
    $( "#pentqty" ).keyup(function() {
        $( "#pentprice" ).prop( "disabled", false );
      });

      $('#pentqty').on('focusout', function() {
        if(this.value === ''){
            $('#pentprice').val('');
            $( "#pentprice" ).prop( "disabled", true );
        }
    });
    
} );

 // $("table").stupidtable();
 $(document).ready(function() {

    // Ajax for our form
    $('form#workhistory').on('submit', function(event){
        event.preventDefault();
        var formData = {
            _token: $('#token').val(),
            employee_id	     : $('select[name=employee]').val(),
            suitqty    : $('input[name=suitqty]').val(),
            shirtqty : $('input[name=shirtqty]').val(),
            pantqty  : $('input[name=pentqty]').val(),
            suitprice  : $('input[name=suitprice]').val(),
            shirtprice  : $('input[name=shirtprice]').val(),
            pentprice  : $('input[name=pentprice]').val()
        }
        $.ajax({
            type     : "POST",
            url      : $(this).attr('action'),
            data     : formData,
            cache    : false,

            success: function(workhistory){  // if php return a success state
                $('.tabeldata').html(workhistory.html);
               
       },
       error: function (jqXHR, exception) {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        alert(msg);
    },
        })
    });
});