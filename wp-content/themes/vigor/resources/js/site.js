window.addEventListener('touchstart', function() {
  document.body.classList.add('»touch');
});

jQuery(($) => {
  console.log('hello')
  $('[slides]').slick({
    arrows: false,
    dots: true
  })
})
