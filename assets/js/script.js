$(document).scroll(function() {
  $('#main-nav').toggleClass(
    'scrolled',
    $(this).scrollTop() > $('#main-nav').height()
  );
});
