<?php include('includes/header.php'); ?>
<section class="welcome">
   <div class="container">
      <div class="row">

        <div class="col-md-8">
          <div class="box">
            <h3>GET IN TOUCH</h3>
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
           <div class="row">
              <div class="col-md-6">
                 <div class="md-form mb-0">
                    <input type="text" id="name" name="name" placeholder="Enter your Name" class="form-control">
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="md-form mb-0">
                    <input type="text" id="email" name="email" placeholder="Enter E-mail ID" class="form-control">
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                 <div class="md-form mb-0">
                    <input type="text" id="subject" name="subject" placeholder="Enter Subject" class="form-control">
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                 <div class="md-form mb-0">
                    <textarea type="text" id="message" name="message" rows="4" placeholder="Enter Message" class="form-control md-textarea"></textarea>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                 <div class="md-form mb-0">
                    <div class="text-center text-md-left">
                       <input class="green-btn white" onclick="document.getElementById('contact-form').submit();" value="Send" />
                    </div>
                 </div>
              </div>
           </div>
        </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-address box">
              <h3>OUR ADDRESS</h3>
              V-edusmart Infotech Pvt Ltd<br/>
              D. No 76-1/1,<br/>
              Hig Duplex No. 390, Opp.,<br/>
              Subhamastu Function Hall,<br/>
              HB Colony, Vijayawada - 12, Andhra Pradesh.<br/>
              Tel: +91 234-567-890<br/>
              Email:info@vedusmart.com <br/>

              <h3>OUR BANK</h3>
              ICICI Bank<br/>
              Vedusmart Infotech Pvt Ltd<br/>
              A/c No.66490560148<br/>
              IFSC: ICIC0006649<br/>

              State Bank of India<br/>
              Vedusmart Infotech Pvt Ltd<br/>
              A/c No.38943582451<br/>
              IFSC: SBIN0001460<br/>
            </div>
    </div>
   </div>
   </div>
   </div>
</section>
<section class="map">
   <div class="mapouter">
   <div class="gmap_canvas">
   <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</section>
<?php include ('includes/footer.php'); ?>
