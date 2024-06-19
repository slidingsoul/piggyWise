<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/"><img src="{{asset('/img/logo-navbar.svg')}}" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item question">
             <a class="nav-link" href="{{ route('question1') }}">Should I Buy It?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('saving') ? 'active': ''}}" href="{{url('saving')}}">Saving</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('leaderboard') ? 'active': ''}}" aria-current="page" href="/leaderboard">Leaderboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('wishlist') ? 'active': ''}}" href="/wishlist">Wishlist</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit">
                  Logout
                </button>
              </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
