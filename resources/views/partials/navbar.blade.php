<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/tasks">Tasks</a></li>
      <li><a href="/categories">Categories</a></li>
    </ul>

    <ul class="navbar-nav" style="display: flex; justify-content: space-beetwen;">
      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
              </form>
          </ul>
        </li>
         @else
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    @endauth
  </nav>