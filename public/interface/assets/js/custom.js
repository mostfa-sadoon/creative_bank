/*global $, alert, console*/
$(function() {

    //carousel
    $('.carousel').carousel({
        interval: 2000
    });

    //aos animations
    AOS.init();
    window.addEventListener("load", AOS.refresh);



});

//----------Start like button---------------------
$('.button').click(function() {
    $('.label').html(function(i, val) {
        return val * 1 + 1
    });
});
//----------End like button---------------------
//------------Start View -----------------------
$(function() {

    var valueElement = $('#value');

    function incrementValue(e) {
        valueElement.text(Math.max(parseInt(valueElement.text()) + e.data.increment, 0));
        return false;
    }

    $('.pulsebutton').one('mouseenter', { increment: 1 }, incrementValue);

});

//-------------End View ------------------------
$(document).on("click", ".browse", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
});
$('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});
/*******news******** */
// $(document).ready(function() {
//     document.getElementById("heart").onclick = function() {
//         document.querySelector(".fa-gratipay").style.color = "#E74C3C";
//     };
// });

//*******make navbar top when scrolling****************
document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            document.getElementById('navbar_top').classList.add('fixed-top');
            // add padding top to show content behind navbar
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';
        } else {
            document.getElementById('navbar_top').classList.remove('fixed-top');
            // remove padding top from body
            document.body.style.paddingTop = '0';
        }
    });
});