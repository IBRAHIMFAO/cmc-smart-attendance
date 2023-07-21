@extends("dashboard.master")



@section("content")



<div class="container-fluid">
    <h3 class="text-dark mb-4">      </h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold" style="font-size: 50px">Informations sur les étudiants</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom de famille</th>
                            <th>Groupe</th>
                            <th>Code RFID</th>
                            <th>Prénom du tuteur</th>
                            <th>Nom de famille du tuteur</th>
                            <th>Numéro de téléphone du tuteur</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $student->firstName }}</td>
                            <td>{{ $student->lastName }}</td>
                            <td>{{ $student->group->nom_group }}</td>
                            <td>{{ $student->codeRFID }}</td>

                            <td>{{ $student->tuteur->firstName ?? 'N/A' }}</td>
                            <td>{{ $student->tuteur->lastName ?? 'N/A' }}</td>
                            <td>{{ $student->tuteur->numero_tel ?? 'N/A' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
