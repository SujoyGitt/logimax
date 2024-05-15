<?php include 'utils/config/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
                        <h1 class="bannertitle">Blog</h1>
                       
                        <ul class="btns d-flex gap-2 ps-0">
                          <li><a href="" class="commonbt ">Home Page <i class="fa-solid fa-minus"></i></a></li>
                          <li><a href="" class="commonbtn2">Blog</a></li>
                        </ul>
                    </div>
                </div>
             </div>
        </div> 
    </div>
  </section>
    <!-- banner section end here -->
    <!-- banner section end here -->


<!-- blog section start here -->
<section class="blog">
  <div class="container text-center">
    <p class="small-title">Our Blog</p>
    <h2>Read Our Latest Blog Post</h2>
  </div>
  <div class="container d-flex flex-wrap  mb-5">
    <div class="col-12 col-lg-4 px-3 mt-4" >
      <div class="blog-card">
        <div class="badge-date">
          <span>20</span>
          <p>Feb</p>
        </div>
        <div class="card-img">
          <img src="<?=$_baseurl?>assets/images/blog-1.jpg" alt="">
        </div>
        <div class="blog-content">
          <p class="tag"><i class="fa-solid fa-tag pe-2"></i> Logistic</p>
          <h3>Fast And Reliable Shipping
            Guaranteey Trusted</h3>
            <a href="" class="comment d-flex justify-content-between align-items-center"><p><i class="fa-regular fa-message"></i>02 Comments</p><i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 px-3 mt-4" >
      <div class="blog-card">
        <div class="badge-date">
          <span>20</span>
          <p>Feb</p>
        </div>
        <div class="card-img">
          <img src="<?=$_baseurl?>assets/images/blog-2.jpg" alt="">
        </div>
        <div class="blog-content">
          <p class="tag"><i class="fa-solid fa-tag pe-2"></i> Logistic</p>
          <h3>Fast And Reliable Shipping
            Guaranteey Trusted</h3>
            <a href="" class="comment d-flex justify-content-between align-items-center"><p><i class="fa-regular fa-message"></i>02 Comments</p><i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 px-3 mt-4" >
      <div class="blog-card">
        <div class="badge-date">
          <span>20</span>
          <p>Feb</p>
        </div>
        <div class="card-img">
          <img src="<?=$_baseurl?>assets/images/blog-3.jpg" alt="">
        </div>
        <div class="blog-content">
          <p class="tag"><i class="fa-solid fa-tag pe-2"></i> Logistic</p>
          <h3>Fast And Reliable Shipping
            Guaranteey Trusted</h3>
            <a href="" class="comment d-flex justify-content-between align-items-center"><p><i class="fa-regular fa-message"></i>02 Comments</p><i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 px-3 mt-4" >
      <div class="blog-card">
        <div class="badge-date">
          <span>20</span>
          <p>Feb</p>
        </div>
        <div class="card-img">
          <img src="<?=$_baseurl?>assets/images/blog-1.jpg" alt="">
        </div>
        <div class="blog-content">
          <p class="tag"><i class="fa-solid fa-tag pe-2"></i> Logistic</p>
          <h3>Fast And Reliable Shipping
            Guaranteey Trusted</h3>
            <a href="" class="comment d-flex justify-content-between align-items-center"><p><i class="fa-regular fa-message"></i>02 Comments</p><i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 px-3 mt-4" >
      <div class="blog-card">
        <div class="badge-date">
          <span>20</span>
          <p>Feb</p>
        </div>
        <div class="card-img">
          <img src="<?=$_baseurl?>assets/images/blog-2.jpg" alt="">
        </div>
        <div class="blog-content">
          <p class="tag"><i class="fa-solid fa-tag pe-2"></i> Logistic</p>
          <h3>Fast And Reliable Shipping
            Guaranteey Trusted</h3>
            <a href="" class="comment d-flex justify-content-between align-items-center"><p><i class="fa-regular fa-message"></i>02 Comments</p><i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 px-3 mt-4" >
      <div class="blog-card">
        <div class="badge-date">
          <span>20</span>
          <p>Feb</p>
        </div>
        <div class="card-img">
          <img src="<?=$_baseurl?>assets/images/blog-3.jpg" alt="">
        </div>
        <div class="blog-content">
          <p class="tag"><i class="fa-solid fa-tag pe-2"></i> Logistic</p>
          <h3>Fast And Reliable Shipping
            Guaranteey Trusted</h3>
            <a href="" class="comment d-flex justify-content-between align-items-center"><p><i class="fa-regular fa-message"></i>02 Comments</p><i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>


 <!-- footerr start here -->
 <?php include 'utils/footer.php';?>
<!-- footerr end here -->

<!-- script start here -->
<?php include 'utils/footer-link.php';?>
</body>
</html>