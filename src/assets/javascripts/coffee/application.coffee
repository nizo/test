app =
  init: ->
    navbar.init('.navbar')
    @bind_events()
    @init_slider()
    # @autoplay_videos()
    @loop_videos()
    @init_tabs()

  bind_events: ->
    _this = @

    $(document).on 'click', '.tab-nav a', (e) ->
      e.preventDefault()
      tabs = $(this).closest '.tabs'
      $('.tab', tabs).removeClass 'active'
      $('.tab-nav a', tabs).removeClass 'active'
      $(this).addClass 'active'
      $('.tab#'+$(this).data('tab'), tabs).addClass 'active'
    
    # Callback & Form
    $(document).on 'click', '.form .submit', (e) ->
      e.preventDefault()
      if $(this).parents('.js-form').hasClass 'callback'
        console.log('send Callback')    
        sendCallback($(this).parents('.js-form'))
      else
        sendForm($(this).parents('.js-form')) 
        
    # toggle boxes in contact form
    $(document).on 'click', '.openBox', (e) ->
      e.preventDefault()
      $('.SwitchBoxes').toggleClass 'hidden'
      text = $(this).text()
      text2 = $(this).attr('data-text')
      $(this).text(text2)
      $(this).attr('data-text', text)
    
    # OpenContainer
    $(document).on 'click', '.container .title', (e) ->
      e.preventDefault()
      $(this).parent().toggleClass 'open'   
      $(this).next('.content').slideToggle 'fast'   
        
    # OpenContainer type2
    $(document).on 'click', '.accordion', (e) ->
      e.preventDefault()
      if $(this).hasClass('open')
        if $(this).hasClass('accordion-closeable')
          $(this).removeClass('open')
          $(this).children('.content').slideUp 'fast'
      else
        $('.accordion').removeClass('open');
        $(this).addClass 'open'
        $('.accordion .content').slideUp 'fast'          
        $(this).children('.content').slideDown 'fast'      
        if $(this).attr('data-link')
          console.log $(this).attr('data-area')
          $($(this).attr('data-area')).children().hide()
          $($(this).attr('data-area')).children($(this).attr('data-link')).fadeIn()
      
    # Mobile footer nav
    $(document).on 'click', '.footer-menu li span', (e) ->
      if $(this).closest('li').hasClass('open')
        $(this).closest('li').removeClass 'open'
      else
        $('.footer-menu li').removeClass 'open'
        $(this).closest('li').addClass 'open'

    # Mobile subnav
    $(document).on 'click', '.mobile-nav .pages-menu .submenu', (e) ->
      e.preventDefault()
      e.stopPropagation()
      if $(this).hasClass 'submenu-open'
        $(this).removeClass 'submenu-open'
        $(this).next('ul').slideUp 'fast'
      else
        $('.pages-submenu').slideUp 'fast'
        $('.pages-menu .submenu-open').removeClass 'submenu-open'
        $(this).addClass 'submenu-open'
        $(this).next('ul').slideDown 'fast'

    # Toggle mobile nav
    $('.btn-mobile-nav').on 'click', (e) ->
      e.preventDefault()
      #console.log 'mobile nav open'
      $(this).parent().next('.mobile-nav').addClass 'open'
    
    # Toggle mobile nav
    $('.btn-mobile-nav.close').on 'click', (e) ->
      e.preventDefault()
      #console.log 'mobile nav close'
      $(this).parent('.mobile-nav').removeClass 'open'  

    # SmoothScroll
    $('a[href^="#"]').on 'click.smoothscroll', (e) ->
      e.preventDefault()
      target = @hash
      $target = $(target)
      $('html, body').stop().animate { 'scrollTop': $target.offset().top }, 500, 'swing', ->
      window.location.hash = target
      
    # ToggleCallNumbers
    $(document).on 'click', '.showDiv', (e) ->
      e.preventDefault()
      $(this).next('.selection').toggleClass 'active'
      toggle_id = $(this).next('.selection').data 'toggle'
      if $(this).next('.selection').hasClass 'active'
         $(this).next('.selection').slideDown()
      else
         $(this).next('.selection').slideUp()
      
    $(document).on 'click', '.customCheckbox', (e) ->
      $('.showField').addClass 'active'
      if $('.showField').hasClass 'active'
        $('.showField').fadeIn()

    # Expert Mode Button
    $(document).on 'click', '.expertmode', (e) ->
      e.preventDefault()
      $(this).toggleClass 'active'
      toggle_id = $(this).data 'toggle'
      if $(this).hasClass 'active'
        $('.expertmode-on.expertmode-'+toggle_id).show()
        $('.expertmode-off.expertmode-'+toggle_id).hide()
      else
        $('.expertmode-on.expertmode-'+toggle_id).hide()
        $('.expertmode-off.expertmode-'+toggle_id).show()

    # Topic Selector
    $(document).on 'change', '.topic', (e) ->
      topic = $(this).val()
      setCookie('co_role', '00'+$(this).val(), 365);
      #console.log topic
      $('.subtopic, .topic-box').hide()
      $('.subtopic[data-subtopic="'+topic+'"]').show()
      subtopic = $('.subtopic[data-subtopic="'+topic+'"]').val()
      $('.topic-box[data-topic="'+subtopic+'"]').show()
    $(document).on 'change', '.subtopic', (e) ->
      topic = $(this).val()
      $('.topic-box').hide()
      $('.topic-box[data-topic="'+topic+'"]').show()

    # Toggle Boxes
    $(document).on 'click', '.toggle-box label', (e) ->
      $(this).parent().find('.toggle-box__content').slideToggle()

  # autoplay_videos: ->
  #   videos = document.getElementsByTagName 'video'
  #   i = 0
  #   while i < videos.length
  #     videos[i].play()
  #     i++

  loop_videos: ->
    $.each $('video[data-loop]'), (i, elem) ->
      loop_time = parseFloat($(this).data('loop'))
      elem.addEventListener 'ended', (->
        this.currentTime = loop_time
        this.play()
      ), false

  init_tabs: ->
    $.each $('.tabs'), (i, elem) ->
      $('.tab-nav a:eq(0), .tab:eq(0)', $(this)).addClass 'active'

  init_slider: ->
    $.each $('.slider'), (i, val) ->
      slider.init $(val)

