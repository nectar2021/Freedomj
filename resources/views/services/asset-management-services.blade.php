@extends('frontend.front_master')

@section('title', 'Asset Management Services | Ewool')

@section('content')
  <section class="ams-hero position-relative text-white">
    <div class="ams-hero__bg" style="background-image: url('{{ asset('frontend/assets/images/services/asset-management.jpg') }}');"></div>
    <div class="container position-relative z-1">
      <div class="row justify-content-center">
        <div class="col-xl-8 text-center">
          <span class="badge rounded-pill bg-white text-primary-emphasis fw-semibold px-4 py-2 mb-3">Portfolio Brilliance</span>
          <h1 class="display-5 fw-bold mb-3">Asset Management Services</h1>
          <p class="lead mb-0">We transform buildings into high-performing portfolios through data-led strategies, resilient operations, and investor-grade reporting.</p>
        </div>
      </div>
    </div>
    <div class="ams-hero__overlay"></div>
  </section>

  <section class="py-5 py-lg-6 bg-light">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4 p-xl-5">
              <h2 class="h3 fw-bold mb-3">Strategic stewardship for every asset</h2>
              <p class="text-muted">Ewool’s Asset Management Services connect investment objectives with on-the-ground performance. We fuse market intelligence, operational data, and ESG priorities to protect capital, unlock growth, and enhance occupier satisfaction.</p>
              <ul class="list-unstyled ams-bullets mb-0">
                <li><i class="fas fa-chart-pie"></i> Proprietary portfolio modelling that forecasts yield, NOI, and lifecycle spend.</li>
                <li><i class="fas fa-users"></i> Asset managers, analysts, and valuations experts working as a single SWAT team.</li>
                <li><i class="fas fa-sync"></i> Continuous value creation programmes backed by transparent governance.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row g-3">
            @php
              $levers = [
                ['title' => 'Investment Structuring', 'copy' => 'Deal origination, underwriting, and financing advisory for acquisitions and divestments.'],
                ['title' => 'Performance Optimisation', 'copy' => 'Occupancy strategies, lease management, and CAPEX planning aligned with market shifts.'],
                ['title' => 'Technology & Insights', 'copy' => 'Digital twins, BI dashboards, and predictive analytics surfaced in real time.'],
                ['title' => 'Compliance & ESG', 'copy' => 'Governance, risk, and sustainability frameworks embedded across the asset lifecycle.'],
              ];
            @endphp
            @foreach($levers as $lever)
              <div class="col-sm-6">
                <div class="ams-card h-100">
                  <h3>{{ $lever['title'] }}</h3>
                  <p class="mb-0">{{ $lever['copy'] }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row justify-content-between align-items-center mb-4">
        <div class="col-lg-7">
          <h2 class="h3 fw-bold mb-2">Lifecycle intelligence at portfolio scale</h2>
          <p class="text-muted mb-0">Our delivery model balances investor priorities with occupier experience, ensuring every asset remains agile, compliant, and primed for long-term appreciation.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a class="ud-btn btn-thm" href="{{ url('/contact') }}">Talk with an asset strategist<i class="fal fa-arrow-right-long"></i></a>
        </div>
      </div>

      <div class="row g-4">
        @php
          $framework = [
            ['label' => '01', 'title' => 'Portfolio Diagnostics', 'text' => 'Macro and micro market analysis, lease audits, and benchmarking to identify upside and risk.'],
            ['label' => '02', 'title' => 'Value Roadmap', 'text' => 'Targeted initiatives covering revenue optimisation, experience upgrades, and cost transformation.'],
            ['label' => '03', 'title' => 'Execution & Governance', 'text' => 'Programme management, supplier orchestration, and board-ready reporting.'],
            ['label' => '04', 'title' => 'Sustain & Evolve', 'text' => 'KPI reviews, innovation pilots, and ESG performance enhancements that keep assets future-fit.'],
          ];
        @endphp
        @foreach($framework as $pillar)
          <div class="col-md-6 col-xl-3">
            <div class="ams-step h-100">
              <span class="ams-step__index">{{ $pillar['label'] }}</span>
              <h3>{{ $pillar['title'] }}</h3>
              <p class="mb-0">{{ $pillar['text'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="py-5 py-lg-6 bg-dark text-white">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-xl-6">
          <h2 class="h3 fw-bold mb-3">Metrics that matter</h2>
          <p class="text-white-50 mb-4">Ewool Asset Management blends institutional discipline with local market agility. Our clients enjoy high transparency, accelerated decision cycles, and measurable portfolio gains.</p>
          <div class="row g-3">
            @php
              $metrics = [
                ['value' => '15%', 'label' => 'Average uplift in net operating income within 18 months.'],
                ['value' => '98%', 'label' => 'Tenant retention across commercial portfolios.'],
                ['value' => '45%', 'label' => 'Reduction in reactive maintenance through predictive programmes.'],
                ['value' => '100%', 'label' => 'Regulatory compliance with automated audit trails.'],
              ];
            @endphp
            @foreach($metrics as $metric)
              <div class="col-sm-6">
                <div class="ams-metric h-100">
                  <strong>{{ $metric['value'] }}</strong>
                  <span>{{ $metric['label'] }}</span>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card bg-transparent border border-light-subtle rounded-4 shadow-sm h-100">
            <div class="card-body p-4 p-xl-5">
              <h3 class="h4 fw-semibold mb-3">Service modules</h3>
              <div class="row g-3">
                @php
                  $modules = [
                    'Portfolio strategy and underwriting',
                    'Lease administration & tenant engagement',
                    'Capital expenditure planning',
                    'Transaction support & due diligence',
                    'Operational risk & compliance management',
                    'Energy benchmarking & ESG roadmaps',
                    'Financial modelling & investor reporting',
                    'Disposition strategy and exit execution',
                  ];
                @endphp
                @foreach($modules as $module)
                  <div class="col-sm-6">
                    <div class="ams-pill">{{ $module }}</div>
                  </div>
                @endforeach
              </div>
              <a class="ud-btn btn-light mt-4" href="{{ url('/documents/ewool-asset-management.pdf') }}">Download service overview<i class="fal fa-file-download"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-7">
          <h2 class="h3 fw-bold mb-3">Schedule a portfolio health session</h2>
          <p class="text-muted mb-4">Share your objectives and challenges; we will map a tailored action plan that captures value quickly while laying the groundwork for sustainable performance.</p>
          <div class="d-flex flex-wrap gap-3">
            <a class="ud-btn btn-thm" href="{{ url('/contact') }}">Book a consultation<i class="fal fa-arrow-right-long"></i></a>
            <a class="ud-btn btn-transparent2" href="tel:+2349208519087"><span class="fal fa-phone me-2"></span>+234 920 851 9087</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4 p-xl-5">
              <h3 class="h5 fw-semibold mb-3">Engagement playbook</h3>
              <ul class="list-unstyled ams-checklist mb-0">
                <li><i class="fas fa-bullseye"></i> Value discovery workshop with stakeholder mapping.</li>
                <li><i class="fas fa-database"></i> Rapid data capture & digital dashboard deployment.</li>
                <li><i class="fas fa-handshake"></i> Co-created roadmap with milestone tracking.</li>
                <li><i class="fas fa-leaf"></i> ESG integration and climate resilience quick wins.</li>
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
    .ams-hero {
      min-height: 58vh;
      display: flex;
      align-items: center;
      position: relative;
      padding: clamp(6rem, 10vw, 9rem) 0 5rem;
      overflow: hidden;
    }
    .ams-hero__bg {
      position: absolute;
      inset: 0;
      background-size: cover;
      background-position: center;
      filter: brightness(0.55);
    }
    .ams-hero__overlay {
      position: absolute;
      inset: auto 0 0 0;
      height: 120px;
      background: linear-gradient(180deg, rgba(12,32,70,0) 0%, rgba(12,32,70,0.85) 80%, #0c2046 100%);
    }
    .ams-bullets li,
    .ams-checklist li {
      display: flex;
      gap: 0.75rem;
      align-items: flex-start;
      margin-bottom: 0.85rem;
      color: #243350;
      font-weight: 500;
    }
    .ams-bullets i,
    .ams-checklist i {
      color: #EB6753;
      margin-top: 0.2rem;
    }
    .ams-card {
      background: #ffffff;
      border: 1px solid rgba(12,32,70,0.08);
      border-radius: 18px;
      padding: 1.5rem;
      box-shadow: 0 12px 32px rgba(12,32,70,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .ams-card h3 {
      font-size: 1.05rem;
      font-weight: 600;
      margin-bottom: 0.55rem;
      color: #0c2046;
    }
    .ams-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 18px 38px rgba(12,32,70,0.12);
    }
    .ams-step {
      position: relative;
      border-radius: 20px;
      background: linear-gradient(135deg, #ffffff 0%, #f3f6fb 100%);
      border: 1px solid rgba(12,32,70,0.06);
      padding: 2rem 1.75rem;
      overflow: hidden;
    }
    .ams-step__index {
      position: absolute;
      top: 1.25rem;
      right: 1.5rem;
      font-weight: 700;
      font-size: 1.2rem;
      color: rgba(12,32,70,0.18);
    }
    .ams-step h3 {
      font-size: 1.15rem;
      font-weight: 600;
      margin-bottom: 0.65rem;
      color: #0c2046;
    }
    .ams-metric {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 16px;
      padding: 1.3rem 1.4rem;
      height: 100%;
    }
    .ams-metric strong {
      font-size: 2rem;
      font-weight: 700;
      line-height: 1;
      display: block;
    }
    .ams-pill {
      border-radius: 12px;
      background: rgba(12,32,70,0.06);
      padding: 0.85rem 1rem;
      font-weight: 500;
      color: #243350;
    }
    @media (max-width: 991.98px) {
      .ams-hero { padding-top: 5.5rem; }
      .ams-hero__overlay { height: 90px; }
    }
  </style>
@endpush
