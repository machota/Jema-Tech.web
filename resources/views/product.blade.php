@extends('layout.app')

@include('components.header')


<body>

  
       <!-- ======= Popular Products Section ======= -->
       <br><br><br><br>
       <section id="products" class="products">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products </h2>
          <p>Our Products </p>
          
        </div>
        

          <div class="col-lg-12 col-md-6 d-flex align-items-stretch">
            <div class="product-item">
              <img src="assets/img/jet-banking.png" class="img-fluid" alt="...">
              <div class="product-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>JETBanking</h4>
                  
                </div>

                <h3><a href="">Financial Empowerment</a></h3>
                <p>Introducing JETBanking, our financial arm dedicated to empowering clients of sister companies. JETBanking addresses credit management challenges, providing comprehensive financial solutions. Whether it's trade finance, staff loans, or community-based initiatives like vicoba groups, JETBanking ensures seamless financial support for businesses and communities alike.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Name...</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Service Item-->
        <br><br><br><br>
          <!-- End Product Item-->

          <div class="col-lg-12 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="product-item">
              <img src="assets/img/jetcargo.png" class="img-fluid" alt="...">
              <div class="product-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Jetcargo</h4>
                  
                </div>

                <h3><a href="">Logistics Revolutionized</a></h3>
                <p>JETCargo is our revolutionary logistics solution designed to meet the diverse needs of businesses. Beyond serving the logistics requirements of Jema Africa's subsidiaries and other companies in Tanzania, JETCargo extends its reach to individuals and small businesses. It redefines the landscape of product movement, offering a streamlined and efficient logistics solution for a globalized world.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Name...</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Products Section -->

    

 
   
</body>

@include('components.footer')