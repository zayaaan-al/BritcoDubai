{{-- Hero Section --}}
<section id="hero">
  <div class="hero-bg"></div>
  <div class="hero-particles" id="particleContainer"></div>

  <div class="container">
    <div class="row align-items-center min-vh-100 py-5">

      {{-- Left Content --}}
      <div class="col-lg-7 hero-content">
        <div class="hero-badge mt-5" data-aos="fade-down" data-aos-duration="800">
    <i class="fas fa-star"></i>
    UAE's Premier Mobile Repair Institute
</div>

        <h1 class="hero-title" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
          Build Your Career in<br>
          <span class="gradient-text">Mobile Technology</span>
        </h1>

        <p class="hero-subtitle" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
          Professional Mobile Repair Training and Skilled Technician Supply Services in Dubai.
          Industry-leading courses with hands-on experience in the heart of the UAE.
        </p>

        <div class="hero-buttons" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300">
          <a href="#courses" class="btn-gold">
            <i class="fas fa-graduation-cap"></i> Explore Courses
          </a>
          <a href="#contact" class="btn-outline-gold">
            <i class="fas fa-phone"></i> Contact Us
          </a>
        </div>

        {{-- Statistics --}}
        <div class="stats-bar" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400">
          @foreach ($stats as $stat)
            <div class="stat-item">
              @if ($stat['counter'])
                <span class="stat-number counter" data-target="{{ $stat['value'] }}">0</span>
              @else
                <span class="stat-number" style="font-size:1.4rem;">{{ $stat['value'] }}</span>
              @endif
              <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Right Image --}}
      <div class="col-lg-5 hero-image-side" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
        <div style="position:relative;">
          <div class="floating-ring ring-1"></div>
          <div class="floating-ring ring-2"></div>
          <div class="hero-img-wrap">
            <img src="{{ asset('images/technician.png') }}" alt="Professional Mobile Repair Technician at Britco Dubai" />
            <div class="hero-img-badge">
              <div class="hero-img-badge-icon"><i class="fas fa-certificate"></i></div>
              <div>
                <div style="font-weight:700; font-size:0.9rem;">Certified Training</div>
                <div style="font-size:0.72rem; color:var(--text-muted);">International Standards</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- Wave Divider --}}
<div class="wave-divider" style="background:var(--primary);">
  <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg">
    <path fill="#060e1c" d="M0,0 C240,60 480,60 720,30 C960,0 1200,0 1440,30 L1440,60 L0,60 Z"/>
  </svg>
</div>
