<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Multi-Service Booking Platform</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <link rel="stylesheet" href="assets/css/index.css">
  
</head>
<body>
  <header>
    <div class="header-inner container">
     <div class="logo" tabindex="0" aria-label="Site logo and home link">
  <a href="index.html">
    <img src="/assets/images/new_logo.jpeg" alt="WatamuWays Logo" class="logo-img">
  </a>
</div>

      <nav class="primary-nav" role="navigation" aria-label="Primary navigation">
        <a href="ride.html" tabindex="0">Book a Ride</a>
        <a href="#order-food" tabindex="0">Order Food</a>
        <a href="#find-stay" tabindex="0">Find a Stay</a>
        <a href="#about" tabindex="0">About</a>
        <a href="#contact" tabindex="0">Contact</a>
      </nav>
      <div class="auth-buttons">
        <button class="auth-btn" id="login-btn" aria-haspopup="dialog" aria-controls="login-modal">Login</button>
        <button class="auth-btn" id="signup-btn" aria-haspopup="dialog" aria-controls="signup-modal">Sign Up</button>
      </div>
      <button class="menu-toggle" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
        <span class="material-icons">menu</span>
      </button>
    </div>
    <nav class="nav-mobile" id="mobile-menu" role="navigation" aria-label="Mobile navigation">
      <a href="ride.html" tabindex="-1">Book a Ride</a>
      <a href="#order-food" tabindex="-1">Order Food</a>
      <a href="#find-stay" tabindex="-1">Find a Stay</a>
      <a href="#about" tabindex="-1">About</a>
      <a href="#contact" tabindex="-1">Contact</a>
      <a href="#" id="mobile-login-link" tabindex="-1">Login</a>
      <a href="#" id="mobile-signup-link" tabindex="-1">Sign Up</a>
    </nav>
  </header>


  


  <!-- 🌟 User Account Action Bar -->
<?php if (isset($_SESSION['user_name'])): ?>
<!-- 🌟 User Account Action Bar -->
<div class="user-action-bar">
  <div class="left-section">
    <span class="logo-text">
      👋 Welcome back, <?php echo htmlspecialchars($_SESSION['user_name']); ?>
    </span>
  </div>
  <div class="right-section">
    <div class="account-dropdown-wrapper">
      <div class="account-toggle" id="accountToggle">
        <i class="fas fa-user-circle"></i> My Account <i class="fas fa-chevron-down"></i>
      </div>
      <ul class="account-dropdown" id="accountDropdown">
        <li><a href="profile.html"><i class="fas fa-user"></i> Profile</a></li>
        <li><a href="orders.html"><i class="fas fa-box"></i> My Orders</a></li>
        <li><a href="bookings.html"><i class="fas fa-car"></i> My Bookings</a></li>
        <li><a href="#"><i class="fas fa-question-circle"></i> Help</a></li>
        <li><a href="backend/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</div>
<?php endif; ?>

<script>
  document.getElementById('accountToggle').addEventListener('click', function () {
    document.getElementById('accountDropdown').classList.toggle('show');
  });

  document.addEventListener('click', function (event) {
    const toggle = document.getElementById('accountToggle');
    const dropdown = document.getElementById('accountDropdown');
    if (!toggle.contains(event.target) && !dropdown.contains(event.target)) {
      dropdown.classList.remove('show');
    }
  });
</script>

<style>
  .account-dropdown.show {
    display: block;
  }
