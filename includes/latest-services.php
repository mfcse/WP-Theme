<?php
$args = [
  'post_type' => 'Service',
  'posts_per_page' => 3,

];
$query = new WP_Query($args);

?>
<section id="service-section">
  <h3 class="section-title">Services</h3>
  <div class="box-area">
    <?php
    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post(); ?>

    <div class="single-box">
      <div class="img-area">
        <!-- <img src="<?php get_the_post_thumbnail(); ?>" alt=""> -->
        <?php the_post_thumbnail() ?>
      </div>
      <div class="img-text">
        <span class="header-text"><strong><?php the_title(); ?></strong></span>
        <p><?php the_content(); ?></p>
      </div>
    </div>



    <?php  }
    }
    ?>
  </div>
</section>