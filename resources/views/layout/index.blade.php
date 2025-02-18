@extends('layout.layout')

@section('contents')
<!-- GSAP CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>



<section class="banner" data-scroll-index="0">
  <div class="banner-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="banner-text">
            <h2 class="banner-title">All-in-One Online Toolkit</h2>
            <h6 class="banner-subtitle">
              owned by
              <a href="" target="_blank" rel="dofollow" class="weblink" style="color: #5a25f1">
                Zeeshan Ali, Muhammad Zakria & Muhammad Hashim
              </a>.
            </h6>
            <p class="banner-description">
              Your ultimate destination for powerful tools, smart converters, insightful blogs, and much more...
            </p>
            <ul class="banner-buttons">
              <li><button class="banner-btn">Create an Account</button></li>
              <li><button class="banner-btn">Explore Tools</button></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <img src="images/hero-removebg-preview.png" class="img-fluid hero-image infinity-rotate" />
        </div>
      </div>
    </div>
  </div>
  <span class="svg-wave">
    <img class="svg-hero" src="images/applight-wave.svg">
  </span>
</section>





<section class="about section-padding prelative" data-scroll-index="1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3 class="about-title">About</h3>
          <span class="line"></span>
          <p class="about-description">
            Empowering users with a suite of smart tools, our platform simplifies conversions, enhances productivity, and provides valuable insights through expert blogs.
          </p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="icon-box">
                <i class="fa fa-life-ring about-icon" aria-hidden="true"></i>
                <h5 class="about-heading">Support</h5>
                <p class="about-text">
                  Need help? Our dedicated support team is here to assist you.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box">
                <i class="fa fa-mobile about-icon" aria-hidden="true"></i>
                <h5 class="about-heading">Cross Platform</h5>
                <p class="about-text">
                  Access our tools anytime, anywhere! Fully optimized for desktops, tablets, and mobile devices.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box">
                <i class="fa fa-bolt about-icon" aria-hidden="true"></i>
                <h5 class="about-heading">Fast</h5>
                <p class="about-text">
                  Experience lightning-fast performance with our optimized tools.
                </p>
              </div>
            </div>
          </div>
          <a href="#" class="about-btn">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="video-section prelative text-center white">
  <div class="section-padding video-overlay">
    <div class="container">
      <h3>Watch Our Tutorial Now</h3>
      <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
      <div class="video-popup">
        <div class="video-src">
          <div class="iframe-src">
            <iframe src="https://www.youtube.com/embed/Ku52zNnft8k?rel=0&amp;showinfo=0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="feature section-padding" data-scroll-index='2'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Features</h3>
          <span class="line"></span>
          <p>Unlock the power of smart tools designed for efficiency, convenience, and seamless performance.</p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <!-- Left Features -->
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature feature-box">
                <div class="media-body text-right media-right-margin">
                  <h5>Fast Processing</h5>
                  <p>Get instant results with our high-speed tools, ensuring quick and efficient performance for all your needs.</p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-bolt" aria-hidden="true"></span> </div>
              </div>
              
              <div class="media single-feature feature-box">
                <div class="media-body text-right media-right-margin">
                  <h5>WiFi Compatibility</h5>
                  <p>Enjoy seamless access to our tools from anywhere with full WiFi compatibility—no limitations, just convenience.</p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-wifi" aria-hidden="true"></span> </div>
              </div>
            </div>

            <!-- Animated Image -->
            <div class="col-md-4 d-none d-md-block d-lg-block">
              <div class="feature-mobile">
                <img src="images/features.jpg" style="height:100%" class="img-fluid scale-animation "/>
              </div>
            </div>

            <!-- Right Features -->
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature feature-box">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-check-double" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5>Regular Updates</h5>
                  <p>We continuously enhance our platform with new features, improvements, and security updates to keep you ahead.</p>
                </div>
              </div>

              <div class="media single-feature feature-box">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-dollar-sign" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5>Save Money</h5>
                  <p>Access premium-quality tools and services without breaking the bank—powerful solutions at no cost!</p>
                </div>
              </div>
            </div>
          </div> <!-- Row -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="team section-padding" data-scroll-index='3'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Our Team</h3>
          <span class="line"></span>
          <p>Meet the minds behind our innovative platform—dedicated to delivering top-tier tools and services with efficiency and precision.</p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="team-detail wow bounce" data-wow-delay="0.2s"> <img src="images/zeeshan1.png" class="img-fluid"/>
                <h4>Zeeshan Ali</h4>
                <p>CEO & Founder</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-detail wow bounce" data-wow-delay="0.4s"> <img src="images/zakria.jpeg" class="img-fluid"/>
                <h4>Muhammad Zakria </h4>
                <p>CEO & Founder</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-detail wow bounce" data-wow-delay="0.6s"> <img src="images/hashim.jpeg" class="img-fluid"/>
                <h4>Muhammad Hashim</h4>
                <p>CEO & Founder</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="testimonial section-padding" data-scroll-index='4'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center white">
          <h3>Testimonials</h3>
          <span class="line"></span>
          <p class="white">Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
    
      <div class="section-content">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-sm-12">
            <div class="slider">
              <div class="slider-item">
                <div class="test-img"><img src="images/user1.jpg" alt="Placeholder" width="157" height="157"></div>
                <div class="test-text"><span class="title"><span>John Michal</span> Digital Designer</span> Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat.</div>
              </div>
              <div class="slider-item">
                <div class="test-img"><img src="images/user3.jpg" alt="Placeholder" width="157" height="157"></div>
                <div class="test-text"><span class="title"><span>Steve Smith</span> App User</span> Euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat. Ut wisi enim ad minim veniam, quis nostrud v</div>
              </div>
              <div class="slider-item">
                <div class="test-img"><img src="images/user3.jpg" alt="Placeholder" width="157" height="157"></div>
                <div class="test-text"><span class="title"><span>Gordon Shaw</span> Blogger</span> Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat. Ut wisi enim ad minim veniam, quis nostrud v</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>


