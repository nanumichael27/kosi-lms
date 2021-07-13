<aside class="sidebar">
    <a href="" class="sidebar-logo"><img src="img/logo.svg" alt=""></a>
    <div class="sidebar-options">
        <a href="{{route('dashboard')}}">
            <i class="fa fa-th fa-2x"></i>
            <h3>Dashboard</h3>
        </a>
    </div>
    <div class="sidebar-options">
        <a href="{{route('favourites')}}">
            <i class="fa fa-heart fa-2x"></i>
            <h3>Favourites</h3>
        </a>
    </div>
    <div class="sidebar-options">
        <a href="{{route('mycourses')}}">
            <i class="fa fa-wpforms fa-2x"></i>
            <h3>Courses</h3>
        </a>
    </div>
    <div class="sidebar-options">
        <a href="{{route('settings')}}">
            <i class="fa fa-cog fa-2x"></i>
            <h3>Settings</h3>
        </a>
    </div>
    <div class="sidebar-options">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            <img src="img/Vector (1).svg" alt="">
            <h3>Log out</h3>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </a>
    </div>

</aside>