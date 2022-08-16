<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @if (Auth::check())
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/thisMonth">This Month</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/thisYear">This Year</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/all">All time</a>
        </li>
      </ul>
        <form action="/logout" method="POST">
          @csrf
          <button class="border border-light nav-link" type="submit">Logout</button>
        </form>
      @endif
    </div>
  </div>
</nav>