<?php
require('logic/create_message.php');
$slider=get_field('slider-image');
// echo "hello";
 ?>
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
  
  <!-- contact -->
  <section class="contact-area" id="contact">
    <h3 class="section-title">Contact</h3>
    <ul class="contact-content">
      <li>
        <i class="fa fa-map-marker"></i>
        <p>247 Westwood Lane</p>
      </li>
      <li>
        <i class="fa fa-phone"></i>
        <p>+88018100000<br>+880171000000</p>
      </li>
      <li>
        <i class="fa fa-envelope"></i>
        <p>info@mail.com<br>hello@web.com</p>
      </li>
    </ul>
  </section>
  <!-- contact form area -->
  <section id="contact-form-area">
    <div class="wrapper">
      <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="form-area">
        <div class="msg-area">
          <label for="msg">Message</label>
          <textarea id="msg" name="msg"></textarea>
        </div>
        <div class="details-area">
          <label for="fname">First Name</label>
          <input type="text" name="fname" id="fname">

          <label for="lname">Last Name</label>
          <input type="text" name="lname" id="lname">

          <label for="email">Email</label>
          <input type="email" name="email" id="email">
          <button type="submit" name="submit">Submit</button>
        </div>

      </form>
    </div>
  </section>


	
	<?php get_footer(); ?>