</style>



  

  <main>
    <section class="hero" role="region" aria-label="Main introduction">
      <h1>Seamlessly Book Rides, Order Food & Find Your Ideal Stay</h1>
      <p>Your all-in-one platform for convenient travel, dining, and accommodation needs.</p>
      <div class="btn-group" role="list">
        <button class="cta-btn" id="btn-ride" role="listitem" aria-label="Book a ride">
          <span class="material-icons" aria-hidden="true">local_taxi</span> Book a Ride
        </button>
        <button class="cta-btn" id="btn-food" role="listitem" aria-label="Order food">
          <span class="material-icons" aria-hidden="true">restaurant_menu</span> Order Food
        </button>
        <button class="cta-btn" id="btn-stay" role="listitem" aria-label="Find a stay">
          <span class="material-icons" aria-hidden="true">hotel</span> Find a Stay
        </button>
      </div>
    </section>

    <section class="services" role="region" aria-labelledby="services-heading">
  <h2 id="services-heading" style="text-align:center; font-size:2rem; font-weight:700; margin-bottom:56px; color: black;">Our Core Services</h2>
  <div class="container">
    <article class="service-card" tabindex="0" aria-label="Book a Ride Service">
      <span class="material-icons service-icon" aria-hidden="true">local_taxi</span>
      <h3 class="service-title">Book a Ride</h3>
      <p class="service-desc">Quickly book a reliable ride nearby with affordable prices and real-time tracking.</p>
      <button class="service-btn" id="service-ride">Get Started</button>
    </article>
    
    <article class="service-card" tabindex="0" aria-label="Order Food Service">
      <span class="material-icons service-icon" aria-hidden="true">restaurant_menu</span>
      <h3 class="service-title">Order Food</h3>
      <p class="service-desc">Choose from a variety of restaurants and cuisines and get your meal delivered fast.</p>
      <button class="service-btn" id="service-food">Get Started</button>
    </article>
    
    <article class="service-card" tabindex="0" aria-label="Find a Stay Service">
      <span class="material-icons service-icon" aria-hidden="true">hotel</span>
      <h3 class="service-title">Find a Stay</h3>
      <p class="service-desc">Search and book accommodations tailored to your style and budget for any destination.</p>
      <button class="service-btn" id="service-stay">Get Started</button>
    </article>
    
    <!-- New: Partner With Us -->
    <article class="service-card" tabindex="0" aria-label="Partner With Us Service">
      <span class="material-icons service-icon" aria-hidden="true">group_add</span>
      <h3 class="service-title">Partner With Us</h3>
      <p class="service-desc">Grow your business by partnering with us—list your services and reach more customers.</p>
      <button class="service-btn" id="service-partner">Join Now</button>
    </article>
  </div>
</section>


    <section class="how-it-works" role="region" aria-labelledby="how-it-works-heading">
      <h2 id="how-it-works-heading" style="text-align:center; font-size:2rem; font-weight:700; margin-bottom:56px;">How It Works</h2>
      <div class="container">
        <article class="step" tabindex="0" aria-label="Step 1: Choose Service">
          <span class="material-icons step-icon" aria-hidden="true">touch_app</span>
          <h3 class="step-title">Choose Your Service</h3>
          <p class="step-desc">Select from booking a ride, ordering food, or finding a stay.</p>
        </article>
        <article class="step" tabindex="0" aria-label="Step 2: Select Options">
          <span class="material-icons step-icon" aria-hidden="true">playlist_add_check</span>
          <h3 class="step-title">Select Your Options</h3>
          <p class="step-desc">Customize your ride, meal, or accommodation preferences.</p>
        </article>
        <article class="step" tabindex="0" aria-label="Step 3: Confirm & Enjoy">
          <span class="material-icons step-icon" aria-hidden="true">check_circle</span>
          <h3 class="step-title">Confirm and Enjoy</h3>
          <p class="step-desc">Place your order or booking and get real-time updates.</p>
        </article>
      </div>
    </section>





    <section class="featured-listings" id="featured">
  <div class="container">
    <h2 class="section-title">Featured Rides</h2>

    <div class="filters">
      <button class="filter-btn active" data-type="all">All</button>
      <button class="filter-btn" data-type="tuktuk">Tuk Tuk</button>
      <button class="filter-btn" data-type="bodaboda">Boda Boda</button>
      <button class="filter-btn" data-type="taxi">Taxi</button>
    </div>

    <div class="listing-grid">
      <!-- Tuk Tuk -->
      <div class="card" data-type="tuktuk">
        <img src="https://images.unsplash.com/photo-1602967401250-4015f4dbf1ae" alt="Tuk Tuk">
        <div class="card-content">
          <h3>Tuk Tuk Express</h3>
          <p>Quick and fun local rides.</p>
          <div class="rating">⭐⭐⭐⭐☆</div>
          <button class="book-btn">Book Now</button>
        </div>
      </div>

      <!-- Boda Boda -->
      <div class="card" data-type="bodaboda">
        <img src="https://images.unsplash.com/photo-1593141154377-f0c5f21b0a6b" alt="Boda Boda">
        <div class="card-content">
          <h3>Boda Rider</h3>
          <p>Perfect for solo quick trips.</p>
          <div class="rating">⭐⭐⭐⭐⭐</div>
          <button class="book-btn">Book Now</button>
        </div>
      </div>

      <!-- Taxi -->
      <div class="card" data-type="taxi">
        <img src="https://images.unsplash.com/photo-1581375270665-004c5d9623a3" alt="Taxi">
        <div class="card-content">
          <h3>Watamu Cab</h3>
          <p>Comfortable rides for families.</p>
          <div class="rating">⭐⭐⭐⭐☆</div>
          <button class="book-btn">Book Now</button>
        </div>
      </div>



      <!-- Another Tuk Tuk -->
      <div class="card" data-type="tuktuk">
        <img src="https://images.unsplash.com/photo-1610056404809-ff19b0ea7f76" alt="Tuk Tuk Deluxe">
        <div class="card-content">
          <h3>Tuk Tuk Deluxe</h3>
          <p>Stylish and affordable travel.</p>
          <div class="rating">⭐⭐⭐☆☆</div>
          <button class="book-btn">Book Now</button>
        </div>
      </div>
    </div>
  </div>
</section>



<script>
  const filterButtons = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('.card');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelector('.filter-btn.active').classList.remove('active');
      btn.classList.add('active');

      const type = btn.dataset.type;
      cards.forEach(card => {
        card.style.display = (type === 'all' || card.dataset.type === type) ? 'block' : 'none';
      });
    });
  });
  
</script>




<section class="top-meals-slider-section">
  <h2 class="section-title">Top Meals & Restaurants</h2>

  <div class="swiper mealsSwiper">
    <div class="swiper-wrapper">

      <div class="swiper-slide meal-slide">
        <img src="https://images.unsplash.com/photo-1553621042-f6e147245754" alt="Swahili seafood platter" />
        <div class="meal-details">
          <h3>Swahili Seafood Platter</h3>
          <p class="restaurant">Ocean Breeze Restaurant</p>
          <p class="price">KES 1,200</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <div class="swiper-slide meal-slide">
        <img src="https://images.unsplash.com/photo-1627308595229-7830a5c91f9f" alt="Biryani" />
        <div class="meal-details">
          <h3>Authentic Biryani</h3>
          <p class="restaurant">Baharini Bistro</p>
          <p class="price">KES 850</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

      <div class="swiper-slide meal-slide">
        <img src="https://images.unsplash.com/photo-1604908177522-199ddf3b6dfd" alt="Mango juice" />
        <div class="meal-details">
          <h3>Fresh Mango Juice</h3>
          <p class="restaurant">Juice & Java Watamu</p>
          <p class="price">KES 250</p>
          <button class="order-btn">Order Now</button>
        </div>
      </div>

    </div>
    <!-- Navigation Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<section class="top-stays-section">
  <h2 class="section-title" data-aos="fade-down">Top Places to Stay</h2>

  <div class="stay-grid">

    <div class="stay-card" data-aos="fade-up" data-aos-delay="100">
      <img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353" alt="Beachfront Villa" />
      <div class="stay-info">
        <h3>Beachfront Villa</h3>
        <p class="location">Turtle Bay, Watamu</p>
        <p class="price">KES 10,000 / night</p>
        <button class="book-btn">Book Now</button>
      </div>
    </div>

    <div class="stay-card" data-aos="fade-up" data-aos-delay="200">
      <img src="https://images.unsplash.com/photo-1590490350335-3701b2997783" alt="Luxury Cottage" />
      <div class="stay-info">
        <h3>Luxury Cottage</h3>
        <p class="location">Jacaranda Beach</p>
        <p class="price">KES 7,500 / night</p>
        <button class="book-btn">Book Now</button>
      </div>
    </div>

    <div class="stay-card" data-aos="fade-up" data-aos-delay="300">
      <img src="https://images.unsplash.com/photo-1582719478186-9ff8c3f1a3da" alt="Swahili Airbnb" />
      <div class="stay-info">
        <h3>Swahili Style Airbnb</h3>
        <p class="location">Watamu Village</p>
        <p class="price">KES 4,800 / night</p>
        <button class="book-btn">Book Now</button>
      </div>
    </div>

    <div class="stay-card" data-aos="fade-up" data-aos-delay="400">
      <img src="https://images.unsplash.com/photo-1554995207-c18c203602cb" alt="Bamboo Retreat" />
      <div class="stay-info">
        <h3>Bamboo Retreat</h3>
        <p class="location">Mida Creek</p>
        <p class="price">KES 5,500 / night</p>
        <button class="book-btn">Book Now</button>
      </div>
    </div>

  </div>
</section>



<section class="why-watamu-section">
  <h2 class="section-title" data-aos="fade-up">Why Choose <span>WatamuWays?</span></h2>

  <div class="benefits-grid">
    <div class="benefit-card" data-aos="zoom-in" data-aos-delay="100">
      <i class="fas fa-map-marked-alt benefit-icon"></i>
      <h3>Local Experts</h3>
      <p>We know Watamu inside out. Get the most authentic experience from our team of locals.</p>
    </div>

    <div class="benefit-card" data-aos="zoom-in" data-aos-delay="200">
      <i class="fas fa-wallet benefit-icon"></i>
      <h3>Affordable Options</h3>
      <p>From tuk-tuks to luxury villas — we offer options that suit every budget.</p>
    </div>

    <div class="benefit-card" data-aos="zoom-in" data-aos-delay="300">
      <i class="fas fa-headset benefit-icon"></i>
      <h3>Real-Time Support</h3>
      <p>Chat with us instantly whenever you need help — we're here 24/7.</p>
    </div>
  </div>
</section>


<section class="testimonials-section">
  <h2 class="section-title" data-aos="fade-up">What Our Customers Say</h2>

  <div class="testimonial-carousel" data-aos="fade-up" data-aos-delay="200">
    <div class="testimonial active">
      <p>"WatamuWays made my trip unforgettable! The tuk-tuk was ready in minutes, and the stay was amazing!"</p>
      <h4>– Grace M., Nairobi</h4>
    </div>

    <div class="testimonial">
      <p>"Loved the real-time support. We needed last-minute food delivery, and they handled it like pros!"</p>
      <h4>– Brian O., Kisumu</h4>
    </div>

    <div class="testimonial">
      <p>"Affordable and super reliable. We booked a beach cottage and even got a free tour guide. Recommended!"</p>
      <h4>– Aisha K., Mombasa</h4>
    </div>
  </div>

  <div class="testimonial-nav">
    <span class="dot active" onclick="showTestimonial(0)"></span>
    <span class="dot" onclick="showTestimonial(1)"></span>
    <span class="dot" onclick="showTestimonial(2)"></span>
  </div>
</section>


<script>
  let currentTestimonial = 0;
  const testimonials = document.querySelectorAll('.testimonial');
  const dots = document.querySelectorAll('.dot');

  function showTestimonial(index) {
    testimonials.forEach(t => t.classList.remove('active'));
    dots.forEach(d => d.classList.remove('active'));

    testimonials[index].classList.add('active');
    dots[index].classList.add('active');
    currentTestimonial = index;
  }

  // Auto switch every 6 seconds
  setInterval(() => {
    let next = (currentTestimonial + 1) % testimonials.length;
    showTestimonial(next);
  }, 6000);
</script>





<section class="app-download" data-aos="fade-up">
  <div class="app-content">
    <div class="app-text">
      <h2>Get the <span>WatamuWays</span> App</h2>
      <p>Book rides, order food, and find stays — all from your phone. Available soon on Android & iOS.</p>
      <div class="store-buttons">
        <a href="#" class="store-btn disabled">
          <i class="fab fa-google-play"></i>
          <span>Coming Soon<br><strong>Google Play</strong></span>
        </a>
        <a href="#" class="store-btn disabled">
          <i class="fab fa-apple"></i>
          <span>Coming Soon<br><strong>App Store</strong></span>
        </a>
      </div>
    </div>
    <div class="app-image">
      <img src="https://cdn.pixabay.com/photo/2017/03/10/12/15/smartphone-2133430_1280.png" alt="App preview">
    </div>
  </div>
