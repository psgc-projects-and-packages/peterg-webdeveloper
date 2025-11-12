$(document).ready(function () {
  // Threshold for "close to bottom" - show "Back to Top" when within this distance from bottom
  var bottomThreshold = 300 // pixels from bottom

  function isNearBottom() {
    return window.innerHeight + window.scrollY >= document.body.offsetHeight - bottomThreshold
  }

  function updateScrollButton() {
    if (isNearBottom()) {
      $('#tag-clickme_to_scroll_down .tag-more').hide()
      $('#tag-clickme_to_scroll_down .tag-top').show()
    } else {
      $('#tag-clickme_to_scroll_down .tag-top').hide()
      $('#tag-clickme_to_scroll_down .tag-more').show()
    }
  }

  // Check initial state
  updateScrollButton()

  // Update on scroll
  $(window).on('scroll', function () {
    updateScrollButton()
  })

  $(document).on('click', '#tag-clickme_to_scroll_down .tag-more a', function (e) {
    var doc = document.documentElement
    var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
    var y = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0)
    var scrollDelta = h + y
    //scrollDelta = 0.85*scrollDelta; // %NOTE: fudget factor
    //window.scrollTo(0,document.body.scrollHeight);

    //console.log(h,y);
    $('html, body').animate({ scrollTop: scrollDelta }, 750, function () {
      updateScrollButton()
    })

    /*
        setTimeout(function () {
            window.scrollTo(0, h+y);
        },2);
        */
  })

  $(document).on('click', '#tag-clickme_to_scroll_down .tag-top a', function (e) {
    $('#tag-clickme_to_scroll_down .tag-top').hide()
    $('html, body').animate({ scrollTop: 0 }, 1000, function () {
      $('#tag-clickme_to_scroll_down .tag-more').show()
    })
    return false
  })
})
