<!-- Navbar -->
<div class="container-fluid navbar-container-alt">
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-dark">
            <a href="{{route('/')}}" class="navbar-brand">
                <h3>Developer Portfolio</h1>
            </a>

            <!-- Responsive-->
            <button
            class="navbar-toggler navbar-toggler-right"
            type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-md-3">
                        <a href="{{route('/')}} " class="nav-link">Home</a>
                    </li>
                    <li class="nav-item mx-md-3">
                        <a href="{{route('works')}}" class="nav-link active">Works</a>
                    </li>
                    <li class="nav-item mx-md-3">
                        <a href="{{route('about')}}" class="nav-link">About</a>
                    </li>
                    @auth
                    <li class="nav-item mx-md-3">
                        <a href="{{route('dashboard')}}" class="nav-link">Admin</a>
                    </li>
                    @endauth
                </ul>
            </div>

        </nav>
    </div>
</div>