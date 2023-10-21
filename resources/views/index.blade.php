@extends('layout.app')

# Hero Section

@include('components.header')

<main id="main">

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>JET INTO<br>THE FUTURE...</h1>
      <h2>We Make It Happen</h2>
      <a href="{{ route('service') }}" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->
  

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>ABOUT </h2>
          <p>About Us </p>
        </div>
        

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="assets/img/sideph.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3 style="color: white; border-radius: 50px;">We Make It Happen</h3>
            <p class="fst-italic">
            Jema Tech operates within the esteemed Jema Africa family, a leading African company with diverse service offerings. As the technological arm of this vibrant conglomerate, Jema Tech leads the way in empowering sister companies: Jema Chemicals, Jema Illusion, Jema Jione and JIT (Jema Institute of Technology) through innovative solutions.
            <ul>
              <li><i class="bi bi-check-circle"></i> We provides all Services about Financial Empowerment.</li>
              <li><i class="bi bi-check-circle"></i> We provides all Logistics Transportion about Logistics Revolutionized.</li>
              <li><i class="bi bi-check-circle"></i> We provides all Services about training about Technological Solution.</li>
            </ul>
            <p>
              Jet into the future with high expectation and high academic achievement
            </p>

             <!-- ======= Why Us Section ======= -->
    
<section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 style="width:150px; d-flex align-items-stretch">
            <div class="content">
              <h3>Why JEMATECH</h3>
              <h5>
                JEMATECH we provides all Technology 
              </h5>
              <br><br><br><br><br>
              <div class="text-center">
                <a href="{{ route('why-us') }}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


          </div>


        </div>

       

      </div>

 

    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5503" data-purecounter-duration="1" class="purecounter"></span>
            <p>Customers</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Services</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    

    <!-- ======= Features Section ======= -->
    <!-- End Features Section -->


    <!-- ======= Popular Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Services </h2>
          <p>Popular Services </p>
        </div>

        <div class="row">
     <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i _ngcontent-nuy-c3="" class="bi bi-code-slash" style="font-size: 90px; color: #0f1e50;"></i></div>
            <h4 class="title"><a href="">Web Development</a></h4>
            <p class="description">Web development is the building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience. </p>
          </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i _ngcontent-nuy-c3="" class="bi bi-phone" style="font-size: 90px; color: #0f1e50;"></i></i></div>
            <h4 class="title"><a href="">Mobile Application Development</a></h4>
            <p class="description">Mobile application development is the set of processes and procedures involved in writing software for small, wireless computing devices, such as smartphones and other hand-held devices. </p>
          </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i _ngcontent-nuy-c3="" class="bi bi-cart" style="font-size: 90px; color: #0f1e50;"></i></i></div>
            <h4 class="title"><a href="">Digital Marketing</a></h4>
            <p class="description">Any marketing that uses electronic devices and can be used by marketing specialists to convey promotional messaging and measure its impact through your customer journey. </p>
          </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i _ngcontent-nuy-c3="" class="bi bi-laptop" style="font-size: 90px; color: #0f1e50;"></i></i></div>
            <h4 class="title"><a href="">Software Development and Design</a></h4>
            <p class="description">Is the process of conceiving, specifying, designing, programming, documenting, testing, and bug fixing involved in creating and maintaining applications, frameworks, or other software components. </p>
          </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i _ngcontent-nuy-c3="" class="bi bi-globe" style="font-size: 90px; color: #0f1e50;"></i></i></div>
            <h4 class="title"><a href="">Internet of Things</a></h4>
            <p class="description">The interconnection via the internet of computing devices embedded in everyday objects, enabling them to send and receive data. </p>
          </div>

      </div>
     

    </section>
    <!-- End Popular Service Section -->
  
    <section id="sponsors" class="sponsors">
      <div class="container" data-aos="fade-up">
        <div class="container" data-aos="fade-up">
        <h3 style="color: white; text-align: center; background-color: #FF4500;"><b>Powered By</b></h3>
    </div>
    <br><br><br><br>
         
      

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <div class="col-lg-4 col-6 text-center">
            <div class="logo">
              <img src="assets/img/CRDB Bank.png" class="img-fluid" alt="">
             
            </div>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <div class="logo">
              <img src="assets/img/opes-logo.png" class="img-fluid" alt="">
             
            </div>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <div class="logo">
              <img src="assets/img/track-image.png" class="img-fluid" alt="">
             
            </div>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <div class="logo">
              <img src="assets/img/Jema Chemicals.png" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <div class="logo">
              <img src="assets/img/ipf-logo.jpg" class="img-fluid" alt="">
             
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Sponsors Section -->

    <!-- ======= Popular Products Section ======= -->
    <section id="products" class="products">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products </h2>
          <p>Our Products </p>
        </div>

        <div class="" data-aos="zoom-in" data-aos-delay="100">

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
          </div> <!-- End Products Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>TEAMS </h2>
          <p>Our Team </p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Name...</h4>
                <span>Web Development</span>
                <p> We provides services for web designing and development and also we provides consultant for desing and developing of wedsites
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Name...</h4>
                <span>Marketing</span>
                <p>
                  We provide search engine optimization services as consultant and for implementation.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Name...</h4>
                <span>Content</span>
                <p>
                 we provide copywriting for our customer who needs because we have more specialists for this work.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

    
  <section id="contact" class="contact">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

