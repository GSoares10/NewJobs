console.log('TO AQUI POHA!');

// Form steps
$(document).ready(function () {
    let navListItems = $('div.card div a'),
      allWells = $('.card-content'),
      allNextBtn = $('.nextBtn'),
      allPrevBtn = $('.prevBtn');
  
    allWells.hide();
  
    navListItems.click(function (e) {
      e.preventDefault();
      let $target = $($(this).attr('href')),
        $item = $(this);
  
      if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-primary').addClass('btn-default');
        $item.addClass('btn-primary');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
      }
    });
  
    allPrevBtn.click(function () {
      let curStep = $(this).closest(".card-content"),
        curStepBtn = curStep.attr("id"),
        prevStepWizard = $('div.card div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
  
      prevStepWizard.removeAttr('disabled').trigger('click');
    });
  
    allNextBtn.click(function () {
      let curStep = $(this).closest(".card-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.card div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='email'],input[type='password']"),
        isValid = true;
  
      $(".input-field").removeClass("has-error");
      for (let i = 0; i < curInputs.length; i++) {
        if (!curInputs[i].validity.valid) {
          isValid = false;
          $(curInputs[i]).closest(".input-field").addClass("has-error");
        }
      }
  
      if (isValid)
        nextStepWizard.removeAttr('disabled').trigger('click');
    });
  
    $('div.card div a.btn-primary').trigger('click');
  });