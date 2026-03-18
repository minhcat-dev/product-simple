<!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="../dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="{{ asset('templates/mantis/images/logo-dark.svg') }}" class="img-fluid logo-lg" alt="logo">
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        @if (isset($menu_nodes))
          @foreach($menu_nodes as $row)
            <li class="pc-item" @class(['active' => $row['active']])>
              <a href="{{ $row['url'] }}" class="pc-link">
                <span class="pc-micon">{!! $row['icon_html'] !!}</span>
                <span class="pc-mtext">{{ $row['title'] }}</span>
              </a>
            </li>
          @endforeach
        @endif
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end --> 