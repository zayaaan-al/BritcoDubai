<footer>
  <div class="container">
    <div class="row g-4">

      {{-- Brand Column --}}
      <div class="col-lg-4 col-md-6">
        <div class="footer-brand">
          <div style="font-size:1.8rem; font-weight:900; margin-bottom:0.4rem;">
            <span style="color:#218ccb">BRIT</span>CO
            <span style="font-size:0.9rem; color:var(--text-muted); font-weight:400; margin-left:4px;">DUBAI</span>
          </div>
          <p>
            UAE's leading Mobile Repair Training Institute and Technician Supply Company.
            Shaping the future of mobile technology professionals since 2000.
          </p>
        </div>
        <div class="footer-social">
          <a href="#" class="social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-btn" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="#" class="social-btn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-btn" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

      {{-- Quick Links --}}
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="footer-heading">Quick Links</div>
        <ul class="footer-links">
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Repair Services</a></li>
          <li><a href="#courses">Our Courses</a></li>
          <li><a href="#technician">Technician Supply</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </div>

      {{-- Courses Links --}}
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer-heading">Our Courses</div>
        <ul class="footer-links">
          @foreach ($courses as $course)
            <li><a href="#courses">{{ $course['title'] }}</a></li>
          @endforeach
        </ul>
      </div>

      {{-- Contact Info --}}
      <div class="col-lg-3 col-md-6">
        <div class="footer-heading">Contact Info</div>
        @foreach ($contactInfo as $info)
          <div class="footer-contact-item">
            <i class="{{ $info['icon'] }}"></i>
            <span>{{ $info['value'] }}</span>
          </div>
        @endforeach
        <div class="footer-contact-item">
          <i class="fab fa-whatsapp"></i>
          <span>WhatsApp: +971 50 XXX XXXX</span>
        </div>
      </div>

    </div>

    {{-- Footer Bottom --}}
    <div class="footer-bottom">
      <p>© {{ date('Y') }} <a href="#">Britco Dubai</a>. All rights reserved. | UAE's Premier Mobile Repair Training Institute</p>
      <!-- <p>Designed with <span style="color:#218ccb">♦</span> for Excellence</p> -->
    </div>
  </div>
</footer>
