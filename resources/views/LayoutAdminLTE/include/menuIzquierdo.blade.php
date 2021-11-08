
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <div class="scrollbar-inner">
            <div class="navbar-inner">
            <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav"  id="accordion">
                        <li class="nav-item">
                            <a class="nav-link active" href="">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Portal Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('customers')}}">
                                <i class="ni ni-briefcase-24 text-primary"></i>
                                <span class="nav-link-text ">Customers</span>    {{-- Cuentas usuarios admin  login--}} {{-- Privilegios --}} {{-- Log-Historial de actividades --}}
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('communes')}}">
                                <i class="ni ni-briefcase-24 text-primary"></i>
                                <span class="nav-link-text ">Communes</span>    {{-- Cuentas usuarios admin  login--}} {{-- Privilegios --}} {{-- Log-Historial de actividades --}}
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('regions')}}">
                                <i class="fas fa-globe-americas text-primary"></i>
                                <span class="nav-link-text ">Regions</span>    {{-- Cuentas usuarios admin  login--}} {{-- Privilegios --}} {{-- Log-Historial de actividades --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
