<?php get_header();

$slider = get_field('slider-image');
$services = get_field('services');
$about = get_field('about');
$faq = get_field('faq');
?>
<!-- image slider -->
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

<!-- about section -->
<section class="about-area" id="about">
  <h3 class="section-title">About Us</h3>
  <ul class="about-content">
    <li class="about-left">
      <img src="<?php echo $about['image'] ?>" alt="">
    </li>
    <li class="about-right">
      <h2><?php echo $about['heading'] ?></h2>
      <p><?php echo $about['description'] ?></p>
      <a href="" class="about-btn">Learn More</a>
    </li>
  </ul>
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
<!-- service section -->
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


<?php get_footer(); ?>