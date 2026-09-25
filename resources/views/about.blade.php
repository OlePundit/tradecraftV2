@extends('layouts.app')

@section('title', 'About Tradecraft Printers | Printing Company in Nairobi CBD Since 2017')
@section('meta_description', 'Tradecraft Printers has operated from Mfangano Trade Centre in Nairobi CBD since 2017 — in-house digital printing, photocopying, binding, lamination, scanning and graphic design for corporate, academic and individual clients.')

@section('hero_title', 'About Tradecraft Printers')
@section('hero_subtitle', "Nairobi CBD's in-house printing company, trading since 2017")

@section('schema')
{
  "@context": "http://schema.org",
  "@type": "AboutPage",
  "url": "https://tradecraft.co.ke/about",
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "Tradecraft Printers",
    "description": "Leading printing, photocopying, binding, lamination, scanning, and graphic design services in Nairobi, Kenya. Fast, reliable, and affordable with state-of-the-art machines.",
    "url": "https://tradecraft.co.ke",
    "telephone": "+254 713 445 339",
    "email": "info@tradecraft.co.ke",
    "foundingDate": "2017",
    "founder": {
      "@type": "Person",
      "name": "Francis Gaitho"
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Mfangano Trade Centre, Ground Floor, Shop G3",
      "addressLocality": "Nairobi",
      "addressRegion": "Kenya",
      "postalCode": "00100",
      "addressCountry": "Kenya"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": -1.2833,
      "longitude": 36.8079746
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "08:00",
        "closes": "18:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Saturday",
        "opens": "08:00",
        "closes": "17:00"
      }
    ],
    "sameAs": [
      "https://twitter.com/tradecraft2017",
      "https://www.facebook.com/tradecraftenterprises",
      "https://www.tiktok.com/@tradecraft_enterprises"
    ],
    "image": "https://tradecraft.co.ke/assets/img/twitter-card.png",
    "logo": "https://tradecraft.co.ke/assets/img/logo.png"
  }
}
@endsection

@section('content')

<!-- ======= Overview ======= -->
<section id="overview" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-9 text-center content">
        <h3>Who We Are</h3>
        <p class="fst-italic">
          Tradecraft Printers has operated from Mfangano Trade Centre in Nairobi's Central Business District since 2017.
        </p>
        <p>
          We're an in-house printing, photocopying, binding, lamination, scanning and graphic design company &mdash;
          95% of the work we handle is produced ourselves, with no outsourcing, on our own equipment. From single
          documents to corporate tenders, from student theses to large-format branding, we run the job from file to
          finished product across our two Nairobi CBD office stations.
        </p>
      </div>
    </div>
  </div>
</section><!-- End Overview -->

<!-- ======= By The Numbers ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">
    <div class="row no-gutters">
      <div class="image col-xl-4 p-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" style="background-image: url('{{ asset('storage/img/trade_craft_offices_nairobi.jpg') }}'); background-size: cover; background-position: center;" data-aos="fade-right" data-aos-delay="100"></div>
      <div class="col-xl-7 ml-5 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
        <div class="content d-flex flex-column justify-content-center">
          <h3>Tradecraft Printers by the numbers</h3>
          <p>Since 2017, we've built a track record we can point to rather than just claim.</p>
          <div class="row">
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-calendar-check"></i>
                <span>2017</span>
                <p><strong>Founded</strong></p>
              </div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-clock"></i>
                <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="4" class="purecounter"></span>
                <p><strong>Years of experience</strong></p>
              </div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="1165" data-purecounter-duration="2" class="purecounter"></span>
                <p><strong>Happy Clients</strong></p>
              </div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-buildings"></i>
                <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="4" class="purecounter"></span>
                <p><strong>Nairobi CBD Offices</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End By The Numbers -->

<!-- ======= Equipment & In-House Production ======= -->
<section id="equipment" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
        <h3>Equipment &amp; In-House Production</h3>
        <p class="fst-italic">Everything runs on our own machines, in our own offices &mdash; nothing is farmed out.</p>
        <ul>
          <li><i class="ri-check-double-line"></i> Konica Minolta digital machines for high-speed printing, more than 300 copies per minute</li>
          <li><i class="ri-check-double-line"></i> KYOCERA machines for superfast bulk photocopying</li>
          <li><i class="ri-check-double-line"></i> In-house binding, lamination and scanning equipment</li>
          <li><i class="ri-check-double-line"></i> 95% of every job is produced by our own team, with no outsourcing</li>
          <li><i class="ri-check-double-line"></i> Two Nairobi CBD office stations to handle emergencies and bulk jobs</li>
        </ul>
      </div>
      <div class="col-lg-6 features" data-aos="fade-left" data-aos-delay="100">
        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-receipt"></i>
          <h4>300 photocopies per minute</h4>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-file"></i>
          <h4>300 print-outs per minute</h4>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-images"></i>
          <h4>100 coloured copies per minute</h4>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class='bx bx-book'></i>
          <h4>Binding 200 books per hour</h4>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-printer"></i>
          <h4>Scanning 300 pages per minute</h4>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Equipment -->

