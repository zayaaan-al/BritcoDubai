{{-- Courses Section --}}
<section id="courses">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="section-label">Professional Training</span>
      <div class="gold-line"></div>
     <h2 class="section-title">
  Our <span class="gradient-text">Courses</span>
</h2>

<p class="section-subtitle mx-auto">
  Transform your career with industry-leading mobile repair courses designed for
  real-world success in the UAE and beyond.
</p>
    </div>

    <div class="row g-4">
      @foreach ($courses as $index => $course)
        <div class="col-lg-6 col-xl-3" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
          <div class="course-card">
            <div class="course-card-header">
              <div class="course-badge-tag">{{ $course['badge'] }}</div>
              <div class="course-icon-lg"><i class="{{ $course['icon'] }}"></i></div>
              <h4>{{ $course['title'] }}</h4>
            </div>
            <div class="course-card-body">
              <p>{{ $course['desc'] }}</p>
              <div class="course-meta">
                <span><i class="fas fa-clock"></i> {{ $course['duration'] }}</span>
                <span><i class="fas fa-users"></i> {{ $course['level'] }}</span>
              </div>
              <div class="course-skills">
                @foreach ($course['skills'] as $skill)
                  <span class="skill-tag">{{ $skill }}</span>
                @endforeach
              </div>
              <div class="course-card-footer">
                <a href="#contact" class="btn-course w-100 justify-content-center">
                  Learn More <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    {{-- CTA Banner --}}
    <div class="mt-7 cta-wrapper" data-aos="fade-up">
  <div class="glass-card cta-banner p-4 p-lg-5 text-center">
    <h3>
        Ready to Start Your <span class="gradient-text">Tech Career?</span>
    </h3>

    <p>
        Enroll today and get certified by UAE's most trusted mobile repair training institute.
    </p>

    <a href="#contact" class="btn-gold">
        <i class="fas fa-graduation-cap"></i>
        Enroll Now — Limited Seats
    </a>
</div>
</div>
  </div>
</section>
