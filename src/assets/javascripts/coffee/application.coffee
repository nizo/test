# Function to make forEach work in IE
if window.NodeList && !NodeList.prototype.forEach
  NodeList.prototype.forEach = Array.prototype.forEach

app =
  init: ->
    @bind_events()
    @init_slider()
    @loop_videos()
    @init_tabs()

  bind_events: ->
    _this = @

    eventListener 'click', '.tab-nav a', (e) ->
      e.preventDefault()
      tabs = e.target.closest '.tabs'
      tab = tabs.querySelectorAll '.tab'
      link = e.target.closest('a')
      tab.forEach (t) =>
        t.classList.remove 'active'
      tabLinks = tabs.querySelectorAll '.tab-nav a'
      tabLinks.forEach (tLink) =>
        tLink.classList.remove 'active'
      link.classList.add 'active'
      newActive = tabs.querySelector('.tab#' + link.getAttribute('data-tab'))
      newActive.classList.add 'active'
    
    # Callback & Form
    eventListener 'click', '.form .submit', (e) ->
      e.preventDefault()
      form = e.target.closest('.js-form')
      if form.classList.contains('callback')
        sendCallback(form)
      else
        sendForm(form)
    
    # OpenContainer
    eventListener 'click', '.container .title', (e) ->
      e.preventDefault()
      e.target.parentNode.classList.toggle 'open'
        
    # OpenContainer type2
    eventListener 'click', '.accordion', (e) ->
      e.preventDefault()
      accordion = e.target.closest('.accordion')
      accordionContent = accordion.querySelector('.content')
      if accordion.classList.contains('open')
        if accordion.classList.contains('accordion-closeable')
          accordion.classList.remove('open')
          accordionContent.style.display = ''
      else
        accordions = document.querySelectorAll('.accordion')
        accordions.forEach (a) =>
          a.classList.remove('open')
          aContent = a.querySelector('.content')
          aContent.style.display = ''
        accordion.classList.add('open')
      
    # Mobile footer nav
    eventListener 'click', '.footer-menu li span', (e) ->
      if e.target.closest('li').classList.contains('open')
        e.target.closest('li').classList.remove('open')
      else
        footerItems = document.querySelectorAll('.footer-menu li')
        footerItems.forEach((item) => item.classList.remove('open'))
        e.target.closest('li').classList.add('open')

    # Mobile subnav
    eventListener 'click', '.mobile-nav .pages-menu .submenu', (e) ->
      e.preventDefault()
      e.stopPropagation()
      submenu = e.target.closest('.submenu')
      if submenu.classList.contains('submenu-open')
        submenu.classList.remove('submenu-open')
        submenu.nextElementSibling.style.display = 'none'
      else
        submenusBoxes = document.querySelectorAll('.pages-submenu')
        submenusBoxes.forEach((submenuBox) => submenuBox.style.display = 'none')
        submenus = document.querySelectorAll('.pages-menu .submenu-open')
        submenus.forEach((sub) => sub.classList.remove('submenu-open'))
        submenu.classList.add('submenu-open')
        submenu.nextElementSibling.style.display = 'block'

    # Toggle mobile nav
    eventListener 'click', '.btn-mobile-nav', (e) ->
      e.preventDefault()
      document.querySelector('.mobile-nav').classList.toggle('open')

    # SmoothScroll
    eventListener 'click', 'a[href^="#"]', (e) ->
      e.preventDefault()
      anchor = e.target.hash
      if anchor
        target = document.querySelector(anchor)
        window.scrollToOffset(target.offsetTop - 60, =>
          window.location.hash = anchor
        )
      
    # ToggleCallNumbers
    eventListener 'click', '.showDiv', (e) ->
      e.preventDefault()
      selection = e.target.parentNode.querySelector('.selection')
      selection.classList.toggle('active')
      if selection.classList.contains('active')
        selection.style.display = 'block'
      else
        selection.style.display = 'none'

    eventListener 'click', '.customCheckbox', (e) ->
      boxes = document.querySelectorAll('.showField')
      boxes.forEach((box) =>
        box.style.display = 'block'
      )

    # Toggle Boxes
    toggleBoxes = document.querySelectorAll('.toggle-box')
    eventListener 'click', '.toggle-box label', (e) ->
      currentBox = e.target.closest('.toggle-box')
      toggleBoxes.forEach (box) ->
        if box != currentBox
          slideUp(box.querySelector('.toggle-box__content'), 300)
          box.querySelector('input').checked = false;
      slideToggle(currentBox.querySelector('.toggle-box__content'), 300)
    toggleBoxes.forEach (box) ->
      if box.querySelector('input').checked
        box.querySelector('.toggle-box__content').style.display = 'block'

  loop_videos: ->
    videos = Array.from(document.querySelectorAll('video[data-loop]'))
    videos.forEach (video) ->
      loop_time = parseFloat(video.getAttribute('data-loop'))
      video.addEventListener 'ended', (e) ->
        this.currentTime = loop_time
        this.play()

  init_tabs: ->
    tabs = document.querySelectorAll('.tabs')
    tabs.forEach (tab) ->
      tab.querySelectorAll('.tab-nav a')[0].classList.add 'active'
      tab.querySelectorAll('.tab')[0].classList.add 'active'

  init_slider: ->
    sliders = document.querySelectorAll('.slider')
    sliders.forEach (s) ->
      slider.init(s)

