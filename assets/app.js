document.addEventListener('DOMContentLoaded', function() {

  var wpdocumentor_nav         = document.getElementById('wpdocumentor-navigation');
  var wpdocumentor_nav_toggle  = document.getElementById('wpdocumentor-navigation-toggle');
  var wpdocumentor_nav_overlay = document.getElementById('wpdocumentor-navigation-overlay');

  var wpdocumentor_hide_navigation = () => {
    wpdocumentor_nav        .classList.remove('is-active');
    wpdocumentor_nav_overlay.classList.remove('is-active');
  }
  var wpdocumentor_show_navigation = () => {
    wpdocumentor_nav        .classList.add('is-active');
    wpdocumentor_nav_overlay.classList.add('is-active');
  };

  wpdocumentor_nav_toggle.addEventListener('click', function () {
    var navActive = wpdocumentor_nav.classList.contains('is-active');

    navActive
      ? wpdocumentor_hide_navigation()
      : wpdocumentor_show_navigation();
  });

  wpdocumentor_nav_overlay.addEventListener('click', function () {
    var navActive = wpdocumentor_nav.classList.contains('is-active');
    if (navActive) {
      wpdocumentor_hide_navigation();
    }
  });
});