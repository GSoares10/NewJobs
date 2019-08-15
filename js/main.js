// Testing JavaScript if is calling in the page.
console.log("OK!");
// JQuery
$(document).ready(function() {
    $('.sidenav').sidenav();
    $('.materialboxed').materialbox();
    $('.parallax').parallax();
    $('.tabs').tabs();
    $('.datepicker').datepicker( {
        disableWeekends: true
    });
    $('.tooltipped').tooltip();
    $('.scrollspy').scrollSpy();
});

$(function () {
    let topBtn = $('.c-page-top');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        topBtn.addClass('show');
      } else {
        topBtn.removeClass('show');
      }
    });
  
    topBtn.click(function () {
      $('body,html').animate({
        scrollTop: 0 },
      500);
      return false;
    });
  });

  // Form steps
 