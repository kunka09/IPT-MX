<nav class="navbar navbar-expand-lg p-md-3">
    <div class="container">
    
        <a class="navbar-brand text-dark" href="/">
           <h1>CheapTalk</h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-lg-0">
                 
            </ul>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-lg-0">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link box text-white" href="/dashboard"><i class="fas fa-home"></i> Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="far fa-list-alt"></i> Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach(App\Models\Category::all() as $c)
                                <li><a class="dropdown-item" href="/categories/{{$c->id}}">{{$c->category}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link box text-white" href="/authors"><i class="fas fa-users"></i> Users</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link box text-white" href="/logout"><i class="far fa-sign-out"></i> Logout</a>
                        </li>
                    @else
                                <li><a class=" nav-link box text-white " href="/login">Login</a></li>
                                <li><a class=" nav-link box text-white" href="/register">Register</a></li>
                           
                        </li>
                        
                    @endif
                </ul>
            </form>
        </div>
    </div>
</nav>