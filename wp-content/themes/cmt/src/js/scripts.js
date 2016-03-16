$(function(){

  mobileNav = function() {
    var siteHeader = $('.site-header');
    var mobileBtn = $('.btn-mobile');
    var mainMenu = $('.menu-menu-1-container');
    var closeMenu = $('.main-nav--close-menu');
    var body = $('body');

    mobileBtn.on('click', function(e){
      e.preventDefault();
      if ((siteHeader).hasClass('nav-visible')) {
        body.removeClass('no-scroll');
        siteHeader.removeClass('nav-visible').addClass('nav-hidden');

        setTimeout(function() {
          siteHeader.removeClass('nav-hidden');
        });

      } else {
        siteHeader.addClass('nav-visible');
        body.addClass('no-scroll');
      }
    });

    closeMenu.on('click', function(e){
      e.preventDefault();
      body.removeClass('no-scroll');
      siteHeader.removeClass('nav-visible');
    });
  }

  searchToggle = function() {
    var searchTrigger = $('.header-search--trigger');
    var searchIcon = $('.header-search--trigger .icon');
    var searchForm = $('.header-search .search-form');
    searchTrigger.on('click', function(e) {
      e.preventDefault();
      searchIcon.toggleClass('is-hidden');
      searchForm.toggleClass('is-hidden');
    });
  }

  $(window).on('load', function() {
    $('.animate').addClass('fade-in');
  });

  $(".body").fitVids();

  mobileNav();
  searchToggle();

});
