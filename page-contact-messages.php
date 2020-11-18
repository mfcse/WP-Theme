<?php
require('logic/read_message.php');
$slider=get_field('slider-image');
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

    <!-- contact message section -->
  <section id="contact-messages">
    <div class="container">
      <h3 class="section-title">Our Client Responses</h3>
    <table id="customers">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>


      <?php
        foreach ($results as $key) {
         ?> 
        <tr>
        <td><?php echo $key->firstname." ".$key->lastname?></td>
        <td><?php echo $key->email?></td>
        <td><?php echo $key->message?></td>

     </tr>
<?php 
}
      ?>
     
    </table>
    </div>
  </section>
	
	<?php get_footer(); ?>

