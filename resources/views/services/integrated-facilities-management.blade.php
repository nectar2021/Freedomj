{{-- resources/views/services/integrated-facilities-management.blade.php --}}
@extends('frontend.front_master')

@section('title', 'Integrated Facilities Management | Ewool')

@section('content')
  {{-- HERO --}}
  <section class="ifm-hero position-relative text-white">
    <div class="ifm-hero__bg">
      <picture>
        {{-- Optional WebP for performance (place alongside the JPG) --}}
        <source srcset="{{ asset('frontend/assets/images/services/integrated-facilities-management.webp') }}" type="image/webp">
        <img
          src="{{ asset('frontend/assets/images/services/integrated-facilities-management.jpg') }}"
          alt="Integrated Facilities Management at Ewool"
          style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;opacity:.999"
          loading="eager"
        >
      </picture>
    </div>

    <div class="container position-relative z-1">
      <div class="row justify-content-center">
        <div class="col-xl-8 text-center">
          <span class="badge rounded-pill bg-white text-primary-emphasis fw-semibold px-4 py-2 mb-3">Facilities Intelligence</span>
          <h1 class="display-4 fw-bold mb-3">Integrated Facilities Management Services</h1>
          <p class="lead mb-0">We orchestrate every moving part of your built environment — from reactive maintenance to strategic portfolio planning — so your people can thrive while your assets outperform expectations.</p>
        </div>
      </div>
    </div>

    <div class="ifm-hero__wave"></div>
  </section>

  {{-- INTRO + PILLARS --}}
  <section class="py-5 py-lg-6 bg-light">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4 p-xl-5">
              <h2 class="h3 fw-bold mb-3">What is Integrated Facilities Management?</h2>
              <p class="text-muted mb-4">
                Integrated Facilities Management (IFM) centralises all workplace and property services under a single, data-informed strategy.
                Ewool synchronises people, processes, and technology across your property lifecycle to reduce operational friction, elevate user
                experience, and extend the life of every asset in your portfolio.
              </p>
              <ul class="list-unstyled mb-0 ifm-checklist">
                <li>
                  <span class="icon"><i class="fas fa-circle-notch"></i></span>
                  Unified command centre for maintenance, security, energy, and concierge services.
                </li>
                <li>
                  <span class="icon"><i class="fas fa-chart-line"></i></span>
                  Predictive analytics that map spend, utilisation, and risk in real time.
                </li>
                <li>
                  <span class="icon"><i class="fas fa-people-carry"></i></span>
                  Dedicated multidisciplinary teams focused on occupant wellbeing and productivity.
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="row g-3">
            @php
              $pillars = [
                ['title' => 'Operational Excellence', 'copy' => '24/7 helpdesk, SLA governance, and technician dispatch managed through a single digital backbone.'],
                ['title' => 'Asset Stewardship', 'copy' => 'Lifecycle planning, compliance tracking, and capital works that preserve value and prevent downtime.'],
                ['title' => 'Experience Engineering', 'copy' => 'Hospitality-grade services, concierge programs, and workplace design that delight occupants.'],
                ['title' => 'Sustainable Performance', 'copy' => 'Smart metering, carbon dashboards, and ESG reporting embedded into day-to-day operations.'],
              ];
            @endphp
            @foreach($pillars as $pillar)
              <div class="col-sm-6">
                <div class="ifm-tile h-100">
                  <h3>{{ $pillar['title'] }}</h3>
                  <p class="mb-0">{{ $pillar['copy'] }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- JOURNEY --}}
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row justify-content-between align-items-center mb-4">
        <div class="col-lg-7">
          <h2 class="h3 fw-bold mb-2">A Seamless Facilities Journey</h2>
          <p class="text-muted mb-0">From mobilisation to continuous optimisation, Ewool builds IFM programmes that are transparent, measurable, and deeply human-centred.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a class="ud-btn btn-thm" href="{{ url('/contact') }}">Let’s build your IFM roadmap<i class="fas fa-arrow-right-long"></i></a>
        </div>
      </div>

      <div class="row g-4">
        @php
          $journey = [
            ['step' => '01', 'title' => 'Discovery & Diagnostics', 'copy' => 'Portfolio audits, stakeholder interviews, and data harvesting to define service blueprints and success metrics.'],
            ['step' => '02', 'title' => 'Mobilisation & Transition', 'copy' => 'Smooth onboarding of people and suppliers, unified CAFM configuration, and risk-controlled handovers.'],
            ['step' => '03', 'title' => 'Integrated Delivery', 'copy' => 'Multiservice teams orchestrated through a central command centre with real-time dashboards and automated workflows.'],
            ['step' => '04', 'title' => 'Continuous Optimisation', 'copy' => 'Performance analytics, innovation sprints, and sustainability initiatives that compound savings and enhance experiences.'],
          ];
        @endphp
        @foreach($journey as $phase)
          <div class="col-md-6 col-xl-3">
            <div class="ifm-step h-100">
              <span class="ifm-step__badge">{{ $phase['step'] }}</span>
              <h3>{{ $phase['title'] }}</h3>
              <p class="mb-0">{{ $phase['copy'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- WHY EWool + SERVICE CATALOGUE --}}
  <section class="py-5 py-lg-6 bg-dark text-white">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <h2 class="h3 fw-bold mb-3">Why brands choose Ewool IFM</h2>
          <p class="text-white-50 mb-4">Facilities are more than spaces—they are ecosystems that power culture, performance, and sustainability. We bring the right mix of specialists, field engineers, data scientists, and hospitality leaders to elevate every touchpoint.</p>
          <div class="row g-3">
            <div class="col-sm-6">
              <div class="ifm-metric">
                <strong>30%</strong>
                <span>Average cost efficiency gain within the first contract year.</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="ifm-metric">
                <strong>97%</strong>
                <span>Service level compliance across critical environments.</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="ifm-metric">
                <strong>24/7</strong>
                <span>Command centre coverage with multilingual support.</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="ifm-metric">
                <strong>100%</strong>
                <span>ESG-aligned sourcing with transparent supplier governance.</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card bg-transparent border border-light-subtle rounded-4 shadow-sm h-100">
            <div class="card-body p-4 p-xl-5">
              <h3 class="h4 fw-semibold mb-3">Service Catalogue</h3>
              <div class="row g-3">
                @php
                  $services = [
                    'Hard & soft services management',
                    'Preventive & predictive maintenance programmes',
                    'Space planning and workplace strategy',
                    'Security, safety & emergency preparedness',
                    'Smart building & IoT integration',
                    'Energy optimisation & utilities management',
                    'Vendor lifecycle management',
                    'Capital project delivery and refurbishment',
                  ];
                @endphp
                @foreach($services as $service)
                  <div class="col-sm-6">
                    <div class="ifm-service">{{ $service }}</div>
                  </div>
                @endforeach
              </div>

              {{-- Replace the brochure link with an actual PDF when available --}}
              <a class="ud-btn btn-light mt-4" href="{{ asset('docs/ewool-ifm-brochure.pdf') }}" target="_blank" rel="noopener">
                Download IFM brochure<i class="fas fa-file-download ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- CTA --}}
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-7">
          <h2 class="h3 fw-bold mb-3">Let’s transform your facilities narrative</h2>
          <p class="text-muted mb-4">Whether you manage a high-rise corporate campus or a diversified real-estate portfolio, our IFM specialists will blueprint a transition plan that unlocks measurable value within 90 days.</p>
          <div class="d-flex flex-wrap gap-3">
            <a class="ud-btn btn-thm" href="{{ url('/contact') }}">Book a strategy session<i class="fas fa-arrow-right-long ms-2"></i></a>
            <a class="ud-btn btn-transparent2" href="tel:+2349208519087"><span class="fas fa-phone me-2"></span>+234 920 851 9087</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4 p-xl-5">
              <h3 class="h5 fw-semibold mb-3">What to expect</h3>
              <ul class="list-unstyled ifm-expect">
                <li><span class="icon"><i class="fas fa-user-check"></i></span>Dedicated transition manager and mobilisation toolkit.</li>
                <li><span class="icon"><i class="fas fa-tachometer-alt"></i></span>Baseline assessment with performance dashboard setup.</li>
                <li><span class="icon"><i class="fas fa-seedling"></i></span>Sustainability quick wins aligned with your ESG priorities.</li>
                <li><span class="icon"><i class="fas fa-shield-alt"></i></span>Risk, compliance, and business continuity frameworks.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('styles')
<style>
  /* --- HERO --- */
  .ifm-hero {
    min-height: 60vh;
    display: flex;
    align-items: center;
    position: relative;
    padding: clamp(6rem, 10vw, 9rem) 0 5rem;
    overflow: hidden;
  }
  .ifm-hero__bg { position: absolute; inset: 0; }
  .ifm-hero__bg::after{
    content:""; position:absolute; inset:0;
    background: linear-gradient(180deg, rgba(6,35,73,.45) 0%, rgba(6,35,73,.55) 60%, rgba(6,35,73,.65) 100%);
    pointer-events:none;
  }
  .ifm-hero__wave {
    position: absolute; bottom: -1px; left: 0; right: 0;
    height: 140px;
    background: linear-gradient(180deg, rgba(12,32,70,0) 0%, rgba(12,32,70,0.75) 65%, #0c2046 100%);
  }

  /* --- CARDS / TILES --- */
  .ifm-tile {
    background: #fff;
    border-radius: 18px;
    border: 1px solid rgba(12,32,70,0.08);
    padding: 1.5rem;
    box-shadow: 0 12px 32px rgba(12,32,70,0.08);
    transition: transform .3s ease, box-shadow .3s ease;
  }
  .ifm-tile h3 { font-size: 1.05rem; font-weight: 600; margin-bottom: .5rem; }
  .ifm-tile:hover { transform: translateY(-6px); box-shadow: 0 18px 38px rgba(12,32,70,0.12); }

  /* --- LISTS --- */
  .ifm-checklist li,
  .ifm-expect li {
    display: flex; gap: .75rem; align-items: flex-start;
    margin-bottom: .85rem; color: #243350; font-weight: 500;
  }
  .ifm-checklist .icon,
  .ifm-expect .icon { color: #EB6753; font-size: 1rem; margin-top: .15rem; }

  /* --- JOURNEY --- */
  .ifm-step {
    background: linear-gradient(145deg, #ffffff, #f4f7fb);
    border: 1px solid rgba(12,32,70,0.05);
    border-radius: 20px;
    padding: 2rem 1.75rem;
    position: relative; overflow: hidden;
  }
  .ifm-step__badge {
    position: absolute; top: 1.25rem; right: 1.5rem;
    font-weight: 700; font-size: 1.25rem; color: rgba(12,32,70,0.20);
  }
  .ifm-step h3 { font-size: 1.2rem; font-weight: 600; margin-bottom: .65rem; color: #0c2046; }

  /* --- DARK SECTION --- */
  .ifm-metric {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 16px;
    padding: 1.2rem 1.35rem;
  }
  .ifm-metric strong { display:block; font-size: 2rem; font-weight: 700; line-height: 1; }
  .ifm-service {
    border-radius: 12px;
    background: rgba(255,255,255,0.07);
    padding: .9rem 1rem; font-weight: 500; color: #e9eef8;
  }

  @media (max-width: 991.98px) {
    .ifm-hero { padding-top: 5.5rem; }
    .ifm-hero__wave { height: 90px; }
  }
</style>
@endpush
