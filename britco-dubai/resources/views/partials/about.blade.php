{{-- About Us Section --}}
<section id="about">
  <div class="container">
    <div class="row align-items-center g-5">

      {{-- Image Side --}}
      <div class="col-lg-5" data-aos="fade-right" data-aos-duration="900">
        <div style="position:relative; padding-bottom:20px; padding-right:20px;">
          <div class="about-img-wrap">
            <img src="{{ asset('images/about.png') }}" alt="Britco Dubai Mobile Repair Training Lab" />
            <div class="about-img-overlay"></div>
          </div>
          <div class="about-exp-badge">
            <span class="num">25<sup style="font-size:0.9rem">+</sup></span>
            <span class="lbl">Years of Excellence</span>
          </div>
        </div>
      </div>

      {{-- Content Side --}}
      <div class="col-lg-7" data-aos="fade-left" data-aos-duration="900">
        <span class="section-label">About Britco Dubai</span>
        <div class="gold-line"></div>
        <h2 class="section-title">Who <span class="gradient-text">We Are</span></h2>
        <p class="section-subtitle mb-4">
          Britco Dubai is a leading institute specializing in mobile phone repair training and technician
          supply services across the UAE. We bridge the gap between skilled technicians and thriving
          businesses with international-standard education and verified professionals.
        </p>
        <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.8; margin-bottom:2rem;">
          With over 25 years of industry expertise, we have trained thousands of students and placed skilled
          technicians with top businesses across the Emirates. Our state-of-the-art lab and expert trainers
          ensure every student gains real-world competence and confidence.
        </p>

        <h4 style="font-weight:700; margin-bottom:1.2rem; font-size:1.1rem;">
          Why <span class="gradient-text">Choose Us</span>
        </h4>

        <div class="row g-2">
          @foreach ($whyCards as $index => $card)
            <div class="col-md-6">
              <div class="why-card" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                <div class="why-icon"><i class="{{ $card['icon'] }}"></i></div>
                <div>
                  <h6>{{ $card['title'] }}</h6>
                  <p>{{ $card['desc'] }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</section>
