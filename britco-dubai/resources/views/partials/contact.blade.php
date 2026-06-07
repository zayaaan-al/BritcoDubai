{{-- Contact Section --}}
<section id="contact">
  <div class="container">

    <div class="text-center mb-5" data-aos="fade-up">
      <span class="section-label">Get In Touch</span>
      <div class="gold-line"></div>
      <h2 class="section-title">Contact <span class="gradient-text">Britco Dubai</span></h2>
      <p class="section-subtitle mx-auto">
        Ready to take the next step? Reach out to us for course enrollment, technician supply
        requests, or any inquiries.
      </p>
    </div>

    <div class="row g-5 align-items-start">

      {{-- Contact Info --}}
      <div class="col-lg-5" data-aos="fade-right" data-aos-duration="900">

        @foreach ($contactInfo as $info)
          <div class="contact-info-card">
            <div class="contact-icon"><i class="{{ $info['icon'] }}"></i></div>
            <div>
              <h6>{{ $info['label'] }}</h6>
              <p>{!! nl2br(e($info['value'])) !!}</p>
            </div>
          </div>
        @endforeach

        {{-- Map Placeholder --}}
        <div class="map-placeholder mt-2">
          <i class="fas fa-map-marked-alt"></i>
          <p>Britco Dubai — Al Qusais, Dubai UAE</p>
          <span style="font-size:0.78rem; color:var(--accent); font-weight:600;">📍 View on Google Maps</span>
        </div>
      </div>

      {{-- Contact Form --}}
      <div class="col-lg-7" data-aos="fade-left" data-aos-duration="900">
        <div class="contact-form-wrap">
          <h3 style="font-weight:800; margin-bottom:0.4rem;">
            Send Us a <span class="gradient-text">Message</span>
          </h3>
          <p style="color:var(--text-muted); font-size:0.88rem; margin-bottom:1.8rem;">
            We typically respond within 2 business hours.
          </p>

          <form id="contactForm" novalidate>
            @csrf
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" for="inputName">Full Name *</label>
                <input type="text" id="inputName" class="form-control" placeholder="Your full name" required />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="inputPhone">Phone Number *</label>
                <input type="tel" id="inputPhone" class="form-control" placeholder="+971 50 XXX XXXX" required />
              </div>
              <div class="col-12">
                <label class="form-label" for="inputEmail">Email Address *</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="your@email.com" required />
              </div>
              <div class="col-12">
                <label class="form-label" for="inputService">Interested In</label>
                <select id="inputService" class="form-select">
                  <option value="">Select a course or service...</option>
                  @foreach ($courses as $course)
                    <option>{{ $course['title'] }}</option>
                  @endforeach
                  <option>Technician Supply Service</option>
                  <option>General Inquiry</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label" for="inputMessage">Message *</label>
                <textarea id="inputMessage" class="form-control" rows="5"
                  placeholder="Tell us about your requirements or questions..." required></textarea>
              </div>
              <div class="col-12">
                <button type="submit" id="submitBtn" class="btn-gold w-100 justify-content-center"
                  style="font-size:1rem; padding:0.95rem;">
                  <i class="fas fa-paper-plane"></i> Send Message
                </button>
              </div>
              <div class="col-12" id="formMsg" style="display:none;"></div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>
