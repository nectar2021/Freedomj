{{-- CSS bundle for the frontend --}}
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/ace-responsive-menu.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/slider.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/ud-custom-spacing.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
@vite('resources/scss/custom.scss')

@stack('styles')


@push('styles')
<style>
  /* Header dropdown improvements */
  #respMenu ul { white-space: nowrap; }
  #respMenu ul li { position: relative; }
  #respMenu ul li > a.list-item { cursor: pointer; }
  #respMenu ul li ul.dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    z-index: 999;
    min-width: 220px;
    padding: 8px;
    margin-top: 8px;
    box-shadow: 0 10px 25px rgba(0,0,0,.1);
    border-radius: 6px;
  }
  #respMenu ul li:hover > ul.dropdown,
  #respMenu ul li:focus-within > ul.dropdown { display: block; }
  #respMenu ul li ul li { padding: 5px 10px; white-space: normal; }
  #respMenu ul li ul li a {
    color: #222;
    font-size: 13px;
    text-decoration: none;
    line-height: 1.4;
    display: block;
    padding: 6px 4px;
    border-radius: 4px;
  }
  #respMenu ul li ul li a:hover { color: #007bff; background: rgba(0,0,0,.03); }
</style>
@endpush
