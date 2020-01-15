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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/services.css');?>">

    <!-------Fontawesome------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/all.css');?>">
    

</head>
<body>
    <header>
	   <?php include('utils/nav.php');?>
    </header>

    <section id="main-content">
        
        <!--04..services intro begins-->
        <div id="services-intro">
            <div class="container">
                <h3>Our Passion Your Succes</h3>
                <p>We aim to provide untimely assistance inclusive of end to end services in visa assistance, travel assistance and admissions in undergraduate and postgraduate disciplines of study along with eradicating the hustle of tutorial services for IELTS/PTE through our STUDY IN POLAND CAMPAIGN thus making us a one stop shop for overseas education.
                </p>

                <p>We render end to end services in visa assistance, travel assistance and admissions at the undergraduate and postgraduate levels along with tutorial services for IELTS/PTE thus making us a one stop shop for overseas education.
                </p>

                <p>We have already provided over 100,000+ hours of counseling to students and as a result we can boast of more than 4,500 success stories. We have a stupendous 97% visa success rate, one of the best in the industry. Our students have been awarded scholarships worth US$ 12.5 Million due to our diligence. Many of our dynamic and well-informed counselors have studied overseas themselves so they are able to empathize with the student’s needs and constraints. Our Managing Directors have studied in India, China and Poland. Our counselors are not only knowledgeable but are accessible to our students at all times and ensure that no query is left unanswered. 
                </p>
            </div>
        </div><!--04..services intro ends-->

        <!--05..services begins-->
        <div id="services-container">
          <div class="container">
              <h3>Our <span class="bluer-shade">Services</span></h3>
              <div class="row">
                <!--First row starts-->
                <div class="col-sm-4">
                    <div class="service wow fadeInUp">
                        <div class="service-icon">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <h3>Student Profile Analysis</h3>
                        <p>We provide an apt and introspective assessment of potential clients academic needs as well as their recreational and residential preference in relation to their study destinations.
                    </div>
                 </div>
                 <div class="col-sm-4">
                    <div class="service wow fadeInDown">
                        <div class="service-icon">
                           <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Career counselling</h3>
                        <p>Our relationship extends to career prospects in relation with the clients abilities as well as aspirations. We advise in good conscience and good faith the appropriate avenue of occupation.
                        </p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="service wow fadeInUp">
                        <div class="service-icon">
                           <i class="fas fa-atlas"></i>
                        </div>
                        <h3>Visa Guidance</h3>
                        <p>We will not take any chance at all with your visa. All AG students receive free visa counseling, visa file preparation & mock training for visa interviews from our experienced visa counselors.</p>
                    </div>
                  </div>

                  <!--Second row-->
                <div class="col-sm-4">
                    <div class="service wow fadeInUp">
                        <div class="service-icon">
                           <i class="fas fa-plane-departure"></i>
                        </div>
                        <h3>Pre-Departure Consultation</h3>
                        <p>We arrange a pre departure seminar or meet for all of our clients and even a chance for guardians and parents to dispel any inquiries or doubts about the entire process. We offer complimentary hampers and any further information to ensure that our clients are happy and satisfied of our service.</p>
                    </div>
                </div>
                 <div class="col-sm-4">
                    <div class="service wow fadeInDown">
                        <div class="service-icon">
                            <i class="fas fa-plane-arrival"></i>
                        </div>
                        <h3>Post-Arrival Assistance</h3>
                        <p>Our relationship does not conclude upon departure. It extends to a warm welcome and accommodation by our partners at the destinations. Our counselors shall remain available round the clock to ensure that clients’ face no difficulty during their duration of studies, stay or career prospects.
                        </p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="service wow fadeInUp">
                        <div class="service-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Part time Job Assistance</h3>
                        <p>We provide a steadfast assistance to avail the courtesy of part-time jobs for students in need of funds to reduce their financial burden of studying and living abroad. The part time jobs are also a necessary stepping stone towards building the zeal of professional ethics and etiquettes of an occupation.
                        </p>      
                    </div>
                  </div>
              </div>
          </div>
        </div>

    </section>

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
    <script type="text/javascript">
      $(document).scroll(function(){
        $('.navbar').toggleClass('scrolled', $(this).
          scrollTop() > $('.navbar').height());
      });
    </script>
</body>
</html>