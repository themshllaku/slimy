<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">
        <h4 class="navbar-brand-full">{{ config('app.name') }}</h4>
        <h4 class="navbar-brand-minimized">{{ config('app.name') }}</h4>
    </a>

    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item">
            <span class="text-muted">{{ auth()->user()->organisation->name }}</span>
        </li>
    </ul>

    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown mx-3">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>

                <a class="dropdown-item" href="{{ route('app.users.profile', ['id' => auth()->user()->id]) }}">
                    <i class="fa fa-user"></i> My Profile
                </a>

                <a class="dropdown-item" href="#">
                    <i class="fa fa-lock"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</header>