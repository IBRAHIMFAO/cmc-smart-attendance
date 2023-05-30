@extends('layouts')

@section('content')
    <h1>Attendance for Seance</h1>
    {{-- <p>Seance ID: {{ $attendance->id }}</p> --}}

    <!-- Add your attendance records here -->
    <!-- Customize the view based on your attendance data structure -->

    <table>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Attendance Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>sssssssssssssss</tr>
            <tr>ezzzzzzzzzzzzzz</tr>
            @foreach ($attendance as $record)
                <tr>
                    <td>{{ $record->student->name }}</td>
                    <td>{{ $record->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