<!--  Section Title -->
<div class="section-title">
          <h2>CONTACT </h2>
          <p>Contact Us </p>
    </div><!-- End Section Title -->

  <div class="row gy-4">

    <div class="col-lg-6">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="200">
            <i class="bi bi-geo-alt"></i>
            <h3>P.O.Box 269</h3>
            <h5>Mkuyuni, Mwanza</h5>
            <h5>Tanzania.</h5>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="300">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p></p>
            <h5>+255 756 053 235</h5>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="400">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <h5>info@jematech.co.tz</h5>
            <p></p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="500">
            <i class="bi bi-clock"></i>
            <h3>Open Hours</h3>
            <h5>Monday - Saturday</h5>
            <h5>8:00AM - 05:00PM</h5>
          </div>
        </div><!-- End Info Item -->

      </div>

    </div>
  
    <div _ngcontent-hib-c7="" class="col-lg py-5" style="border-radius: 5px; border: 1px solid #F5F5F5;">
       <form _ngcontent-hib-c7="" novalidate="" action="https://formsubmit.co/info@jematech.co.tz" method="POST">
         <input _ngcontent-hib-c7="" type="hidden" name="_subject" value="New submission!">
     <div _ngcontent-hib-c7="" class="form-group">
        <div _ngcontent-hib-c7="" class="mb-3">
           <label _ngcontent-hib-c7="" for="name" class="form-label col-form-label">Your Full Name</label>
         <input _ngcontent-hib-c7="" name="name" type="text" id="name" class="form-control">
   </div>
    <div _ngcontent-hib-c7="" class="mb-3">
           <label _ngcontent-hib-c7="" for="exampleFormControlTextarea1" class="form-label col-form-label">Write Your Message Here</label>
        <textarea _ngcontent-hib-c7="" type="text" name="message" id="exampleFormControlTextarea1" rows="3" class="form-control">
    </textarea>
   </div>
    <div _ngcontent-hib-c7="" class="mb-3">
          <label _ngcontent-hib-c7="" for="exampleInputEmail1" class="form-label col-form-label">Your Email</label>
        <input _ngcontent-hib-c7="" name="email" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" class="form-control">
    <div _ngcontent-hib-c7="" id="emailHelp" class="form-text">We'll never share your email with anyone else.</div></div>
        <button _ngcontent-hib-c7="" class="btn btn-primary">Submit</button>
    </div>
       
    </div>
  </form>
<!-- End Contact Form -->



  </div>

  

</div>
<br><br><br>
<div _ngcontent-hib-c7="" class="col-md">
      <div _ngcontent-hib-c7="" class="mapouter"><div _ngcontent-hib-c7="" class="gmap_canvas">
      <iframe _ngcontent-hib-c7="" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=jema africa&amp;t=h&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" class="gmap_iframe"></iframe><a _ngcontent-hib-c7="" href="https://www.fridaynightfunkin.net/"></a>
      </div>
   </div>
</div>

   
</section>

  </main><!-- End #main -->


@include('components.footer')