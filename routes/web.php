<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendanceController3;
use App\Http\Controllers\AttendanceController4;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dashSeanceController;
use App\Http\Controllers\dashGroupeController;
use App\Http\Controllers\dashStudentController;
use App\Http\Controllers\EmploiDuTempsController;
use App\Http\Controllers\GroupController;
use Carbon\Carbon;

use App\Models\Attendance;
use App\Models\Seance;
use App\Models\Student;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/send", [SMSController::class, 'sendsms']);


Route::get('/timetable', function () {
    return view('tabletest');
});

// Route::get('/testtable', [EmploiDuTempsController::class, 'index']);
Route::get('/test', function () {
    return view('test');
});


Route::get('/export-excel',[GroupController::class,'export'])->name('export-excel');
Route::post('/import-excel',[GroupController::class,'import'])->name('import-excel');

Route::resource('crud', CRUDController::class);
Route::get('/crud/seance/{id}/attendance',[CRUDController::class,'attendance'])->name('crud.attendance');
Route::resource('groups', GroupController::class);
// Route::get('/seance/index',[CRUDController::class,'index'] )->name('seance.index');
// Route::get('/seance/create',[CRUDController::class,'create'] )->name('seance.create');
// Route::get('/seance/edit/{id}',[CRUDController::class,'edit'] )->name('seance.edit');
// Route::get('/seance/destroy',[CRUDController::class,'destroy'] )->name('seance.destroy');

//###############dashboard#########################################"
Route::get('/dd',[dashboardController ::class,'index'] );
Route::resource('/dash-seance',dashSeanceController::class);
Route::resource('/dash-groupe',dashGroupeController::class);
Route::resource('/dash-student',dashStudentController::class);
Route::get('/seances-dash/{id}/attendance',[dashSeanceController::class,'attendance'])->name('dash.attendance');





// #################################################################
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dash', function () {
//     return view('dashcontent');
// });


Route::get('/check4/{code}', [AttendanceController4::class,'store4']);
Route::get('/check3/{code}', [AttendanceController3::class, 'store3']);

// Route::get("/getSessions", [AttendanceController4::class, 'getSessions']);
// Route::get("/session/{id}/get", [AttendanceController4::class, 'show']);



Route::get('/welcome', function () {
    $seances= \App\Models\Seance::all();
    $groups=\App\Models\Group::all();
    $students=\App\Models\Student::all();
    // $students_of_each_group=\App\Models\Student::where('code_group', 1)->get();
    $studentsByGroup = \App\Models\Student::with('group')->get()->groupBy('group.label');

    return view('welcomeRFID', [
         'seances'=>$seances,
         'groups'=>$groups,
         'a'=>$studentsByGroup,
         'datetime'=>Carbon::now()->format('l d M Y '),
         's'=>$students
    ]);
});






Route::get('/check/{code}', function ($code) {
    // Retrieve the student by the RFID code
    $student = Student::where('codeRFID', $code)->first();

    // If the student doesn't exist, return an error response


    if (!$student) {
        return response()->json(['error' => 'Student not found'], 404);
    }

    // Retrieve the current session for the student's group
    $currentSession = Seance::where('code_group', $student->code_group)
        ->where('heure_debut', '<=', Carbon::now())
        ->where('heure_fin', '>=', Carbon::now())
        ->first();

    // If there's no current session, return an error response
    if (!$currentSession) {
        return response()->json(['error' => 'No active session found for the student\'s group'], 404);
    }

    // Check if the student has already attended the current session
    // $attendance = Attendance::where('codeRFID', $code)
    $attendance = Attendance::where('code_student', $student->id)
        ->where('code_seance', $currentSession->id)
        ->first();

    // If the student has already attended, return a success response with the attendance record
    if ($attendance) {
        return response()->json(['success' => true, 'attendance' => $attendance]);
    }

    // If the student hasn't attended, create a new attendance record
    $attendance = new Attendance;
    // $attendance->codeRFID = $code;
    $attendance->code_student=$student->id;
    $attendance->code_seance = $currentSession->id;
    $attendance->status = 'present';
    $attendance->date = Carbon::now();
    // $attendance->updated_at = Carbon::now();
    $attendance->save();

    // Return a success response with the new attendance record
    return response()->json(['success' => true, 'attendance' => $attendance]);
});



