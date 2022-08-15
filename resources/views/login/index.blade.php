@extends('layout.main')
@section('content')
<div class="container">
  <main class="form-signin w-100 m-auto">
    <form action="/login" method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
        <label for="email">Email address</label>
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
  </main>
</div>
@endsection