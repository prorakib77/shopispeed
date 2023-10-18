
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopispeed - House of shopify experts.</title>
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/venobox.min.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick-theme.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/media.css">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/images/icon.png">

  <!-- Favicon -->

  <!-- ****************
    google fonts
**************** -->
  <link
    href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <!-- ****************
    google fonts
**************** -->
  <!-- ****************
   fonts two
**************** -->
<link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- ****************
   fonts two
**************** -->
</head>

<body>

  <!-- ===========================================
menu part start***********
=========================================== -->

<!-- <nav>
  <div class="wrapper">
    <div class="logo"><a href="index.html"><img src="{{ asset('frontend') }}/images/logo.png" alt="logo.png"></a></div>
    <input type="radio" name="slider" id="menu-btn">
    <input type="radio" name="slider" id="close-btn">
    <ul class="nav-links">
      <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
      <li ><a href="index.html" >Home</a></li>
      <li>
        <a href="service.html" class="desktop-item">Services</a>
        <input type="checkbox" id="showDrop">
        <label for="showDrop" class="mobile-item">Dropdown Menu</label>
        <ul class="drop-menu">
          <li><a href="#">Shopify Store Setup</a></li>
          <li><a href="#">Shopify Store Redesign</a></li>
          <li><a href="#">Shopify Store Migration</a></li>
          <li><a href="#">Shopify Maintenance</a></li>
          <li><a href="#">Shopify Development</a></li>
          <li><a href="#">Social Media Marketing</a></li>
        </ul>
      </li>
      <li>
        <a href="about-us.html" class="desktop-item">About</a>
        <input type="checkbox" id="showMega">
        <label for="showMega" class="mobile-item">Mega Menu</label>
        <div class="mega-box">
          <div class="content">
            <div class="row">
              <img src="{{ asset('frontend') }}/images/shopify.jpg" alt="">
            </div>
            <div class="row">
              <header>Design Services</header>
              <ul class="mega-links">
                <li><a href="#">Shopify Store Design</a></li>
                <li><a href="#">Navs</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Woocommerce</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Email Services</header>
              <ul class="mega-links">
                <li><a href="#">Personal Email</a></li>
                <li><a href="#">Business Email</a></li>
                <li><a href="#">Mobile Email</a></li>
                <li><a href="#">Shopify Marketing</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Security services</header>
              <ul class="mega-links">
                <li><a href="#">Site Seal</a></li>
                <li><a href="#">VPS Hosting</a></li>
                <li><a href="#">Privacy Seal</a></li>
                <li><a href="#">Website design</a></li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="contact.html">Contact</a></li>
      <a href="https://www.fiverr.com/kibriapro" class="nav_btn">Send Proposal</a>
    </ul>

    <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>

  </div>
</nav> -->

<nav>
  <div class="wrapper">
    <div class="logo"><a href="index.html"><img src="{{ asset('frontend') }}/images/logo.png" alt="logo.png"></a></div>
    <input type="radio" name="slider" id="menu-btn">
    <input type="radio" name="slider" id="close-btn">
    <ul class="nav-links">
      <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
      <li><a href="#">Home</a></li>
      <li>
        <a href="#" class="desktop-item">Services</a>
        <input type="checkbox" id="showDrop">
        <label for="showDrop" class="mobile-item">Services</label>
        <ul class="drop-menu">
          <li><a href="#">Shopify Store Setup</a></li>
          <li><a href="#">Shopify Store Redesign</a></li>
          <li><a href="#">Shopify Store Migration</a></li>
          <li><a href="#">Shopify Maintenance</a></li>
          <li><a href="#">Shopify Development</a></li>
          <li><a href="#">Social Media Marketing</a></li>
        </ul>
      </li>
      <li>
        <a href="portfolio.html" class="desktop-item">Portfolio</a>
        <input type="checkbox" id="showMega">
        <label for="showMega" class="mobile-item">Portfolio</label>
        <div class="mega-box">
          <div class="content">
            <div class="row">
              <img src="{{ asset('frontend') }}/images/shopify.jpg" alt="shopify.jpg">
            </div>
            <div class="row">
              <header>Design Services</header>
              <ul class="mega-links">
                <li><a href="#">Graphics</a></li>
                <li><a href="#">Vectors</a></li>
                <li><a href="#">Business cards</a></li>
                <li><a href="#">Custom logo</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Email Services</header>
              <ul class="mega-links">
                <li><a href="#">Personal Email</a></li>
                <li><a href="#">Business Email</a></li>
                <li><a href="#">Mobile Email</a></li>
                <li><a href="#">Web Marketing</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Security services</header>
              <ul class="mega-links">
                <li><a href="#">Site Seal</a></li>
                <li><a href="#">VPS Hosting</a></li>
                <li><a href="#">Privacy Seal</a></li>
                <li><a href="#">Website design</a></li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li><a href="about-us.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>

    </ul>
    <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    <a href="{{ route('register') }}" class="nav_btns">Send Proposal</a>
  </div>
