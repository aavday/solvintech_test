$(document).ready(function () {
  const templatePath = document.querySelector('.template-path-for-ajax').getAttribute('data-template-path');

  $('.feedback-form').submit(function (e) {
    e.preventDefault();
    console.log('test');
  
    $.ajax({
      url: templatePath + '/ajax.php',
      type: 'post',
      data: $(this).serialize(),
      success: function(data) {
        alert('Спасибо, Ваш отзыв отправлен.');
        location.reload();
      }
    });
  });
});