<div class="logo">
    <a href="#">
        <img src="{{asset('public/images/icon/logo.png')}}" alt="Cool Admin" />
    </a>
</div>
<div class="menu-sidebar__content js-scrollbar1">
    <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
            <li class="active has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="{{url('index')}}">Dashboard 1</a>
                    </li>
                    <li>
                        <a href="{{url('index2')}}">Dashboard 2</a>
                    </li>
                    <li>
                        <a href="{{url('index3')}}">Dashboard 3</a>
                    </li>
                    <li>
                        <a href="{{url('index4')}}">Dashboard 4</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('chart')}}">
                    <i class="fas fa-chart-bar"></i>Charts</a>
            </li>
            <li>
                <a href="{{url('table')}}">
                    <i class="fas fa-table"></i>Tables</a>
            </li>
            <li>
                <a href="{{url('form')}}">
                    <i class="far fa-check-square"></i>Forms</a>
            </li>
            <li>
                <a href="{{url('calendar')}}">
                    <i class="fas fa-calendar-alt"></i>Calendar</a>
            </li>
            <li>
                <a href="{{url('map')}}">
                    <i class="fas fa-map-marker-alt"></i>Maps</a>
            </li>
            <li class="has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-copy"></i>Pages</a>
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                    <li>
                        <a href="{{url('login')}}">Login</a>
                    </li>
                    <li>
                        <a href="{{url('register')}}">Register</a>
                    </li>
                    <li>
                        <a href="{{url('forget-pass')}}">Forget Password</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-desktop"></i>UI Elements</a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="{{url('button')}}">Button</a>
                    </li>
                    <li>
                        <a href="{{url('badge')}}">Badges</a>
                    </li>
                    <li>
                        <a href="{{url('tab')}}">Tabs</a>
                    </li>
                    <li>
                        <a href="{{url('card')}}">Cards</a>
                    </li>
                    <li>
                        <a href="{{url('alert')}}">Alerts</a>
                    </li>
                    <li>
                        <a href="{{url('progressbar')}}">Progress Bars</a>
                    </li>
                    <li>
                        <a href="{{url('modal')}}">Modals</a>
                    </li>
                    <li>
                        <a href="{{url('switch')}}">Switchs</a>
                    </li>
                    <li>
                        <a href="{{url('grid')}}">Grids</a>
                    </li>
                    <li>
                        <a href="{{url('fontawesome')}}">Fontawesome Icon</a>
                    </li>
                    <li>
                        <a href="{{url('typo')}}">Typography</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>