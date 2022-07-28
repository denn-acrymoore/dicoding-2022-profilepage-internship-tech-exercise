<nav class="container-lg dicoding-navbar">
  <div class="col-5 dicoding-navbar-col-align-left">
    <img class="dicoding-navbar-logo" src="{{ asset('images/dicoding-header-logo.png') }}" />
    <div class="academy-dropdown">
      <div class="academy-dropbtn">
        Academy
        <img class="caret-dropdown" src="{{ asset('images/header/caret_icon.svg') }}" />
      </div>
      <div class="academy-dropdown-content">
        <a href="/">Progress Belajar</a>
        <a href="/">Langganan</a>
      </div>
    </div>
  </div>
  <div class="col-7 dicoding-navbar-col-align-right">
    <div class='avatar-dropdown'>
      <div class="avatar-dropbtn">
        <img class="avatar-img" src="{{ asset('database-images/gigachad.jpg') }}" >
        <img class="caret-dropdown" src="{{ asset('images/header/caret_icon.svg') }}" />
      </div>
      <div class="avatar-dropdown-content">
        <a href="/">Daftar Pesanan</a>
        <a href="/">Pengaturan</a>
        <a href="/">Keluar</a>
      </div>
    </div>
    <a class="bell-link" href="/">
      <img class="bell-logo" src={{ asset('images/header/bell_icon.svg') }}>
    </a>
    <div class="vertical-line"></div>
    <a class="dashboard-link" href="/">
      <div class="dashboard-btn">
        Dashboard
        <img class="dashboard-btn-icon" src="{{ asset('images/header/home_icon.svg') }}">
      </div>
    </a>
  </div>
</nav>