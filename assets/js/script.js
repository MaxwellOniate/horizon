$(document).scroll(function() {
  $('#main-nav').toggleClass(
    'scrolled',
    $(this).scrollTop() > $('#main-nav').height()
  );
});

let map;
function initMap() {
  map = new google.maps.Map(document.querySelector('.map'), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8
  });
}
