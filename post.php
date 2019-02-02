<?php
require_once "core/init.php";
require_once "header.php";
?>

<section id="post">
  <div class="row">
    <div class="col-md-8 left-bar">

      <!-- ================= Post Gallery Slider Starts  ==================
==================================================================== -->
      <div class="ad-container" id="Imageslider">
      <img src="images/s1.jpg" alt="" class="myslides">
      <img src="images/s2.jpg" alt="" class="myslides">
      <img src="images/s3.jpg" alt="" class="myslides">
      <a class="btn_left" onclick="plusDiv(-1)"><i class="fa fa-angle-left"></i></a>
      <a class="btn_right" onclick="plusDiv(1)"><i class="fa fa-angle-right"></i></a>

      </div>

      <!--============   Post Details Written Here       ===============-->

      <div class="ad-container">
        <p class="ad-heading display-darkblue">Details</p>
        <p class="mt-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
          optio maxime consequuntur ullam! Facilis dignissimos debitis
          voluptas! Totam eos quas, consectetur non nam fuga! Voluptatum
          repellendus id error ut fuga.
        </p>
        <div class="dropdown-divider"></div>
        <p class="ad-heading display-darkblue">Description</p>
        <p class="mt-4">
          Taj Residencia is the project of Sardar Group of Companies
          (Centaurus Mall). It is located adjacent to I-14 CDA sector. Good
          opportunity for investment and residential purposes. 5,8,10,14 and
          1 kanal plots are available. If You Want To Live In An Environment
          Which Is Absolutely Secured And Peaceful Then It Is The Right Time
          And The Right Place To Grab This Property. Grab This Auspicious
          Opportunity To Execute Your Dreams Into Reality. Developed Plots.
          30% Down payment and 6 Quarterly installments (1. 5 year). Non
          Developed Plots. 20% Down payment and 10 Quarterly installments
          (2. 5 years). For further information please contact
        </p>
      </div>
    </div>

    <!--============================== Right Bar Starts Here =========
==============================================================-->


    <div class=" col-md-4 right-bar">


      <!--======================Post  Information =========
==============================================================-->
      <div class="ad-container">
        <p class="price text-left display-darkblue">RS 1250000</p>
        <div class="price-btn text-right">
          <a href=""><i class="fa fa-share-alt"></i></a>
          <a href=""><i class="fa fa-heart"></i></a>
          <br><br><br><span class="text-center">HP Omen Gaming Desktop</span>
          <p class="timestamp text-right mt-3">02 June</p>
        </div><br>


      </div>
      <!--============================== Seller Information =========
==============================================================-->
      <div class="ad-container seller-info">
        <p class="h5 display-darkblue text-capitalize ">Seller description</p>
        <span class="seller">
          <img src="images/hey.png" class="rounded-circle" alt="">
          <a href="" class="ml-3">Mujeeb Khan</a>
        </span>
        <div class="chat">
          <a class="btn text-white btn-primary btn-block text-uppercase">
            <i class="fa fa-comment"></i>Chat with seller</a>
        </div>
      </div>


      <!--============================== Seller Address =========
==============================================================-->

      <div class="ad-container">

        <p class="h5 display-darkblue text-capitalize">Seller Address</p>
        <p class="address text-left">Satellite Town, Rawalpindi, Punjab</p>
        <img src="images/map.png" class="img-thumbnail" alt="Seller Google Map" title="Seller Google Map">
      </div>


    </div>
  </div>
</section>
</body>
<!-- ///////////////////////////// Post Ends Here 
//////////////////////////////////////////////////////////////-->

<?php
require "footer.php";
?>

