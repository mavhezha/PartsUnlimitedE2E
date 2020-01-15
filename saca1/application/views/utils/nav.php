<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
<a class="navbar-brand ml-5" href="#"><img src="assets/images/logo.png" alt="logo" width="200px" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-uppercase">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('about')?>">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('services')?>">Services</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Study Abroad
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('poland');?>">Poland</a>
          <a class="dropdown-item" href="<?php echo base_url('india');?>">India</a>
          <a class="dropdown-item" href="<?php echo base_url('china');?>">China</a>
          <a class="dropdown-item" href="<?php echo base_url('malaysia');?>">Malaysia</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('gallery')?>">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('contact')?>">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('contact')?>"><button class="btn-log">Login</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('contact')?>"><button class="btn-sign">Sign up</button></a>
      </li>
    </ul>
  </div>
</nav>