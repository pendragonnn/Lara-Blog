<header class="p-3 text-bg-dark mb-3">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center">
      <h1 class="me-3">
        Lara Blog
      </h1>
        @if(Auth::check())
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ url('posts') }}" class="nav-link px-2 text-secondary">Home</a></li>
          </ul>
          <a href="{{ url('logout') }}" class="btn btn-outline-light me-2">Keluar</a>
        @else
          <a href="{{ url('login') }}" class="btn btn-outline-light me-2">Masuk</a>
          <a href="{{ url('register') }}" class="btn btn-outline-light me-2">Daftar</a>
        @endif
    </div>
  </div>
</header>