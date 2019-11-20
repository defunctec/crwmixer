<nav id="top" class="navbar navbar-expand-lg">
    <a id="logo" class="navbar-brand" href="javascript::void(0)"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li data-slide="1" class="nav-item">
                <a class="nav-link" href="javascript::void(0)" id="place_order">Place Order</a>
            </li>
            <li data-slide="2" class="nav-item">
                <a class="nav-link" href="javascript::void(0)" id="how_it_works">How it works</a>
            </li>
            <li data-slide="3" class="nav-item">
                <a class="nav-link" href="javascript::void(0)" id="fees">Fees</a>
            </li>
            <li data-slide="4" class="nav-item">
                <a class="nav-link" href="javascript::void(0)" id="about">About</a>
            </li>
            <li data-slide="5" class="nav-item">
                <a class="nav-link" href="javascript::void(0)" id="contact_us">Contact Us</a>
            </li>
        </ul>
        @if(Auth::user())
            <a class="navbar-text white-text" href="{{ route('dashboard') }}" style="margin-right:1%">Dashboard</a>
        @else
            <a class="navbar-text white-text" href="{{ route('login') }}" style="margin-right:1%">Login</a>
            <span class="navbar-text white-text"><a href="{{route('register')}}">Sinup</a></span>
        @endif
    </div>
</nav>