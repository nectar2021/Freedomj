// use global jQuery/Bootstrap provided by the theme scripts at the bottom
document.addEventListener('DOMContentLoaded', () => {
  // safe guard if needed
  const $ = window.jQuery || window.$
  if (!$) {
    console.warn('jQuery not found; vendor scripts must load before app.js')
    return
  }

  const $navItems = $('#respMenu > li')

  $navItems.each(function () {
    const $trigger = $(this).find('> a[aria-haspopup="true"]')
    if ($trigger.length) {
      $trigger.attr('aria-expanded', 'false')
    }
  })

  $navItems.on('mouseenter focusin', function () {
    $(this).addClass('open')
    const $trigger = $(this).find('> a[aria-haspopup="true"]')
    if ($trigger.length) {
      $trigger.attr('aria-expanded', 'true')
    }
  }).on('mouseleave focusout', function () {
    $(this).removeClass('open')
    const $trigger = $(this).find('> a[aria-haspopup="true"]')
    if ($trigger.length) {
      $trigger.attr('aria-expanded', 'false')
    }
  })

  $('#respMenu > li > a[aria-haspopup="true"]').on('click', function (event) {
    event.preventDefault()
    const $parent = $(this).parent()
    const willOpen = !$parent.hasClass('open')

    $navItems.removeClass('open').find('> a[aria-haspopup="true"]').attr('aria-expanded', 'false')

    if (willOpen) {
      $parent.addClass('open')
      $(this).attr('aria-expanded', 'true')
    }
  })
})
