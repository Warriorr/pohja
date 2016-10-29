
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</ul>
        
<nav>
    <div class="nav-wrapper">
        <a class="brand-logo" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <ul class="right hide-on-med-and-down">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <!-- Dropdown Trigger -->
                <li>
                    <a class="dropdown-button" href="#!" data-beloworigin="true" data-activates="dropdown1">{{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a>
                </li>
            @endif
        </ul>
    </div>
</nav>
