
@extends('dashboard.master')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0"
            style="font-weight: bold;font-size: 31px;color: var(--bs-warning-text-emphasis);">Dashboard
        </h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i
                class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
    </div>
    <div class="row">

        <div class="col-md-6 col-xl-3 mb-4">
            <a class="nav-link" href="{{ route('dash-groupe.index') }}">
                    <div class="card shadow border-start-primary py-2" style="color: var(--bs-blue);background:#36b9cc;margin: 0px;">
                        <div class="card-body" style="color: #247ce4;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-primary fw-bold text-xs mb-1"
                                        style="font-size: 19px;"><span
                                            style="font-weight: bold;color: #0d0d0d;">groupes</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"><span
                                            style="color: #ffffff;">00{{ $totalgroups }}</span></div>
                                </div>
                                <div class="col-auto"><i class="fas fa-child fa-2x text-gray-300"
                                        style="color: rgb(35,47,139);"></i>
                                    </div>

                                </div>
                        </div>
                    </div>
            </a>
            <div class="card shadow border-start-primary py-2"
                style="color: var(--bs-blue);background: var(--bs-cyan);margin: 26px 0px;">
                <div class="card-body" style="color: #247ce4;">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"
                                style="font-size: 19px;"><span
                                    style="color: #0d0d0d;font-style: italic;">Séances</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span
                                    style="color: #ffffff;">00010</span>
                            </div>
                        </div>
                        <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor"
                                class="fa-2x text-gray-300"
                                style="color: rgb(35,47,139);"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M592 0h-384C181.5 0 160 22.25 160 49.63V96c23.42 0 45.1 6.781 63.1 17.81V64h352v288h-64V304c0-8.838-7.164-16-16-16h-96c-8.836 0-16 7.162-16 16V352H287.3c22.07 16.48 39.54 38.5 50.76 64h253.9C618.5 416 640 393.8 640 366.4V49.63C640 22.25 618.5 0 592 0zM160 320c53.02 0 96-42.98 96-96c0-53.02-42.98-96-96-96C106.1 128 64 170.1 64 224C64 277 106.1 320 160 320zM192 352H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32C320 409.3 262.7 352 192 352z">
                                </path>
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-success py-2" style="background: #ea6921;">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span
                                    style="font-size: 19px;color: #0d0d0d;font-style: italic;"> Salles</span>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0"><span
                                    style="color: #ffffff;">00 {{ $salles }}</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-user-check fa-2x text-gray-300"
                                style="color: #8f05fb;"></i></div>
                    </div>
                </div>
            </div>
            <div class="card shadow border-start-success py-2"
                style="background: var(--bs-success);margin: 8px 0px;">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span
                                    style="font-size: 19px;font-style: italic;color: #0d0d0d;">profs</span>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0"><span
                                    style="color: #ffffff;">00{{ $totalprofs}}</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-warning py-2"
                style="background: var(--bs-danger);">
                <div class="card-body" style="width: 232.3px;">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-6">
                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span
                                    style="font-size: 19px;color: #0d0d0d;margin: -9px;">
                                    Département</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span
                                    style="color: #ffffff;">0000</span></div>
                        </div>
                        <div class="col-auto" ><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor"
                                class="fa-2x text-gray-300"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M88 104C88 95.16 95.16 88 104 88H152C160.8 88 168 95.16 168 104V152C168 160.8 160.8 168 152 168H104C95.16 168 88 160.8 88 152V104zM280 88C288.8 88 296 95.16 296 104V152C296 160.8 288.8 168 280 168H232C223.2 168 216 160.8 216 152V104C216 95.16 223.2 88 232 88H280zM88 232C88 223.2 95.16 216 104 216H152C160.8 216 168 223.2 168 232V280C168 288.8 160.8 296 152 296H104C95.16 296 88 288.8 88 280V232zM280 216C288.8 216 296 223.2 296 232V280C296 288.8 288.8 296 280 296H232C223.2 296 216 288.8 216 280V232C216 223.2 223.2 216 232 216H280zM0 64C0 28.65 28.65 0 64 0H320C355.3 0 384 28.65 384 64V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64zM48 64V448C48 456.8 55.16 464 64 464H144V400C144 373.5 165.5 352 192 352C218.5 352 240 373.5 240 400V464H320C328.8 464 336 456.8 336 448V64C336 55.16 328.8 48 320 48H64C55.16 48 48 55.16 48 64z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow border-start-primary py-2"
                style="color: var(--bs-blue);background: var(--bs-blue);margin: 8px 0px;">
                <div class="card-body" style="color: #247ce4;">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2" style="width: 155.3px;">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"
                                style="font-size: 19px;"><span
                                    style="color: #0d0d0d;font-style: italic;">Étudiants</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span
                                    style="color: #ffffff;">00{{ $students}}</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-child fa-2x text-gray-300"
                                style="color: rgb(35,47,139);"></i>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-warning py-2" style="background: var(--bs-yellow);">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span
                                    style="font-size: 19px;color: #0d0d0d;">Requests</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span
                                    style="color: #ffffff;">0000</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
            <div class="card shadow border-start-success py-2"
                style="background: var(--bs-success);margin: 8px 0px;">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span
                                    style="font-size: 19px;font-style: italic;color: #0d0d0d;">ads</span>
                            </div>
                            <div class="text-dark fw-bold h5 mb-0"><span
                                    style="color: #ffffff;">0001</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-bullhorn fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Start: Chart -->









    <div class="row">
        <div class="col-lg-7 col-xl-8">
            @include('charts.canvas-line-dash')

            {{-- <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Earnings Overview</h6>
                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle"
                            aria-expanded="false" data-bs-toggle="dropdown" type="button"><i
                                class="fas fa-ellipsis-v text-gray-400"></i></button>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                            <p class="text-center dropdown-header">dropdown header:</p><a
                                class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item"
                                href="#">&nbsp;Another action</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                href="#">&nbsp;Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area"><canvas
                            data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}"></canvas>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="col-lg-5 col-xl-4">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Revenue Sources</h6>
                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle"
                            aria-expanded="false" data-bs-toggle="dropdown" type="button"><i
                                class="fas fa-ellipsis-v text-gray-400"></i></button>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                            <p class="text-center dropdown-header">dropdown header:</p><a
                                class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item"
                                href="#">&nbsp;Another action</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                href="#">&nbsp;Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area"><canvas
                            data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Direct&quot;,&quot;Social&quot;,&quot;Referral&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}"></canvas>
                    </div>
                    <div class="text-center small mt-4"><span class="me-2">
                        <i class="fas fa-circle text-primary"></i> Presence</span>
                             <span class="me-2"><i class="fas fa-circle text-success"></i>Retard</span>
                            <span class="me-2"><i class="fas fa-circle text-info" style="color: rgb(221,19,31);"></i>
                                Absence</span></div>
                </div>
            </div>
        </div>

        {{-- @include('charts.circle-presence-of-school') --}}

    </div><!-- End: Chart -->

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="text-primary fw-bold m-0">Projects</h6>
                </div>
                <div class="card-body">
                    <h4 class="small fw-bold">Server migration<span class="float-end">20%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0"
                            aria-valuemax="100" style="width: 20%;"><span
                                class="visually-hidden">20%</span></div>
                    </div>
                    <h4 class="small fw-bold">Sales tracking<span class="float-end">40%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width: 40%;"><span
                                class="visually-hidden">40%</span></div>
                    </div>
                    <h4 class="small fw-bold">Customer Database<span class="float-end">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0"
                            aria-valuemax="100" style="width: 60%;"><span
                                class="visually-hidden">60%</span></div>
                    </div>
                    <h4 class="small fw-bold">Payout Details<span class="float-end">80%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100" style="width: 80%;"><span
                                class="visually-hidden">80%</span></div>
                    </div>
                    <h4 class="small fw-bold">Account setup<span class="float-end">Complete!</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%;"><span
                                class="visually-hidden">100%</span></div>
                    </div>
                </div>
            </div>



            <div class="card shadow mb-4" style="box-shadow: 0px 0px;">
                <div class="card-header py-3" style="background: #36b9cc;">
                    <h6 class="text fw-bold m-0" style="font-size: 20px;color:#ffffff ">Séances en cours et passées</h6>
                </div>
                <ul class="list-group list-group-flush" style="height: 300px; overflow: auto;">
                    @foreach ($seancesToDo as $index => $seance)
                        <li class="list-group-item" style="background: {{ $index  % 2 == 0 ? '#A2AD9C' : '#B6B6B4' }}; ">
                            {{-- box-shadow: 1px -1px 4px 1px var(--bs-body-color); --}}
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2" style="box-shadow: 0px 0px;">
                                    <h6 class="mb-0" style="color: #171819;">
                                        <div class="row col-9">
                                            <div class="col">
                                                <strong>{{ $seance->group->niveauxscolaire->niveauxscolaire }}</strong>
                                            </div>
                                            <div class="col ">
                                                <strong>{{ $seance->group->nom_group }}</strong>
                                            </div>
                                            <div class="col ">
                                                <strong>{{ $seance->matiere->nom_matiere }}</strong>
                                            </div>
                                            <div class="col ">
                                                <strong>{{ $seance->prof->lastName }}</strong>
                                            </div>
                                        </div></h6>
                                    <span class="text-xs" style="margin: 15px;color: #090909;">{{ $seance->heure_debut }}</span>
                                    <span class="text-xs" style="margin: 15px;color: #090909;">{{ $seance->heure_fin }}</span>
                                    <span class="text-xs" style="margin: 35px;color: #090909;front()">{{ $seance->date }}</span>
                                </div>
                                <div class="col-auto" >
                                    {{-- <button class="btn btn-primary" type="button">Button</button> --}}
                                    <a href="{{ route('dash.attendance', $seance->id) }}"
                                        class="btn btn-success" style="margin:2%">Attendance</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>





        </div>
        <div class="col">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card text-white bg-primary shadow">
                        <div class="card-body">
                            <p class="m-0">Primary</p>
                            <p class="text-white-50 small m-0">#4e73df</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card text-white bg-success shadow">
                        <div class="card-body">
                            <p class="m-0">Success</p>
                            <p class="text-white-50 small m-0">#1cc88a</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card text-white bg-info shadow">
                        <div class="card-body">
                            <p class="m-0">Info</p>
                            <p class="text-white-50 small m-0">#36b9cc</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card text-white bg-warning shadow">
                        <div class="card-body">
                            <p class="m-0">Warning</p>
                            <p class="text-white-50 small m-0">#f6c23e</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card text-white bg-danger shadow">
                        <div class="card-body">
                            <p class="m-0">Danger</p>
                            <p class="text-white-50 small m-0">#e74a3b</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card text-white bg-secondary shadow">
                        <div class="card-body">
                            <p class="m-0">Secondary</p>
                            <p class="text-white-50 small m-0">#858796</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

   {{-- @include('charts.canvas-line-dash') --}}

{{-- <pre>
@php
    print_r($data);
    @endphp
    </pre> --}}






@include('charts.lineplus');





@endsection