<!-- ======= Services ======= -->
<section id="services-overview" class="info">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>What We Do</h2>
      <p>Our Services</p>
    </div>
    <div class="row justify-content-center">
      @foreach($services as $service)
      <div class="info-wrap" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-wrap">
          <div class="icon-box">
            <i class="bi bi-printer"></i>
          </div>
        </div>
        <h3 class="text-center">{{ $service->service_type }}</h3>
        <p class="text-center"><a href="{{ route('service', $service->slug) }}">Learn more</a></p>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Services -->

<!-- ======= Industries We Serve ======= -->
<section id="clients-served" class="info">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Who We Serve</h2>
      <p>Industries &amp; Clients</p>
    </div>
    <div class="row justify-content-center">
      <div class="info-wrap" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-wrap">
          <div class="icon-box">
            <i class="bi bi-briefcase"></i>
          </div>
        </div>
        <h3 class="text-center">Corporate &amp; Business</h3>
        <p class="text-center">Tenders, corporate documents and bulk reports for companies across Nairobi</p>
      </div>
      <div class="info-wrap" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-wrap">
          <div class="icon-box">
            <i class="bi bi-mortarboard"></i>
          </div>
        </div>
        <h3 class="text-center">Academic</h3>
        <p class="text-center">Thesis, dissertation and coursework printing and hardcover binding for students</p>
      </div>
      <div class="info-wrap" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-wrap">
          <div class="icon-box">
            <i class="bi bi-printer"></i>
          </div>
        </div>
        <h3 class="text-center">Print &amp; Creative Trade</h3>
        <p class="text-center">Overflow and specialist digital jobs for other printers and creative businesses</p>
      </div>
      <div class="info-wrap" data-aos="zoom-in" data-aos-delay="500">
        <div class="icon-wrap">
          <div class="icon-box">
            <i class="bi bi-person"></i>
          </div>
        </div>
        <h3 class="text-center">Individuals</h3>
        <p class="text-center">Walk-in printing, photocopying and lamination for personal documents and projects</p>
      </div>
    </div>
  </div>
</section><!-- End Industries We Serve -->

<!-- ======= Delivery ======= -->
<section id="delivery" class="cta" style="background-image: url('{{ asset('storage/img/cta-bg.jpg') }}'); background-size: cover; background-position: center;">
  <div class="container" data-aos="zoom-in">
    <div class="text-center">
      <h3>Delivery</h3>
      <p>Free delivery within Nairobi CBD on every order, with nationwide delivery available for clients elsewhere in Kenya.</p>
      <a href="#" data-toggle="modal" data-target="#exampleModal" class="cta-btn">Request Quote</a>
    </div>
  </div>
</section><!-- End Delivery -->

<!-- ======= Team ======= -->
<section id="team" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
        <div class="image" style="background-image: url('{{ asset('storage/img/trade_craft_offices_nairobi.jpg') }}'); background-size: cover; background-position: center; min-height: 280px; border-radius: 8px;"></div>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
        <h3>Our Team</h3>
        <p class="fst-italic">Founded by Francis Gaitho in 2017.</p>
        <p>
          Tradecraft Printers is run by a dedicated, in-house team of trained printing, binding, scanning and
          graphic design professionals across our two Nairobi CBD offices &mdash; the people who actually produce
          the work you order, not a subcontractor.
        </p>
      </div>
    </div>

    <!-- Placeholder attendant names below — swap for real staff before this goes live -->
    <div class="row justify-content-center mt-5">
      <div class="info-wrap" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-wrap">
          <div class="icon-box">
            <i class="bi bi-person-badge"></i>
          </div>
        </div>
        <h3 class="text-center">Wanjiru Kamau</h3>
        <p class="text-center">Print &amp; Finishing Attendant</p>
      </div>
      <div class="info-wrap" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-wrap">
          <div class="icon-box">
            <i class="bi bi-person-badge"></i>
          </div>
        </div>
        <h3 class="text-center">Otieno Odhiambo</h3>
        <p class="text-center">Photocopying &amp; Scanning Attendant</p>
      </div>
      <div class="info-wrap" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-wrap">
          <div class="icon-box">
            <i class="bi bi-person-badge"></i>
          </div>
        </div>
        <h3 class="text-center">Amina Hassan</h3>
        <p class="text-center">Customer Service &amp; Order Desk</p>
      </div>
    </div>
  </div>
</section><!-- End Team -->

<!-- ======= Location & Contact ======= -->
<section id="location" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Find Us</h2>
      <p>Location &amp; Contact</p>
    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=Mfangano+Trade+Centre,+Nairobi,+Kenya&output=embed" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="row mt-5">
      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Mfangano Trade Centre, Ground Floor, Shop G3, Nairobi CBD, Kenya</p>
          </div>
          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@tradecraft.co.ke</p>
          </div>
          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+254 713 445 339</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8 mt-5 mt-lg-0">
        <p>
          Tradecraft Printers, Mfangano Trade Centre, Ground Floor Shop G3, Nairobi, Kenya. Open Monday&ndash;Friday
          8:00am&ndash;6:00pm and Saturday 8:00am&ndash;5:00pm. Reach us by phone, email or WhatsApp, or use the map
          above to find us in Nairobi's CBD.
        </p>
        <a href="https://wa.me/254713445339" class="whatsapp-btn" target="_blank">
          <i class="bi bi-whatsapp mx-2"></i>Order via WhatsApp
        </a>
      </div>
    </div>
  </div>
</section><!-- End Location & Contact -->

@endsection
