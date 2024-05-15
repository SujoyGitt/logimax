<?php include 'utils/config/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | Logistifie</title>
 <!-- css link start -->
 <?php include 'utils/header-link.php';?>
  <!-- css link end -->
</head>
<body>
    <!-- scroll top and custom mouse -->
 <?php include 'utils/scroll-top.php';?>
   <!-- scroll top and custom mouse end -->
    <!-- header start -->
    <?php include 'utils/header.php';?>
    <!-- header end -->
  <!-- banner section start here -->
  <section class="banner without-carousel-banner" id="banner">
  
    <div class="owl-carousel banner-carousel owl-theme">                   
        <div class="item">
            <img src="<?=$_baseurl?>assets/images/about-us-bg.jpg" alt="images not found">
            <div class="cover">
                <div class="container">
                    <div class="header-content d-flex justify-content-between align-items-center">
                        <h1 class="bannertitle">Contact</h1>
                       
                        <ul class="btns d-flex gap-2 ps-0">
                          <li><a href="" class="commonbt ">Home Page <i class="fa-solid fa-minus"></i></a></li>
                          <li><a href="" class="commonbtn2">Contact</a></li>
                        </ul>
                    </div>
                </div>
             </div>
        </div> 
    </div>
  </section>
    <!-- banner section end here -->
    <!-- banner section end here -->
<section class="contact-cards py-5 my-4">
 <div class="container d-flex flex-wrap">
  <div class="col-12 col-lg-4 px-2 mt-4">
    <div class="contact-card">
      <div class="card-top d-flex gap-3 align-items-center">
        <div class="icon"><i class="fa-regular fa-envelope"></i></div>
        <div class="">
          <h4>Email Address</h4>
          <p>Sent mail asap anytime</p>
        </div>
      </div>
      <div class="card-bottom d-flex justify-content-between align-items-center mt-3">
        <div class=" ">
          <a href="">info@example.com</a> <br>
          <a href="">jobs@example.com</a>
        </div>
        <div class="forward">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4 px-2 mt-4">
    <div class="contact-card">
      <div class="card-top d-flex gap-3 align-items-center">
        <div class="icon"><i class="fa-regular fa-envelope"></i></div>
        <div class="">
          <h4>Phone Number</h4>
          <p>Sent mail asap anytime</p>
        </div>
      </div>
      <div class="card-bottom d-flex justify-content-between align-items-center mt-3">
        <div class=" ">
          <a href="">info@example.com</a> <br>
          <a href="">jobs@example.com</a>
        </div>
        <div class="forward">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4 px-2 mt-4">
    <div class="contact-card">
      <div class="card-top d-flex gap-3 align-items-center">
        <div class="icon"><i class="fa-regular fa-envelope"></i></div>
        <div class="">
          <h4>Office Address</h4>
          <p>Sent mail asap anytime</p>
        </div>
      </div>
      <div class="card-bottom d-flex justify-content-between align-items-center mt-3">
        <div class=" ">
          <a href="">info@example.com</a> <br>
          <a href="">jobs@example.com</a>
        </div>
        <div class="forward">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </div>
    </div>
  </div>
 </div>
</section>


<section class="form mb-5">
  <div class="container">
    <h2>Let’s Get In Touch</h2>
   <p>Your email address will not be published. Required fields are marked *</p>
    <form class="mt-5">
      <div class="form-row d-flex flex-wrap ">
        <div class="col-12 col-lg-6 pe-lg-2">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col-12 col-lg-6 ps-lg-2 mt-3 mt-lg-0">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>
      <div class="form-row d-flex pt-4">
        <div class="col-12 ">
          <input type="text" class="form-control" placeholder="First name">
        </div>
      </div>
      <div class="form-row d-flex pt-4">
        <div class="col-12 ">
          <textarea type="text" class="form-control" placeholder="Write you message.."></textarea>
        </div>
      </div>
      <div class="form-row d-flex pt-4">
        <a href="" class="commonbtn">SEND YOUR MESSAGE <span></span></a>
      </div>
      
    </form>
  </div>
</section>

 <!-- footerr start here -->
 <?php include 'utils/footer.php';?>
<!-- footerr end here -->

<!-- script start here -->
<?php include 'utils/footer-link.php';?>
</body>
</html>