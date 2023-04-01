<section id="sidebar">
    <div class="brand px-3">
        <img src="/img/logo-black-svg.svg" alt="ArbeitLinkers" class="logo">
    </div>
    <ul class="side-menu top ps-3">
        <li class="{{ request()->is('dashboard') ? 'active' : ''}} ">
            <a href="{{ url('/dashboard') }}">
                <i class='bx bx-home fs-5'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="{{ request()->is('dashboard/contact-details') ? 'active' : ''}} ">
            <a href="{{ url('dashboard/contact-details') }}">
                <i class='bx bx-envelope fs-5'></i>
                <span class="text">Contact details</span>
            </a>
        </li>
        <li>
            <a href="transactionlist.html">
                <i class='bx bx-food-menu fs-5'></i>
                <span class="text">Transaction List</span>
            </a>
        </li>
        <li class="{{ request()->is('dashboard/users') ? 'active' : ''}} ">
            <a href="{{ url('dashboard/users') }}">
                <i class='bx bx-user fs-5'></i>
                <span class="text">User's List</span>
            </a>
        </li>
        <li>
            <a href="add-blog.html">
                <i class="bx bx-message-square-add fs-5"></i>
                <span class="text">Add Blog</span>
            </a>
        </li>
        <li>
            <a href="blog_list.html">
                <i class="bx bxl-blogger fs-5"></i>
                <span class="text">Blog List</span>
            </a>
        </li>
    </ul>
</section>