Route::get('/checkn/{code}', function ($code) {
    // Retrieve the student by the RFID code
    $student = Student::where('codeRFID', $code)->first();

    // If the student doesn't exist, return an error response
    if (!$student) {
        return response()->json(['error' => 'Student not found'], 404);
    }

    // Retrieve the current session for the student's group
    $currentSession = Seance::where('code_group', $student->code_group)
        ->whereDate('date', '=', Carbon::now()->toDateString())
        ->where('heure_debut', '<=', Carbon::now())
        ->where('heure_fin', '>=', Carbon::now())
        ->first();

    // If there's no current session, find the next session for the student's group
    if (!$currentSession) {
        $nextSession = Seance::where('code_group', $student->code_group)
            // ->where('heure_debut', '>', Carbon::now())
            ->where('date', '>=', Carbon::now()->format('Y-m-d'))

            ->orderBy('date', 'asc')
            ->orderBy('heure_debut', 'asc')
            // ->get()
            ->first();

        // If there's no next session, return an error response
        if (!$nextSession) {
            return response()->json(['error' => 'No upcoming session found for the student\'s group'], 404);
        }

        // Return a success response with the next session information
        return response()->json(['success' => true, 'next_session' => $nextSession->date
                                                .'at' .$nextSession-> heure_debut .'fin'.$nextSession->heure_fin]);
        // Get the date and heure_debut of the first session in the collection
        // return print_r($nextSession);
        // return response()->json(['success' => 'Next session is on ' .$nextSession-> date. ' at ' .$nextSession-> heure_debut], 200);

        // return response()->json(['error' => 'No active session found for the student\'s group. Next session is on '
        //  . $nextSession->date . ' at ' . $nextSession->heure_debut], 404);

        // return response()->json(['success' => true, 'next_session' => [
        //     'date' => $nextSession->date,
        //     'heure_debut' => $nextSession->heure_debut,
        //     'heure_fin' => $nextSession->heure_fin,
        // ]]);
        // $nextSessionData = [];

        // foreach ($nextSession as $session) {
        // $nextSessionData[] = [
        //         'date' => $session->date,
        //         'heure_debut' => $session->heure_debut,
        //         'heure_fin' => $session->heure_fin,
        // ];
        // }
            // return response()->json(['success' => true, 'next_session' => $nextSessionData]);
    }

    // Check if the student has already attended the current session
    // $attendance = Attendance::where('code_student', $student->id)
    //     ->where('code_seance', $currentSession->id)
    //     ->first();

    // // If the student has already attended, return a success response with the attendance record
    // if ($attendance) {
    //     return response()->json(['success' => true, 'attendance' => $attendance]);
    // }

    // // If the student hasn't attended, create a new attendance record
    // $attendance = new Attendance;
    // $attendance->code_student = $student->id;
    // $attendance->code_seance = $currentSession->id;
    // $attendance->status = 'present';
    // $attendance->date = date('Y-m-d');
    // $attendance->save();

    // // Return a success response with the new attendance record
    // return response()->json(['success' => true, 'attendance' => $attendance]);

    // Retrieve all attendance records for the current session and student
    // --------------------------------------------------------------------------------------------------------
$attendances = Attendance::where('code_seance', $currentSession->id)
->where('code_student', $student->id)
->get();

// If there are no attendance records, return an error response
if ($attendances->isEmpty()) {
return response()->json(['error' => 'No attendance records found for the current session and student'], 404);
}

// Calculate the total attendance time for the student
$totalAttendanceTime = 0;
foreach ($attendances as $attendance) {
if ($attendance->status == 'present') {
    $startTime = strtotime($attendance->created_at);
    $endTime = strtotime($attendance->updated_at);
    $attendanceTime = $endTime - $startTime;
    $totalAttendanceTime += $attendanceTime;
}
}

// Convert total attendance time to minutes
$totalAttendanceTimeMinutes = round($totalAttendanceTime / 60);

// Calculate the session duration in minutes
$sessionDuration = strtotime($currentSession->heure_fin) - strtotime($currentSession->heure_debut);
$sessionDurationMinutes = round($sessionDuration / 60);

// Calculate the percentage of attendance
$attendancePercentage = round(($totalAttendanceTimeMinutes / $sessionDurationMinutes) * 100, 2);

// Determine the student's attendance status
$attendanceStatus = 'present';
if (Carbon::now() > Carbon::parse($currentSession->heure_fin)->addMinutes(30)) {
$attendanceStatus = 'absent';
} else if (Carbon::now() > Carbon::parse($currentSession->heure_fin)->addMinutes(15)) {
$attendanceStatus = 'tardy';
}

// Return a success response with the attendance information
return response()->json([
'success' => true,
'attendance' => [
    'total_time' => $totalAttendanceTimeMinutes,
    'session_duration' => $sessionDurationMinutes,
    'percentage' => $attendancePercentage,
    'status' => $attendanceStatus
]
]);
// -------------------------------------------------------------------------------------------------------------------------
});




// Route::get('/check/{code}', function($code){
//     if($code==2){ //simulate the fact that 2 is already present in db
//         $date = Carbon::now(); // current date and time
//         $hour = $date->format('H'); // extract hours in 24-hour format
//         $minute = $date->format('i'); // extract minutes
//         // $seance = \App\Models\Seance::where('heure_debut', $hour);
//         // if($minute >15){
//             // $absence = new \App\Models\Absence();
//             // $absence->etudiant_id=$seance->groupe->etudiant->id;
//             $seance = \App\Models\Seance::find(1);
//             // return 'Hello: '+$seance->groupe->etudiant->id;
//             // $e = new \App\Models\Etudiant();
//             // $e->groupe_code=\App\Models\Seance::where('id', 1)->groupe_code;
//             $id=$seance->groupe_code;
//             $s=\App\Models\Student::where('groupe_id', $id);
//             return view('test', ['s'=>$s]);
//         }
//     // }
//     return response()->json(['message'=>'Message is KO']);
// });


// Route::get('/show', function () {
//     return view('show');
// });

// Route::get('/check4/{code}', [AttendanceController4::class,'store4']);
// Route::get('/check3/{code}', [AttendanceController3::class, 'store3']);

// Route::get("/getSessions", [AttendanceController4::class, 'getSessions']);
// Route::get("/session/{id}/get", [AttendanceController4::class, 'show']);



// Route::get('/check/{code}', [AttendanceController::class, 'scanCard']);  route important


// Route::get('/check/{code}', function($code){
//     $student = \App\Models\Student::where('codeRFID', $code)->first();
//     if($student){
//         // Update the "updated_at" timestamp for the student
//         $old_update=$student->updated_at;
//         $student->touch();
//         $new_update=$student->updated_at;
//         $diff = $old_update->diff($new_update);
//         // echo ;

//         // Return a success response
//         return response()->json([
//             'message' => $diff->format('%m m-%s s')
//         ]);
//     }
//     else{
//         // Return a failure response
//         return response()->json([
//             'message' => 'Failed!'
//         ]);

//     }
// });


