jQuery(function($) {
  // The same for all waypoints
/*
  $('body').delegate('article > section', 'waypoint.reached', function(event, direction) {
    var $active = $(this);

    if (direction === "up") {
      $active = $active.prev();
    }
    if (!$active.length) $active = $active.end();
    
    $('.section-active').removeClass('section-active');
    $active.addClass('section-active');
    
    $('.link-active').removeClass('link-active');
    $('a[href=#'+$active.attr('id')+']').addClass('link-active');
  });
*/
  
  // Register each section as a waypoint.
  // $('article > section').waypoint({ offset: '50%' });
  
  // Wicked credit to
  // http://www.zachstronaut.com/posts/2009/01/18/jquery-smooth-scroll-bugs.html
  var scrollElement = 'html, body';
  $('html, body').each(function () {
    var initScrollTop = $(this).attr('scrollTop');
    $(this).attr('scrollTop', initScrollTop + 1);
    if ($(this).attr('scrollTop') == initScrollTop + 1) {
      scrollElement = this.nodeName.toLowerCase();
      $(this).attr('scrollTop', initScrollTop);
      return false;
    }
  });
  
  $("a[name]")
  .waypoint()
  .bind('waypoint.reached', function(e){ window.location.hash = '#'+e.target.name })
  

  // Smooth scrolling for internal links
  $("a[href^='#']")
  .click(function(event) {
    event.preventDefault();
    
    var hash = this.hash;
    var $target = $('a[name='+hash.substr(1)+']').first();
    
    $(scrollElement).stop().animate({
      'scrollTop': $target.offset().top - 30
    }, 500, 'swing', function() {
      window.location.hash = hash;
    });
    
  });

	initRolloverImgs();
});
