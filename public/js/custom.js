
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


 // Used to store data of workhistory into database
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
                document.getElementById("workhistory").reset();
                $('.tabeldata').html(workhistory.html);
                $("#getCode").html(workhistory.message);
                $("#getCodeModal").modal('show');
               
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

$(document).ready(function(){

    $('.updateworkhistory').click(function(){
        $(this).text('Update');
        $(this).closest("tr").find(".field-style").prop('disabled',false);
        var $item = $(this).closest("tr");
        var suitqty = $item.find('.suitqty').val();
        var pentqty = $item.find('.pentqty').val();
        var shirtqty = $item.find('.shirtqty').val();
        var suitprice = $item.find('.suitprice').val();
        var pentprice = $item.find('.pentprice').val();
        var shirtprice = $item.find('.shirtprice').val();
        
        console.log(suitqty,pentqty,shirtqty,suitprice,pentprice,shirtprice);
    // $("#resultas").append($item);       // Outputs the answer       
    });
});