<section class="faq section-padding prelative" data-scroll-index='5'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Frequently Asked Questions</h3>
          <span class="line"></span>
          <p>Find answers to common questions about our tools, features, and services.</p>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
              <h4>How do I use the online tools?</h4>
              <p>Our tools are designed for simplicity! Just select the tool you need, follow the instructions, and get instant results—no downloads required.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
              <h4> Are the tools free to use?</h4>
              <p>Yes! Most of our tools are completely free, with no hidden charges. Some advanced features may require a premium upgrade.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
              <h4>Do I need to create an account?</h4>
              <p>No, you can use most of our tools without signing up. However, creating an account lets you save progress and access exclusive features.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
              <h4> Is my data secure?</h4>
              <p>Absolutely! We prioritize security with end-to-end encryption and do not store your personal files or sensitive information.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
              <h4>Can I access these tools on my mobile device?</h4>
              <p>Yes! Our platform is fully responsive and works smoothly on desktops, tablets, and mobile devices.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
              <h4>How often are new tools added?</h4>
              <p>We regularly update our platform with new tools and enhancements. Stay tuned for the latest features!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="contact section-padding" data-scroll-index='6'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Contact us</h3>
          <span class="line"></span>
          <p>Have questions, feedback, or need support? We’re here to help! Reach out to us anytime.</p>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
              <form id="contact_form" action="">
                <div class="row">
                  <div class="col">
                    <input type="text" id="your_name" class="form-input w-100" name="full-name" placeholder="Full Name" required>
                  </div>
                  <div class="col">
                    <input type="email" id="email" class="form-input w-100" name="email" placeholder="Email" required>
                  </div>
                </div>
                <input type="text" id="subject" class="form-input w-100" name="subject" placeholder="Subject">
                <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                <button class="btn-grad w-100 text-uppercase" type="submit" name="button">submit</button>
              </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="contact-info white">
                <div class="contact-item media"> <i class="fa fa-map-marker-alt media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Address</p>
                    <p class="text-uppercase">ICreativez Nawabshah Branch </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-mobile media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Phone</p>
                    <p class="text-uppercase"><a class="text-white" href="tel:+15173977100">03333237507</a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-envelope media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">E-mail</p>
                    <p class="text-uppercase"><a class="text-white" href="mailto:alizeeshan14323@gmail.com">alizeeshan14323@gmail.com</a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-clock media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Working Hours</p>
                    <p class="text-uppercase">Mon-Fri 9.00 AM to 5.00PM.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection


