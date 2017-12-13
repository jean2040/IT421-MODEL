<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#" class="navbar-brand"><img src="{{ asset('images/profile-icon.png') }}" width="30px" height="30px"></a>
        <a class="navbar-brand" href="#">CRUD APP</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a href="/model_view/public/tasks" class="nav-link">Tasks</a>
                </li>
                <li class="nav-item">
                    <a href="/model_view/public/tasks/new/" class="nav-link">Create Task</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort / Show</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown08">
                        <a class="dropdown-item" href="/model_view/public/tasks/show/incomplete">Show Incomplete</a>
                        <a class="dropdown-item" href="/model_view/public/tasks/show/complete">Show Complete</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/model_view/public/tasks/show/bydateUp">Sort By Date UP</a>
                        <a class="dropdown-item" href="/model_view/public/tasks/show/bydateDown">Sort By Date Down</a>
                    </div>
                </li>

            </ul>


            @guest
                <a class="navbar-brand" href="{{ route('login') }}">Login</a>
                <a class="navbar-brand" href="{{ route('register') }}">Register</a>
                @else
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown08">
                            <a href="{{ route('logout') }}" class=" dropdown-item btn btn-primary"
                               onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>

                    </div>

                        @endguest



            </div>
        </div>
    </nav>


    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 py-4">
                    <h4 class="text-white">CRUD APP</h4>
                    <p class="text-muted">This is a CRUD Application made with Laravel 5.5 and Bootstrap4</p>
                </div>
                <div class="col-sm-4 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://github.com/jean2040/IT421-MODEL" class="text-white">GitHub</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark">
        <div class="d-flex flex-row-reverse">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>

</header>
