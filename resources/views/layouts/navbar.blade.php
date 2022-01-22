<nav class="navbar navbar-expand-md bg-dark navbar-dark" id="navbar_top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{asset('assets/pwsz-logo.jpg')}}" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end text-wrap" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item dropdown text-center"> <a class="nav-link" href="{{route('peoples.index')}}"> PRACOWNICY UCZELNI</a> </li>
                <li class="nav-item dropdown text-center"> <a class="nav-link" href="{{route('print')}}"> DRUKI </a> </li>
                <li class="nav-item dropdown text-center"> <a class="nav-link" href="{{route('contact')}}"> KONTAKT </a> </li>
                <li class="nav-item dropdown text-center"> <a class="nav-link" href="{{route('news')}}">AKTUALNOŚCI</a> </li>

                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdownMenuLink" class="nav-link dropdown-toggle text-center" href="#" role="button" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home') }}">
                                Zarządzaj
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Wyloguj
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth

            </ul>

        </div>
    </div>
</nav>

<style>
    .logo {
        width: 15rem;
        height: 5rem;
    }

    .nav-link:hover {
        text-decoration: underline;
        transition: width 2s;
    }

</style>


<script>
    document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
</script>
