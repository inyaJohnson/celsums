<!DOCTYPE html>
<html>

<head>
    <base href="" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="/dashboard/dist/assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css" />
    <link rel="stylesheet" href="/dashboard/dist/assets/css/main.bundle.min.css" />
    <link rel="stylesheet" href="/dashboard/dist/assets/css/custom.css" />
    @yield('css')
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate">
        <div class="sidebar-panel">
            <div class="sidebar-compact-switch"><span></span>
                <div></div>
                <span></span>
            </div>
            <div class="brand">
                <a href="{{ route('welcome') }}">
                    <img src="/template/images/favicon2.png" alt="" />
                    <span class="app-logo-text ml-2 text-20">{{ config('app.name') }}</span>
                </a>
            </div>
            <!-- Start:: user-->
            <div class="scroll-nav" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <div class="app-user text-center">
                    <div class="app-user-photo">
                        @if (isset(auth()->user()->dp))
                            <img src="/dashboard/dist/assets/images/faces/1.jpg" alt="" />
                        @else
                            <div class="initials aside">
                                <h3>{{ auth()->user()->initials() }}</h3>
                            </div>
                        @endif
                    </div>
                    <div class="app-user-info"><span class="app-user-name">{{ auth()->user()->name() }}</span>
                        <div class="app-user-control">
                            @cannot('admin')
                                <a class="control-item" href="{{ route('profile.index') }}" title="Profile Setting"><i
                                        class="material-icons">settings</i></a>

                                <a class="control-item" href="{{ route('messages.index') }}" title="Chat"><i
                                        class="material-icons">email</i></a>
                            @endcan
                            <a class="control-item" href="{{ route('logout') }}" title="Logout"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="material-icons">exit_to_app</i></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End:: user-->
                <!-- Start:: side-nav-->
                <div class="side-nav">
                    <div class="main-menu">
                        <nav class="sidebar-nav">
                            <ul class="metismenu show-on-load" id="ul-menu">
                                <li><a href="{{ route('home') }}"><i
                                            class="material-icons nav-icon text-16">home</i>Home</a></li>
                                <span class="main-menu-title">ACTION</span>
                                <li><a href="{{ route('admin.blogs.index') }}"><i
                                            class="material-icons nav-icon text-16">comment</i>Blogs</a></li>
                                <li><a href="{{ route('admin.events.index') }}"><i
                                            class="material-icons nav-icon text-16">event</i>Events</a>
                                </li>
                                <li><a href="{{ route('admin.galleries.index') }}"><i
                                            class="material-icons nav-icon text-16">photo</i>Gallery</a>
                                </li>
                                <li><a href="{{ route('admin.faqs.index') }}"><i
                                            class="material-icons nav-icon text-16">help</i>FAQs</a>
                                </li>
                                @can('admin')
                                    <li><a href="{{ route('admin.teams.index') }}"><i
                                                class="material-icons nav-icon text-16">people</i>Team Members</a></li>

                                    <li><a href="{{ route('users.index') }}"><i
                                                class="material-icons nav-icon text-16">group</i>Users</a></li>
                                @endcan
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-wrap">
            <!-- Start::Mobile header-->
            <div class="ul-mobile-top-header bg-slate">
                <a href="{{ route('welcome') }}">
                    <img class="ul-brand-mobile" src="/template/images/favicon2.png" alt="" />
                </a>
                <div class="flex-grow-1"></div>
                <button class="sidebar-full-toggle btn btn-icon btn-primary rounded-circle text-white"><i
                        class="material-icons">menu</i></button>
                {{-- <button class="btn btn-icon ul-header-menu-toggle btn-icon btn-primary rounded-circle text-white"><i
                        class="material-icons">more_vert</i></button> --}}
                <i class="material-icons text-white ul-mobile-header-toggle">more_horiz</i>
            </div>
            <!-- End::Mobile header  -->
            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                    <div class="ul-header-menu-wrap"><i class="material-icons ul-header-menu-toggle">close</i>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link"
                                        href="{{ route('home') }}">Dashboards</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End::Header menu-->
                <div class="ul-header-topbar">
                    <div class="flex-grow-1"></div>
                    <div class="dropdown profile-dropdown ml-xs">
                        <div class="header-btn-group">
                            <button class="btn d-flex py-1 pl-2 pr-0 rounded" id="dropdownTopUserProfile" type="button"
                                data-toggle="dropdown"><span class="m-0 mr-2 font-weight-normal">Hi,
                                    {{ auth()->user()->first_name }}</span>
                                @if (isset(auth()->user()->dp))
                                    <img src="/dashboard/dist/assets/images/faces/1.jpg" alt="" />
                                @else
                                    <div class="initials top">
                                        <h3>{{ auth()->user()->initials() }}</h3>
                                    </div>
                                @endif
                            </button>
                            <div aria-labelledby="dropdownTopUserProfile">
                                <div class="card dropdown-menu p-0 ul-avatar-dropdown">
                                    <div class="card-header bg-primary">
                                        <div class="ul-avatar-dropdown-container"><img
                                                class="avatar-md rounded-circle mr-2"
                                                src="/dashboard/dist/assets/images/faces/1.jpg" />
                                            <div class="content">
                                                <p class="text-white font-weight-semi m-0">
                                                    {{ auth()->user()->name() }}
                                                </p>
                                                <p class="text-small text-muted my-xs">CGT, User</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-xl">
                                        @cannot('admin')
                                            <a class="dropdown-item link-alt" href="{{ route('messages.index') }}"><i
                                                    class="material-icons icon icon-sm">message</i>Messages</a>

                                            <a class="dropdown-item link-alt" href="{{ route('profile.index') }}"><i
                                                    class="material-icons icon icon-sm">settings</i>Settings</a>
                                        @endcan
                                    </div>
                                    <div class="card-footer text-muted">
                                        <a href="{{ route('logout') }}"
                                            class="btn btn-raised btn-raised-primary btn-sm" type="button"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">SIGN
                                            OUT</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End::Main header-->
            <!-- Start:: content body-->
            <div class="main-content-body">
                <!-- Start:: content (Your custom content)-->

                @yield('custom_content')

                <!-- Start:: Footer-->
                <div class="flex-grow-1"></div>
                <div class="bg-card px-lg py-md d-flex justify-content-center align-items-center flex-wrap shadow-6dp">
                    <p class="text-muted m-0">&copy; {{ Carbon\Carbon::now()->format('Y') }} Celsums - All rights
                        reserved.</p>
                </div>
                <!-- End:: Footer-->
            </div>
            <!-- End:: content body-->
        </div>
    </div>

    <div class="ul-sidebar-panel-overlay"></div>
    <script src="/dashboard/dist/assets/js/vendors.bundle.min.js"></script>
    <script src="/dashboard/dist/assets/js/main.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
    <script src="/dashboard/dist/assets/js/dashboard/dist/pages/doc.script.min.js"></script>
    @yield('script')
</body>

</html>
