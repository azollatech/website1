$( document ).ready(function() {
    $(".icon-hover-animation-slide").hover(
        function() {
            $(this).addClass('link-area-link-icon-hover');
        },
        function() {
            $(this).removeClass('link-area-link-icon-hover');
        }
    )
    $(".contact-now-buttons").hover(
        function() {
            $(this).parent().find(".icon-hover-animation-slide").addClass('link-area-link-icon-hover');
        },
        function() {
            $(this).parent().find(".icon-hover-animation-slide").removeClass('link-area-link-icon-hover');
        }
    )
});
