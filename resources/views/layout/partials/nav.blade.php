<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Task App</a>
    
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Statistics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <span class="navbar-text">
            <a href="{{ route('register') }}" class="link"><i class="fa fa-user fa-lg" aria-hidden="true"></i> Sign Up</a>
            <a href="#" class="left-padd link"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Sign In</a>
        </span>
    </div>
</nav>