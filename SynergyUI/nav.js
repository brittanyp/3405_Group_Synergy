$( document ).ready(function() {
    console.log("hello")

    $( ".cross" ).hide();
    $( ".menu" ).hide();

});

function hideHam() {
    $(".menu").slideToggle("slow", function () {
        $(".hamburger").hide();
        $(".cross").show();
    });

}

function hideCross(){
    $( ".menu" ).slideToggle( "slow", function() {
        $( ".cross" ).hide();
        $( ".hamburger" ).show();
    });
}

$(window).scroll(function() {
    var winScrollTop = $(window).scrollTop();
    var winHeight = $(window).height();
    var floaterHeight = $('#menufix').outerHeight(true);
    var fromBottom = 20;
    var top = winScrollTop + winHeight - floaterHeight - fromBottom;
    $('#floater').css({'top': top + 'px'});
});
