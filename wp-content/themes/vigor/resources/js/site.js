window.addEventListener('touchstart', function() {
  document.body.classList.add('»touch');
});

jQuery(($) => {
  $('[slides\\@slides]').slick({
    prevArrow: $('[slides]').find('.»left'),
    nextArrow: $('[slides]').find('.»right'),
    dots: true
  })

  const $pins = $('[pin]')

  const map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: 37.774929, lng: -122.419418 },
    zoom: 13
  })

  $('body').on('click', '[action]', async event => {
    event.preventDefault()
    const $element = $(event.currentTarget)
    const url = $element.attr('href')

    const html = await $.get(url, {action: 'gallery'}, 'html')

    $('[modal\\@content]').html(html)

    $('body').addClass('state:modal')

    $('[gallery\\@slides]').slick({
      prevArrow: $('[gallery]').find('.»left'),
      nextArrow: $('[gallery]').find('.»right'),
      fade: true
    })

    $('[modal\\@close]').one('click', event => {
      event.preventDefault()
      $('body').removeClass('state:modal')
    })
  })

  $pins.each((index, element) => {
    const $pin = $(element)
    const lng = parseFloat($pin.data('lng'))
    const lat = parseFloat($pin.data('lat'))
    const url = $pin.data('url')

    const position = new google.maps.LatLng(lat, lng);

    const icon = {
      url: `${VIGOR.STYLESHEET_DIR}/dist/pin.svg`,
      size: new google.maps.Size(81,75),
      origin: new google.maps.Point(0, 0)
    }

    const iconActive = {
      url: `${VIGOR.STYLESHEET_DIR}/dist/pin-selected.svg`,
      size: new google.maps.Size(81,75),
      origin: new google.maps.Point(0, 0)
    }

    const marker = new google.maps.Marker({
      position,
      icon
    })

    marker.setMap(map)

    const infowindow = new google.maps.InfoWindow({
      content: `<div class="component:fetching"></div>`
    })

    infowindow.addListener('closeclick', event => {
      marker.setIcon(icon)
    })

    marker.addListener('click', async event => {
      marker.setIcon(iconActive)

      const html = await $.get(url, {action: 'content'}, 'html')

      infowindow.setContent(html)
      infowindow.open(map, marker)
    })
  })
})