</section>













  </main>

  <footer>
    <div class="footer-container">
      <section class="footer-section" aria-labelledby="footer-company">
        <h4 id="footer-company">Company</h4>
        <a href="#about" tabindex="0">About Us</a>
        <a href="#careers" tabindex="0">Careers</a>
        <a href="#blog" tabindex="0">Blog</a>
      </section>
      <section class="footer-section" aria-labelledby="footer-support">
        <h4 id="footer-support">Support</h4>
        <a href="#help" tabindex="0">Help Center</a>
        <a href="#contact" tabindex="0">Contact Us</a>
        <a href="#terms" tabindex="0">Terms of Service</a>
        <a href="#privacy" tabindex="0">Privacy Policy</a>
      </section>
      <section class="footer-section" aria-labelledby="footer-social">
  <h4 id="footer-social">Follow Us</h4>
  <div class="social-icons">
    <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook" tabindex="0">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram" tabindex="0">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="https://twitter.com" target="_blank" rel="noopener" aria-label="Twitter (X)" tabindex="0">
      <i class="fab fa-x-twitter"></i>
    </a>
    <a href="https://tiktok.com" target="_blank" rel="noopener" aria-label="TikTok" tabindex="0">
      <i class="fab fa-tiktok"></i>
    </a>
  </div>
</section>

    </div>
  </footer>

  <!-- Login Modal -->
  <div class="modal-overlay" id="login-modal" role="dialog" aria-modal="true" aria-labelledby="login-modal-title" tabindex="-1">
    <div class="modal">
      <button class="close-modal-btn" aria-label="Close login form" id="close-login-modal">&times;</button>
      <h2 id="login-modal-title">Login</h2>
     <form id="login-form" action="backend/login.php" method="POST" novalidate>
        <label for="login-email">Email</label>
        <input type="email" id="login-email" name="email" required autocomplete="username" placeholder="you@example.com" />
        <label for="login-password">Password</label>
        <input type="password" id="login-password" name="password" required autocomplete="current-password" placeholder="Enter password" minlength="6" />
        <button type="submit" class="modal-submit-btn">Login</button>
      </form>
      <p class="modal-footer-text">
        Don't have an account?
        <button type="button" id="to-signup-btn">Sign Up</button>
      </p>
    </div>
  </div>

  <!-- Signup Modal -->
   <!-- Signup Modal -->
<div class="modal-overlay" id="signup-modal" role="dialog" aria-modal="true" aria-labelledby="signup-modal-title" tabindex="-1">
  <div class="modal">
    <button class="close-modal-btn" aria-label="Close signup form" id="close-signup-modal">&times;</button>
    <h2 id="signup-modal-title">Sign Up</h2>

    <form id="signup-form" action="backend/signup.php" method="POST" novalidate>
      <label for="signup-name">Full Name</label>
      <input type="text" id="signup-name" name="name" required autocomplete="name" placeholder="Your full name" minlength="2" />

      <label for="signup-email">Email</label>
      <input type="email" id="signup-email" name="email" required autocomplete="email" placeholder="you@example.com" />

      <label for="signup-password">Password</label>
      <input type="password" id="signup-password" name="password" required autocomplete="new-password" placeholder="Create a password" minlength="6" />

      <button type="submit" class="modal-submit-btn">Sign Up</button>
    </form>

    <p class="modal-footer-text">
      Already have an account?
      <button type="button" id="to-login-btn">Login</button>
    </p>
  </div>
