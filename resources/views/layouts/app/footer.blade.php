<footer class="d-flex justify-content-center align-items-center py-3 my-4 sticky-bottom">
  <p class="mb-0 text-muted">© 2022 LaraBlog</p>
  @if(Auth::check())
  <ul class="nav col-md-4">
    <li><a href="{{ url('posts') }}" class="nav-link px-2 text-secondary">| Home</a></li>
  </ul>
  @endif
</footer>