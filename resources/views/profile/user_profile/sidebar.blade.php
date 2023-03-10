<!-- Sidebar Start -->
<nav class="sidebar">
    <header>
        <div class="image-text py-4 px-5">
                    <span class="image">
                        <img src="" alt="" class="logo  d-none">
                        <img src="" alt="" class="logo-icon d-none">
                    </span>
        </div>

        <!-- Arrow for toggle sidebar -->
        <i class="fas fa-chevron-right toggle"></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <ul class="menu-links mx-4">
                <li class="nav-link">
                    <a href="{{ url('/user-profile') }}">
                        <i class="fas fa-home icon fs-3"></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ url('/project-list') }}">
                        <i class="fas fa-briefcase icon fs-3"></i>
                        <span class="text nav-text">Projects</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ url('/user-profile/bid') }}">
                        <i class="fas fa-clipboard-list icon fs-3"></i>
                        <span class="text nav-text">Bids</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class="fas fa-wallet icon fs-3"></i>
                        <span class="text nav-text">Transactions</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Sidebar End-->
