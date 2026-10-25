{{-- start header --}}
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <!-- Search form -->
                        <form class="navbar-search form-inline" id="navbar-search-main">
                            <div class="input-group input-group-merge search-bar">
                                <span class="input-group-text" id="topbar-addon">
                                    <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search"
                                    aria-label="Search" aria-describedby="topbar-addon">
                            </div>
                        </form>
                        <!-- / Search form -->
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center flex-row">
                        <!-- 1. LONCENG NOTIFIKASI PUTIH -->
                        <li class="nav-item me-3">
                            <a class="nav-link p-0 text-white position-relative d-flex align-items-center" href="#">
                                <svg class="icon icon-sm text-white" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;">
                                    <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                                <span class="position-absolute bg-danger rounded-circle"
                                    style="width: 8px; height: 8px; top: 0; right: 0;"></span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link pt-1 px-0 d-flex align-items-center text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <img class="avatar rounded-circle bg-white p-1 me-2"
                                        src="{{ asset('assets-guest/img/laperin.png') }}" width="30" height="30"
                                        alt="Laperin Logo">
                                    <span class="mb-0 font-small fw-bold text-white">Laperin</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                <a class="dropdown-item d-flex align-items-center" href="#">My Profile</a>
                                <a class="dropdown-item d-flex align-items-center" href="#">Settings</a>
                                <div role="separator" class="dropdown-divider my-1 border-gray-100"></div>
                                <a class="dropdown-item d-flex align-items-center text-danger" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
{{-- end header --}}