<?php get_header(); ?>
            <div class="content">
                <h1>
                    <span class="light">I’m a designer specialising</span>
                    <span class="semibold">UI/UX</span>
                    <span class="light">In and</span>
                    <span class="semibold">Interaction Design</span>
                    <span class="animated-cursor">|</span>
                </h1>
                <img class="logo2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/scroll.png">
            </div>
            <div class="clients">
                <h2>
                    <span class="light">Some of</span>
                    <span class="semibold">The clients </span>
                    <span class="semibold">I have</span><br>
                    <span class="semibold">designed for</span>
                </h2>
                <ul class="slider-list">
        <li class="logo-work"><a href="https://www.airbnb.co.id/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Vector.png" alt=""></a></li>
        <li class="logo-work"><a href="https://www.google.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/1.png" alt=""></a></li>
        <li class="logo-work"><a href="https://www.microsoft.com/id-id"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/2.png" alt=""></a></li>
        <li class="logo-work"><a href="https://www.fedex.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/3.png" alt=""></a></li>
    </ul>

            </div>
            <div class="work" id="work-section">
                <div class="title">
                    <h2>
                        <span class="light">Selected</span>
                        <span class="semibold">works </span>
                    </h2>
                    <!-- card1 start -->
                    <div class="card">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-1.png" class="card-img-top" alt="Work 1">
                        <div class="card-body">
                          <h5 class="card-title">REAL ESTATE TEMPLATE</h5>
                          <h3 class="card-text">Lorem ipsum dolor sit amet, consectetur <strong class="str"> adipiscing elit. Ultrices lorem non feugiat egestas amet.</strong></h3>
                          <p class="card-mobile"> Mobile App </p>
                          <a href="#" class="card-button">VIEW WORK ></a>
                        </div>
                    </div>
                    <!--Card1 finish-->

                    <!--Card2 Start-->
                    <div class="card2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-2.png" class="card-img-top" alt="Work 1">
                        <div class="card-body2">
                          <h5 class="card-title2">REAL ESTATE TEMPLATE</h5>
                          <h3 class="card-text2">Lorem ipsum dolor sit amet, consectetur <strong class="str"> adipiscing elit. Ultrices lorem non feugiat egestas amet.</strong></h3>
                          <p class="card-mobile"> Mobile App </p>
                          <a href="#" class="card-button2">VIEW WORK ></a>
                        </div>
                    </div>
                    <!--Card2 Finish-->

                    <!--Card3 Start-->
                    <div class="card">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-3.png" class="card-img-top" alt="Work 1">
                        <div class="card-body">
                          <h5 class="card-title">REAL ESTATE TEMPLATE</h5>
                          <h3 class="card-text">Lorem ipsum dolor sit amet, consectetur <strong class="str"> adipiscing elit. Ultrices lorem non feugiat egestas amet.</strong></h3>
                          <p class="card-mobile"> Mobile App </p>
                          <a href="#" class="card-button">VIEW WORK ></a>
                        </div>
                    </div>
                    <!--Card3 Finish-->

                    <!--Card4 start-->
                    <div class="card2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-4.png" class="card-img-top" alt="Work 1">
                        <div class="card-body2">
                          <h5 class="card-title2">REAL ESTATE TEMPLATE</h5>
                          <h3 class="card-text2">Lorem ipsum dolor sit amet, consectetur <strong class="str"> adipiscing elit. Ultrices lorem non feugiat egestas amet.</strong></h3>
                          <p class="card-mobile"> Mobile App </p>
                          <a href="#" class="card-button2">VIEW WORK ></a>
                        </div>
                    </div>
                    <!--Card4 Finish-->

                     <!--Card5 Start-->
                     <div class="card2">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Horizontal.png" class="card-img-top" alt="Work 1">
                        <div class="card-body2">
                          <h5 class="card-title2">A BIT ABOUT ME</h5>
                          <h3 class="card-text2">Lorem ipsum dolor sit amet, consectetur <strong class="str"> adipiscing elit. Ultrices lorem non feugiat egestas amet.</strong></h3>
                          <p class="card-mobile2"> Mobile App </p>
                        </div>
                    </div>
                    <!--Card5 Finish-->

                </div>
            </div>
            <div class="about" id="about-section">
                <h1 class="fell">Get <strong class="str">in Touch.</strong></h1>
                <p class="more">So that we can talk mare about...</p>
                <ul>
                    <li class="logo-about"><a href="https://mail.google.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Mail.png" alt=""></a></li>
                    <li class="logo-about"><a href="https://behance.net"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Behance.png" alt=""></a></li>
                    <li class="logo-about"><a href="https://dribbble.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Dribble.png" alt=""></a></li>
                    <li class="logo-about"><a href="https://id.linkedin.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Linkedin.png" alt=""></a></li>
               </ul>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
    <script>
        const animatedCursor = document.querySelector('.animated-cursor');
        const workLink = document.getElementById('work-link');
        const aboutLink = document.getElementById('about-link');
        const workSection = document.getElementById('work-section');
        const aboutSection = document.getElementById('about-section');

        workLink.addEventListener('click', function(event) {
            event.preventDefault();
            workSection.scrollIntoView({ behavior: 'smooth' });
        });

        aboutLink.addEventListener('click', function(event) {
            event.preventDefault();
            aboutSection.scrollIntoView({ behavior: 'smooth' });
        });

        setInterval(() => {
            animatedCursor.style.opacity = animatedCursor.style.opacity === '0' ? '1' : '0';
        }, 500);
        $(document).ready(function(){
            $('.slider-list').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: false,
                arrows: false
            });
        });
    </script>
</body>
</html>
