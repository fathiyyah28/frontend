<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('fruits.home') }}">Fruits</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('fruits.home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('fruits.shop') }}">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('fruits.contact') }}">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('fruits.cart') }}">Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
