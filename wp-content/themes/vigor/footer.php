<footer class="block:footer">
  <div class="block:footer::container">
    <div class="block:footer::box">
      <figure class="block:footer::logo">
        <img width="150" height="180" src="<?= get_stylesheet_directory_uri() ?>/dist/logo-special@2x.png" alt="Vigor CrossFit">
      </figure>
    </div>
    <div class="block:footer::box">
      <div class="card:footer">
        <h5 class="card:footer::heading">About</h5>
        <address class="card:footer::content">
          Vigor Health inc.<br />
          1190 Mission St<br />
          San Francisco<br />
          CA 94103<br />
          USA
        </address>
      </div>
    </div>
    <div class="block:footer::box">
      <div class="card:footer">
        <h5 class="card:footer::heading">SiteMap</h5>
        <nav class="card:footer::content">
          <a href="/about">About</a><br>
          <a href="/programs">Programs</a><br>
          <a href="/careers">Careers</a><br>
          <a href="/contact">Contact</a><br>
          <a href="/store">Store</a><br>
        </nav>
      </div>
    </div>
    <div class="block:footer::box">
      <div class="card:footer">
        <h5 class="card:footer::heading">Social</h5>
        <nav class="card:footer::content">
          <a href="https://twitter.com" target="_blank">Twitter</a><br>
          <a href="https://instagram.com" target="_blank">Instagram</a><br>
          <a href="https://facebook.com" target="_blank">Facebook</a><br>
          <a href="https://youtube.com" target="_blank">YouTube</a><br>
        </nav>
      </div>
    </div>
  </div>
</footer>

<div modal class="component:modal">
  <button modal@close class="component:modal::close">close</button>
  <div modal@content class="component:modal::content"></div>
</div>
<?php wp_footer(); ?>
