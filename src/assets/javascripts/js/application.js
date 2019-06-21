(function() {
  var app, navbar, slider;

  app = {
    init: function() {
      navbar.init('.navbar');
      this.bind_events();
      this.init_slider();
      this.loop_videos();
      return this.init_tabs();
    },
    bind_events: function() {
      var _this;
      _this = this;
      $(document).on('click', '.tab-nav a', function(e) {
        var tabs;
        e.preventDefault();
        tabs = $(this).closest('.tabs');
        $('.tab', tabs).removeClass('active');
        $('.tab-nav a', tabs).removeClass('active');
        $(this).addClass('active');
        return $('.tab#' + $(this).data('tab'), tabs).addClass('active');
      });
      $(document).on('click', '.form .submit', function(e) {
        e.preventDefault();
        if ($(this).parents('.js-form').hasClass('callback')) {
          return sendCallback($(this).parents('.js-form'));
        } else {
          return sendForm($(this).parents('.js-form'));
        }
      });
      $(document).on('click', '.openBox', function(e) {
        var text, text2;
        e.preventDefault();
        $('.SwitchBoxes').toggleClass('hidden');
        text = $(this).text();
        text2 = $(this).attr('data-text');
        $(this).text(text2);
        return $(this).attr('data-text', text);
      });
      $(document).on('click', '.container .title', function(e) {
        e.preventDefault();
        $(this).parent().toggleClass('open');
        return $(this).next('.content').slideToggle('fast');
      });
      $(document).on('click', '.footer-menu li span', function(e) {
        if ($(this).closest('li').hasClass('open')) {
          return $(this).closest('li').removeClass('open');
        } else {
          $('.footer-menu li').removeClass('open');
          return $(this).closest('li').addClass('open');
        }
      });
      $(document).on('click', '.mobile-nav .pages-menu .submenu', function(e) {
        e.preventDefault();
        if ($(this).hasClass('submenu-open')) {
          $(this).removeClass('submenu-open');
          return $(this).next('ul').slideUp('fast');
        } else {
          $('.pages-submenu').slideUp('fast');
          $('.pages-menu .submenu-open').removeClass('submenu-open');
          $(this).addClass('submenu-open');
          return $(this).next('ul').slideToggle('fast');
        }
      });
      $(document).on('click', '.btn-mobile-nav', function(e) {
        e.preventDefault();
        return $('.mobile-nav').toggleClass('open');
      });
      $('a[href^="#"]').on('click.smoothscroll', function(e) {
        var $target, target;
        e.preventDefault();
        target = this.hash;
        $target = $(target);
        $('html, body').stop().animate({
          'scrollTop': $target.offset().top
        }, 500, 'swing', function() {});
        return window.location.hash = target;
      });
      $(document).on('click', '.showDiv', function(e) {
        var toggle_id;
        e.preventDefault();
        $(this).next('.selection').toggleClass('active');
        toggle_id = $(this).next('.selection').data('toggle');
        if ($(this).next('.selection').hasClass('active')) {
          return $(this).next('.selection').slideDown();
        } else {
          return $(this).next('.selection').slideUp();
        }
      });
      $(document).on('click', '.customCheckbox', function(e) {
        $('.showField').addClass('active');
        if ($('.showField').hasClass('active')) {
          return $('.showField').fadeIn();
        }
      });
      $(document).on('click', '.expertmode', function(e) {
        var toggle_id;
        e.preventDefault();
        $(this).toggleClass('active');
        toggle_id = $(this).data('toggle');
        if ($(this).hasClass('active')) {
          $('.expertmode-on.expertmode-' + toggle_id).show();
          return $('.expertmode-off.expertmode-' + toggle_id).hide();
        } else {
          $('.expertmode-on.expertmode-' + toggle_id).hide();
          return $('.expertmode-off.expertmode-' + toggle_id).show();
        }
      });
      $(document).on('change', '.topic', function(e) {
        var subtopic, topic;
        topic = $(this).val();
        console.log(topic);
        $('.subtopic, .topic-box').hide();
        $('.subtopic[data-subtopic="' + topic + '"]').show();
        subtopic = $('.subtopic[data-subtopic="' + topic + '"]').val();
        return $('.topic-box[data-topic="' + subtopic + '"]').show();
      });
      return $(document).on('change', '.subtopic', function(e) {
        var topic;
        topic = $(this).val();
        $('.topic-box').hide();
        return $('.topic-box[data-topic="' + topic + '"]').show();
      });
    },
    loop_videos: function() {
      return $.each($('video[data-loop]'), function(i, elem) {
        var loop_time;
        loop_time = parseFloat($(this).data('loop'));
        return elem.addEventListener('ended', (function() {
          this.currentTime = loop_time;
          return this.play();
        }), false);
      });
    },
    init_tabs: function() {
      return $.each($('.tabs'), function(i, elem) {
        return $('.tab-nav a:eq(0), .tab:eq(0)', $(this)).addClass('active');
      });
    },
    init_slider: function() {
      return $.each($('.slider'), function(i, val) {
        return slider.init($(val));
      });
    }
  };

  navbar = {
    n: "",
    n_height: 0,
    n_top: 0,
    d_height: 0,
    w_height: 0,
    w_scroll_current: 0,
    w_scroll_before: 0,
    w_scroll_diff: 0,
    init: function(selector) {
      this.n = document.querySelector(selector);
      this.bind_events();
      if (window.pageYOffset > 0) {
        return $(this.n).addClass('background');
      }
    },
    bind_events: function() {
      return $(window).scroll(function(e) {
        return navbar.scroll();
      });
    },
    scroll: function() {
      this.n_height = this.n.offsetHeight;
      this.d_height = document.body.offsetHeight;
      this.w_height = window.innerHeight;
      this.w_scroll_current = window.pageYOffset;
      this.w_scroll_diff = this.w_scroll_before - this.w_scroll_current;
      this.n_top = parseInt(window.getComputedStyle(this.n).getPropertyValue('top')) + this.w_scroll_diff;
      if (this.w_scroll_current >= this.n_height) {
        $(this.n).addClass('background');
      }
      if (this.w_scroll_current === 0) {
        $(this.n).removeClass('background');
      }
      if (this.w_scroll_current <= 0) {
        this.n.style.top = '0px';
        console.log('0px');
      } else if (this.w_scroll_diff > 0) {
        this.n.style.top = (this.n_top > 0 ? 0 : this.n_top) + 'px';
        console.log('hochscrollen');
      } else if (this.w_scroll_diff < 0) {
        if (this.w_scroll_current + this.w_height >= this.d_height - this.n_height) {
          this.n.style.top = ((this.n_top = this.w_scroll_current + this.w_height - this.d_height) < 0 ? this.n_top : 0) + 'px';
          console.log('runter 1');
        } else {
          this.n.style.top = (Math.abs(this.n_top) > this.n_height ? -this.n_height : this.n_top) + 'px';
          console.log('Unten angekommen');
        }
      }
      return this.w_scroll_before = this.w_scroll_current;
    }
  };

  slider = {
    slider: "",
    slides_box: "",
    slides: "",
    slider_height: 0,
    slide_width: 0,
    current_slide: 0,
    init: function(elem) {
      this.slider = elem;
      this.slides_box = $('.slides', this.slider);
      this.slides = $('.slide', this.slider);
      this.get_slider_height();
      this.init_slider_nav();
      this.slide_width = $(this.slides[0]).outerWidth();
      this.bind_events();
      $(this.slides[0]).addClass('active');
      $(this.slides[1]).addClass('active');
      return $(this.slides[2]).addClass('active');
    },
    bind_events: function() {
      var _this;
      _this = this;
      return $(window).resize(function() {
        $('.slider .slide').css('width', $('.slider').outerWidth() / 3 + 'px');
        return _this.get_slider_height();
      });
    },
    get_slider_height: function() {
      var _this, extra_height;
      extra_height = 33 + 40 + 100;
      _this = this;
      $.each(this.slides, function(i, val) {
        if ($(val).outerHeight() > _this.slider_height) {
          return _this.slider_height = $(val).outerHeight();
        }
      });
      this.slider.css('height', this.slider_height + extra_height + 'px');
      return $('.slide-content', this.slider).css('height', this.slider_height + 'px');
    },
    init_slider_nav: function() {
      var _this, button, i, results;
      i = 0;
      results = [];
      while (i < this.slides.length - 2) {
        button = $("<div class='btn-slider-nav' data-slide='" + i + "'></div>");
        _this = this;
        button.on('click', function(e) {
          var current_slide, slide_width;
          slider = $(this).closest('.slider');
          current_slide = $(this).data('slide');
          slide_width = $('.slider').outerWidth() / 3;
          $('.slides', slider).animate({
            left: current_slide * slide_width * -1 + 'px'
          }, 300);
          $('.btn-slider-nav', slider).removeClass('active');
          $('.btn-slider-nav:eq(' + current_slide + ')', slider).addClass('active');
          $('.slide', slider).removeClass('active');
          $('.slide:eq(' + current_slide + ')', slider).addClass('active');
          $('.slide:eq(' + (current_slide + 1) + ')', slider).addClass('active');
          return $('.slide:eq(' + (current_slide + 2) + ')', slider).addClass('active');
        });
        if (i === 0) {
          button.addClass('active');
        }
        $('.slider-navigation', this.slider).append(button);
        results.push(i++);
      }
      return results;
    }
  };

  $(document).ready(function() {
    return app.init();
  });

}).call(this);
