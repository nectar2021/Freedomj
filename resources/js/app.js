// use global jQuery/Bootstrap provided by the theme scripts at the bottom
document.addEventListener('DOMContentLoaded', () => {
  // safe guard if needed
  const $ = window.jQuery || window.$
  if (!$) {
    console.warn('jQuery not found; vendor scripts must load before app.js')
    return
  }

  // example: ensure dropdowns behave on hover/focus
  $('#respMenu > li').on('mouseenter focusin', function(){
    $(this).addClass('open')
  }).on('mouseleave focusout', function(){
    $(this).removeClass('open')
  })
})
