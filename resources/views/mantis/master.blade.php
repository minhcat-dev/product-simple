@extends('master')

@section('icon')
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">
@endsection

@push('template-styles')
  <!-- [Google Font] Family -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="{{ asset('templates/mantis/fonts/tabler-icons.min.css') }}">
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="{{ asset('templates/mantis/fonts/feather.css') }}">
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="{{ asset('templates/mantis/fonts/fontawesome.css') }}">
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="{{ asset('templates/mantis/fonts/material.css') }}">

  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="{{ asset('templates/mantis/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('templates/mantis/css/style-preset.css') }}">
@endpush

@section('content')
  @include('mantis.layouts.navbar')
  @include('mantis.layouts.header')

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      @yield('main')
    </div>
  </div>
  <!-- [ Main Content ] end -->

  @include('mantis.layouts.footer')
@endsection

@push('template-scripts')
  <!-- Required Js -->
  <script src="{{ asset('templates/mantis/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('templates/mantis/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('templates/mantis/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('templates/mantis/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('templates/mantis/js/pcoded.js') }}"></script>
  <script src="{{ asset('templates/mantis/js/plugins/feather.min.js') }}"></script>
  
  <script>layout_change('light');</script>
  <script>change_box_container('false');</script>
  <script>layout_rtl_change('false');</script>
  <script>preset_change("preset-1");</script>
  <script>font_change("Public-Sans");</script>
@endpush