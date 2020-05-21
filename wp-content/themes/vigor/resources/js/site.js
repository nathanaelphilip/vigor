window.addEventListener('touchstart', function() {
  document.body.classList.add('»touch');
});

jQuery(($) => {
  const MODAL = new Modal

  $('.component\\:search > i').on('click', (event) => {
    event.preventDefault()
    $(event.currentTarget).parent().toggleClass('»active')
  })

  $('body').on('click', (event) => {
    if (!$(event.target).closest('.component\\:search').length) {
      $('.component\\:search').removeClass('»active')
    }
  })

  $('.card\\:faq\\:\\:link').on('click', event => {
    event.preventDefault()
    $(event.currentTarget).parents('.card\\:faq').toggleClass('»active')
  })

  $('.component\\:button\\@menu').on('click', event => {
    event.preventDefault()
    $('body').toggleClass('state:menu')
  })

  $('[dropdown]').on('click', event => {
    event.preventDefault()
    const $this = $(event.currentTarget)
    const $target = $($this.attr('dropdown'))
    $target.toggleClass('»active')
  })

  const TEMPLATE_TEAM = ({image, heading, role, content}) => `
    <article class="block:team@modal">
      <figure class="block:team@modal::image">
        <img src="${image}" alt="${heading}" width="500" height="500" />
      </figure>
      <div class="block:team@modal::box">
        <header class="block:team@modal::header">
          <h2 class="block:team@modal::heading">${heading}</h2>
          <div class="block:team@modal::role">${role}</div>
        </header>
        <div class="block:team@modal::content">
          ${content}
        </div>
      </div>
    </article>
  `

  $('[team]').on('click', event => {
    event.preventDefault()
    const $this = $(event.currentTarget)
    const url = $this.attr('href')

    const response = $.get(url)

    response.then(data => {
      const content = TEMPLATE_TEAM(data)
      MODAL.content(content)
      MODAL.open()
    })
  })
})


class Modal {
  constructor() {
    this.$el = jQuery('[modal]')
    this.$close = this.$el.find('[modal\\@close]')
    this.$content = this.$el.find('[modal\\@content]')
    this.setup()
  }

  setup () {
    this.$close.on('click', event => {
      event.preventDefault()
      this.close()
    })
  }

  content (content) {
    this.$content.html(content)
  }

  open () {
    jQuery('body').addClass('state:modal')
  }

  close () {
    jQuery('body').removeClass('state:modal')
  }
}
