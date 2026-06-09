{{-- Mobile Repair Services Section --}}
<section id="services">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="section-label">What We Offer</span>
      <div class="gold-line"></div>
      <h2 class="section-title">Mobile Repair <span class="gradient-text">Services</span></h2>
      <p class="section-subtitle mx-auto">
        Comprehensive repair training covering every aspect of modern mobile technology —
        from hardware to software, beginner to expert level.
      </p>
    </div>

    <div class="row g-3">
      @foreach ($services as $index => $service)
        <div class="col-xl-3 col-lg-4 col-md-6"
          data-aos="zoom-in"
          data-aos-delay="{{ ($index % 4) * 50 }}">
          <div class="service-card">
            <div class="service-icon">
              <i class="{{ $service['icon'] }}"></i>
            </div>
            <h5>{{ $service['title'] }}</h5>
            <p>{{ $service['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- {{-- Wave Divider --}}
<div class="wave-divider" style="background:var(--primary);">
  <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg">
    <path fill="#060e1c" d="M0,30 C240,0 480,60 720,30 C960,0 1200,60 1440,30 L1440,60 L0,60 Z"/>
  </svg>
</div> -->
