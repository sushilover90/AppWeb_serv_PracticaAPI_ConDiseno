
<div class="sidebar" data-color="black">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->

    <div class="logo" align="center">
            <span class="simple-text logo-mini">
                League of Legends
            </span>

        <span class="simple-text logo-normal">
                Bienvenido
            </span>

    </div>

    <div class="sidebar-wrapper" id="sidebar-wrapper">

        <ul class="nav">
            <p class="ml-3 text-white">Menú</p>

            <li>
                <a href="/">INICIO</a>
            </li>

            <li >
                <a href="/board">
                    <p>Informacion Gral de Usuario</p>
                </a>
            </li>

            <li >
                <a href="./map.html">
                    <p>Maps</p>
                </a>
            </li>

            <li >
                <a href="./notifications.html">
                    <p>Notifications</p>
                </a>
            </li>

            <li >
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
</div>
