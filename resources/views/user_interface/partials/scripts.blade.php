{{-- JS bundle for the frontend --}}
<script src="{{ asset('frontend/assets/js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.mmenu.all.js') }}"></script>
<script src="{{ asset('frontend/assets/js/ace-responsive-menu.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
<script src="{{ asset('frontend/assets/js/parallax.js') }}"></script>
<script src="{{ asset('frontend/assets/js/pricing-slider.js') }}"></script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
@vite('resources/js/app.js')

@stack('scripts')
