<nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark"
style="background: rgb(81,170,208);">
<div class="container-fluid d-flex flex-column p-0"><img
        src="./assets/img/Logo/logo2.png?h=ea1ed126e28b88a563d3e9da4b1d5464" width="200" height="70">
    <hr class="sidebar-divider my-0">
    <ul class="navbar-nav text-light" id="accordionSidebar">

                <li class="nav-item"><a class="nav-link active" href="./index.html" style="margin: 0px;"><i
                    class="fas fa-tachometer-alt"></i><span>Dashboard 1</span></a>
                </li>
                <li class="nav-item"><a class="nav-link active" href="./index.html" style="margin: 0px;"><i
                    class="fas fa-tachometer-alt"></i><span>Dashboard 2</span></a>
                </li>
                <li class="nav-item"><a class="nav-link active" href="./index.html" style="margin: 0px;"><i
                    class="fas fa-tachometer-alt"></i><span>Dashboard 3</span></a>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('dash-groupe.index') }}">
                            <i class="fas fa-table">  </i><span>Groups</span></a>

                            <a class="nav-link" href="{{ route('dash-seance.index') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512"
                        width="1em" height="1em" fill="currentColor"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 248H128V192H48V248zM48 296V360H128V296H48zM176 296V360H272V296H176zM320 296V360H400V296H320zM400 192H320V248H400V192zM400 408H320V464H384C392.8 464 400 456.8 400 448V408zM272 408H176V464H272V408zM128 408H48V448C48 456.8 55.16 464 64 464H128V408zM272 192H176V248H272V192z">
                        </path>
                    </svg><span>&nbsp;Séances</span></a>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('dash-student.index') }}"><i class="fas fa-user-graduate"></i>
                    <span>Étudiants</span></span></a>
                </li>

                <li class="nav-item"><a class="nav-link" href="./login.html"><i
                    class="far fa-user-circle"></i><span>Login</span></a></li>
        <li class="nav-item"><a class="nav-link" href="./register.html"><i
                    class="fas fa-user-circle"></i><span>Register</span></a></li>
        <li class="nav-item"><a class="nav-link" href="./forgot-password.html"><i
                    class="fas fa-key"></i><span>Forgotten Password</span></a></li>
        <li class="nav-item"><a class="nav-link" href="./404.html"><i
                    class="fas fa-exclamation-circle"></i><span>Page Not Found</span></a></li>
        <li class="nav-item"><a class="nav-link" href="./blank.html"><i
                    class="fas fa-window-maximize"></i><span>Blank Page</span></a></li>
    </ul><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"
        style="transform: perspective(0px) translate(-97px);"></button><a
        class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <div class="text-center d-none d-md-inline"></div>
</div>
</nav>
