$(function(){
  $(function () {
    $('#js-hamburger').click(function () {
      $('body').toggleClass('is-drawerActive')
    
      if ($(this).attr('aria-expanded') == 'false') {
        $(this).attr('aria-expanded', 'true')
        $('#js-global-menu').attr('area-hidden','false')
      } else {
        $(this).attr('aria-expanded', 'false')
        $('#js-global-menu').attr('area-hidden','true')
      }
    })
    //背景の黒ボックスクリックでもドロワーが消えるようにする
    $('#js-drawer-background').click(function () {
      $('body').removeClass('is-drawerActive')
      $('#js-hamburger').attr('aria-expanded', 'false')
      $('#js-global-menu').attr('area-hidden','true')
    })
   });
   $(function () {
    $('.jsAccordionTitle').on('click', function () {
      $(this).next().toggleClass('is-open');
      $(this).toggleClass('is-active');
    });
  });

  new ScrollHint('.js-scrollable');
});


