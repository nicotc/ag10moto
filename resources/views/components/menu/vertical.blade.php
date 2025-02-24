
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/dashboard" class="app-brand-link">

        <span class="app-brand-text demo menu-text fw-bold ms-2">
            <img src="{{ asset('assets/img/ag10logo.png') }}" style="height:40px" alt="logo" class="logo" />
        </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="align-middle bx menu-toggle-icon d-none d-xl-block fs-4"></i>
        <i class="align-middle bx bx-x d-block d-xl-none bx-sm"></i>
      </a>
    </div>

    <div class="mt-0 menu-divider"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="py-1 menu-inner">
      <!-- Dashboards -->

      @role(['Admin', 'Super Admin'])

      <li class="menu-item">
        <a href="{{ route('dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Dashboards">Dashboards</div>
        </a>
      </li>


      {{-- ACL --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-shield"></i>
          <div data-i18n="ACL">ACL</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('roles-list') }}" class="menu-link">
              <div data-i18n="Roles">Roles</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('permission-list') }}" class="menu-link">
              <div data-i18n="Permission">Permission</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('user-list') }}" class="menu-link">
              <div data-i18n="Users">Users</div>
            </a>
          </li>
        </ul>
      </li>
      {{-- ACL --}}

      <li class="menu-item">
        <a href="{{ route('idiomas') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-message-detail"></i>
          <div data-i18n="Idiomas">Idiomas</div>
        </a>
      </li>



      <li class="menu-item">
        <a href="{{ route('estados') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-station"></i>
          <div data-i18n="Estados">Estados</div>
        </a>
        </li>


      <li class="menu-item">

        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-envelope"></i>
          <div data-i18n="Email">Email</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('email.AccountEmail') }}" class="menu-link">
              <div data-i18n="Cuentas">Cuentas</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('email.TemplateEmail') }}" class="menu-link">
              <div data-i18n="Templates">Templates</div>
            </a>
          </li>

        </ul>
      </li>

      @endrole

      {{-- Pedidos --}}

      <li class="menu-item">
        <a href="{{ route('pedidos-list') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-cart-alt"></i>
          <div data-i18n="Pedidos">Pedidos</div>
        </a>
      </li>


      <li class="menu-item">
        <a href="{{ route('contactproduct') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-cart-alt"></i>
          <div data-i18n="CONTACTOS PRODUCTO">CONTACTOS PRODUCTO</div>
        </a>
      </li>





    </ul>
  </aside>
