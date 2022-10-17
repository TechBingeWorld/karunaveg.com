
<!-- Footer Starts Here -->
  <footer>
      <div class="container col-10">
        <div class="row">
          <div class="col-md-5 footer-item">
            <h4>About us</h4>
            <p>Lorem Ipsum ist einfach Dummy-Text der Druck- und Satzindustrie. Lorem Ipsum war der Standard der Branche Lorem Ipsum ist einfach Dummy-Text der Druck- und Satzindustrie. Lorem Ipsum war der Standard der Branche</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://www.facebook.com/Karuna-Veg-101730179236012" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/karuna.veg/" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
          <!-- <div class="col-md-3 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Link 1</a></li>
              <li><a href="#">Link 2</a></li>
              <li><a href="#">Link 3</a></li>
              <li><a href="#">Link 4</a></li>
              <li><a href="#">Link 5</a></li>
            </ul>
          </div> -->
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="about.php">About Us</a></li>
              <li><a href="blog.php">Blog</a></li>
              <!-- <li><a href="#">Testimonials</a></li> -->
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="career.php">Career</a></li>
              <!-- <li><a href="#">Terms</a></li> -->
            </ul>
          </div>
          <div class="col-md-4 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" class="contact-form" onsubmit="sendEmail(); reset(); return false;" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control shadow-sm" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>
                      <input name="email" type="text" class="form-control shadow-sm" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>
                      <input name="mobile" type="tel" class="form-control shadow-sm" id="mobile"  pattern="[6789][0-9]{9}" maxlength="10"  placeholder="+91 " required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control shadow-sm" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2022 
                - Created with <i class="fa fa-heart"></i> by <a href="#">TechBinge</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    
	<script src="https://smtpjs.com/v3/smtp.js"></script> 

	<script type="text/javascript">
		function sendEmail() {
      // const form = document.querySelector('.contact-form'),
      // name = document.querySelector('#name'),
      // email = document.querySelector('#email'),
      // mobile = document.querySelector('#mobile'),
      // message = document.querySelector('#message');
      
			Email.send({
				// Host: "smtp.gmail.com",
				// Username : "rk0594517@gmail.com",
				// Password : "Test@321#",
				// To : "techbingework@gmail.com",
				// From : "sunil@gmail.com",
				// Subject : "New Query",
				// Body : message.value

				Host: "smtp.elasticemail.com",
				Username : "info@karunaveg.com",
				Password : "nfiQ~e*FrD%I",
				To : "info@karunaveg.com",
				From : "sunil@gmail.com",
				Subject : "New Query",
				Body : "SMTP Testing"
			})
			.then(function(message){
				alert("mail sent successfully");
			});
		}



	</script>

