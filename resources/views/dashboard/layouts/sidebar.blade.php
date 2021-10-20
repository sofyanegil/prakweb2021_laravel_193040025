<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="margin-top: -10px">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''
         }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''
         }}" href="/dashboard/posts">
          <span data-feather="file-text"></span>
          My Posts
        </a>
      </li>

      <li class="nav-item">
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="nav-link border-0 bg-light fixed-bottom mb-5 mb-sm-5"><span
              data-feather="log-out"></span>
            Logout
          </button>
        </form>
      </li>
    </ul>
  </div>
</nav>