</nav>
  <!-- ===========================================
menu part end*************
=========================================== -->



  <!-- ===========================================
banner part start*************
=========================================== -->
  <section id="banner">
    <div class="container">
      <div class="row">
        <!-- left part  -->
        <div class="col-lg-5">
          <div class="banner_left">
            <h1>Hire top rated shopify experts</h1>
            <h3>To grow your eCommerce
              business in shopify</h3>
            <a href="#">Contact Us</a>
          </div>
        </div>
        <!-- left part  -->

        <!-- right part  -->
        <div class="col-lg-6 offset-1">
          <div class="banner_right">
            <div class="banner_img">
              <div class="b_img_background"></div>
              <img src="{{ asset('frontend') }}/images/banner.png" alt="banner.png" class="img-fluid w-100">
            </div>
          </div>
        </div>
        <!-- right part  -->
      </div>
    </div>
  </section>
  <!-- ===========================================
banner part end*************
=========================================== -->



  <!-- ===========================================
counter part start*************
=========================================== -->
  <section id="counter">
    <div class="container">
      <div class="row">
        <!-- one -->
        <div class="col-lg-3 col">
          <div class="text-center counter_common">
            <div class="cc_top_img">
              <img src="{{ asset('frontend') }}/images/cone.png" alt="cone.png">
            </div>
            <div class="cc_btm_text">
              <h3 class="counter">120</h3>
              <p>Shopify Stores Designed</p>
            </div>
          </div>
        </div>
        <!-- one -->
        <!-- two -->
        <div class="col-lg-3 col">
          <div class="text-center counter_common">
            <div class="cc_top_img">
              <img src="{{ asset('frontend') }}/images/ctwo.png" alt="ctwo.png">
            </div>
            <div class="cc_btm_text">
              <h3 class="counter">724</h3>
              <p>Working Hours</p>
            </div>
          </div>
        </div>
        <!-- two -->
        <!-- three -->
        <div class="col-lg-3 col">
          <div class="text-center counter_common">
            <div class="cc_top_img">
              <img src="{{ asset('frontend') }}/images/cthree.png" alt="cthree.png">
            </div>
            <div class="cc_btm_text">
              <h3 class="counter">285</h3>
              <p>Completed Shopify Projects</p>
            </div>
          </div>
        </div>
        <!-- three -->
        <!-- four -->
        <div class="col-lg-3 col">
          <div class="text-center counter_common">
            <div class="cc_top_img">
              <img src="{{ asset('frontend') }}/images/cfour.png" alt="cfour.png">
            </div>
            <div class="cc_btm_text">
              <h3 class="counter">143</h3>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>
        <!-- four -->
      </div>
    </div>
  </section>
  <!-- ===========================================
counter part end*************
=========================================== -->




  <!-- ===========================================
service header part start*************
=========================================== -->
  <section id="service_header">
    <div class="container">
      <!-- header part  -->
      <div class="row">
        <div class="m-auto text-center col-lg-7">
          <div class="ser_header">
            <h2>What We Can Do For You!</h2>
          </div>
        </div>
      </div>
      <!-- header part  -->
    </div>
  </section>
  <!-- ===========================================
service header part end*************
=========================================== -->




  <!-- ===========================================
