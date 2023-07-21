@extends("dashboard.master")

@section("content")

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form method="POST" action="{{ route('dash-seance.update', $seance->id) }}" class="needs-validation">
    @csrf
    @method('PUT')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Edit Seance</h1>
                <div class="form-group">
                    <label for="group">Group:</label>
                    <select class="form-control" id="group" name="group" required>
                        <option value="">Select Group</option>
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}" {{ $seance->group->id == $group->id ? 'selected' : '' }}>
                                {{ $group->nom_group }}->{{ $group->niveauxscolaire->niveauxscolaire }}->{{ $group->filiere->nom_filiere }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="matiere">Matiere:</label>
                    <select class="form-control" id="matiere" name="matiere" required>
                        <option value="">Select Matiere</option>
                        @foreach ($matieres as $matiere)
                            <option value="{{ $matiere->id }}" {{ $seance->matiere->id == $matiere->id ? 'selected' : '' }}>
                                {{ $matiere->nom_matiere }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="prof">Prof:</label>
                    <select class="form-control" id="prof" name="prof" required>
                        <option value="">Select Prof</option>
                        @foreach ($profs as $prof)
                            <option value="{{ $prof->id }}" {{ $seance->prof->id == $prof->id ? 'selected' : '' }}>
                                {{ $prof->firstName }} {{ $prof->lastName }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="salle">Salle:</label>
                    <select class="form-control" id="salle" name="salle" required>
                        <option value="">Select Salle</option>
                        @foreach ($salles as $salle)
                            <option value="{{ $salle->id }}" {{ $seance->salle->id == $salle->id ? 'selected' : '' }}>
                                {{ $salle->status }} N: {{ $salle->numero_salle }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $seance->date }}" required>
                </div>

                <div class="form-group">
                    <label for="heure_debut">Heure début:</label>
                    <input type="time" class="form-control" id="heure_debut" name="heure_debut"
                        value="{{ $seance->heure_debut }}" required>
                </div>

                <div class="form-group">
                    <label for="heure_fin">Heure fin:</label>
                    <input type="time" class="form-control" id="heure_fin" name="heure_fin"
                        value="{{ $seance->heure_fin }}" required>
                </div>
                <br><br>

                <button type="submit" class="btn btn-primary">Update Seance</button>
            </div>
        </div>
    </div>
</form>

@endsection
