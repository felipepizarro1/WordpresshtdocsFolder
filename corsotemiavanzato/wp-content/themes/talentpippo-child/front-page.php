<?php get_header(); ?>
<section>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php for($i = 1; $i <= 3; $i++ ) : ?>
        <?php if( !empty( get_theme_mod("id_setting_slide_$i") )) : ?>
    <div class="carousel-item <?php if ($i == 1) { echo 'active'; } ?>">
      <img src="<?php echo get_theme_mod("id_setting_slide_$i"); ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p><?php echo get_theme_mod("id_setting_text_slide_$i"); ?></p>
        <a class="btn btn-primary" href="<?php echo get_theme_mod("id_setting_url_slide_$i");?>">TESTO BOTTONE</a>
      </div>
    </div>
    <?php endif; ?>
    <?php endfor; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<?php get_footer(); ?>