#sendForms = (form) ->
#	console.log form
#	formData = new FormData form: form
#	data = formData.getAll()
#	console.log data 

navbar =
  n: ""                 # Navbar object
  n_height: 0           # Navbar height
  n_top: 0              # Navbar offset top
  d_height: 0           # Document height
  w_height: 0           # Window height
  w_scroll_current: 0   # Current scroll position
  w_scroll_before: 0    # Most recent scroll position
  w_scroll_diff: 0      # Difference between current and most recent scroll position

  init: (selector) ->
    @n = document.querySelector(selector)
    @bind_events()
    if window.pageYOffset > 0
      $(@n).addClass 'background'

  bind_events: ->
    $(window).scroll (e) ->
      navbar.scroll()

  scroll: ->
    @n_height = @n.offsetHeight
    @d_height = document.body.offsetHeight
    @w_height = window.innerHeight
    @w_scroll_current = window.pageYOffset
    @w_scroll_diff = @w_scroll_before - @w_scroll_current
    @n_top = parseInt(window.getComputedStyle(@n).getPropertyValue('top')) + @w_scroll_diff

    if @w_scroll_current >= @n_height
      $(@n).addClass 'background'
    if @w_scroll_current is 0
      $(@n).removeClass 'background'

    if @w_scroll_current <= 0
      @n.style.top = '0px'
      #console.log '0px'
    else if @w_scroll_diff > 0
      @n.style.top = (if @n_top > 0 then 0 else @n_top) + 'px'
      #console.log 'hochscrollen'
    else if @w_scroll_diff < 0
      if @w_scroll_current + @w_height >= @d_height - @n_height
        @n.style.top = (if (@n_top = @w_scroll_current + @w_height - @d_height) < 0 then @n_top else 0) + 'px'
        #console.log 'runter 1'
      else
        @n.style.top = (if Math.abs(@n_top) > @n_height then -@n_height else @n_top) + 'px'
        #console.log 'Unten angekommen'
    @w_scroll_before = @w_scroll_current