</div>

 

  <script>
    // Mobile menu toggle logic
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.nav-mobile');

    menuToggle.addEventListener('click', () => {
      const expanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
      menuToggle.setAttribute('aria-expanded', !expanded);
      mobileMenu.classList.toggle('show');

      // Manage tabindex for accessibility
      const links = mobileMenu.querySelectorAll('a');
      links.forEach(link => {
        link.tabIndex = !expanded ? 0 : -1;
      });
    });

    // Accessibility improvement: Close mobile menu on link click
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('show');
        menuToggle.setAttribute('aria-expanded', false);
        mobileMenu.querySelectorAll('a').forEach(a => a.tabIndex = -1);
      });
    });

    // Initial disable mobile nav links tabindex (for screen readers)
    mobileMenu.querySelectorAll('a').forEach(a => a.tabIndex = -1);

    // Example button click handlers for demonstration (replace with actual routing or functionality)
    document.getElementById('btn-ride').addEventListener('click', () => {
      alert('Navigate to Book a Ride page');
    });
    document.getElementById('btn-food').addEventListener('click', () => {
      alert('Navigate to Order Food page');
    });
    document.getElementById('btn-stay').addEventListener('click', () => {
      alert('Navigate to Find a Stay page');
    });
    document.getElementById('service-ride').addEventListener('click', () => {
      alert('Get started with Booking a Ride');
    });
    document.getElementById('service-food').addEventListener('click', () => {
      alert('Get started with Ordering Food');
    });
    document.getElementById('service-stay').addEventListener('click', () => {
      alert('Get started with Finding a Stay');
    });

    // Modal elements
    const loginBtn = document.getElementById('login-btn');
    const signupBtn = document.getElementById('signup-btn');
    const loginModal = document.getElementById('login-modal');
    const signupModal = document.getElementById('signup-modal');
    const closeLoginBtn = document.getElementById('close-login-modal');
    const closeSignupBtn = document.getElementById('close-signup-modal');
    const toSignupBtn = document.getElementById('to-signup-btn');
    const toLoginBtn = document.getElementById('to-login-btn');
    const mobileLoginLink = document.getElementById('mobile-login-link');
    const mobileSignupLink = document.getElementById('mobile-signup-link');

    // Open login modal
    loginBtn.addEventListener('click', () => openModal(loginModal));
    mobileLoginLink.addEventListener('click', (e) => {
      e.preventDefault();
      closeModal(mobileMenu);
      openModal(loginModal);
    });

    // Open signup modal
    signupBtn.addEventListener('click', () => openModal(signupModal));
    mobileSignupLink.addEventListener('click', (e) => {
      e.preventDefault();
      closeModal(mobileMenu);
      openModal(signupModal);
    });

    // Close modals
    closeLoginBtn.addEventListener('click', () => closeModal(loginModal));
    closeSignupBtn.addEventListener('click', () => closeModal(signupModal));

    // Switch modals from inside
    toSignupBtn.addEventListener('click', () => {
      closeModal(loginModal);
      openModal(signupModal);
    });
    toLoginBtn.addEventListener('click', () => {
      closeModal(signupModal);
      openModal(loginModal);
    });

    // Close modal on outside click or ESC
    [loginModal, signupModal].forEach(modal => {
      modal.addEventListener('click', (event) => {
        if(event.target === modal) {
          closeModal(modal);
        }
      });
    });

    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') {
        if(loginModal.classList.contains('show')) closeModal(loginModal);
        if(signupModal.classList.contains('show')) closeModal(signupModal);
      }
    });

    // Trap focus inside modal for accessibility
    function trapFocus(element) {
      const focusableElements = element.querySelectorAll('a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])');
      if(focusableElements.length === 0) return;

      const firstElement = focusableElements[0];
      const lastElement = focusableElements[focusableElements.length -1];

      element.addEventListener('keydown', function trap(e) {
        if (e.key === 'Tab') {
          if (e.shiftKey) {
            if (document.activeElement === firstElement) {
              e.preventDefault();
              lastElement.focus();
            }
          } else {
            if (document.activeElement === lastElement) {
              e.preventDefault();
              firstElement.focus();
            }
          }
        }
      }, {capture: true});

      firstElement.focus();
    }

    function openModal(modal) {
      modal.classList.add('show');
      document.body.style.overflow = 'hidden';
      trapFocus(modal);
    }

    function closeModal(modal) {
      modal.classList.remove('show');
      document.body.style.overflow = '';
    }

    // Form submissions with simple validation simulation
   const signupForm = document.getElementById('signup-form');
signupForm.addEventListener('submit', e => {
  const name = signupForm['signup-name'].value.trim();
  const email = signupForm['signup-email'].value.trim();
  const pass = signupForm['signup-password'].value.trim();

  if (!name || !email || !pass) {
    e.preventDefault(); // only prevent when validation fails
    alert('Please fill in all fields.');
    return;
  }

  // ✅ Let the form submit to PHP — remove alert and don't call preventDefault
  // OR you can submit with fetch/AJAX, but that’s another setup
});

  </script>




<!-- Swiper JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper(".mealsSwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    }
  });
</script>



<!-- AOS (Animate On Scroll) CSS + JS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1200, once: true });
</script>


<script>
  document.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    if (params.get('show') === 'login') {
      const loginModal = document.getElementById('login-modal');
      if (loginModal) {
        loginModal.classList.add('open'); // if you're using an "open" class
        loginModal.style.display = 'block'; // or however you're showing modals
        document.body.classList.add('modal-open'); // optional for styling
      }
    }
  });
</script>


</body>
</html>

