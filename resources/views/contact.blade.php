@extends('layout.app')

@include('components.header')

<br><br><br><br><br><br>

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

    <div _ngcontent-hib-c7="" class="col-lg py-5">
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
  </form>
<!-- End Contact Form -->



  </div>

  

</div>

   <div _ngcontent-hib-c7="" class="col-md">
      <div _ngcontent-hib-c7="" class="mapouter"><div _ngcontent-hib-c7="" class="gmap_canvas">
      <iframe _ngcontent-hib-c7="" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=jema africa&amp;t=h&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" class="gmap_iframe"></iframe><a _ngcontent-hib-c7="" href="https://www.fridaynightfunkin.net/"></a>
      </div>
   </div>
</div>

</section>

@include('components.footer')
