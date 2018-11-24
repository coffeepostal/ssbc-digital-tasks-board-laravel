<div class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text"><a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a></li>
            <li>
                <a href="/tasks">Tasks</a>
                <ul class="menu vertical">
                    <li><a href="/tasks/create">Create New Task</a></li>
                </ul>
            </li>
            <li><a href="/task-board">Task Board</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
            @guest
                <li><a class="button" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li>
                    @if (Route::has('register'))
                        <a class="button" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
            @else
                <li>
                    <a href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="menu vertical">
                        <li><a href="/dashboard">Dashboard</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</div>
