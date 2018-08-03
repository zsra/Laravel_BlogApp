<nav class="navbar navbar-transparent navbar-expand-lg">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}">BlogApp</a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-transparent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{url('posts/create')}}" class="nav-link">
                            Create Post
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('posts')}}" class="nav-link">
                            Posts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('pages/about')}}" class="nav-link">
                           About me 
                        </a>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>