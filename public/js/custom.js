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