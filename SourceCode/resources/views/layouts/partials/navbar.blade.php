<div class="container">
    <header>
        <nav class="nav-header">
            <div class="search-section">
                <input type="text" name="search" class="search-input" placeholder="Search">
                <div class="search-icon">
                    <i class="bi bi-search"></i>
                </div>
            </div>
            <div class="menu-section">
                <div class="history-section">
                    <button class="btn btn-history">
                        <i class="bi bi-clock-history"></i>
                        History
                    </button>
                </div>
                <div class="profile-section" data-id="showHideProfileDropdown">
                    <i class="bi bi-person-fill" data-id="showHideProfileDropdown"></i>
                    <div class="profile-dropdown d-none" id="profileDropdown">
                        <ul class="menu-dropdown">
                            <li class="list-menu-dropdown">
                                {{-- <form action="{{route("route.greeting")}}" method="get">
                                    <button type="submit">Profile</button>
                                </form> --}}
                                <a href="{{route("route.profile_view")}}">
                                    <i class="bi bi-person-fill"></i>
                                    <span>John Doe</span>
                                </a>
                            </li>
                             <li class="list-menu-dropdown">
                                <a href="">
                                    <i class="bi bi-box-arrow-in-left"></i>
                                    <span>Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
<div class="floating-music-player d-none" id="floatingMusic">
    <img src="{{asset('image/music-profile/Aku-Milikmu.jpeg')}}">
    <div class="floating-music-detail">
        <p>Aku Milikmu</p>
        <span>Dewa 19</span>
    </div>
    <div class="played-music-play" data-id="floatingPlayControllMusic">
        <i class="bi bi-play-fill" data-id="floatingPlayControllMusic" id="floatingPlayControllMusic"></i>
    </div>
</div>
<nav class="floating-navbar" id="floatingNavbar">
    <ul class="list-menu">
        <li class="menu active">
            <a href="{{route("route.dashboard_view")}}">
                <i class="bi bi-house-fill"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="menu">
            <a href="">
                <i class="bi bi-collection-play-fill"></i>
                <span>Library</span>
            </a>
        </li>
         <li class="menu">
            <a href="">
                <i class="bi bi-chat-left-dots-fill"></i>
                <span>Message</span>
            </a>
        </li>
    </ul>
</nav>
