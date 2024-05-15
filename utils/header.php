<header>
        <div class="header-top pt-3 d-none  d-lg-block  ">
            <div class="container d-flex justify-content-between  align-items-center ">
                <ul class="d-flex justify-content-between  align-items-center list-unstyled gap-3">
                    <li><a href=""><i class="far fa-envelope me-3"></i><span>info@example.com</span></a></li>
                    <li><a href=""><i class="fas fa-phone-alt me-3" style="transform: rotateY(180deg);"></i><span>+208-666-0112</span></a></li>
                </ul>
                <ul class="d-flex justify-content-between  align-items-center list-unstyled gap-3">
                    <li>Follow Us:</li>
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href=""><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <nav class="">
           <div class="container d-flex justify-content-between align-items-center">
            <a href="<?=$_baseurl?>" class="logo d-block">
                <img src="<?=$_baseurl?>assets/images/header-logo.svg" alt="">
            </a>
            <ul class="menu d-none  d-xl-flex justify-content-between align-items-center gap-5 mb-0">
                <li class="dropdown">
                    <a href="<?=$_baseurl?>" class="dropbtn">Home </a>
                </li>
                <li class="dropdown">
                    <a href="<?=$_baseurl?>about/" class="dropbtn">About</a>
                </li>
                <li class="dropdown">
                    <a href="<?=$_baseurl?>service/" class="dropbtn">Services <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-content">
                      <a href="<?=$_baseurl?>service-details/">Service Details</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="<?=$_baseurl?>blog/" class="dropbtn">Blog <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-content">
                      <a href="<?=$_baseurl?>blog-details/">Blog Details</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="" class="dropbtn">Pages <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-content">
                      <a href="#">Link 1</a>
                      <a href="#">Link 2</a>
                      <a href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="" class="dropbtn">Shop <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-content">
                      <a href="#">Link 1</a>
                      <a href="#">Link 2</a>
                      <a href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="<?=$_baseurl?>contact/" class="dropbtn">Contact </a>
                </li>
                <li class="dropdown" onclick="openSearch()"><i class="fas fa-search"></i></li>
                <li class="dropdown">
                    <a href="" class="dropbtn d-none  d-xl-block " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <a href="" class="dropbtn d-xl-none " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-bars"></i></a>
           </div>
        </nav>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasRightLabel"><img src="<?=$_baseurl?>assets/images/header-logo.svg" alt=""></h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <p class="mb-4">Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.</p>
              <ul class="menu d-flex ps-0  flex-column  d-xl-none   gap-3 mb-0">
                <li class="dropdown">
                    <a href="<?=$_baseurl?>" class="dropbtn">Home </i></a>
                    
                </li>
                <li class="dropdown">
                    <a href="<?=$_baseurl?>about/" class="dropbtn">About</a>
                </li>
                <li class="dropdown">
                    <a href="<?=$_baseurl?>service/" class="dropbtn">Services <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-content">
                      <a href="<?=$_baseurl?>service-details/">Service Details</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="<?=$_baseurl?>blog/" class="dropbtn">Blog <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-content">
                      <a href="<?=$_baseurl?>blog-details/">Blog Details</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="" class="dropbtn">Pages <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-content">
                      <a href="#">Link 1</a>
                      <a href="#">Link 2</a>
                      <a href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="" class="dropbtn">Shop <i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-content">
                      <a href="#">Link 1</a>
                      <a href="#">Link 2</a>
                      <a href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="<?=$_baseurl?>contact/" class="dropbtn">Contact </a>
                </li>
                <li class="dropdown" onclick="openSearch()"><i class="fas fa-search"></i></li>
                <li class="dropdown">
                    <a href="" class="dropbtn d-none  d-xl-block " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <h3>Contact Info</h3>
            <ul class=" list-unstyled address">
              <li><a href=""><i class="far fa-envelope me-3"></i><span>info@example.com</span></a></li>
              <li><a href=""><i class="fas fa-phone-alt me-3" style="transform: rotateY(180deg);"></i><span>+208-666-0112</span></a></li>
            </ul>
            <a href="" class="commonbtn d-block text-center">Contact Us <span></span></a>
          <ul class="d-flex social-icon align-items-center list-unstyled gap-2">
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
              <li><a href=""><i class="fab fa-youtube"></i></a></li>
          </ul>
            </div>
          </div>
          <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
            <div class="overlay-content">
              <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fas fa-search"></i></button>
              </form>
            </div>
          </div>  
    </header>