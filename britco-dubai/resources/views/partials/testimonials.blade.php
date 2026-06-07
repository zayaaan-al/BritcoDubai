{{-- Testimonials Section --}}
<section id="testimonials" class="bg-dark-alt">
  <div class="container">

    <div class="text-center mb-5" data-aos="fade-up">
      <span class="section-label">Student Reviews</span>
      <div class="gold-line"></div>
      <h2 class="section-title">What Our <span class="gradient-text">Students Say</span></h2>
    </div>

    <div class="swiper testimonialSwiper pb-5" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper pb-2">
        @foreach ($testimonials as $testimonial)
          <div class="swiper-slide">
            <div class="testimonial-card">
              <div class="stars">
                @for ($i = 0; $i < $testimonial['stars']; $i++)
                  ★
                @endfor
              </div>
              <p class="testimonial-text">"{{ $testimonial['text'] }}"</p>
              <div class="testimonial-author">
                <div class="author-avatar">{{ $testimonial['initials'] }}</div>
                <div>
                  <div class="author-name">{{ $testimonial['name'] }}</div>
                  <div class="author-role">{{ $testimonial['role'] }}</div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="swiper-pagination mt-3"></div>
    </div>

  </div>
</section>
