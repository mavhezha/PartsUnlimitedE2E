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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/services.css');?>">

    <!-------Fontawesome------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/all.css');?>">
    

</head>
<body>
    <header>
	   <?php include('utils/nav.php');?>
    </header>

    <section id="main-content">
        <div id="services-intro">
            <div class="container">
                <h3>Our Passion Your Succes</h3>
                <p>We aim to provide untimely assistance inclusive of end to end services in visa assistance, travel assistance and admissions in undergraduate and postgraduate disciplines of study along with eradicating the hustle of tutorial services for IELTS/PTE through our STUDY IN POLAND CAMPAIGN thus making us a one stop shop for overseas education.

We render end to end services in visa assistance, travel assistance and admissions at the undergraduate and postgraduate levels along with tutorial services for IELTS/PTE thus making us a one stop shop for overseas education.

We have already provided over 100,000+ hours of counseling to students and as a result we can boast of more than 4,500 success stories. We have a stupendous 97% visa success rate, one of the best in the industry. Our students have been awarded scholarships worth US$ 12.5 Million due to our diligence.
Many of our dynamic and well-informed counselors have studied overseas themselves so they are able to empathize with the student’s needs and constraints. Our Managing Directors have studied in India, China and Poland. Our counselors are not only knowledgeable but are accessible to our students at all times and ensure that no query is left unanswered. 
Why Abroadgateway: AG remains unrivaled in every sphere of activity. Our association and partnership with counterparts that ensure a 99% visa success rate rides us beyond all our competitors. We are allied with partial scholarship trusts thathave sent almost than 3000 students from 54 countries whom have benefited from our partial scholarship program. 
</p>
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