service detail part start*************
=========================================== -->

  <section id="service">

    <div class="container">
      <div class="row service_slider">
        <!-- one  -->
        <div class="col-lg-4 col-sm-2 col">
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img
                  src="https://cdn.shopify.com/s/files/1/0606/9662/5372/files/Background_1_dfc68c4e-45d6-47b1-a2d5-b43acded55bb.png?v=1665829707"
                  alt="" class="card-img" class="img-fluid w-100">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">Shopify Development</h2>
              <p class="description"></p>
              <img src="https://logos-world.net/wp-content/uploads/2020/11/Shopify-Logo.png"
                  class="img-fluid w-100">
              <button class="button">Get it</button>
            </div>
          </div>
        </div>
        <!-- one  -->
        <!-- two  -->
        <div class="col-lg-4 col-sm-2 col">
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img
                  src="https://cdn.shopify.com/s/files/1/0606/9662/5372/files/Background_1_dfc68c4e-45d6-47b1-a2d5-b43acded55bb.png?v=1665829707"
                  alt="" class="card-img" class="img-fluid w-100">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">Shopify Development</h2>
              <p class="description"></p>
              <img src="https://logos-world.net/wp-content/uploads/2020/11/Shopify-Logo.png"
                  class="img-fluid w-100">
              <button class="button">Get it</button>
            </div>
          </div>
        </div>
        <!-- two  -->
        <!-- three  -->
        <div class="col-lg-4 col-sm-2 col">
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img
                  src="https://cdn.shopify.com/s/files/1/0606/9662/5372/files/Background_1_dfc68c4e-45d6-47b1-a2d5-b43acded55bb.png?v=1665829707"
                  alt="" class="card-img"  class="img-fluid w-100">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">Shopify Development</h2>
              <p class="description"></p>
              <img src="https://logos-world.net/wp-content/uploads/2020/11/Shopify-Logo.png"
                class="img-fluid w-100">
              <button class="button">Get it</button>
            </div>
          </div>
        </div>
        <!-- three  -->
        <!-- four  -->
        <div class="col-lg-4 col-sm-2 col">
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img
                  src="https://cdn.shopify.com/s/files/1/0606/9662/5372/files/Background_1_dfc68c4e-45d6-47b1-a2d5-b43acded55bb.png?v=1665829707"
                  alt="" class="card-img"  class="img-fluid w-100">
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">Shopify Development</h2>
              <p class="description"></p>
              <img src="https://logos-world.net/wp-content/uploads/2020/11/Shopify-Logo.png"
                 class="img-fluid w-100">
              <button class="button">Get it</button>
            </div>
          </div>
        </div>
        <!-- four  -->
      </div>
    </div>
  </section>

  <!-- ===========================================
service detail part end*************
=========================================== -->




  <!-- ===========================================
description detail part start*************
=========================================== -->
  <section id="detail">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="detail_main">
            <h2>Hire top rated shopify experts to grow your eCommerce business</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit accusantium, dolor eum ipsum repudiandae
              repellat sapiente, molestias, dolores explicabo laborum corrupti commodi totam molestiae magni ipsam saepe
              aut tempore nemo similique? Fuga in minus amet adipisci ipsa incidunt, quam iure aliquid corrupti
              asperiores, non quibusdam earum debitis dignissimos modi omnis repudiandae praesentium ad sequi veritatis,
              odio. Nam, unde! Iste consequatur asperiores doloremque aperiam cupiditate optio eum ducimus voluptatibus,
              animi illo quam dicta inventore dolore ab autem a, obcaecati, reprehenderit. Natus quasi officiis nulla
              officia rem placeat aut impedit nemo eum voluptatibus, dolores molestias velit, cupiditate magni illo
              laudantium beatae facere sequi obcaecati, reprehenderit eveniet nam, ea aperiam hic. Est odit, qui.
              Aliquid saepe molestiae, inventore. Necessitatibus temporibus, dignissimos, nisi repellendus possimus sed
              incidunt nam quos enim veritatis corporis ut sint, facere vitae, illum accusamus nesciunt dolore.
              Doloremque nihil sit, alias molestias sint quos voluptatum voluptatibus sunt quisquam, facere quod
              pariatur.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta repellendus illo iste eius molestiae
              natus, esse incidunt. Minus architecto dicta, provident libero. Ipsum culpa, atque ab. Aut incidunt amet
              optio quo nemo atque eligendi aperiam quisquam aliquid, distinctio mollitia minima, eius repellendus
              asperiores vero reprehenderit dolore, consequuntur adipisci tenetur! Enim sed, tempora obcaecati
              perspiciatis illo ducimus maiores aut quae eos, aspernatur sunt unde, quam a praesentium tenetur est quas
              eveniet dolorum quibusdam hic placeat! Distinctio nostrum assumenda suscipit cupiditate rem amet
              repudiandae labore neque quis quia dicta, aliquid eum nemo sint, maxime sunt. Cumque suscipit nulla quis
              velit iure. Consequuntur, ipsa! Veniam error enim itaque ab unde, accusamus asperiores, ratione, debitis
              similique suscipit aut, qui consectetur quos repudiandae illo impedit.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, sunt ipsum modi. Consectetur nobis
              vero minus, architecto facere velit explicabo molestiae delectus omnis ad expedita similique inventore
              placeat incidunt. Sint quasi autem quam illo omnis soluta minus, in quibusdam placeat. Saepe ea magni
              ducimus, modi, eos quis, at possimus earum ad magnam natus, nihil vero error. Ab ipsum omnis odit ipsam,
              maxime aspernatur molestiae sit tempore corporis non rerum earum neque voluptatibus provident dolor quod
              molestias officia. Aspernatur quis magni iste cum quas fugit modi aut ratione repudiandae quaerat eaque
              blanditiis veritatis quibusdam, reprehenderit eveniet, earum, atque sequi, sunt fugiat?</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===========================================
