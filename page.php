<?php get_header(); ?>
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

	
	<?php get_footer(); ?>

