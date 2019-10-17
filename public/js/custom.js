
// Flash messages Script
$(document).ready(function(){
    setTimeout(function() {
        $('.flash-message').remove();
    }, 3000);
});

// Data Table Script
$(document).ready(function() {
    $('table').DataTable();
} );


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