slider =
  slider: ""
  slides_box: ""
  slides: ""
  slider_height: 0
  slide_width: 0
  current_slide: 0

  init: (elem) ->
    @slider = elem
    @slides_box = @slider.querySelector('.slides')
    @slides = @slider.querySelectorAll('.slide')
    @get_slider_height()
    @init_slider_nav()
    @slide_width = @slides[0].offsetWidth
    @bind_events()
    @slides[0].classList.add 'active'
    @slides[1].classList.add 'active'
    @slides[2].classList.add 'active'

  bind_events: ->
    _this = @
    window.onresize = () ->
      _this.slides.forEach (slide) ->
        slide.style.width = _this.slider.offsetWidth / 3 + 'px'
      _this.get_slider_height()

  get_slider_height: ->
    extra_height = 33 + 40 + 100 # button height + slides padding + gutters
    _this = @
    @slides.forEach (val) ->
      if val.offsetHeight > _this.slider_height
        _this.slider_height = val.offsetHeight
    @slider.style.height = @slider_height + extra_height + 'px'
    contents = @slider.querySelectorAll('.slide-content')
    contents.forEach (c) ->
      c.style.height = _this.slider_height + 'px'

  init_slider_nav: ->
    i = 0
    while i < @slides.length - 2
      button = document.createElement('div')
      button.classList.add('btn-slider-nav')
      button.setAttribute('data-slide', i)
      _this = @
      eventListener 'click', '.btn-slider-nav', (e) ->
        btn = e.target.closest '.btn-slider-nav'
        slider = e.target.closest '.slider'
        current_slide = parseInt btn.getAttribute('data-slide')
        slide_width = slider.offsetWidth / 3
        slider.querySelector('.slides').style.left = current_slide * slide_width * -1 + 'px'
        btns = slider.querySelectorAll('.btn-slider-nav')
        btns.forEach (b) ->
          b.classList.remove 'active'
        btns[current_slide].classList.add 'active'
        slides = slider.querySelectorAll('.slide')
        slides.forEach (s) ->
          s.classList.remove 'active'
        slides[current_slide].classList.add 'active'
        slides[current_slide+1].classList.add 'active'
        slides[current_slide+2].classList.add 'active'
      if i is 0
        button.classList.add 'active'
      _this.slider.querySelector('.slider-navigation').appendChild button
      i++

