<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="nav-link" href="{{ route('home') }}" style="text-decoration:none;color:#fff">Home <span class="sr-only">(current)</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="javascript::void(0)">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</a>
            </li>
        </ul>
        <span class="navbar-text">
            <ul class="navbar-nav mr-auto">
                <li>
                    <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </span>
    </div>
</nav>