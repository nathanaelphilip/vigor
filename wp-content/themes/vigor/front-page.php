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
      <figure class="card:slide::image">
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
  <section class="block:slides">
    <article class="card:slide">
      <div class="card:slide::overlay">
        <div class="card:slide::box">
          <h3 class="card:slide::heading">We got you. Seriously</h3>
          <div class="card:slide::content">
            <p>Team of our first class rockstar trainers, got you covered. Health plans, strenght training… you name it.</p>
          </div>
        </div>
        <aside class="card:coach">
          <h4 class="card:coach::heading">Ali Douhani</h4>
          <div class="card:coach::content">
            <p>2018 Olympic weightlifting champion, 2016 Crossfit Games finalist,  2013 Crossfit Games  - 2nd place</p>
          </div>
        </aside>
        <div class="card:slide::action">
          <a href="#">Meet All Our Coaches</a>
        </div>
      </div>
      <figure class="card:slide::image">
        <img src="//" alt="">
      </figure>
    </article>
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
            </li>
            <li class="card:plan::item">
              Stretching
            </li>
            <li class="card:plan::item">
              Light training
            </li>
          </ul>
          <div class="card:plan::action">
            <a href="#" class="component:button »filled">$200 / Month</a>
          </div>
        </article>
        <article class="card:plan">
          <h3 class="card:plan::heading">Beginner</h3>
          <ul class="card:plan::list">
            <li class="card:plan::item">
              2 times per week
            </li>
            <li class="card:plan::item">
              Stretching
            </li>
            <li class="card:plan::item">
              Light training
            </li>
          </ul>
          <div class="card:plan::action">
            <a href="#" class="component:button »filled">$200 / Month</a>
          </div>
        </article>
        <article class="card:plan">
          <h3 class="card:plan::heading">Beginner</h3>
          <ul class="card:plan::list">
            <li class="card:plan::item">
              2 times per week
            </li>
            <li class="card:plan::item">
              Stretching
            </li>
            <li class="card:plan::item">
              Light training
            </li>
          </ul>
          <div class="card:plan::action">
            <a href="#" class="component:button »filled">$200 / Month</a>
          </div>
        </article>
      </div>
    </div>
  </section>
  <figure class="block:map"></figure>
  <aside class="block:share">
    <div class="block:share::container">
      <div class="block:share::box">
        <h3 class="block:share::heading">Share the passion</h3>
        <div class="block:share::content">
          <p>Support the movement by wearing the toughest gear in the wild. Represent the chapter and yourself in our latest selected gear.</p>
        </div>
        <div class="block:share::action">
          <a href="#">Browse Our Shop</a>
        </div>
      </div>
      <div class="block:share::items">
        <article class="card:product">
          <div class="card:product::overlay">
            <div class="card:product::boxed">
              <div class="card:product::box">
                <h4 class="card:product::heading">Cross Shorts WMNS</h4>
                <mark class="card:product::price">$25.95</mark>
              </div>
              <div class="card:product::action">
                <a href="#" class="component:button »filled">Buy Now</a>
              </div>
            </div>
          </div>
          <figure class="card:product::image">
            <img src="" alt="">
          </figure>
        </article>
      </div>
    </div>
  </aside>
  <aside class="block:newsletter">
    <div class="block:newsletter::container">
      <h3 class="block:newsletter::heading">Subscribe to our newsletter</h3>
      <div class="block:newsletter::content">
        <p>and get $20 off your new membership or your next order in our store.</p>
      </div>
      <form class="form:newsletter">
        <input type="text" class="form:newsletter::input">
        <button type="submit" class="component:button »light">Subscribe</button>
      </form>
      <div class="block:newsletter::fineprint">
        <p>We dont spam. I mean… Spam is in a can. Why would we put your email in a can?</p>
      </div>
    </div>
  </aside>
<?php get_footer(); ?>
