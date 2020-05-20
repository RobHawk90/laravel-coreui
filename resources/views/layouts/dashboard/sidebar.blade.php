<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="App Logo">
            <use xlink:href="{{ asset('brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="App Logo">
            <use xlink:href="{{ asset('brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <i class="c-sidebar-nav-icon fa fa-home"></i>
                Início
            </a>
        </li>
        <li class="c-sidebar-nav-title">Páginas</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="#">
                <i class="c-sidebar-nav-icon fa fa-circle"></i>
                Charts
            </a>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="c-sidebar-nav-icon fa fa-circle"></i>
                Icons
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="#">
                        <i class="c-sidebar-nav-icon fa fa-circle"></i>
                        CoreUI Icons
                        <span class="badge badge-success">Free</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-divider"></li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>