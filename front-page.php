<?php
get_header();
$slider = get_field('slider-image');
$services = get_field('services');
$faq = get_field('faq');
$testimonial = get_field('testimonial');
//print_r($testimonial);

?>

<!-- image slider -->
<section class="image-slider">
  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="<?php echo $slider['image-1']; ?>" style="width:100%">
      <div class="text">Lorem ipsum dolor sit amet.</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="<?php echo $slider['image-2']; ?>" style="width:100%">
      <div class="text">Lorem ipsum dolor sit amet.</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="<?php echo $slider['image-3']; ?>" style="width:100%">
      <div class="text">Lorem ipsum dolor sit amet.</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</section>
<!-- shortcode plus content -->
<?php
// get_template_part('includes/section', 'content');
//get_template_part('includes/latest', 'services');
if (have_posts()) {
  the_post();
  // the_title();
  the_content();
}
?>

<!-- services section -->
<!-- <section id="service-section">
  <h3 class="section-title">Services</h3>
  <div class="box-area">
    <?php foreach ($services as $key => $value) { ?>
    <div class="single-box">
      <div class="img-area">
        <img src="<?php echo $value['image']; ?>" alt="">
      </div>
      <div class="img-text">
        <span class="header-text"><strong><?php echo $value['heading'] ?></strong></span>
        <p><?php echo $value['description'] ?></p>
      </div>
    </div>
    <?php } ?>
  </div>
</section> -->

<!-- faq section -->

<section id="faq">
  <h3 class="section-title">FAQ</h3>

  <div class="accordion">
    <?php
    $i = 1;
    foreach ($faq as $key => $value) {
    ?>
    <div>
      <input type="radio" name="example_accordion" id="section<?php $j = $i;
                                                                echo $i++; ?>" class="accordion__input"
        <?php if ($j == 1) echo 'checked'; ?>>
      <label for="section<?php echo $j; ?>" class="accordion__label"><?php echo $value['heading'] ?></label>
      <div class="accordion__content">
        <p><?php echo $value['heading'] ?></p>
        <p>
          <?php echo $value['description'] ?>
        </p>

      </div>
      <?php
    }
      ?>
    </div>

  </div>
</section>


<!-- testimonial section -->
<section id="testimonial">
  <div class="container">
    <h3 class="section-title">Testimonials</h3>
    <div class="testiSlide">
      <?php foreach ($testimonial as $key => $value) { ?>
      <div>
        <figure class="testimonial">
          <blockquote>
            <?php echo $value['message']; ?>
            <div class="btn"></div>
            <div class="star-rating">
              <span class="fa fa-star "></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
          </blockquote>

          <img src="<?php echo $value['image']; ?>" alt="Maksim Goffin" />

          <div class="peopl">
            <h3><?php echo $value['name']; ?></h3>
            <p class="indentity"><?php echo $value['profession']; ?></p>
          </div>
        </figure>
      </div>
      <?php } ?>
    </div>

  </div>
</section>
<?php get_footer(); ?>