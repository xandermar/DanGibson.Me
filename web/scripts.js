// close the message after 10 seconds
$(document).ready(function(){
    setTimeout(function(){
        $('.alert').fadeOut('slow', function() {
            window.location.href = '/'; // Redirect after fading out
        });
    }, 10000); // 10 seconds
});