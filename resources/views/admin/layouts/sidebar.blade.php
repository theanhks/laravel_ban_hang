<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>@lang('menu')
                    </span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="mdi mdi-speedometer"></i> <span>@lang('dashboards')
                        </span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics" class="nav-link">@lang('translation.analytics')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm" class="nav-link">@lang('translation.crm')
                                </a>
                            </li>

                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                        <i class="mdi mdi-speedometer"></i> <span>@lang('product')
                        </span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProducts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.product')}}" class="nav-link">@lang('list')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.product.create')}}" class="nav-link">@lang('create')
                                </a>
                            </li>

                        </ul>
                    </div>
                </li> <!-- end Product -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProductCategories" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProductCategories">
                        <i class="mdi mdi-speedometer"></i> <span>@lang('category')
                        </span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProductCategories">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.category')}}" class="nav-link">@lang('list')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.category.create')}}" class="nav-link">@lang('create')
                                </a>
                            </li>

                        </ul>
                    </div>
                </li> <!-- end Product -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPagess" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPagess">
                        <i class="mdi mdi-speedometer"></i> <span>@lang('page')
                        </span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPagess">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link">@lang('list')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link">@lang('create')
                                </a>
                            </li>

                        </ul>
                    </div>
                </li> <!-- end Html page -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSettings" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSettings">
                        <i class="mdi mdi-speedometer"></i> <span>@lang('setting')
                        </span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSettings">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link">@lang('list')
                                </a>
                            </li>

                        </ul>
                    </div>
                </li> <!-- end setting -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
