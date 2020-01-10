<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title><?= $title ?></title>
    <!-------Bootstrap--------------------------------------------------------------------------------------------->
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"-->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-------CSS Styleshet----------------------------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/about.css');?>">

    <!-------Fontawesome------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/all.css');?>">
    
  
    <script src="<?php echo base_url('assets/js/custom/typed.js');?>"></script>
</head>
<body>
    <header>
	   <?php include('utils/nav.php');?>
    </header>

    <section id="banner">
                                                                            
    </section>

    <section id="main-content">
      <!--04...Overview begins-->
      <div id="overview">
        <div class="container middle mid">
          <div class="row">
            <div class="col-md-12">
              <h3>Abroad Gateway Overview</h3>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
            <p>An education consultant firm found in Zimbabwe but operating in Africa and Asia to fulfill the academic and career prospects of our clients, we engage in fruitful dialogue with our stakeholders aimed at reaching the goal of hospitable services of individual precision as an apt description of our firm and also the processing of applications. The headache of procedural admission formats and operations is our chief function to assist the students in not only acquiring the admission but securing a generous stay in their respective destinations of study or occupation.</p>
            </div>
          </div>
        </div>
      </div><!--Overview ends!-->
      
      <!--05...Proposition begins-->
      <div id="proposition">
        <div class="container">
          <div class="row">
            <div class="col-md-12 prop">
              <h3>Abroad Gateway's</h3>
              <h1>Unique Service Proposition</h1>
              <p>It is the pride and exclusive service package of Abroadgateway and its staff to not only ensure a fulfilling symbiotic working relationship with its clients but to also provide post admission and occupational services aimed towards assisting to propel the academic and career prospects of the student at a global spectacle. </p>
            </div>
          </div>
        </div>
      </div><!--Proposition ends-->
      
      <!--06...Values begins-->
      <div id="values">
        <div class="container-fluid">
        <h3>Our Values
           <span
             class="txt-rotate"
             data-period="2000"
             data-rotate='[  "Quality Education .", "Career Development", "Affordable tuitions", "Post Academic Services" ]'>
           </span>
      </h3>
        </div>
      </div><!--Values ends-->
   
      <!--07...Glance begins-->
      <div id="glance">
        <div class="container middle-glance mid">
          <div class="row">
            <div class="col-md-12">
              <h3>Abroad Gateway At A Glance</h3>
            </div>
          </div>
        </div>
  
        <div class="container">
          <div class="row">
            <div class="col-md-2 centre">
              <div class="icon">
                 <i class="fas fa-home"></i>
              </div>
              <h5>
                <span class='numscroller' data-min='1' data-max='4' data-delay='1' data-increment='1'>4</span>
              </h5>
              <h6>Branches</h6>
            </div>

            <div class="col-md-2 centre">
              <div class="icon">
                 <i class="fas fa-cogs"></i>
              </div>
              <h5>
                <span class='numscroller' data-min='1' data-max='5' data-delay='1' data-increment='1'>5</span>
              </h5>
              <h6>Years of experience</h6>
            </div>

            <div class="col-md-2 centre">
              <div class="icon">
              <i class="fas fa-smile"></i>
              </div>
              <h5>
                <span class='numscroller' data-min='1' data-max='2000' data-delay='1' data-increment='2'>2000</span>+
              </h5>
              <h6>Happy Students</h6>
            </div>

            <div class="col-md-2 centre">
              <div class="icon">
                 <i class="fas fa-users"></i>
              </div>
              <h5>
                <span class='numscroller' data-min='1' data-max='10000' data-delay='1' data-increment='10'>10000</span>+
              </h5>
              <h6>Student Network</h6>
            </div>

            <div class="col-md-2 centre">
              <div class="icon">
                 <i class="fas fa-comments"></i>
              </div>
              <h5>
              <span class='numscroller' data-min='1x' data-max='5000' data-delay='1' data-increment='5'>5000</span>+
              </h5>
              <h6>Success Stories</h6>
            </div>
       
            <div class="col-md-2 centre">
              <div class="icon">
                 <i class="fas fa-quote-right"></i>
              </div>
              <h5>
               <span class='numscroller' data-min='1' data-max='2000' data-delay='1' data-increment='2'>2000</span>+
              </h5>
              <h6>Thank you notes</h6>
            </div>

          </div>
        </div>
      </div><!--Glance ends-->
       
      <!--08...Why-us begins-->
      <!--div id="why-us">
        <h1>Reasons to choose Study Abroad</h1>
        
      </div--><!--Why-us ends-->

      <!--09...Affiliate begins-->
      <div id="affiliate">
       
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="<?php echo base_url('assets/images/affiliate.jpg');?>" width="100%" >
            </div>
            <div class="col-md-6">
              <h3>Abroad Gateway's Affiliate Program</h3>
              <p>It is the basis of our referral program to cater for all students distant or incapable of reaching our services through allowing an affiliate subagent scheme to allow other firms to recruit on our behalf in order to achieve a lucrative symbiotic relationship for the benefit of our clients.
              </p>
              <button class="txt btn">Register As Agent</button>
            </div>
          </div>
        </div>
      </div><!--Affiliate ends-->
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
    <script src="assets/js/jquery/jquery.numscroller-1.0.js"></script>

    <script type="text/javascript">
      $(document).scroll(function(){
        $('.navbar').toggleClass('scrolled', $(this).
          scrollTop() > $('.navbar').height());
      });
    </script>
</body>
</html>