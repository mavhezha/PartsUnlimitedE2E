<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title><?= $title ?></title>
    <!-------Bootstrap--------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-------CSS Styleshet----------------------------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/main.css');?>">

    <!-------Fontawesome------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/all.css');?>">
    

</head>
<body>
    <header>
	   <?php include('utils/nav.php');?>
	</header>


	  <section id="banner">

    </section>
	


    <section id="about-us">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <h3 class="intro-info">OUR <span class="blue-shade">GLOBAL</span> PRESENCE</h3>
                  <p>Abroad Gateway specializes in assisting students to pursue their dreams of studying abroad. We provide students with tailor-made career pathways that perfectly fit their individual profiles and future goals.</p>

                  <p>With well-qualified and trained counselors, we strive to always provide students with ethical counseling by only giving them with the most genuine and honest advice. So whether you are not sure which course to choose or if you will be able to afford to go to a university, we can provide you with the most fitted roadmap possible.</p>

                  <button class="btn btn-primary">Read More</button>
              </div>
              <div class="col-md-6">
                  <img src="<?php echo base_url('assets/images/advise.jpg');?>" width="100%">
              </div>
          </div>
      </div>
    </section>

    <!--Services Section starts-->
    <section id="services">
    <!-- Presentation -->
        <div class="presentation-container">
          <div class="container">
            <div class="row">
              <div class="col-md-12 serv">
                  <h3>
                      Our <span class="blue-shade">Services</span>
                  </h3>
            </div>
          </div>
        </div>

        <!-- Services -->
        <div class="services-container" id="testo">
          <div class="container">
              <div class="row">
                <!--First row starts-->
                <div class="col-sm-4">
                    <div class="service wow fadeInUp">
                        <div class="service-icon">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <h3>Student Profile Analysis</h3>
                        <p>We provide an apt and introspective assessment of potential clients academic needs as well as their recreational and residential preference in relation to their study destinations.</p>
                        <button class="btn btn-primary">Read More</button>
                    </div>
                 </div>
                 <div class="col-sm-4">
                    <div class="service wow fadeInDown">
                        <div class="service-icon">
                           <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Career counselling</h3>
                        <p>Our relationship extends to career prospects in relation with the clients abilities as well as aspirations. We advise in good conscience and good faith the appropriate avenue of occupation.</p>
                        <button class="btn btn-primary">Read More</button>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="service wow fadeInUp">
                        <div class="service-icon">
                           <i class="fas fa-atlas"></i>
                        </div>
                        <h3>Visa Guidance</h3>
                        <p>We will not take any chance at all with your visa. All AG students receive free visa counseling, visa file preparation & mock training for visa interviews from our experienced visa counselors.</p>
                        <button class="btn btn-primary">Read More</button>
                    </div>
                  </div>

                  <!--Second row-->
                <div class="col-sm-4">
                    <div class="service wow fadeInUp">
                        <div class="service-icon">
                           <i class="fas fa-plane-departure"></i>
                        </div>
                        <h3>Pre-Departure Consultation</h3>
                        <p>We arrange a pre departure seminar or meet for all of our clients and even a chance for guardians and parents to dispel any inquiries or doubts about the entire process.</p>
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
                 <div class="col-sm-4">
                    <div class="service wow fadeInDown">
                        <div class="service-icon">
                            <i class="fas fa-plane-arrival"></i>
                        </div>
                        <h3>Post-Arrival Assistance</h3>
                        <p>Our relationship does not conclude upon departure. It extends to a warm welcome and accommodation by our partners at the destinations to make you feel at home.</p>
                        <button class="btn btn-primary">Read More</button>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="service wow fadeInUp">
                        <div class="service-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Part time Job Assistance</h3>
                        <p>We provide a steadfast assistance to avail the courtesy of part-time jobs for students in need of funds to reduce their financial burden of studying and living abroad.</p>  
                        <button class="btn btn-primary">Read More</button>               
                    </div>
                  </div>
              </div>
          </div>
        </div>
       </section> 
    <!--Services Ends-->
    
    <!--Featured starts-->
    <section class="featured"><!-- Presentation -->
        <div class="presentation-container">
          <div class="container">
            <div class="row">
              <div class="col-md-12 serv">
                  <h3>
                      Featured <span class="blue-shade">Destinations
                  </h3>
            </div>
          </div>
        </div>


    <div class="services-container" id="testo">
          <div class="container">
              <div class="row">
                <div class="col-sm-3">
                   <div class="service">
                     <img src="<?php echo base_url('assets/images/poland.jpg');?>" alt="poland" width="230px" height="140px">
                     <div class="country">
                        <img src="<?php echo base_url('assets/images/poland-flag.jpg');?>" alt="poland-flag" width="60px" height="38px" class="flag">
                        <h6>Poland</h6>
                     </div>
                     <p>Poland is located in the very centre of Europe. For students from outside the European Union who come to study in Poland, this may well be the beginning of a fascinating adventure of discovering Europe. Being invited to study in Poland means that you are invited to the European Union, of which Poland is an active member state. Studying in Poland can be one of the best experiences in your life. <br> <a href="" class="blue-shade">Read more...</a>
                     </p>
                   </div>
                </div>

                <div class="col-sm-3">
                   <div class="service wow fadeInDown">
                       <img src="<?php echo base_url('assets/images/india.jpg');?>" alt="india" width="230px" height="140px">
                       <div class="country">
                          <img src="<?php echo base_url('assets/images/india-flag.jpg');?>" alt="india-flag" width="60px" height="38px" class="flag">
                          <h6>India</h6>
                       </div>
                       <p>Today, India is known as a communication hub, and has become popular with study abroad students from all over the world. It is highly attractive due to its forward thinking, its popularity with large multinational companies, and also due to English being the common language of communication. According to Peter Drucker, "India is become a power house very fast." <br> <a href="" class="blue-shade">Read more...</a></p>
                    </div>
                </div>
                  
                <div class="col-sm-3">
                   <div class="service wow fadeInUp">
                      <img src="<?php echo base_url('assets/images/china.jpg');?>" alt="china" width="230px" height="140px">
                      <div class="country">
                         <img src="<?php echo base_url('assets/images/china-flag.jpg');?>" alt="china-flag" width="60px" height="38px" class="flag">
                         <h6>China</h6>
                      </div>
                      <p>China has become one of the best career conducive nations spearheading industrialization and a leader of the global economy, making it a very enticing study abroad location. And while you thought just looking for the perfect destination to study abroad was overwhelming, you’ve now found it is even more overwhelming since you choose such a question mark of a country like China. <br> <a href="" class="blue-shade">Read more...</a></p>
                   </div>
                </div>
                 
                <div class="col-sm-3">
                   <div class="service wow fadeInUp">
                      <img src="<?php echo base_url('assets/images/malaysia.jpg');?>" alt="malaysia" width="230px" height="140px">
                      <div class="country">
                         <img src="<?php echo base_url('assets/images/malaysia-flag.jpg');?>" alt="malaysia-flag" width="60px" height="38px" class="flag">
                         <h6>Malaysia</h6>
                      </div>
                      <p>Malaysia is one of the most vibrant countries in Southeast Asia. The rich culture, amazing food, bustling metropolises and dirt-cheap prices are some of the reasons why Malaysia has earned the slogan “Truly Asia”. Malaysia welcomes international students for all levels of education. Today, Malaysia is ranked the 11th most popular destination in the world for international education at tertiary level. <br> <a href="" class="blue-shade">Read more...</a></p>
                   </div>
                </div>
            </div>
          </div>
        </div>       
    </section>
    <!--Featured ends--> 

    <!--Registration begins-->
    <section id="registration">
        <section class="img">
          <section>
          <div class="container">
            <div class="row reg">
                <div class="col-md-8 reg-intro">
                    <h5>Get a Free Online Registration</h5>
                    <h4 class="bluer-shade regNow">Register Now!</h4>
                    <p>If you too have been dreaming about studying in Abroad but you don't know which course or university to choose, or how to apply for visa and scholarship, then Echoes Global Education is where you should be headed. We will happily guide you through the entire process and ensure that you only go to the best university abroad. Feel free to reach out to us through call or email.</p>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 r">
                                <div class="reg-icon">
                                <i class="fas fa-users"></i>
                                </div>
                                <h5>
                                  <span class='numscroller' data-min='1' data-max='10000' data-delay='1' data-increment='10'>10000</span>+
                                </h5>
                                <h6>Student Network</h6>
                            </div>

                            <div class="col-md-3 r">
                                <div class="reg-icon">
                                  <i class="fas fa-comments"></i>
                                </div>
                                <h5>
                                  <span class='numscroller' data-min='1x' data-max='5000' data-delay='1' data-increment='5'>5000</span>+
                                </h5>
                                <h6>Success Stories</h6>
                            </div>

                            <div class="col-md-3 r">
                                <div class="reg-icon">
                                  <i class="fas fa-smile"></i>
                                </div>
                                <h5>
                                  <span class='numscroller' data-min='1' data-max='2000' data-delay='1' data-increment='2'>2000</span>+
                                </h5>
                                <h6>Happy Students</h6>
                            </div>

                            <div class="col-md-3 r">
                                <div class="reg-icon">
                                  <i class="fas fa-quote-right"></i>
                                </div>
                                <h5>
                                  <span class='numscroller' data-min='1' data-max='2000' data-delay='1' data-increment='2'>2000</span>+
                                </h5>
                                <h6>Thank you notes</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 reg-intro">
                    <h5>Request <span class="bluer-shade">Information</span></h5>

                    <form action="">
                        <div class="form-group">
                            <input type="text" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input type="phone" placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <input type="date" placeholder="Date Of Birth">
                        </div>

                        <div class="form-group">
                        <textarea name="Text1" cols="40" rows="5" placeholder="Enter Message" class=txt></textarea>
                        </div>

                        <button class="txt btn">Submit Request</button>
                    </form>
                </div>
            </div>
        </div>
          </section>
        </section>
    </section>
    <!--Registration begins-->
    
    <!--Contact us begins-->
    <section id="contact-us">
        <div class="container">
          <div class="row">
          
           <div class="col-md-5">
              <h5>Working <span class="blue-shade">Hours</span></h5>
              <table>
                 <tr>
                   <th>Days</th>
                   <th>Timing</th>
                 </tr>
                 <tr>
                   <td>Monday - Saturday</td>
                   <td>10:00am - 6:00pm</td>
                 </tr>
                 <tr>
                   <td>Sunday</td>
                   <td>Closed</td>
                 </tr>
              </table>
           </div>

           <div class="col-md-4">
              <h5>Get <span class="blue-shade">Address</span></h5>
              <p>GF-6, Shree Flat <br> Near Dream Iconia <br> Vadodara, Gujarat 390011 <br> India</p>
           </div>

           <div class="col-md-3">
              <h5>Contact <span class="blue-shade">Us</span></h5>
              <h6>+91 9638661745</h6>
              <h6>+91 9510175254</h6>
           </div>
              
          </div>

        </div>
    </section>
    <!--Contact us ends-->

    <section id="body-footer">
        <?php include('utils/footer.php');?>
        <div class="container signature d-flex justify-content-center">
        <div class="row">
          <div class="col-md-12">
              <span>© Copyright studyabroad 2019</span>&nbsp; &#124; &nbsp;
              <span>Design by <span class="designer">Arnold Mavhezha</span></span>&nbsp; &#124; &nbsp;
              <span><i class="fas fa-phone-alt"></i> +91 901 698 1585</span>
          </div>
        </div>
        </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="assets/js/jquery/jquery.numscroller-1.0.js"></script>

    <script type="text/javascript">
      $(document).scroll(function(){
        $('.navbar').toggleClass('scrolled', $(this).
          scrollTop() > $('.navbar').height());
      });
    </script>
</body>
</html>