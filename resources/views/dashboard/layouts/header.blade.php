<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <div class="container">
    <a class="navbar-brand px-3 me-0 mx bg-dark" href="/">
      <img src="/img/logo.png" width="25vh" alt="" class="mx-2 mb-1">WPU Blog
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="nav-link px-3 bg-dark border-0 text-white"><span data-feather="log-out"></span>
            Logout
          </button>
        </form>
      </div>
    </div>
  </div>
</header>