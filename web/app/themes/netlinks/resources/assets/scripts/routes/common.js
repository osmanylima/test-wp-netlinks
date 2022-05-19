export default {
  init() {
    // JavaScript to be fired on all pages
    $('.collapse').collapse();

    $('button.menu-mobile-button').on('click', function(){
      $(this).toggleClass('is-open');
      $('body, .nav-fixed').toggleClass('menu-show');
      $('.toggle-menu-button.is-open').removeClass('d-none');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
