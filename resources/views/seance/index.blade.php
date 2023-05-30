@extends("layouts")

@section('content')

        <!-- resources/views/seance/index.blade.php -->

        <a class="navbar-brand">Tableaux séance</a>



        <!-- Display the list of seances -->


        {{-- <ul>
            @foreach ($seances as $seance)
                <li>{{ $seance->date }}</li>
                <td>{{ $seance->matiere->label }}</td>
                <td>{{ $seance->prof->firstName }} {{ $session->prof->lastName }}</td>
                <td>{{ $seance->salle->label }}</td>
            @endforeach
        </ul> --}}
        {{-- <div class="container"> --}}

                <nav class="navbar navbar-light bg-light justify-content-between">
                    {{-- <a class="navbar-brand">Tableaux séance</a> --}}
                    <a href="{{ route('crud.create') }}" class="btn btn-primary">Add Seance</a>
                        <form class="form-line">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                </nav>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">i</th>
                        <th scope="col">Group</th>
                        <th scope="col">Matiere</th>
                        <th scope="col">Prof</th>
                        <th scope="col">Salle</th>
                        <th scope="col">Date</th>
                        <th scope="col">début seance </th>
                        <th scope="col">Fin seance</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (!@empty($seances))
                        @php $i=1 ;    @endphp

                    @foreach ($seances as $seance )
                        <tr>
                            <td> {{ $i }} </td>
                            <td> {{$seance->group->nom_group   }} </td>
                            <td> {{$seance->matiere->nom_matiere  }} </td>
                            <td> {{$seance->prof->firstName }} {{$seance->prof->lastName }} </td>
                            <td> {{$seance->salle->status  }} N¤: {{$seance->salle->numero_salle  }} </td>
                            <td> {{ $seance->date }} </td>
                            <td> {{ $seance->heure_debut }} </td>
                            <td> {{$seance->heure_fin  }} </td>
                            <td> {{$seance->created_at  }} </td>
                            <td> {{$seance->updated_at  }} </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('crud.edit', $seance->id) }}" class="btn btn-primary" style="margin:2%">Edit</a>
                                    <form action="{{ route('crud.destroy', $seance->id) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="margin:2%">Delete</button>
                                    </form>

                                    <!-- Add this button inside your 'seance' view -->
                                    {{-- @if ($seance->isPast()) <!-- Assuming you have a method 'isPast()' in your 'Seance' model to check if the seance has already started --> --}}
                                        <a href="{{ route('crud.attendance', $seance->id) }}"
                                             class="btn btn-success" style="margin:2%">Attendance</a>
                                    {{-- @else --}}
                                        {{-- <button class="btn btn-primary" disabled>View Attendance</button> --}}
                                    {{-- @endif --}}
                                </div>
                            </td>
                        </tr>



                        @php $i++;  @endphp
                    @endforeach

                    @endif





                    </tbody>
                </table>
        {{-- </div> --}}
@endsection
