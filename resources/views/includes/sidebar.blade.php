<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
               
                   <li>
                    <a href="#"> 
                        <i class="fas fa-home"></i>Dashboard</a>
                    </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-list-ol"></i>Kelas</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        
                        <li>
                            <a href="{{route('siswakelas1.index')}}"><i class="fas fa-users"></i>Kelas 1</a>
                        </li>
                        <li>
                            <a href="{{route('siswakelas2.index')}}"><i class="fas fa-users"></i>Kelas 2</a>
                        </li>
                        <li>
                            <a href="{{route('siswakelas3.index')}}"><i class="fas fa-users"></i>Kelas 3</a>
                        </li>
                        <li>
                            <a href="{{route('siswakelas4.index')}}"><i class="fas fa-users"></i>Kelas 4</a>
                        </li>
                        <li>
                            <a href="{{route('siswakelas5.index')}}"><i class="fas fa-users"></i>Kelas 5</a>
                        </li>
                        <li>
                            <a href="{{route('siswakelas6.index')}}"><i class="fas fa-users"></i>Kelas 6</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('daftarguru.index')}}">
                        <i class=" fas fa-user"></i>Guru</a>
                </li>
                
                <li>
                    <a href="{{route('siswa.create')}}">
                        <i class=" fas fa-plus"></i>Tambah Siswa</a>
                </li>
                <li>
                    <a href="{{route('daftarguru.create')}}">
                        <i class=" fas fa-plus"></i>Tambah Guru</a>
                </li>
                <li>
                    <a href="{{route('mapel.index')}}">
                        <i class="fas  fa-list-ul"></i>Mata Pelajaran</a>
                </li>
                
                <li class="has-sub">
                    <a class="js-arrow" href="{{route('jadwal')}}">
                        <i class="fas fa-calendar-alt"></i>Jadwal Mapel</a>
                   
                </li>
                {{--  <li>
                    <ahref="form.html">
                        <i class="far fa-home"></i>Forms</a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li> --}}
                {{-- <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>