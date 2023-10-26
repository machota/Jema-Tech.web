@extends('layout.app')

@include('components.header')

@section('content')

<body>

  

  <!-- ======= Hero Section ======= -->
  

  <main id="main">
  

    <!-- ======= About Section ======= -->
    <br><br><br><br>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>ABOUT </h2>
          <p>About Us </p>
        </div>
        
        
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-12 pt-8 pt-lg-2 order-2 order-lg-1 content">
            
            <p>
            JEMA Tech is a JEMA Africa sub-company based on finding solutions to the problems that African societies are facing through the use of technology. Unlike other JEMA Africa sub-companies JEMA Tech focuses primarily on the development and manufacturing of tech products. Our continual innovation, spirit of integration, & high standards improve quality throughout every aspect of our organization. We remain focused on meeting & exceeding the expectations of our customers. As a result, we are able to earn customer loyalty, providing them with value & service beyond their expectations.
              </p>
            <p>     
            JEMA Tech deals with: Design &amp; Development of Custom Software Solution, Data Management Analytics, Artificial Intelligence, Machine Learning, Robotic Process Automation (RPA), Web Design, Digital Marketing, Computer System Security, Internet of Things (IOT), Cloud Computing, Cloud Computing, Mobile Application Development and Startups Support.
             </p>
            <p> 
            We do everything in our power to ensure that we provide our customers with the products, services & solutions to suit their needs at an affordable cost, cost conscious, & works towards optimizing costs to the majority of our customers. Always aspire to conduct our business with the highest standard of integrity & professionalism while leading, motivating & influencing people to achieve desired results, regardless of reporting lines. Able to engage people with meaningful explanations.
           </p>
          </div>
        </div><br>

        <div class="section-title">
          
          <h3 style="color: white; border-radius: 50px; padding-left: 10px;">JEMA Tech’s Philosophy</h3><br>
          <h4><b>Our Philosophy<b></h4>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/aboutSidePic.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            
            
            <ul>
              <li><i class="bi bi-pencil"></i>Think Big</li>
              <h6>Being the Africa's Silicon Valley requires unrivalled vision, innovation and execution. We never settle — in everything we do, we challenge our ideas of what’s possible in order to better meet the needs of our customers.</h6>
            </ul>

            <ul>
              <li><i class="bi bi-pencil"></i>Act with integrity</li>
              <h6>We’re honest, transparent and committed to doing what’s best for our stakeholders and our company. We openly collaborate in pursuit of the truth. We have no tolerance for politics, hidden agendas or passive-aggressive behavior.</h6>
            </ul>

            <ul>
              <li><i class="bi bi-pencil"></i>Make a difference every day</li>
              <h6>We constantly push ourselves to be our best, we focus on solutions, and we arrive every day inspired to make an impact through our talents, passion and hard work.</h6>
            </ul>

            <ul>
              <li><i class="bi bi-pencil"></i>Focus on Impact</li>
              <h6>To make the most impact, we need to solve the most important problems. We expect JEMA Tech employees to avoid wasting time on minor issues and focus on truly big challenges.</h6>
            </ul>

            <ul>
              <li><i class="bi bi-pencil"></i>Move Fast</li>
              <h6>We believe that it’s better to move fast and make mistakes than to move slowly and miss opportunities. Doing so enables us to build more things and learn faster.</h6>
            </ul>
           

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


   
</body>

@include('components.footer')

@endsection