description detail part end*************
=========================================== -->




  <!-- ===========================================
ecommerce part start*************
=========================================== -->
  <section id="ecommerce">
    <div class="container">
      <div class="row">
        <div class="m-auto text-center col-lg-9">
          <div class="ecom_main">
            <h2>One Stop eCommerce Solution</h2>
            <p>Website to Marketing, Get all service from our "one stop eCommerce solution" package</p>
            <a href="#">Get This Package</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===========================================
ecommerce part end*************
=========================================== -->




  <!-- ===========================================
clint feedback part start*************
=========================================== -->
  <section id="clint_feedback_heading">
    <div class="container">
      <!-- heading part  -->
      <div class="row">
        <div class="m-auto text-center col-lg-6">
          <div class="clint_fb_heading">
            <h2>Client's Feedback</h2>
          </div>
        </div>
      </div>
      <!-- heading part  -->


    </div>
  </section>
  <!-- ===========================================
clint feedback part end*************
=========================================== -->



  <!-- ===========================================
clint feedback body part start*************
=========================================== -->
  <section id="clint_feedback_body">
    <div class="container">
      <!-- feedback part  -->
      <div class="row cfbdetail">
        <!-- one  -->
        <div class="col-lg-4">
          <div class="feedback_main">
            <i class="fa-solid fa-quote-left"></i>
            <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque
              placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>

            <div class="cfb_detail d-flex">
              <div class="cfb_info">
                <h3>Alex Smith</h3>
                <p>PUMA</p>
                <div class="info_rating d-flex">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
              <div class="text-center cfb_image ms-auto">
                <img src="{{ asset('frontend') }}/images/puma_logo.png" alt="puma_logo.png" class="w-100 img-fluid">
              </div>
            </div>


          </div>
        </div>
        <!-- one  -->
        <!-- two  -->
        <div class="col-lg-4">
          <div class="feedback_main">
            <i class="fa-solid fa-quote-left"></i>
            <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque
              placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>

            <div class="cfb_detail d-flex">
              <div class="cfb_info">
                <h3>Alex Smith</h3>
                <p>PUMA</p>
                <div class="info_rating d-flex">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
              <div class="text-center cfb_image ms-auto">
                <img src="{{ asset('frontend') }}/images/puma_logo.png" alt="puma_logo.png" class="w-100 img-fluid">
              </div>
            </div>


          </div>
        </div>
        <!-- two  -->
        <!-- three  -->
        <div class="col-lg-4">
          <div class="feedback_main">
            <i class="fa-solid fa-quote-left"></i>
            <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque
              placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>

            <div class="cfb_detail d-flex">
              <div class="cfb_info">
                <h3>Alex Smith</h3>
                <p>PUMA</p>
                <div class="info_rating d-flex">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
              <div class="text-center cfb_image ms-auto">
                <img src="{{ asset('frontend') }}/images/puma_logo.png" alt="puma_logo.png" class="w-100 img-fluid">
              </div>
            </div>


          </div>
        </div>
        <!-- three  -->
      </div>
      <!-- feedback part  -->
    </div>
  </section>
  <!-- ===========================================
clint feedback body part end*************
=========================================== -->



  <!-- ===========================================
top Industry  part start*************
=========================================== -->
  <section id="Industry">
    <div class="container">
      <div class="row">
        <div class="m-auto text-center col-lg-6">
          <div class="ind_heading">
            <h2>Top Industry Experts</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===========================================
top Industry  part end*************
=========================================== -->



  <!-- ===========================================
partner part start*************
=========================================== -->
  <section id="partner">
    <div class="container">
      <div class="row">
        <!-- one  -->
        <div class="text-center col-lg-3 col">
          <div class="partner_main">
            <img src="{{ asset('frontend') }}/images/shopify_partner.png" alt="shopify_partner.png" class="img-fluid">
          </div>
        </div>
        <!-- one  -->
        <!-- two  -->
        <div class="text-center col-lg-3 col">
          <div class="partner_main">
            <img src="{{ asset('frontend') }}/images/shopify_expert_logo.png" alt="{{ asset('frontend') }}/images/shopify_expert_logo.png" class="img-fluid">
          </div>
        </div>
        <!-- two  -->
        <!-- three  -->
        <div class="text-center col-lg-3 col">
          <div class="partner_main">
            <img src="{{ asset('frontend') }}/images/fiverr.png" alt="{{ asset('frontend') }}/images/fiverr.png" class="img-fluid">
          </div>
        </div>
        <!-- three  -->
        <!-- four  -->
        <div class="text-center col-lg-3 col">
          <div class="partner_main">
            <img src="{{ asset('frontend') }}/images/upwork.png" alt="{{ asset('frontend') }}/images/upwork.png" class="img-fluid">
          </div>
        </div>
        <!-- four  -->
      </div>
    </div>
  </section>
  <!-- ===========================================
