<nav id="sidebar" class="sidebar-wrapper">

    <!-- App brand starts -->
    <div class="app-brand px-3 py-3 d-flex align-items-center">
        <a href="index.html">
            <img src="{{asset('nyke/design/assets/images/logo.svg')}}" class="logo" alt="Bootstrap Gallery" />
        </a>
    </div>
    <!-- App brand ends -->

    <!-- Sidebar profile starts -->
    <div class="sidebar-user-profile">
        <img src="{{asset('nyke/design/assets/images/user.png')}}" class="profile-thumb rounded-2 p-2 d-lg-flex d-none"
            alt="Bootstrap Gallery" />
        <h5 class="profile-name lh-lg mt-2 text-truncate">
            {{ auth()->user()->name }}
        </h5>
        <ul class="profile-actions d-flex m-0 p-0">
            <li>
                <a href="javascript:void(0)">
                    <i class="bi bi-skype fs-4"></i>
                    <span class="count-label"></span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="bi bi-dribbble fs-4"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="bi bi-twitter fs-4"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar profile ends -->

    <!-- Sidebar menu starts -->
    <div class="sidebarMenuScroll">
        <ul class="sidebar-menu">
            <li class="active current-page">
                <a href="index.html">
                    <i class="bi bi-bar-chart-line"></i>
                    <span class="menu-text">Analytics</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#!">
                    <i class="bi bi-columns-gap"></i>
                    <span class="menu-text">Master Data</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><strong class="fas fa-users">User</strong></a>
                    </li>
                    <li>
                        <a href="{{route('jurusan.index')}}">Jurusan</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="badges.html">Badges</a>
                    </li>
                    <li>
                        <a href="carousel.html">Carousel</a>
                    </li>
                    <li>
                        <a href="list-items.html">List Items</a>
                    </li>
                    <li>
                        <a href="progress.html">Progress Bars</a>
                    </li>
                    <li>
                        <a href="popovers.html">Popovers</a>
                    </li>
                    <li>
                        <a href="tooltips.html">Tooltips</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#!">
                    <i class="bi bi-code-square"></i>
                    <span class="menu-text">Forms</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="form-inputs.html">Form Inputs</a>
                    </li>
                    <li>
                        <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                    </li>
                    <li>
                        <a href="form-file-input.html">File Input</a>
                    </li>
                    <li>
                        <a href="form-validations.html">Validations</a>
                    </li>
                    <li>
                        <a href="date-time-pickers.html">Date Time Pickers</a>
                    </li>
                    <li>
                        <a href="form-layouts.html">Form Layouts</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#!">
                    <i class="bi bi-window-sidebar"></i>
                    <span class="menu-text">Invoices</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="create-invoice.html">Create Invoice</a>
                    </li>
                    <li>
                        <a href="view-invoice.html">View Invoice</a>
                    </li>
                    <li>
                        <a href="invoice-list.html">Invoice List</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="subscribers.html">
                    <i class="bi bi-check-circle"></i>
                    <span class="menu-text">Subscribers</span>
                </a>
            </li>
            <li>
                <a href="contacts.html">
                    <i class="bi bi-wallet2"></i>
                    <span class="menu-text">Contacts</span>
                </a>
            </li>
            <li>
                <a href="settings.html">
                    <i class="bi bi-gear"></i>
                    <span class="menu-text">Settings</span>
                </a>
            </li>
            <li>
                <a href="profile.html">
                    <i class="bi bi-person-square"></i>
                    <span class="menu-text">Profile</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#!">
                    <i class="bi bi-code-square"></i>
                    <span class="menu-text">Cards</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="cards.html">Cards</a>
                    </li>
                    <li>
                        <a href="advanced-cards.html">Advanced Cards</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#!">
                    <i class="bi bi-pie-chart"></i>
                    <span class="menu-text">Graphs</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="apex.html">Apex</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="maps.html">
                    <i class="bi bi-pin-map"></i>
                    <span class="menu-text">Maps</span>
                </a>
            </li>
            <li>
                <a href="tabs.html">
                    <i class="bi bi-slash-square"></i>
                    <span class="menu-text">Tabs</span>
                </a>
            </li>
            <li>
                <a href="modals.html">
                    <i class="bi bi-terminal"></i>
                    <span class="menu-text">Modals</span>
                </a>
            </li>
            <li>
                <a href="icons.html">
                    <i class="bi bi-textarea"></i>
                    <span class="menu-text">Icons</span>
                </a>
            </li>
            <li>
                <a href="typography.html">
                    <i class="bi bi-explicit"></i>
                    <span class="menu-text">Typography</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#!">
                    <i class="bi bi-upc-scan"></i>
                    <span class="menu-text">Login/Signup</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="signup.html">Signup</a>
                    </li>
                    <li>
                        <a href="forgot-password.html">Forgot Password</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="page-not-found.html">
                    <i class="bi bi-exclamation-diamond"></i>
                    <span class="menu-text">Page Not Found</span>
                </a>
            </li>
            <li>
                <a href="maintenance.html">
                    <i class="bi bi-exclamation-octagon"></i>
                    <span class="menu-text">Maintenance</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#!">
                    <i class="bi bi-code-square"></i>
                    <span class="menu-text">Multi Level</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#!">Level One Link</a>
                    </li>
                    <li>
                        <a href="#!">
                            Level One Menu
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#!">Level Two Link</a>
                            </li>
                            <li>
                                <a href="#!">Level Two Menu
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="#!">Level Three Link</a>
                                    </li>
                                    <li>
                                        <a href="#!">Level Three Link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#!">Level One Link</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Sidebar menu ends -->

</nav>