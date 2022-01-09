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
/*******news******** */
$(document).ready(function() {
    document.getElementById("heart").onclick = function() {
        document.querySelector(".fa-gratipay").style.color = "#E74C3C";
    };
});

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