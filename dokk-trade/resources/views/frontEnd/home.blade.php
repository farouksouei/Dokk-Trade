@extends('frontEnd.master')

@section('footer')
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Products</h2>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Features</h2>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
        <form action="#" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <div class="border-top pt-5">
        <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        </div>
      </div>
    </div>
  </div>
</footer>
@endsection