slider =
  slider: ""
  slides_box: ""
  slides: ""
  slider_height: 0
  slide_width: 0
  current_slide: 0

  init: (elem) ->
    @slider = elem
    @slides_box = $('.slides', @slider)
    @slides = $('.slide', @slider)
    @get_slider_height()
    @init_slider_nav()
    @slide_width = $(@slides[0]).outerWidth()
    @bind_events()
    $(@slides[0]).addClass 'active'
    $(@slides[1]).addClass 'active'
    $(@slides[2]).addClass 'active'

  bind_events: ->
    _this = @
    $(window).resize ->
      $('.slider .slide').css 'width', $('.slider').outerWidth() / 3 + 'px'
      _this.get_slider_height()
      # _this.slide_width = $(@slides[0]).outerWidth()
    # _this = @
    # $(document).on 'click', '.btn-slider-nav', (e) ->
    #   _this.current_slide = $(this).data 'slide'
    #   $(_this.slides_box).animate
    #     left: _this.current_slide * _this.slide_width * -1 + 'px'
    #   , 300
    #   $('.btn-slider-nav', _this.slider).removeClass 'active'
    #   $('.btn-slider-nav:nth('+_this.current_slide+')', _this.slider).addClass 'active'
    #   _this.slides.removeClass 'active'
    #   $(_this.slides[_this.current_slide]).addClass 'active'
    #   $(_this.slides[_this.current_slide+1]).addClass 'active'
    #   $(_this.slides[_this.current_slide+2]).addClass 'active'

  get_slider_height: ->
    extra_height = 33 + 40 + 100 # button height + slides padding + gutters
    _this = @
    $.each @slides, (i, val) ->
      if $(val).outerHeight() > _this.slider_height
        _this.slider_height = $(val).outerHeight()
    @slider.css 'height', @slider_height + extra_height + 'px'
    $('.slide-content', @slider).css 'height', @slider_height + 'px'

  init_slider_nav: ->
    i = 0
    while i < @slides.length - 2
      button = $("<div class='btn-slider-nav' data-slide='"+i+"'></div>")
      _this = @
      button.on 'click', (e) ->
        slider = $(this).closest '.slider'
        current_slide = $(this).data 'slide'
        slide_width = $('.slider').outerWidth() / 3
        $('.slides', slider).animate
          left: current_slide * slide_width * -1 + 'px'
        , 300
        $('.btn-slider-nav', slider).removeClass 'active'
        $('.btn-slider-nav:eq('+current_slide+')', slider).addClass 'active'
        $('.slide', slider).removeClass 'active'
        $('.slide:eq('+current_slide+')', slider).addClass 'active'
        $('.slide:eq('+(current_slide+1)+')', slider).addClass 'active'
        $('.slide:eq('+(current_slide+2)+')', slider).addClass 'active'
      if i is 0
        button.addClass 'active'
      $('.slider-navigation', @slider).append button
      i++

