// Testing JavaScript if is calling in the page.
console.log("OK!");

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

// Checkbox 

$(function () {
  $('input.checktype').click(function () {
    if ($(this).is(":checked")) {
      $('input.checktype').attr('disabled', true);
      $(this).removeAttr('disabled');
    } else {
      $('input.checktype').removeAttr('disabled');
    }
  })
})


//  Maxlength Telefone
$(document).ready(function() {
  $("#telefone").keyup(function() {
      $("#telefone").val(this.value.match(/[0-9]*/));
  });
});