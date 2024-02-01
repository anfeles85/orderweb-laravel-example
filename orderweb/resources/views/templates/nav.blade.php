<!DOCTYPE html>
<html>
    <body>
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ORDER WEB</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider"/>

            <!-- Heading -->
            <div class="sidebar-heading">
                Ordenes
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1"
                   aria-expanded="true" aria-controls="collapse1">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ordenes</span>
                </a>
                <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('order.index') }}">Consultar</a>
                        <a class="collapse-item" href="{{ route('order.create') }}">Crear</a>                        
                    </div>
                </div>
            </li> 

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2"
                   aria-expanded="true" aria-controls="collapse2">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Causales</span>
                </a>
                <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('causal.index') }}">Consultar</a>
                        <a class="collapse-item" href="{{ route('causal.create') }}">Crear</a>
                    </div>
                </div>
            </li> 

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
                   aria-expanded="true" aria-controls="collapse3">
                    <i class="fas fa-fw fa-minus"></i>
                    <span>Observaciones</span>
                </a>
                <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('observation.index') }}">Consultar</a>
                        <a class="collapse-item" href="{{ route('observation.create') }}">Crear</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider"/>

            <!-- Heading -->
            <div class="sidebar-heading">
                Actividades
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4"
                   aria-expanded="true" aria-controls="collapse4">
                    <i class="fas fa-fw fa-hammer"></i>
                    <span>Actividades</span>
                </a>
                <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('activity.index') }}">Consultar</a>
                        <a class="collapse-item" href="{{ route('activity.create') }}">Crear</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5"
                   aria-expanded="true" aria-controls="collapse5">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Tipos de actividad</span>
                </a>
                <div id="collapse5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('type_activity.index') }}">Consultar</a>
                        <a class="collapse-item" href="{{ route('type_activity.create') }}">Crear</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider"/>

            <!-- Heading -->
            <div class="sidebar-heading">
                Técnicos
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6"
                   aria-expanded="true" aria-controls="collapse6">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Técnicos</span>
                </a>
                <div id="collapse6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('technician.index') }}">Consultar</a>
                        <a class="collapse-item" href="{{ route('technician.create') }}">Crear</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>               

        </ul>

    </body>
</html>

