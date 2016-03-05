//<!--/*created by Alt.point 2015-2016 pro-hearthstone.ru ver 0.5.3*/-->
//<!--!!!Haters gonna hate!!!-->

var clicked = false;

$(document).ready(init);

function init() {
    $('.hiding_menu_element').css("display", "none");
    $('.hiding_menu_element').css("opacity", "0");
    $('.hiding_menu_element').css("transition", "0.3s");
    $('#hiding_menu_inner').css("width", "0px");
    $('#hiding_menu_inner').css("transition", "0.5s");
    
    $('.hiding_menu_body').click(function(){

        if (clicked == false) {
            clicked = true;
            $('.hiding_menu_element').css("display", "inherit");
            $('.hiding_menu_element').css("opacity", "1");
            $('#hiding_menu_inner').css("display", "inherit");
            $('#hiding_menu_inner').css("width", "300px");
        }
        else {
            clicked = false;
            $('.hiding_menu_element').css("opacity", "0");
            $('#hiding_menu_inner').css("width", "0px");
        }
    });
}
