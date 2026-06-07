<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Britco Dubai | Mobile Repair Training Institute & Technician Supply')</title>
  <meta name="description" content="@yield('meta_description', 'Britco Dubai – UAE\'s leading Mobile Repair Training Institute offering professional courses in smartphone, iPhone, Android, chip-level repair, and skilled technician supply services.')" />
  <meta name="keywords" content="mobile repair training Dubai, smartphone repair course UAE, technician supply Dubai, chip-level repair training, iPhone repair course, Britco Dubai" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet" />

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- AOS Animation -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <!-- SwiperJS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/britco.css') }}" />

  @stack('styles')
</head>
<body>

  {{-- Sticky Navbar --}}
  @include('partials.navbar')

  {{-- Page Content --}}
  @yield('content')

  {{-- Footer --}}
  @include('partials.footer')

  {{-- Floating WhatsApp + Scroll Top --}}
  @include('partials.floating-actions')

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- SwiperJS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Global JS -->
  <script>
    // AOS Init
    AOS.init({ duration: 800, easing: 'ease-out-cubic', once: true, offset: 60 });

    // Particles
    (function createParticles() {
      const container = document.getElementById('particleContainer');
      if (!container) return;
      for (let i = 0; i < 35; i++) {
        const p = document.createElement('div');
        p.classList.add('particle');
        const size = Math.random() * 3 + 1;
        p.style.cssText = `
          left: ${Math.random() * 100}%;
          width: ${size}px; height: ${size}px;
          animation-duration: ${Math.random() * 12 + 8}s;
          animation-delay: ${Math.random() * 10}s;
          opacity: ${Math.random() * 0.6};
        `;
        container.appendChild(p);
      }
    })();

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 60);
    });

    // Active nav links on scroll
    const sections = document.querySelectorAll('section[id], header[id]');
    const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(sec => {
        if (window.scrollY >= sec.offsetTop - 120) current = sec.id;
      });
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) link.classList.add('active');
      });
    });

    // Counter animation
    function animateCounter(el) {
      const target = +el.dataset.target;
      const duration = 2000;
      const start = performance.now();
      function update(now) {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.floor(eased * target).toLocaleString();
        if (progress < 1) requestAnimationFrame(update);
        else el.textContent = target.toLocaleString() + '+';
      }
      requestAnimationFrame(update);
    }
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    document.querySelectorAll('.counter').forEach(el => counterObserver.observe(el));

    // Testimonials Swiper
    if (document.querySelector('.testimonialSwiper')) {
      new Swiper('.testimonialSwiper', {
        slidesPerView: 1, spaceBetween: 24, loop: true,
        autoplay: { delay: 4500, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
      });
    }

    // Scroll-to-top button
    const scrollBtn = document.getElementById('scroll-top');
    if (scrollBtn) {
      window.addEventListener('scroll', () => scrollBtn.classList.toggle('visible', window.scrollY > 400));
      scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }

    // Mobile nav collapse on link click
    document.querySelectorAll('.nav-link[href^="#"], .btn-gold[href^="#"]').forEach(link => {
      link.addEventListener('click', () => {
        const menu = document.getElementById('navMenu');
        if (menu && menu.classList.contains('show')) {
          document.querySelector('.navbar-toggler')?.click();
        }
      });
    });

    // Contact form AJAX
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
      contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const name    = document.getElementById('inputName').value.trim();
        const email   = document.getElementById('inputEmail').value.trim();
        const phone   = document.getElementById('inputPhone').value.trim();
        const message = document.getElementById('inputMessage').value.trim();
        const msgEl   = document.getElementById('formMsg');

        if (!name || !email || !phone || !message) {
          msgEl.style.display = 'block';
          msgEl.innerHTML = '<div style="background:rgba(220,53,69,0.15);border:1px solid rgba(220,53,69,0.3);border-radius:10px;padding:0.8rem 1.2rem;color:#ff6b6b;font-size:0.88rem;"><i class="fas fa-exclamation-circle me-2"></i>Please fill in all required fields.</div>';
          return;
        }

        const btn = document.getElementById('submitBtn');
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        btn.style.opacity = '0.7';
        btn.disabled = true;

        fetch('/contact', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({
            name, email, phone, message,
            service: document.getElementById('inputService')?.value || ''
          })
        })
        .then(res => res.json())
        .then(data => {
          btn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
          btn.style.opacity = '';
          btn.disabled = false;
          msgEl.style.display = 'block';
          if (data.success) {
            msgEl.innerHTML = '<div style="background:rgba(201,168,76,0.12);border:1px solid rgba(201,168,76,0.35);border-radius:10px;padding:0.8rem 1.2rem;color:#e8c97a;font-size:0.88rem;"><i class="fas fa-check-circle me-2"></i>Thank you, <strong>' + name + '</strong>! We\'ve received your message and will contact you within 2 business hours.</div>';
            contactForm.reset();
          } else {
            msgEl.innerHTML = '<div style="background:rgba(220,53,69,0.15);border:1px solid rgba(220,53,69,0.3);border-radius:10px;padding:0.8rem 1.2rem;color:#ff6b6b;font-size:0.88rem;"><i class="fas fa-exclamation-circle me-2"></i>' + (data.message || 'Something went wrong. Please try again.') + '</div>';
          }
        })
        .catch(() => {
          btn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
          btn.style.opacity = '';
          btn.disabled = false;
          msgEl.style.display = 'block';
          msgEl.innerHTML = '<div style="background:rgba(220,53,69,0.15);border:1px solid rgba(220,53,69,0.3);border-radius:10px;padding:0.8rem 1.2rem;color:#ff6b6b;font-size:0.88rem;"><i class="fas fa-exclamation-circle me-2"></i>Network error. Please try again.</div>';
        });
      });
    }
  </script>

  @stack('scripts')
</body>
</html>