partner part end*************
=========================================== -->



  <!-- ===========================================
menu part start*************
=========================================== -->
  <!-- ===========================================
menu part end*************
=========================================== -->





  <!-- ===========================================
footer part start*************
=========================================== -->
  <section id="footer">
    <div class="container">
      <!-- proposal part  -->
      <div class="row">

        <div class="m-auto text-center col-lg-5">
          <div class="proposal_heading">
            <h2>Ready To Grow?</h2>
            <p>Get Your Free Proposal Today.</p>
          </div>
        </div>
      </div>
      <!-- proposal part  -->

      <!-- subscribe form  -->
      <div class="row">
        <div class="m-auto text-center col-lg-8 col">
          <div class="text-center sub_form_main">
            <form class="d-flex">
              <input class="subscribe-form active" type="search" placeholder="enter your email address"
                aria-label="Search">
              <button class="sub_btn active" type="submit">Send Proposal <i class="fa-solid fa-right-long"></i></button>
            </form>
          </div>
        </div>
      </div>
      <!-- subscribe form  -->

      <!-- details part  -->
      <div class="row foot_detail">
        <!-- one -->
        <div class="col-lg-4">
          <div class="footer_common">
            <h3>Services</h3>
            <ul>
              <li>
                <a href="#">Shopify Store Setup</a>
              </li>
              <li>
                <a href="#">Shopify Store Redesign</a>
              </li>
              <li>
                <a href="#">Shopify Store Migration</a>
              </li>
              <li>
                <a href="#">Shopify Maitenance</a>
              </li>
              <li>
                <a href="#">Shopify Development</a>
              </li>
              <li>
                <a href="#">Social Media Marketing</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- one -->
        <!-- two -->
        <div class="col-lg-4">
          <div class="footer_common">
            <h3>Quick Links</h3>
            <ul>
              <li>
                <a href="about-us.html">About Us</a>
              </li>
              <li>
                <a href="faq.html">FAQs</a>
              </li>
              <li>
                <a href="contact.html">Contact Us</a>
              </li>
              <li>
                <a href="privacy-policy.html">Privacy Policy</a>
              </li>
              <li>
                <a href="refund-policy.html">Refund Policy</a>
              </li>
              <li>
                <a href="terms-of-service.html">Terms of Service</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- two -->
        <!-- three -->
        <div class="col-lg-4">
          <div class="footer_common">
            <h3>Contact Info</h3>
            <a href="#" class="d-flex"><i class="fa-brands fa-whatsapp"></i> Messege us on WhatsApp</a>
            <a href="#" class="d-flex"><i class="fa-solid fa-envelope"></i>contact@shopispeed.com</a>
            <a href="#" class="d-flex cinfo_last"><i class="fa-solid fa-envelope"></i>support@shopispeed.com</a>

            <div class="f_com_f_bottom d-flex">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>
        <!-- three -->
      </div>
      <!-- details part  -->

    </div>
  </section>
  <!-- ===========================================
footer part end*************
=========================================== -->
  <!-- ===========================================
copyright part start*************
=========================================== -->
  <section id="copyright">
    <div class="container">
      <div class="m-auto col-lg-5">
        <div class="text-center cr_main">
          <p>Copyright © 2022 Shopispeed LLC, All rights reserved.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ===========================================
copyright part end*************
=========================================== -->




  <!-- ===========================================
back to top part start*************
=========================================== -->
  <section id="back_to_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center back-to-top">
            <i class="fa-solid fa-angles-up"></i>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===========================================
back to top part end*************
=========================================== -->


  <!-- all js -->
  <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/js/jquery-1.12.4.min.js"></script>
  <script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
  <script src="{{ asset('frontend') }}/js/waypoints.min.js"></script>
  <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
  <script src="{{ asset('frontend') }}/js/all.min.js"></script>
  <script src="{{ asset('frontend') }}/js/venobox.min.js"></script>
  <script src="{{ asset('frontend') }}/js/custom.js"></script>
  <!-- all js -->
</body>

</html>
