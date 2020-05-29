<?php include('includes/header.php'); ?>
      <section class="welcome">
          <div class="container">
              <div class="row contact">
                  <h1>CONTACT US</h1>
                  </div>
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
                          <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                      </div>
                                                   </div>
                                              </div>
                                            </div>
                                       </form>
              </div>

            </div>
        </div>
      </section>
      <section class="map">
          <div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </section>
<?php include ('includes/footer.php'); ?>
