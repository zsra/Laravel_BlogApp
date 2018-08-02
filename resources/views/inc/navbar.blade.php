<nav class="navbar navbar-transparent navbar-expand-lg">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('pages/index')}}">BlogApp</a>
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
                </ul>
            </div>
        </div>
    </nav>