$(document).ready ->
  app.init()

  #
  # Use Case Slider
  #
  usecaseSliders = document.querySelectorAll('.customer-slider')
  usecaseSliders.forEach (slider) ->
    currentSlide = 1
    slidesCount = slider.querySelectorAll('.customer-slider__slide').length
    btnLeft = slider.querySelector('.customer-slider__arrow--left')
    btnRight = slider.querySelector('.customer-slider__arrow--right')
    slider.querySelector('.customer-slider__slide:nth-child('+currentSlide+')').classList.add('customer-slider__slide--active')


    btnLeft.addEventListener 'click', (e) ->
      slider.querySelectorAll('.customer-slider__slide').forEach (slide) ->
        slide.classList.remove('customer-slider__slide--active')
      currentSlide--
      if currentSlide == 0
        currentSlide = slidesCount
      slider.querySelector('.customer-slider__slide:nth-child('+currentSlide+')').classList.add('customer-slider__slide--active')

    btnRight.addEventListener 'click', (e) ->
      slider.querySelectorAll('.customer-slider__slide').forEach (slide) ->
        slide.classList.remove('customer-slider__slide--active')
      currentSlide++
      if currentSlide > slidesCount
        currentSlide = 1
      slider.querySelector('.customer-slider__slide:nth-child('+currentSlide+')').classList.add('customer-slider__slide--active')

  #
  # Softphone Tabs
  #
  isInViewport = (element) ->
    rect = element.getBoundingClientRect()
    return rect.top >= 0 && rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)

  tabsets = document.querySelectorAll('.tabset')
  tabsets.forEach (tabset) ->
    tabset.querySelector('.tabset__tab:first-of-type').classList.add 'tabset__tab--active'
    tabset.querySelector('.tabset__link:first-of-type').classList.add 'tabset__link--active'
    links = tabset.querySelectorAll '.tabset__link'
    window.addEventListener 'scroll', (e) ->
      firstVideo = tabset.querySelector('.tabset__tab:first-of-type .tabset__video video')
      if isInViewport(firstVideo) and firstVideo.paused
        firstVideo.currentTime = 0
        firstVideo.loop = true
        firstVideo.muted = true
        firstVideo.play()
    links.forEach (link) ->
      link.addEventListener 'click', (e) ->
        tabset.querySelector('.tabset__tab--active').classList.remove 'tabset__tab--active'
        tabset.querySelector('.tabset__link--active').classList.remove 'tabset__link--active'
        tabset.querySelector('.tabset__tab[data-tab="' + link.dataset.tab + '"]').classList.add 'tabset__tab--active'
        tabset.querySelector('.tabset__link[data-tab="' + link.dataset.tab + '"]').classList.add 'tabset__link--active'
        tabvideo = tabset.querySelector('.tabset__tab--active .tabset__video video')
        tabvideo.currentTime = 0;
        tabvideo.loop = true;
        tabvideo.muted = true;
        tabvideo.play();
      , false

  #
  # Softphone Compare
  #
  compares = document.querySelectorAll('.compare')
  compares.forEach (compare) ->
    cSwitch = compare.querySelector('.compare__switch input')
    if cSwitch.checked
      compare.querySelector('.compare__content[data-compare="on"]').classList.add 'compare__content--active'
    else
      compare.querySelector('.compare__content[data-compare="off"]').classList.add 'compare__content--active'
    cSwitch.addEventListener 'change', (e) ->
      compare.querySelector('.compare__content[data-compare="off"]').classList.toggle 'compare__content--active'
      compare.querySelector('.compare__content[data-compare="on"]').classList.toggle 'compare__content--active'
    , false

  #
  # Softphone Pricebox
  #
  currentPriceBox = 1
  if document.querySelectorAll('.pricetoggle__button').length > 0
    document.querySelector('.pricetoggle__button[data-pricebox="'+currentPriceBox+'"]').classList.add 'pricetoggle__button--active'
    document.querySelector('.pricetoggle__content[data-pricebox="'+currentPriceBox+'"]').classList.add 'pricetoggle__content--active'
    priceboxButtons = document.querySelectorAll('.pricetoggle__button')
    priceboxButtons.forEach (btn) ->
      btn.addEventListener 'click', (e) ->
        document.querySelector('.pricetoggle__button[data-pricebox="'+currentPriceBox+'"]').classList.remove 'pricetoggle__button--active'
        document.querySelector('.pricetoggle__content[data-pricebox="'+currentPriceBox+'"]').classList.remove 'pricetoggle__content--active'
        currentPriceBox = btn.dataset.pricebox
        document.querySelector('.pricetoggle__button[data-pricebox="'+currentPriceBox+'"]').classList.add 'pricetoggle__button--active'
        document.querySelector('.pricetoggle__content[data-pricebox="'+currentPriceBox+'"]').classList.add 'pricetoggle__content--active'
      , false

  #
  # Softphone usercalc
  #
  minValue = 25
  maxValue = 500
  if document.querySelectorAll('.usercalc').length > 0
    usercalcs = document.querySelectorAll('.usercalc')
    usercalcs.forEach (usercalc) ->
      users = usercalc.querySelector('.usercalc__users')
      price = usercalc.querySelector('.usercalc__price')
      slider = usercalc.querySelector('.usercalc__slider input')
      slider.addEventListener 'input', (e) ->
        users.value = parseInt(this.value)
        price.innerHTML = getPricePerUser(parseInt(this.value))
      , false
      users.addEventListener 'change', (e) ->
        val = parseInt(this.value)
        if val < minValue or val > maxValue
          users.value = minValue
          slider.value = minValue
          price.innerHTML = getPricePerUser(minValue)
        else
          slider.value = val
          price.innerHTML = getPricePerUser(this.value)
  getPricePerUser = (count) ->
    price = '9,90 &euro;'
    if count >= 50
      price = '8,90 &euro;'
    if count >= 250
      price = '7,90 &euro;'
    price

  #
  # Content Scroller
  #
  scrollers = document.querySelectorAll('.scroller')
  x = 0
  # while x < scrollers.length
  scrollers.forEach (scroller) ->
    scroller = scrollers[x]
    scroller.style.height = scroller.dataset.height + 'px'
    scrollerWindowHeight = scroller.dataset.height
    scrollerBelt = scroller.querySelector('.scroller-belt')
    scrollerBeltHeight = scrollerBelt.offsetHeight

    if scrollerBeltHeight > 0
      scrollerReversed = false
      if scroller.hasAttribute('data-reversed')
        scrollerReversed = true
      
      # Calculate how many times content has to be copied
      n = scrollerWindowHeight
      d = scrollerBeltHeight
      count = 0
      while n >= d
        n -= d
        count++
      count++
      
      # Populate box
      originalContent = scrollerBelt.innerHTML
      i = 0
      while i < count
        scrollerBelt.innerHTML += originalContent
        i++
      
      currentTop = 0
      if scrollerReversed
        currentTop = scrollerBeltHeight
      animationSpeed = 40; # Pixels per second
      animationInterval = null
      animationPaused = false
    
    # Actual animation function
    scroll = () ->
      if !animationPaused
        animationStep = animationSpeed / 24
        if scrollerReversed
          currentTop -= animationStep
          if currentTop <= 0
            currentTop = scrollerBeltHeight
        else
          currentTop += animationStep
          if currentTop >= scrollerBeltHeight
            currentTop = 0
        scrollerBelt.style.marginTop = '-'+currentTop+'px'
    
    # Start animation
    # animationInterval = setInterval(scroll, 1000 / 24);
    
    # Stop animation on mouseenter, resume animation on mouseleave
    scroller.addEventListener 'mouseenter', (e) ->
      animationPaused = true
    , false
    scroller.addEventListener 'mouseleave', (e) ->
      animationPaused = false
    , false

    # Start stop animation on window resize
    handleResize = () ->
      clearInterval(animationInterval)
      if window.innerWidth <= 800
        if scrollerReversed
          currentTop = scrollerBeltHeight
        else
          currentTop = 0
        scrollerBelt.style.marginTop = '-'+currentTop+'px'
      else
        animationInterval = setInterval(scroll, 1000 / 24);

    handleResize()
    window.addEventListener 'resize', (e) ->
      handleResize()

    x++
