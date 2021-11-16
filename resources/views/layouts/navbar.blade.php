<nav class="navbar navbar-expand-lg navbar-dark py-3 bg-pink shadow">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if($active == 'Home') active @endif" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link @if($active !== 'Home') active @endif dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Idols
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/muse">Muse</a></li>
              <li><a class="dropdown-item" href="/aqours">Aqours</a></li>
              <li><a class="dropdown-item" href="/nijigasaki">Nijigasaki</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>