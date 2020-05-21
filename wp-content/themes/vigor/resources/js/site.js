window.addEventListener('touchstart', function() {
  document.body.classList.add('»touch');
});

jQuery(($) => {
  $('[slides]').slick({
    arrows: false,
    dots: true
  })

  console.log(document.getElementById('map'))

  const $pins = $('[pin]')

  const map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: 37.774929, lng: -122.419418 },
    zoom: 13
  })

  $pins.each((index, element) => {
    const $pin = $(element)
    const lng = parseFloat($pin.data('lng'))
    const lat = parseFloat($pin.data('lat'))

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
      content: `<div>TBD</div>`
    })

    infowindow.addListener('closeclick', event => {
      marker.setIcon(icon)
    })

    marker.addListener('click', event => {
      marker.setIcon(iconActive)
      infowindow.setContent(`AJAX Content!`)
      infowindow.open(map, marker)
    })
  })
})
