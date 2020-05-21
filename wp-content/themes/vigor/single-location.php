<?php if ($_GET['action'] === 'content'): ?>
  <div class="card:location">
    <h3 class="card:location::heading">Vigor FX in <?php the_title() ?></h3>
    <address class="card:location::address">
      <?php the_field('address') ?>
    </address>
    <table class="card:location::hours">
      <?php while(have_rows('times')): the_row(); ?>
        <tr>
          <td><?php the_sub_field('day') ?></td>
          <td><?php the_sub_field('hours') ?></td>
        </tr>
      <?php endwhile; ?>
    </table>
    <?php
      $images = get_field('gallery');
    ?>
    <?php if ($images && count($images) > 0): ?>
      <?php $limit = array_slice($images, 0, 4) ?>
      <div class="card:location::gallery">
        <?php foreach ($limit as $count => $id): ?>
          <figure class="card:location::image">
            <?php if ($count === 3): ?>
              <a href="<?php the_permalink() ?>" action class="card:location::action"><?= count($images) - 4 ?> more</a>
            <?php endif; ?>
            <?= wp_get_attachment_image($id, 'thumbnail') ?>
          </figure>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

  </div>
<?php endif; ?>

<?php if ($_GET['action'] === 'gallery'): ?>
  <?php
    $images = get_field('gallery');
  ?>
  <?php if (count($images) > 0): ?>
    <div gallery class="block:gallery">
      <button class="block:gallery::arrow »left"><?= file_get_contents(get_stylesheet_directory() . '/dist/icn_arrow_l.svg') ?></button>
      <button class="block:gallery::arrow »right"><?= file_get_contents(get_stylesheet_directory() . '/dist/icn_arrow_r.svg') ?></button>
      <div gallery@slides class="block:gallery::slides">
        <?php foreach ($images as $id): ?>
          <figure class="block:gallery::image">
            <?= wp_get_attachment_image($id, 'full') ?>
          </figure>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>

<?php endif; ?>

<?php exit; ?>
