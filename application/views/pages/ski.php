
        <script type="text/javascript">

function loadCSS(filename){ 

   const file = document.createElement("link");
   file.setAttribute("rel", "stylesheet");
   file.setAttribute("type", "text/css");
   file.setAttribute("href", filename);
   document.head.appendChild(file);

}



//this path should be relative your PHP location
loadCSS("<?php echo base_url();?>assets/CSS/index.css");

</script>
        <div class="continer">		<!-- The video -->
          <video controls="true" autoplay muted loop id="myVideo">
            <source src="<?php echo base_url();?>assets/images/video/Snow-Falling-Down.mp4" type="video/mp4">
          </video>  
          <!-- Optional: some overlay text to describe the video -->
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, inventore! Dolor beatae facere hic nostrum ea. Eius officia autem quibusdam veniam, inventore ut porro, neque iste illo unde nisi eveniet.</p>

          <div class="content ">
            <h1 class="effect7">

              <h2><a href="./booking.php">Book a Trip</a></h2>
            </h1>
          </div>
          </div>
        </div>
      </section>
      <section class="about-us" id="about">
        <div class="up">
          <div class="founder">
            <h2>3</h2>
            <p>Friends that LOVE Ski</p>
          </div>
          <div class="trips">
            <h2 class="count" id="trip">200</h2>
            <p>Trips Booked from us</p>
          </div>
          <div class="clients">
            <h2 class="count">100</h2>
            <p>HAPPY customers</p>
          </div>
        </div>
        <div class="gallery">
          <div class="slideshow-container">
            <div class="mySlides fade">
              <img src="<?php echo base_url();?>assets/images/slide1.jpg" style="width:100%" />
            </div>
            <div class="mySlides fade">
              <img src="<?php echo base_url();?>assets/images/slide2.jpg" style="width:100%" />
            </div>
            <div class="mySlides fade">
              <img src="<?php echo base_url();?>assets/images/slide3.jpg" style="width:100%" />
            </div>
            <div class="mySlides fade">
              <img src="<?php echo base_url();?>assets/images/slide4.jpg" style="width:100%" />
            </div>
            <div class="mySlides fade">
              <img src="<?php echo base_url();?>assets/images/slide5.jpg" style="width:100%" />
            </div>
            <div class="mySlides fade">
              <img src="<?php echo base_url();?>assets/images/slide6.jpg" style="width:100%" />
            </div>
          </div>
          <br />

          <div class="dot-continer" style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
      </section>
    </main>
    <script src="<?php echo base_url();?>assets/JS/index.js"></script>
  </body>
</html>
