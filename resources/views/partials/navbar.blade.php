{{-- navbar --}}
<div class="header">
  <nav class="navbar bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Navbar</a>
      <div class="d-flex">
        <a href="/login" class="nav-link">Login<i class="bi bi-box-arrow-in-right"></i></a>
        <form action="/logout" method="post">
        @csrf
          <button type="submit">Logout</button>
        </form>
      </div>
    </div>
  </nav>
</div>