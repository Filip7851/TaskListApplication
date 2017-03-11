<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('home') }}">Task App</a>
    
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="{{ Request::is('/') ? 'nav-link active' : 'nav-link' }}" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        
        <div class="navbar-text">
            <a href="{{ route('register') }}" class="{{ Request::is('register') ? 'active' : 'link' }}"><i class="fa fa-user fa-lg" aria-hidden="true"></i> Sign Up</a>
            <a href="#" class="left-padd link"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Sign In</a>
        </div>
    </div>
</nav>