<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title><?= $title ?></title>
    <!-------Bootstrap--------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-------CSS Styleshet----------------------------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/contact.css');?>">

    <!-------Fontawesome------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/all.css');?>">
    

</head>
<body>
    <header>
	   <?php include('utils/nav.php');?>
    </header>

    <section id="mainContent">
        <!--04. contact-intro begins-->
        <div id="contact-intro">
            <div class="container">
               <h3>
                   Contact <span class="bluer-shade">Us</span>
               </h3>
               <p>Hello there. Feel free to say hi. We will respond as soon as we can. Cheers!!!</p>
            </div>
        </div>

            <div id="contact-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 bg-dark reg-intro">
                            <h4>Request <span class="bluer-shade">Information</span>
                    </h4>

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

                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <div class="container">
                                <!--Map-->
                                <h4>We are here.</h4>
                                <div class="row">
                                    <div class="col-md-12 map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1422.9414627118845!2d73.26102906823313!3d22.328930181271517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcfe84a84b243%3A0x13082514610542f1!2sDove%20Deck%20-%20Nrs%20Projects!5e0!3m2!1sen!2sin!4v1579075581675!5m2!1sen!2sin" width="515" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                    </div>
                                </div>

                                <!--Address-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Get <span class="blue-shade">Address</span></h4>
                                        <p>Flat A/902, Dovedeck <br> Near American School <br> Vadodara, Gujarat 390011 <br> India
                                        </p>
                                    </div>
                                </div>
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
    <script type="text/javascript">
      $(document).scroll(function(){
        $('.navbar').toggleClass('scrolled', $(this).
          scrollTop() > $('.navbar').height());
      });
    </script>
</body>
</html>