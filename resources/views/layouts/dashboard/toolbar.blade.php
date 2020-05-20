<button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
    data-class="c-sidebar-show">
    <i class="c-icon c-icon-lg fa fa-bars"></i>
</button>
<a class="c-header-brand d-lg-none" href="#">
    <svg width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="{{ asset('brand/coreui.svg#full') }}"></use>
    </svg>
</a>
<button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
    data-class="c-sidebar-lg-show" responsive="true">
    <i class="c-icon c-icon-lg fa fa-bars"></i>
</button>
<ul class="c-header-nav ml-auto mr-4">
    <li class="c-header-nav-item dropdown">
        <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">
            <div class="c-avatar">
                <img class="c-avatar-img" src="{{ asset('img/avatars/6.jpg') }}" alt="{{ auth()->user()->email }}">
            </div>
            <span class="ml-2">
                {{ auth()->user()->name }}
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right pt-0">
            <div class="dropdown-header bg-light py-2">
                <strong>Configurações</strong>
            </div>
            <a class="dropdown-item" href="#">
                <i class="c-icon mr-2 fa fa-user"></i>
                Meu Perfil
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                <i class="c-icon mr-2 fa fa-sign-out-alt"></i>
                Sair
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
</ul>