document.addEventListener 'DOMContentLoaded', ->
  app.init()

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
  # Softphone usercalc
  #
  minValue = 25
  maxValue = 500
  if document.querySelectorAll('.usercalc').length > 0
    usercalcs = document.querySelectorAll('.usercalc')
    usercalcs.forEach (usercalc) ->
      users = usercalc.querySelector('.usercalc__users')
      price = usercalc.querySelector('.usercalc__price')
      form = usercalc.querySelector('.usercalc__form')
      result = usercalc.querySelector('.usercalc__result')
      submit = usercalc.querySelectorAll('.usercalc__submit')
      slider = usercalc.querySelector('.usercalc__slider input')
      total = usercalc.querySelector('.usercalc__total span')
      callcenterCheckbox = usercalc.querySelector('#callcenter-software')
      callcenterSection = usercalc.querySelector('.usercalc__callcenter')
      currentTotal = minValue * 9.90
      isCallcenterChecked = false
      slider.addEventListener 'input', (e) ->
        users.value = parseInt(this.value)
        price.innerHTML = getPricePerUser(parseInt(this.value))
        currentTotal = getTotalPrice(parseInt(this.value))
      , false
      users.addEventListener 'change', (e) ->
        val = parseInt(this.value)
        if val < minValue or val > maxValue
          users.value = minValue
          slider.value = minValue
          price.innerHTML = getPricePerUser(minValue)
          currentTotal = getTotalPrice(minValue)
        else
          slider.value = val
          price.innerHTML = getPricePerUser(this.value)
          currentTotal = getTotalPrice(this.value)
      callcenterCheckbox.addEventListener 'change', (e) ->
        isCallcenterChecked = this.checked
      submit.forEach (s) ->
        s.addEventListener 'click', (e) ->
          e.preventDefault()
          form.classList.toggle 'usercalc__form--inactive'
          result.classList.toggle 'usercalc__result--active'
          if isCallcenterChecked
            callcenterSection.classList.add 'usercalc__callcenter--active'
          else
            callcenterSection.classList.remove 'usercalc__callcenter--active'
          tempTotal = Math.round(currentTotal * 100) / 100
          total.innerHTML = tempTotal.toString().replace('.', ',') + ' &euro;'
  getTotalPrice = (count) ->
    price = 9.90
    if count >= 50
      price = 8.90
    if count >= 250
      price = 7.90
    price * count
  getPricePerUser = (count) ->
    price = '9,90 &euro;'
    if count >= 50
      price = '8,90 &euro;'
    if count >= 250
      price = '7,90 &euro;'
    price

  #
  # Softphone Installation Buttons
  #
  fallbackBrowser = 'chrome'
  currentBrowser = fallbackBrowser
  userAgent = navigator.userAgent
  if userAgent.indexOf("Edg") != -1 || userAgent.indexOf("Edge") != -1
    currentBrowser= 'edge'
  else if userAgent.indexOf("Chrome") != -1
    currentBrowser = 'chrome'
  else if userAgent.indexOf("Firefox") != -1
    currentBrowser = 'firefox'
  else if (userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )
    currentBrowser = 'edge'
  else
    currentBrowser = fallbackBrowser
  if currentBrowser
    browserButton1 = document.querySelector('.installation__browser[data-browser="'+currentBrowser+'"]')
    browserButton2 = document.querySelector('.installation__button[data-browser="'+currentBrowser+'"]')
    browserBadge = document.querySelector('.browsers__browser[data-browser="'+currentBrowser+'"]')
    if browserButton1 && browserButton2
      browserButton1.classList.add 'installation__browser--active'
      browserButton2.classList.add 'installation__button--active'
    if browserBadge
      browserBadge.classList.add 'browsers__browser--active'
  installationButtons = document.querySelectorAll('.installation__browser')
  installationButtons.forEach (btn) ->
    btn.addEventListener 'click', (e) ->
      e.preventDefault()
      browser = btn.getAttribute('data-browser')
      if currentBrowser != browser
        currentBrowser = browser
        currentActive1 = document.querySelector('.installation__browser--active')
        currentActive2 = document.querySelector('.installation__button--active')
        if currentActive1 && currentActive2
          currentActive1.classList.remove 'installation__browser--active'
          currentActive2.classList.remove 'installation__button--active'
        document.querySelector('.installation__browser[data-browser="'+browser+'"]').classList.add 'installation__browser--active'
        document.querySelector('.installation__button[data-browser="'+browser+'"]').classList.add 'installation__button--active'

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
