<footer class="w3l-footer py-5">
  <div class="container pt-lg-5 pt-md-3">
    <div class="footer-grid_section text-center">
      <div class="footer-title mb-3">
        <h2> <a class="navbar-brand" href="index.html">
            <span class="sub-log">Home</span> Interior
          </a></h2>
      </div>
      <div class="footer-text">
        <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero
          malesuada feugiat.
          Lorem ipsum dolor sit amet elit.</p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4 mb-lg-0 mb-5 footer-top">
        <h4 class="mb-4 w3f_title text-uppercase">Contact Info</h4>
        <div class="footer-style-w3ls mb-3">
          <p>#302, 5th Floor, ALHK-2247 Colendar ek, Settlers Lane, New York.</p>
        </div>
        <ul class="list-agileits">
          <li class="my-2"><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(21)-255-999-8888</a></li>
          <li><a href="mailto:interior@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
              interior@mail.com</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 col-6 footv3-left">
        <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Company</h4>
        <ul class="list-agileits">
          <li class="my-2">
            <a href="about.html">
              About Us
            </a>
          </li>
          <li class="mb-2">
            <a href="#url">
              Terms of use
            </a>
          </li>
          <li class="my-2">
            <a href="#url">
              Faq's
            </a>
          </li>
          <li class="my-2">
            <a href="#url">
              Privacy Ploicy
            </a>
          </li>
          <li>
            <a href="contact.html">
              Get In Touch
            </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 col-6">
        <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Categories</h4>
        <ul class="list-agileits">
          <li class="my-2">
            <a href="#url">
              Furniture Chairs
            </a>
          </li>
          <li class="mb-2">
            <a href="#url">
              Three Seater Sofas
            </a>
          </li>
          <li class="my-2">
            <a href="#url">
              Dining Tables
            </a>
          </li>
          <li class="my-2">
            <a href="#url">
              Office Chairs
            </a>
          </li>
          <li>
            <a href="#url">
              Kitchen Cabinets
            </a>
          </li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-5">
        <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Resources</h4>
        <ul class="list-agileits">
          <li class="my-2">
            <a href="#url">
              Getting Started
            </a>
          </li>
          <li class="mb-2">
            <a href="#url">
              Best Collections
            </a>
          </li>
          <li class="my-2">
            <a href="#url">
              All Categories
            </a>
          </li>
          <li class="my-2">
            <a href="#url">
              24/7 Support
            </a>
          </li> 
          <li>
            <a href="contact.html">
              Contact for Help
            </a>
          </li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-5">
        <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Account</h4>
        <ul class="list-agileits">
          <li class="my-2">
            <a href="#login">
              Sign In / Login
            </a>
          </li>
          <li class="">
            <a href="#register">
              Create Account
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- copyright -->
    <section class="w3l-footer-29-main w3l-copyright">
      <div class="text-center">
        <p class="copy-footer-29">© 2023 Galeri Pantai. All rights reserved. Design by <a href="https://w3layouts.com/"
            target="_blank">
            OhMyGhan</a></p>
      </div>
    </section>
    <!-- //copyright -->

  </div>
  <!-- //footer bottom -->

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->

</footer>
<!-- //footer -->

<!-- Template JavaScript -->





<!-- magnific popup -->
<script>
 jQuery(document).ready(function($) {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<!-- magnific popup -->


<!-- script for banner slider -->
<script>
   jQuery(document).ready(function($) {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for banner slider -->

<!-- script for Testimonials-->
<script>
   jQuery(document).ready(function($) {
    $('.owl-two').owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for Testimonials-->

<!-- script for services -->
<script>
   jQuery(document).ready(function($) {
    $('.owl-news').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        768: {
          items: 2,
          nav: false
        },
        1000: {
          items: 3,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for services -->

<!-- disable body scroll which navbar is in active -->
<script>
   jQuery(document).ready(function($) {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->



<?php wp_footer (); ?>

</body>



</html>