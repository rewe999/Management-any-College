<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Strona Główna</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed collapsePrints" href="#" data-toggle="collapse" data-target="#collapsePrints"
           aria-expanded="true" aria-controls="collapsePrints">
            <i class="fas fa-print"></i>
            <span>Druki</span>
        </a>
        <div id="collapsePrints" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Druki:</h6>
                <a class="collapse-item" href="{{route('form.add')}}">Dodaj druk</a>
                <a class="collapse-item" href="{{route('form.edit')}}">Pokaz druki</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeoples"
           aria-expanded="true" aria-controls="collapsePeoples">
            <i class="fas fa-user-friends"></i>
            <span>Pracownicy</span>
        </a>
        <div id="collapsePeoples" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pracownicy:</h6>
                <a class="collapse-item" href="{{route('people.add')}}">Dodaj pracownika</a>
                <a class="collapse-item" href="{{route('people.edit')}}">Pokaż pracownikówi</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-newspaper"></i>
            <span>Aktualności</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Aktualności:</h6>
                <a class="collapse-item" href="{{route('news.add')}}">Dodaj aktualności</a>
                <a class="collapse-item" href="{{route('news.edit')}}">Pokaż aktualności</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

</ul>
