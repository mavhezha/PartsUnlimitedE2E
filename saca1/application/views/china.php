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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/china.css');?>">

    <!--link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"-->

    <!-------Fontawesome------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/all.css');?>">
    

</head>
<body>
    <header>
	   <?php include('utils/nav.php');?>
    </header>

    <section id="main-content">
        <!--04. poland-banner-->
        <div id="poland-banner">
           
        </div>

        <!--05. marquee-->
        <div id="marq">
           <marquee>
               <span class="marq-text greyer-shade">Get an opportunity to Study in China</span>
           </marquee>
        </div>

        <!--06. why-study-->
        <div id="why-study">
            <div class="container">
                <h4>Why study in China</h4>
                <p>
                    India has undergone a paradigm shift owing to its competitive stand in the world. The Indian economy is on a robust growth trajectory and boasts of a stable 8 plus annual growth rate, rising foreign exchange reserves and booming capital markets among others.
                </p>
                <p><span class="bold">Low Cost:</span> The cost of education in India is quite low as compared to many other countries of the world.</p>
            </div>
        </div>

        
    </section>
 
    <!--07. mainContainer-->
    <section id="mainContainer">
	<div class="containter">
	   <div class="row">
           <div class="col-md-9 left">
			   <div id="basic-info">
                   <h3>Basic <span class="greyer-shade">Information</span></h3>
                   <p>
                   China has become one of the best career conducive nations spearheading industrialization and a leader of the global economy, making it a very enticing study abroad location. And while you thought just looking for the perfect destination to study abroad was overwhelming, you’ve now found it is even more overwhelming since you choose such a question mark of a country like China.
                   </p>
                   <p>China is an entirely different world and there’s a lot you need to learn, young grasshopper, before you pack up and ride off into the sunset to studying abroad in China.
                   </p>
                    
                    <h5 class="bold greyer-shade">
                        China in short facts & figures
                    </h5>
                   <p>
                       <span class="bold">Capital:</span>  Beijing (pop 13.8 million)
                   </p>
                   <p>
                       <span class="bold">Official language:</span> Putonghua (Beijing Mandarin dialect)
                   </p>
                   <p>
                       <span class="bold">Government:</span> Communist republic
                   </p>
                   <p>
                       <span class="bold">Area:</span> 9,596,960 sq km (mainland)
                   </p>
                   <p>
                       <span class="bold">Population:</span>1.25 billion (mainland)
                   </p>
                   <p>
                   China, one of the four oldest civilizations in the world, has a written history of 4,000 years and boasts rich cultural relics and historical sites. It is the inventor of compass, paper, gunpowder and printing. The Great Wall, the Grand Canal and the Karez irrigation systems are three great ancient engineering projects built 2,000 years ago. Now they are the symbols of the rich culture heritage of the Chinese nation. China has gone over a long history of primitive society, slavery society, feudal society and semi-feudal semi-colonial society and the present socialist society.
                   </p>
    
               </div>
		   </div>

           <div class="col-md-3 r px-1 bg-dark min-vh-50">
            <div class="py-5 sticky-top flex-grow-1">
                <div class="nav flex-sm-column">
					<div class="container">
                        <!--08. Request-->
						<h5>Request <span class="grey-shade">Information</span></h5>

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

                        <button class="txt grey-shade btn">Submit Request</button>
                    </form>
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
    <script src="assets/js/jquery/jquery.js"></script>
    <script src="assets/js//bootstrap.min.js"></script>
    <script src="assets/js/jquery/jquery.numscroller-1.0.js"></script>

    <script type="text/javascript"> 
      $(document).scroll(function(){
        $('.navbar').toggleClass('scrolled', $(this).
          scrollTop() > $('.navbar').height());
      });
    </script>
</body>
</html>

