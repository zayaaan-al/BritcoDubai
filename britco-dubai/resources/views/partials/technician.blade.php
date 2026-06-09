{{-- Technician Supply Section --}}
<section id="technician">
  <div class="tech-bg-glow"></div>
  <div class="container position-relative">

    <div class="text-center mb-5" data-aos="fade-up">
      <span class="section-label">Business Solutions</span>
      <div class="gold-line"></div>
      <h2 class="section-title">Skilled Technician <span class="gradient-text">Supply</span></h2>
      <p class="section-subtitle mx-auto">
        We provide verified, UAE-ready mobile repair technicians to businesses across the Emirates —
        fast, reliable, and professionally skilled.
      </p>
    </div>

    <div class="row g-4 mb-5">

      {{-- Left: Client Targets --}}
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
        <h3 style="font-weight:800; margin-bottom:1.5rem;">We Supply Technicians To</h3>

        @foreach ($clientTargets as $target)
          <div class="client-target">
            <div class="client-target-icon"><i class="{{ $target['icon'] }}"></i></div>
            <span>{{ $target['label'] }}</span>
          </div>
        @endforeach

        <div style="margin-top:2rem;">
          <p style="color:var(--text-muted); font-size:0.9rem; line-height:1.8; margin-bottom:1.5rem;">
            All our technicians undergo rigorous training, background verification, and skills assessment
            before placement. We ensure your business gets the right talent — immediately ready to contribute.
          </p>
          <a href="#contact" class="btn-technician">
  <i class="fas fa-handshake"></i> Request a Technician
</a>
        </div>
      </div>

      {{-- Right: Feature Cards --}}
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900">
        <div class="row g-3">
          @foreach ($techFeatures as $feature)
            <div class="col-6">
              <div class="tech-feature-card">
                <div class="tech-feature-icon"><i class="{{ $feature['icon'] }}"></i></div>
                <h5>{{ $feature['title'] }}</h5>
                <p>{{ $feature['desc'] }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</section>
