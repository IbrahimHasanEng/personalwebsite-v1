$(document).ready(function() {
    $(".fancybox").fancybox();
    $('#more').click(function() {
        $(this).fadeOut(500,function(){$('#less').fadeIn(500);});
        $('.less').toggleClass("more");
    });
    $('#less').click(function() {
        $(this).fadeOut(500,function(){$('#more').fadeIn(500);});
        $('.less').toggleClass("more");
    });
});

$(window).scroll(function() {
if ($(this).scrollTop() > 1)
{
    $('header').addClass("sticky");
    $('header .container div').addClass("newTitle");
    $('header div h1').addClass("myName");
    $('header div h2').addClass("myExperience");
    $('header nav').addClass("navBar");
  }
  else
  {
    $('header').removeClass("sticky");
    $('header .container div').removeClass("newTitle");
    $('header div h1').removeClass("myName");
    $('header div h2').removeClass("myExperience");
    $('header nav').removeClass("navBar");
  }
});

$(document).ready(function() {
    $('.container .content .introBox .image img').hover(function(){
        $('.container .content .introBox .image span').fadeToggle(400);
    });
});
