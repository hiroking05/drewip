<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary"> 
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <a class="navbar-brand" href="/">Drewip</a>
        
        <div>
            <h1></h1>
        </div>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-user-friends" style="color: blue;"></i></a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"><a href="#">setting</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                    </li>
    </nav>    
            <nav class="navbar navbar-expand navbar-dark bg-secondary justify-content-around">
                    <h4><a>{!! link_to_route('topics.index', 'Topics', ['id' => Auth::id()]) !!}</a></h4>
                    <h4><a>{!! link_to_route('users.show', 'My profile', ['id' => Auth::id()]) !!}</a></h4>
                    <h4><a>{!! link_to_route('users.show', 'My profile', ['id' => Auth::id()]) !!}</a></h4>
            </nav> 
                @else
                    <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
</header>