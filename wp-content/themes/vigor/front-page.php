<?php get_header(); ?>
  <?php while(have_rows('intro')): the_row(); ?>
    <section class="block:intro">
      <div class="block:intro::overlay">
        <div class="block:intro::boxed">
          <div class="block:intro::box">
            <h2 class="block:intro::heading"><?php the_sub_field('heading') ?></h2>
            <div class="block:intro::content">
              <?php the_sub_field('content') ?>
            </div>
            <div class="block:intro::actions">
              <?php while(have_rows('actions')): the_row(); ?>
                <?php $link = get_sub_field('link') ?>
                <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>" class="component:button <?= get_row_index() == 1 ? '»filled' : '' ?>">
                  <span class="component:button::text"><?= $link['title'] ?></span>
                </a>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
      <figure class="block:intro::image">
        <?= wp_get_attachment_image(get_sub_field('image'), 'full') ?>
      </figure>
    </section>
  <?php endwhile; ?>
  <div class="block:info">
    <div class="block:info::container">
      <h3 class="block:info::heading">The right way to get back your track</h3>
      <div class="block:info::content">
        <p>At Vigor Crossfit, our primary focus is to get you fit for life in a safe environment</p>
        <p>We’re committed to helping you move better and feel great doing it.</p>
      </div>
    </div>
  </div>
  <section slides class="block:slides">
    <button class="block:slides::arrow »left"><?= file_get_contents(get_stylesheet_directory() . '/dist/icn_arrow_l.svg') ?></button>
    <button class="block:slides::arrow »right"><?= file_get_contents(get_stylesheet_directory() . '/dist/icn_arrow_r.svg') ?></button>
    <div slides@slides>
      <?php while(have_rows('slides')): the_row(); ?>
        <article class="card:slide">
          <div class="card:slide::overlay">
            <div class="card:slide::box">
              <h3 class="card:slide::heading">We got you. Seriously</h3>
              <div class="card:slide::content">
                <p>Team of our first class rockstar trainers, got you covered.<br>Health plans, strength training… you name it.</p>
              </div>
            </div>
            <div class="card:slide::box">
              <aside class="card:slide::coach card:coach">
                <h4 class="card:coach::heading">Ali Douhani</h4>
                <div class="card:coach::content">
                  <p>2018 Olympic weightlifting champion, 2016 Crossfit Games finalist,  2013 Crossfit Games  - 2nd place</p>
                </div>
              </aside>
              <div class="card:slide::action">
                <a href="/meet-the-coaches">Meet All Our Coaches</a>
              </div>
            </div>
          </div>
          <figure class="card:slide::image">
            <?= wp_get_attachment_image(get_sub_field('image'), 'full') ?>
          </figure>
        </article>
      <?php endwhile; ?>
    </div>
  </section>
  <section class="block:plans">
    <div class="block:plans::container">
      <h2 class="block:plans::heading">Find the right plan</h2>
      <div class="block:plans::grid">
        <article class="card:plan">
          <h3 class="card:plan::heading">Beginner</h3>
          <ul class="card:plan::list">
            <li class="card:plan::item">
              2 times per week
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Stretching
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Light training
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
          </ul>
          <div class="card:plan::action">
            <a href="/product/plan/beginner" class="component:button »filled">
              <span class="component:button::text">
                $200 / Month
              </span>
            </a>
          </div>
        </article>
        <article class="card:plan »featured">
          <h3 class="card:plan::heading">Intermediate</h3>
          <ul class="card:plan::list">
            <li class="card:plan::item">
              3 times per week
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Moderate Stretching
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Moderate Cardio training
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Food plan
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Personal training plan
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
          </ul>
          <div class="card:plan::action">
            <a href="/product/plan/intermediate" class="component:button »filled">
              <span class="component:button::text">
                $300 / Month
              </span>
            </a>
          </div>
        </article>
        <article class="card:plan">
          <h3 class="card:plan::heading">Competitive</h3>
          <ul class="card:plan::list">
            <li class="card:plan::item">
              6 times per week
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Core excercises
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Hard cardio training
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Strict food plan
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Personal trainer
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
            <li class="card:plan::item">
              Competitive courses
              <i class="card:plan::icon">
                <?= file_get_contents(get_stylesheet_directory() . '/dist/checkmark.svg') ?>
              </i>
            </li>
          </ul>
          <div class="card:plan::action">
            <a href="/product/plan/competitive" class="component:button »filled">
              <span class="component:button::text">
                Contact Us
              </span>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>
  <?php $locations = new wp_query([
    'post_type' => 'location',
    'nopaging' => true,
    'no_found_rows' => true
    ]) ?>
  <figure class="block:map">
    <h3 class="block:map::heading">Come and stop by</h3>
    <?php if ( $locations->have_posts() ) : while ( $locations->have_posts() ) : $locations->the_post(); ?>
      <div class="block:map::location" pin data-url="<?php the_permalink() ?>" data-lat="<?php the_field('lat') ?>" data-lng="<?php the_field('lng') ?>"></div>
    <?php endwhile; endif; wp_reset_query() ?>
    <div id="map" class="block:map::map"></div>
  </figure>
  <?php while(have_rows('share')): the_row(); ?>
    <aside class="block:share">
      <div class="block:share::container">
        <div class="block:share::box">
          <h3 class="block:share::heading"><?php the_sub_field('heading') ?></h3>
          <div class="block:share::content">
            <?php the_sub_field('content') ?>
          </div>
          <?php if ($action = get_sub_field('action')): ?>
            <div class="block:share::action">
              <a href="<?= $action['url'] ?>" target="<?= $action['target'] ?>"><?= $action['title'] ?></a>
            </div>
          <?php endif; ?>
        </div>
        <div class="block:share::items">
          <?php foreach (get_sub_field('products') as $id): ?>
            <?php $product = new WC_Product($id) ?>
            <article class="card:product">
              <div class="card:product::overlay">
                <div class="card:product::boxed">
                  <div class="card:product::box">
                    <h4 class="card:product::heading"><?= $product->get_title() ?></h4>
                    <mark class="card:product::price"><?= $product->get_price_html() ?></mark>
                  </div>
                  <div class="card:product::action">
                    <a
                      href="<?= get_permalink($product->id) ?>"
                      class="component:button »small »filled"
                      buy="<?= $product->id ?>"
                      >
                      <span class="component:button::text">
                        Buy Now
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <figure class="card:product::image">
                <?= wp_get_attachment_image($product->get_image_id(), 'full') ?>
              </figure>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </aside>
  <?php endwhile; ?>
  <aside class="block:newsletter">
    <div class="block:newsletter::container">
      <h3 class="block:newsletter::heading">Subscribe to our newsletter</h3>
      <div class="block:newsletter::content">
        <p>and get $20 off your new membership or your next order in our store.</p>
      </div>
      <form coupon class="block:newsletter::form form:newsletter">
        <div class="form:newsletter::box">
          <input name="EMAIL" placeholder="name@email.com" type="text" class="form:newsletter::input">
        </div>
        <button type="submit" class="component:button »light">
          <span class="component:button::text">Subscribe</span>
        </button>
      </form>
      <div class="block:newsletter::message">
        <p>We don’t spam. I mean… Spam is in a can. Why would we put your email in a can?</p>
      </div>
    </div>
  </aside>
<?php get_footer(); ?>
