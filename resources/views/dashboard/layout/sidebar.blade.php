<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-light">
    <div class="offcanvas-md offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" href="/dashboard/sales">
                        <span data-feather="users"></span>
                        <span>Daftar Sales</span>
                    </a>
                </li>
            </ul>

            <h6
                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                <span>Reports</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <svg class="bi">
                        <use xlink:href="#plus-circle" />
                    </svg>
                </a>
            </h6>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/omset">
                        <svg class="bi">
                            <use xlink:href="#file-earmark-text" />
                        </svg>
                        <span>Omset</span>
                    </a>
                </li>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="bi">
                            <use xlink:href="#gear-wide-connected" />
                        </svg>
                        <span>Settings</span>
                    </a>
                </li>
                <ul class="nav flex-column mb-auto">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="#">
                            <svg class="bi">
                                <use xlink:href="#gear-wide-connected" />
                            </svg>
                            <span>User Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" class="nav-link d-flex align-items-center gap-2" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <svg class="bi">
                                    <use xlink:href="#door-closed" />
                                </svg>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
        </div>
    </div>
</div>
