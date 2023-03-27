<!-- Menu -->
<aside
    id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <img src="{{ asset("admin/img/logo-black-svg.svg") }}" alt="" class="logo">
        </a>
    </div>

    <div class="menu-divider mt-0"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div data-i18n="Email">Email</div>
            </a>
        </li>


        <li class="menu-item">
            <a href="app-invoice-list.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Transaction List">Transaction List</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-user-list.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="User's List">User's List</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxl-blogger"></i>
                <div data-i18n="Dashboards">Blogs</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="add-blog.html" class="menu-link">
                        <div data-i18n="Add Blog">Add Blogs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="blog-list.html" class="menu-link">
                        <div data-i18n="Update Blog">Blog's List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="bx bx-power-off me-2"></i>
                <div data-i18n="Log Out">Log Out</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
